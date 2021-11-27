<script>
    function confirmar(){
        if(!confirm("Deseja excluir?")){
            return false;
        }
        return true;
    }
</script>

<div class="row my-3">
    <a href="../" class="btn btn-info" style="margin-right: 5px">Voltar</a>
    <a href="/vendas/create" class="btn btn-primary">Nova Venda</a>
</div>

<h2>Listagem de vendas</h2>
<div class="clear"></div>

<table class="table">
    <tr class="text-center">
        <th>Cliente</th>
        <th>Valor Venda</th>
        <th>Quantidade estoque</th>
        <th>Quantidade</th>
        <th>Ações</th>
    </tr>
    <?php 
        if(!empty($vendas) && is_array($vendas)): 
            foreach($vendas as $vendas_item):
    ?>

        <tr>
            <td>
                <?php echo $vendas_item['Cliente'] ?>
            </td>
            <td>
                <?php echo $vendas_item['valor_venda'] ?>
            </td>
            <td>
                <?php echo $vendas_item['quantidade_estoque'] ?>
            </td>
            <td>
                <?php echo $vendas_item['quantidade'] ?>
            </td>
            <td class="text-center">
                <a class="btn btn-success" href="<?php echo "/vendas/view/".$vendas_item['id'] ?>">Visualizar</a>
                <a class="btn btn-warning" href="/vendas/edit/<?php echo $vendas_item['id'] ?>">Editar</a>
                <a class="btn btn-danger" href="/vendas/delete/<?php echo $vendas_item['id'] ?>" onclick="return confirmar()">Excluir</a>
            </td>
        </tr>

    <?php 
            endforeach;
        else:
    ?>
        <tr>
            <td colspan="2">Não encomtramos nenhum registro em nosso banco de dados</td>
        </tr>
    <?php 
        endif;
    ?>
</table>