<?PHP


if(isset($_GET['acao'])== 'novo'){   
    header('Location: ../../index.php?pg=atividades_new');
}

if(isset($_GET['acao'])== 'delete'){
    require '../models/AtividadesDAO.php';
    $atdao = new AtividadesDAO();
    $atdao->delete($_GET['id']);    
    header('Location: ../../index.php?pg=atividades');
    
}

if(isset($_POST['titulo'])){
    
    require '../models/AtividadesDAO.php';

    $atdao = new AtividadesDAO();
    $atdao->setModulo($_POST['modulo']);
    $atdao->setTitulo($_POST['titulo']);
    $atdao->setDescricao($_POST['descricao']);
    $atdao->setStatus("ativo");

    if($atdao->insere()){
        header('Location: ../../index.php?pg=atividades');
    }else{
        header('Location: ../../index.php?pg=atividades_new');

    }
}

if(isset($_GET['id'])){
    
    require '../models/AtividadesDAO.php';

    $atdao = new AtividadesDAO();
    $atdao->setModulo($_GET['modulo']);
    $atdao->setTitulo($_GET['titulo']);
    $atdao->setDescricao($_GET['descricao']);
    $atdao->setStatus("ativo");

    if($atdao->update($_GET['id'])){
        header('Location: ../../index.php?pg=atividades');
    }else{
        header('Location: ../../index.php?pg=atividades_new');

    }
}
?>