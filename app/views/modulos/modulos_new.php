<div class="jumbotron">
    <h1 class="text-center">Cadastro de Modulos</h1>
</div>

<form action="app/controllers/modulos.php" method="POST" role="form">
  <div class="form-group">
    <label for="titulo">Título</label>
    <input type="titulo" class="form-control" id="titulo" name="titulo" requerid placeholder="coloque o título">
  </div>
  <div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao" requerid placeholder="Descrição">
  </div>
  
  <button type="submit" class="btn btn-primary">Salvar</button>
  <a href="./index.php?pg=modulos" class="btn btn-success">Voltar</a>
</form>