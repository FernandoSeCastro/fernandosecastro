<h1 class="page-header">
    <?php echo $cli->cliente != null ? $cli->nome : 'Novo Cliente'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=cliente">Clientes</a></li>
  <li class="active"><?php echo $cli->cliente != null ? $cli->nome : 'Novo Registro'; ?></li>
</ol>

<form id="frm-cliente" action="?c=cliente&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="cliente" value="<?php echo $cli->cliente; ?>" />

    <div class="form-group">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php echo $cli->nome; ?>" class="form-control" placeholder="Digite o Novo Nome" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Telefone</label>
        <input type="text" name="telefone" value="<?php echo $cli->telefone; ?>" class="form-control" placeholder="Digite o novo Telefone" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $cli->email; ?>" class="form-control" placeholder="Digite o novo email" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Grupo</label>
        <select name="grupo" >
            <option value="<?php echo $cli->grupo; ?>">Grupo </option>
            <?php foreach ($this->modelgrupo->Listar() as $gru): ?>
                <?php echo "<option value='$gru->grupo'> $gru->descricao</option>";?>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Ativo</label>
        <input type="checkbox" name="ativo" value="1"/>
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Atualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-producto").submit(function(){
            return $(this).validate();
        });
    })
</script>
