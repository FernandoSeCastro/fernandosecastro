<h1 class="page-header">
    <?php echo $gru->grupo != null ? $gru->descricao : 'Novo grupo'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=grupo">grupos</a></li>
  <li class="active"><?php echo $gru->grupo != null ? $gru->descricao : 'Novo Registro'; ?></li>
</ol>

<form id="frm-grupo" action="?c=grupo&a=Editar" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="grupo" value="<?php echo $gru->grupo; ?>" />

    <div class="form-group">
        <label>Descricao</label>
        <input type="text" name="descricao" value="<?php echo $gru->descricao; ?>" class="form-control" placeholder="Digite a Nova Descrição" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Ativo</label>
        <input type="checkbox" name="ativo" value="1"/>
    <hr />

    <div class="text-right">
        <button class="btn btn-success">Atualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-grupo").submit(function(){
            return $(this).validate();
        });
    })
</script>
