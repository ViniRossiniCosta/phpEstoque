<h1>Editar</h1>
<a href="<?php echo BASE_URL; ?>">Voltar</a><br><br>

<form action="" method="POST">
    Codigo de barras:<br>
    <input type="text" name="cod" required><br><br>

    Nome do Produto:<br>
    <input type="text" name="name" required><br><br>

    Preço do Produto:<br>
    <input type="text" name="price" required><br><br>

    Quantidade:<br>
    <input type="text" name="quantity" required><br><br>

    Quantidade Minima:<br>
    <input type="text" name="min_quantity" required><br><br>

    <input type="submit" value="Adicionar Produto">
</form>