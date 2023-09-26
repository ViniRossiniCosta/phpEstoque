<a href="<?php echo BASE_URL; ?>home/add">Adicionar Produto</a>
<a href="<?php echo BASE_URL; ?>home/relatorio">Relatorio</a>

<fieldset>
    <form action="" method="GET">
        <input type="text" name="busca" style="width: 100%; height:40px; font-size:18px;" placeholder="bom dia, digite algo"
        value="<?php echo (!empty($_GET['busca']))?$_GET['busca']:''; ?>">
    </form>
</fieldset>
<br><br>

<table border="1" width="100%">
    <tr>
        <th>Cod</th>
        <th>Nome</th>
        <th>Preço Unit</th>
        <th>Qnt</th>
        <th>Qnt Min</th>
        <th>ações</th>
    </tr>
    <? foreach($list as $item): ?> 
        <tr>
            <td><?php echo $item['cod']; ?></td>
            <td><?php echo $item['name']; ?></td>
            <td>R$ <?php echo number_format($item['price'], 2, ',', '.'); ?></td>
            <td><?php echo $item['qunatity']; ?></td>
            <td>
                <a href="<?php echo BASE_URL; ?>home/del/<?php echo $item['id']; ?>">Deletar</a>
                <a href="<?php echo BASE_URL; ?>home/edit/<?php echo $item['id']; ?>">Editar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>