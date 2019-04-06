<div class="jumbotron">
    <h1 class="text-center">Atividades</h1>
</div>
<a href="index.php?pg=atividades_new" class="btn btn-primary">Novo</a>
<br>
<br>
<div class="table-responsive">
    <table class="table table-hover">
        <tr>
            <th>Modulo</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Ação</th>
        </tr>
        <?php
            require './app/models/AtividadesDAO.php';
            $atvdao = new AtividadesDAO();
            $item = $atvdao->atividadesAll();

            foreach ($item as $key) {
                echo "<tr><td>".$key['modulo']."</td><td>".$key['titulo']."</td><td>".$key['descricao']."</td><td>".$key['status']
                ."</td><td class='center'><a href='./index.php?pg=atividades_edit&id=".$key['id']."' class='btn btn-warning'>Editar</a>"
                ." <a href='app/controllers/atividades.php?acao=delete&id=".$key['id']."' class='btn btn-danger'>Remover</a></td></tr>";
                    
            }
        ?>
        
    </table>

    <hr>
    <a href="./" class="btn btn-success">Voltar</a>
    
</div> 