<?php 
$pesquisa = "";
if(isset($_POST['pesquisa']))
{
    $pesquisa = $_POST['pesquisa'];
}
?>

<form name="pesquisa" method="POST" action="#">
    <h3>Pesquisar</h3>
    <input type="text" name="pesquisa" values="">
    <input type="submit" name="submit" value="Pesquisar">
</form> 

<h1 class="page-header">Clientes \ <a href="?c=grupo">Grupos</a> </h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=cliente&a=Novo">Novo Cliente</a>
    <a class="btn btn-primary" href="?c=grupo&a=Novo">Novo Grupo</a>
</div>

<table id="filters"  class="table table-striped">
    <thead>
        <tr>
            <th>Código Cliente</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ativo</th>
            <th>Grupo</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar($pesquisa) as $cli): ?>
        <tr>
            <td><?php echo $cli->cliente; ?></td>
            <td><?php echo $cli->nome; ?></td>
            <td><?php echo $cli->telefone; ?></td>
            <td><?php echo $cli->email; ?></td>
            <td><?php 
                    if($cli->ativo==1)
                        echo "Ativo";
                    else
                        echo "Desativado";
                 ?></td>
            <td><?php echo $cli->grupo; ?></td>
            <td>
                <a href="?c=cliente&a=Selecionar&cliente=<?php echo $cli->cliente; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('Tem certeza que deseja excluir o cliente?');" href="?c=cliente&a=Excluir&cliente=<?php echo $cli->cliente; ?>">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>    
</table>