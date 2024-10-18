<?php

if(isset($_POST['submit']))

    {   

     include "conexao.php";

       
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['tel'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO cadastro (nome,email,telefone,senha) 
        VALUES('$nome', '$email', '$telefone', '$senha')");

        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastro</title>
<style>
    
    body {
         font-family: Arial, sans-serif;
        background-color: #333;
    
    }

    .box{
         position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: #fffbfb;
        padding: 15px;
        border-radius: 15px;
        width: 20%;
    }

    fieldset{
         border: 3px ;
   
    }

    legend{
        border: 1px;
        padding: 5px; 
        text-align: center;
        background-color: #007bff;
        border-radius: 8px;
        color:white;
    
    }

    .inputBox{
        position: relative;
    }

    .inputUser{
        background: none;
        border: none;
        border-bottom: 1px solid #333;
        outline: none;
        color: #333;  
        font-size: 15px; 
        width: 95%;
        letter-spacing: 2px;

    }

    .LabelInput{
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: .5s;
    }

    .inputUser:focus ~ .LabelInput,
    .inputUser:valid ~ .LabelInput{
        top: -20px;
        font-size: 12px;
        color:dodgerblue
    }

#submit{
        background-color: dodgerblue;
        width: 100%;
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 15px;
    }

    a{
        background-color: white;
        border-radius: 3px;
        text-decoration: none;
    }
 
a:hover{
        background-color: red;
    }

</style>

</head>
<body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="ml-auto">
        <a href="login.php" class="btn btn-danger">VOLTAR</a>
        </div>
    </div>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Usuário</b></legend>
                <br></br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="LabelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="password" class="LabelInput">Senha</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="nome" class="LabelInput">Email</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="tel" name="tel" id="tel" class="inputUser" required>
                    <label for="nome" class="LabelInput">Telefone</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
    
             </fieldset>

</body>
</html>