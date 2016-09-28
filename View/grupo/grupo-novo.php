<h1 class="page-header">
    Cadastar um novo Grupo
</h1>

<ol class="breadcrumb">
  <li><a href="?c=grupo">Grupos</a></li>
  <li class="active">Novo Grupo</li>
</ol>

<form id="frm-grupo" action="?c=grupo&a=Inserir" method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label>Descricao do Grupo</label>
        <input type="text" name="descricao" value="<?php echo $gru->descricao; ?>" class="form-control" placeholder="Descrição do grupo" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Ativo</label>
        <input type="checkbox" name="ativo" value="1"/>
    </div>
    <hr />

    <div class="text-right">
        <button class="btn btn-success">Gravar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-grupo").submit(function(){
            return $(this).validate();
        });
    })
</script>
