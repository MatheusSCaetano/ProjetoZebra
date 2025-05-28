<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=banco_zebra','root','');

    if(isset($_POST['acao'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

    $pdo->prepare('INSERT INTO usuarios VALUES(null,?,?)');
    $pdo->execute(array($email,$senha));
    alert('Cadastro realizado com sucesso!');

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="email" >
        <input type="password" name="senha" >
        <input type="submit" name="acao" value="Enviar" >

    </form>
</body>
</html>