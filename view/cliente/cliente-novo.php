<h1 class="page-header">
    Novo Cadastro de Cliente
</h1>

<ol class="breadcrumb">
  <li><a href="?c=cliente">Clientes</a></li>
  <li class="active">Novo Cliente</li>
</ol>

<form id="frm-cliente" action="?c=cliente&a=Inserir" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label>Nome do Cliente</label>
        <input type="text" name="nome" value="<?php echo $cli->nome; ?>" class="form-control" placeholder="Nome do CLiente" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Telefone</label>
        <input type="text" name="telefone" value="<?php echo $cli->telefone; ?>" class="form-control" placeholder="Digite o telefone do Cliente" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $cli->email; ?>" class="form-control" placeholder="Digite o Email do Cliente" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Grupo</label>
        <select name="grupo">
            <option value="">Grupo</option>
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
        <button class="btn btn-success">Gravar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-cliente").submit(function(){
            return $(this).validate();
        });
    })
</script>
