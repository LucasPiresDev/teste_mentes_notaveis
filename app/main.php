<?PHP

$pagina = $_GET['pg'] ?? 'home';

switch ($pagina) {
    case 'home':
        $body = 'views/home.php';
        break;
    
    case 'modulos':
        $body = 'views/modulos/modulos_list.php';
    break;
    
    case 'modulos_new':
        $body = 'views/modulos/modulos_new.php';
    break;
    
    case 'modulos_edit':
        $body = 'views/modulos/modulos_edit.php';
    break;
    
    case 'atividades':
        $body = 'views/atividades/atividades_list.php';
    break;
    
    case 'atividades_new':
        $body = 'views/atividades/atividades_new.php';
    break;
    
    case 'atividades_edit':
        $body = 'views/atividades/atividades_edit.php';
    break;
    
    default:
        $body = 'views/home.php';
        break;
}

include($body);
?>