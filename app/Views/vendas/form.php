<div class="row">
    <a href="/vendas" class="btn btn-info" style="margin-right: 10px">Voltar</a>
</div>

<h2><?php echo isset($id) ? "Editar Venda" : "Nova Venda" ?></h2>

<?php echo \Config\Services::validation()->listErrors(); ?>

<form action="/vendas/store" method="post">
    <div class="form-group">
        <label for="Cliente">Cliente</label>
        <input type="text" class="form-control" name="Cliente" id="Cliente" value="<?php echo isset($Cliente) ? $Cliente : set_value('Cliente') ?>">
    </div>

    <div class="form-group">
        <label for="valor_venda">Valor de Venda</label>
        <input type="number" class="form-control" name="valor_venda" id="valor_venda" value="<?php echo isset($valor_venda) ? $valor_venda : set_value('valor_venda') ?>">
    </div>

    <div class="form-group">
        <label for="quantidade_estoque">Quantidade Estoque</label>
        <input type="number" class="form-control" name="quantidade_estoque" id="quantidade_estoque" value="<?php echo isset($quantidade_estoque) ? $quantidade_estoque : set_value('quantidade_estoque') ?>">
    </div>

    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="number" class="form-control" name="quantidade" id="quantidade" step="0.01" value="<?php echo isset($quantidade) ? $quantidade : set_value('quantidade') ?>">
    </div>

    <input type="hidden" name="id" value="<?php echo isset($id) ? $id : set_value('id') ?>">

    <div class="form-group text-center">
        <input type="submit" value="<?php echo isset($id) ? "Editar" : "Adicionar" ?>" class="btn btn-primary">
    </div>
</form>