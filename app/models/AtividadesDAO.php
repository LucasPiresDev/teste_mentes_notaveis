<?PHP
require 'db.php';

class AtividadesDAO extends db
{
    public $titulo;
    public $descricao;
    public $status;
    public $modulo;
    
    public function __construct(){}

   
    
    public function getTitulo(){
        return $this->titulo;
    }
    
    public function getDescricao(){
        return $this->descricao;
    }
    
    public function getStatus(){
        return $this->status;
    }
    
    public function getModulo(){
        return $this->modulo;
    }
    
    public function setTitulo($titulo){
        return $this->titulo = $titulo;
    }
    
    public function setDescricao($descricao){
        return $this->descricao = $descricao;
    }
    
    public function setStatus($status){
        return $this->status = $status;
    }
    
    public function setModulo($modulo){
        return $this->modulo = $modulo;
    }
    
    
    
    public function insere()
    {
        
        $stmt = parent::connect()->prepare('INSERT INTO atividades (id_modulo,titulo,descricao,status) VALUES(:id_modulo,:titulo,:descricao,:status)');
        $stmt->execute(array(
            ':titulo'    => $this->getTitulo(),
            ':descricao' => $this->getDescricao(),
            ':status'    => $this->getStatus(),
            ':id_modulo' => $this->getModulo()
        ));   

        if($stmt->rowCount() > 0)
            return true;
        else
            return false;
    }

    public function atividadesAll(){

        $dados = parent::connect()->query("SELECT a.id as id,a.titulo as titulo,a.descricao as descricao, a.status as status,m.titulo as modulo FROM modulos as m INNER JOIN atividades as a ON a.id_modulo = m.id");
        $todos = $dados->fetchAll();        
        return $todos;
    }

    public function modulos_(){

        $dados = parent::connect()->query("SELECT * FROM modulos");
        $todos = $dados->fetchAll();        
        return $todos;
    }
    
    public function atividadesin($id){

        $dados = parent::connect()->query("SELECT * FROM atividades WHERE id =".$id);        
        $todos = $dados->fetch();        
        return $todos;
    }

    public function delete($id){
        $stmt = parent::connect()->prepare('DELETE FROM atividades WHERE id = :id');
        $stmt->bindParam(':id', $id); 
        $stmt->execute();
            
        if($stmt->rowCount() > 0)  
            return true;
        else
            return false;
    }

    public function update($id){
        $stmt = parent::connect()->prepare('UPDATE atividades SET id_modulo = :id_modulo, titulo = :titulo,descricao = :descricao,status = :status WHERE id = :id');
        $stmt->execute(array(
            ':id'   => $id,
            ':id_modulo' => $this->getModulo(),
            ':titulo' => $this->getTitulo(),
            ':descricao' => $this->getDescricao(),
            ':status' => $this->getStatus()
        ));
            
        if($stmt->rowCount() > 0)  
            return true;
        else
            return false;
    }
}


?>