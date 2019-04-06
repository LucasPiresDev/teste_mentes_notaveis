<div class="jumbotron">
    <h1 class="text-center">Alteração de Atividades</h1>
</div>
<?php
    include './app/models/AtividadesDAO.php';
    $at = new AtividadesDAO();
    $item = $at->atividadesin($_GET['id']);
?>
<form action="app/controllers/atividades.php" method="GET" role="form">
  <div class="form-group">
    <label for="titulo">Título</label>
    <input type="titulo" class="form-control" id="titulo" name="titulo" requerid placeholder="coloque o título" value="<?php echo $item['titulo']?>">
  </div>
  <div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao" requerid placeholder="Descrição" value="<?php echo $item['descricao']?>">
  </div>

  <label for="modulo">Modulo</label>
  <div class="input-group mb-3">
    <select class="custom-select" name="modulo">
      <?php
        $mod = $at->modulos_();      
        foreach ($mod as $key) {
          if($item['id_modulo'] == $key['id'])
            echo '<option value="'.$key['id'].'" selected>'.$key['titulo'].'</option>';
          else
            echo '<option value="'.$key['id'].'">'.$key['titulo'].'</option>';

        }
      ?>
    </select>
  </div>

  <input type="hidden" name="id" value="<?php echo $item['id']?>">
  
  <button type="submit" class="btn btn-primary">Salvar</button>
  <a href="./index.php?pg=atividades" class="btn btn-success">Voltar</a>
</form>