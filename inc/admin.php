<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="../functions/addproduct.php">
        <input type="text" placeholder="Name" name="name">
        <input type="text" placeholder="Description" name="description">
        <input type="text" placeholder="Code" name="code">
        <input type="file" name="photo">
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>