<div class="jumbotron">
    <h1 class="text-center">Modulos</h1>
</div>
<a href="index.php?pg=modulos_new" class="btn btn-primary">Novo</a>
<br>
<br>
<div class="table-responsive">
    <table class="table table-hover">
        <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Ação</th>
        </tr>
        <?php
            require './app/models/ModulosDAO.php';
            $modulosdao = new ModulosDAO();
            $item = $modulosdao->modulosAll();

            foreach ($item as $key) {
                echo "<tr><td>".$key['titulo']."</td><td>".$key['descricao']."</td><td>".$key['status']
                ."</td><td class='center'><a href='./index.php?pg=modulos_edit&id=".$key['id']."' class='btn btn-warning'>Editar</a>"
                ." <a href='./app/controllers/modulos.php?acao=delete&id=".$key['id']."' class='btn btn-danger'>Remover</a></td></tr>";
                    
            }
        ?>
        
    </table>

    <hr>
    <a href="./" class="btn btn-success">Voltar</a>
    
</div> 