<?php
 if(!isset($_SESSION)){
     session_start();
 } 
 ?>
<html>
    <link rel="stylesheet" href="./assets/css/theme.bundle.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #0dcaf0;
            display: flex;
            font-family: Poppins;
            align-items: center;
            justify-content: center;
            min-height: 100vh;

            border: 0;
        }

        .container {
            background-color: #ffffff;
            border-radius: 5px;
            width: 450px;
            max-width: 100%;
        }

        .header {
            padding: 30px 40px;
        }

        .header h3 {
            font-weight: 600;
            color: #000000;
            font-size: 30px;
        }

        .form {
            padding: 0 40px 30px;
        }

        .form-control {
            margin-bottom: 10px;
            padding-bottom: 20px;
            position: relative;
        }

        

        .form-control input {
            border: 2px solid #000000;
            border-radius: 85px;
            outline: 0;

            display: block;

            font-size: 14px;

            width: 100%;
            padding: 07px;
        }
    </style>
<div class="container">
    <h3> Login </h3> 
    <form action="validarusu.php" method="POST"> 
    <div class="form-control">
        Usuário: 
        <input type="text" name="campo_usu" placeholder="Nome" required><br><br> 
    </div>
    <div class="form-control">
        Senha:
        <input type="password" name="campo_senha" placeholder="Senha" required><br><br>
    </div>
    <div class="form-control">
        <input type="submit" name="enviar" value="ENTRAR"> 
        <br>
        <br>
        <input type="reset" name="cancelar" value="LIMPAR"> 
    </div>
    <div class="form-control">
 Não possui conta? <a href="./confirmacao.html"> Cadastre-se aqui </a> 

    </div>
    </form>

</html>
       
    </form>
    <?php
        if(isset($_SESSION["invalido"])){
            echo ("<h2> Senha/Usuário inválido <h2>");
        }
            unset($_SESSION["invalido"]);
        ?>

</html>