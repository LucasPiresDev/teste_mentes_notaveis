<?PHP
require 'db.php';

class ModulosDAO extends db
{
    public $titulo;
    public $descricao;
    public $status;
    
    public function __construct(){}

    /*public function __construct($titulo,$descricao,$status){
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->status = $status;
    }*/
    
    public function getTitulo(){
        return $this->titulo;
    }
    
    public function getDescricao(){
        return $this->descricao;
    }
    
    public function getStatus(){
        return $this->status;
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
    
    
    
    public function insere()
    {
        
        $stmt = parent::connect()->prepare('INSERT INTO modulos (titulo,descricao,status) VALUES(:titulo,:descricao,:status)');
        $stmt->execute(array(
            ':titulo'    => $this->getTitulo(),
            ':descricao' => $this->getDescricao(),
            ':status'    => $this->getStatus()
        ));   

        if($stmt->rowCount() > 0)
            return true;
        else
            return false;
    }

    public function modulosAll(){

        $dados = parent::connect()->query("SELECT * FROM modulos");
        $todos = $dados->fetchAll();        
        return $todos;
    }
    
    public function modulosin($id){

        $dados = parent::connect()->query("SELECT * FROM modulos WHERE id =".$id);        
        $todos = $dados->fetch();        
        return $todos;
    }

    public function delete($id){
        $stmt = parent::connect()->prepare('DELETE FROM modulos WHERE id = :id');
        $stmt->bindParam(':id', $id); 
        $stmt->execute();
            
        if($stmt->rowCount() > 0)  
            return true;
        else
            return false;
    }

    public function update($id){
        $stmt = parent::connect()->prepare('UPDATE modulos SET titulo = :titulo,descricao = :descricao,status = :status WHERE id = :id');
        $stmt->execute(array(
            ':id'   => $id,
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