<?PHP


if(isset($_GET['acao']) == 'novo'){
    header('Location: ../../index.php?pg=modulos_new');
}

if(isset($_GET['acao']) == 'delete'){
    require '../models/ModulosDAO.php';
    $modulosdao = new ModulosDAO();
    $modulosdao->delete($_GET['id']);    
    header('Location: ../../index.php?pg=modulos');
    
}

if(isset($_POST['titulo'])){
    
    require '../models/ModulosDAO.php';

    $modulosdao = new ModulosDAO();
    $modulosdao->setTitulo($_POST['titulo']);
    $modulosdao->setDescricao($_POST['descricao']);
    $modulosdao->setStatus("ativo");

    if($modulosdao->insere()){
        header('Location: ../../index.php?pg=modulos');
    }else{
        header('Location: ../../index.php?pg=modulos_new');

    }
}

if(isset($_GET['id'])){
    
    require '../models/ModulosDAO.php';

    $modulosdao = new ModulosDAO();
    $modulosdao->setTitulo($_GET['titulo']);
    $modulosdao->setDescricao($_GET['descricao']);
    $modulosdao->setStatus("ativo");

    if($modulosdao->update($_GET['id'])){
        header('Location: ../../index.php?pg=modulos');
    }else{
        header('Location: ../../index.php?pg=modulos_new');

    }
}
?>