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

<h1 class="page-header"> <a href="?c=cliente">Clientes</a> / Grupos</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=cliente&a=Novo">Novo Cliente</a>
    <a class="btn btn-primary" href="?c=grupo&a=Novo">Novo Grupo</a>
</div>

<table id="filters"  class="table table-striped">
    <thead>
        <tr>
            <th>Descricao</th>
            <th>Ativo</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar($pesquisa) as $gru): ?>
        <tr>
            <td><?php echo $gru->descricao; ?></td>
            <td><?php 
                    if($gru->ativo==1)
                        echo "Ativo";
                    else
                        echo "Desativado";
                 ?></td>
            <td>
                <a href="?c=grupo&a=Selecionar&grupo=<?php echo $gru->grupo; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('Tem certeza que deseja excluir o Grupo?');" href="?c=grupo&a=Excluir&grupo=<?php echo $gru->grupo; ?>">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>