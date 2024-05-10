<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
</head>

<body>
    <main>
        <h1>
            Adicionar produtos
        </h1>
        <form action="adicionar_produto.php" method="post">
            <div>
                <label for="nome">Nome do produto</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="valor">Valor do produto</label>
                <input type="number" name="valor" id="valor">
            </div>
            <div>
                <label for="quantidade">Quantidade do produto</label>
                <input type="number" name="quantidade" id="quantidade">
            </div>
            <div>
                <button type="submit">Adicionar</button>
                <button type="reset">Limpar</button>
            </div>
        </form>
    </main>
</body>

</html>