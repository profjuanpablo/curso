<?php
include('../include/cabecalho.php');
include('../include/menu.php');
include('../conexao/conexao.php');
?>
<div class="container">
<form>
<div class="row">
    <div class="col-sm">
        <div class="mb-3">
             <label class="form-label">Aluno</label>
             <input type="text" class="form-control" >
        </div>
   </div>

    <div class="col-sm">
        <div class="mb-3">
            <label class="form-label">Data Cadastro</label>
            <input type="date" class="form-control" >
        </div>
    </div>
    
    <div class="col-sm">
    <div class="mb-3">
            <label class="form-label">CPF</label>
            <input type="text" class="form-control" >
        </div>
    </div>
  </div>

  <div class="row">
  <div class="col-sm">
        <div class="mb-3">
             <label class="form-label">Endereço</label>
             <input type="text" class="form-control" >
        </div>
   </div>

    <div class="col-sm">
        <div class="mb-3">
            <label class="form-label">cep</label>
            <input type="text" class="form-control" >
        </div>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

</div>