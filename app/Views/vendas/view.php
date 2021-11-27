<div class="view">
    <div class="row">
        <a href="/vendas" class="btn btn-info" style="margin-right: 10px">Voltar</a>
    </div>

    <h2><?php echo $vendas['Cliente'] ?></h2>

    <span class="bold">ID:</span>
    <span><?php echo $vendas['id'] ?></span>
    <hr>
    <span class="bold">Nome Cliente:</span>
    <span><?php echo $vendas['Cliente'] ?></span>
    <hr>
    <span class="bold">Valor de Venda:</span>
    <span><?php echo $vendas['valor_venda'] ?></span>
    <hr>
    <span class="bold">Quantidade Estoque:</span>
    <span><?php echo $vendas['quantidade_estoque'] ?></span>
    <hr>
    <span class="bold">Quantidade:</span>
    <span><?php echo $vendas['quantidade'] ?></span>
    <hr>
    <span class="bold">Criado em:</span>
    <span><?php echo $vendas['created_at'] ?></span>
    <hr>
    <span class="bold">Última Atualização:</span>
    <span><?php echo $vendas['updated_at'] ?></span>
</div>