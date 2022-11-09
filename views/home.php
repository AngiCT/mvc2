<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inventario de Productos</h1>
    <table>
        <?php
            foreach($products as $product):?>
        <tr>
            <td>Identificador: <?= $product[0] ?></td>
            <td>Descripción: <?= $product[1] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>