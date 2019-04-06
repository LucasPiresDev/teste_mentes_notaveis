<div class="jumbotron">
    <h1 class="text-center">Cadastro de Atividades</h1>
</div>

<form action="app/controllers/atividades.php" method="POST" role="form">
  <div class="form-group">
    <label for="titulo">Título</label>
    <input type="titulo" class="form-control" id="titulo" name="titulo" requerid placeholder="coloque o título">
  </div>
  <div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao" requerid placeholder="Descrição">
  </div>
  
  <div class="input-group mb-3">
    <select class="custom-select" name="modulo">    
      <?php
        include './app/models/ModulosDAO.php';
        $md = new ModulosDAO();
        $item = $md->modulosAll();
        foreach ($item as $key) {
          echo "<option value='".$key['id']."'>".$key['titulo']."</option>";
        }
        ?>
    </select>
  </div>
        
  
  <button type="submit" class="btn btn-primary">Salvar</button>
  <a href="./index.php?pg=atividades" class="btn btn-success">Voltar</a> 
  
</form>