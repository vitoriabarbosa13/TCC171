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

        .header h2 {
            font-weight: 600;
            color: #440f60;
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

        .form-control label {
            display: inline-block;
            margin-bottom: 5px;
            color: #440f60;
        }

        .form-control input {
            border: 2px solid #3E445B;
            border-radius: 5px;
            outline: 0;

            display: block;

            font-size: 14px;

            width: 100%;
            padding: 15px;
        }

        .form-control.success input {
            border: 3px solid #4ECA64;
        }

        .form-control.error input {
            border: 3px solid #DB5A5A;
        }

        .form-control.error i.img-error {
            visibility: visible;
        }

        .form-control.error small {
            color: #DB5A5A;
            visibility: visible;
        }

        .form-control small {
            position: absolute;
            margin-top: 5px;
            font-size: 14px;
            color:#DB5A5A;

        }

        .form button {
            background-color: #6C63FF;
            border-radius: 5px;
            color: #fff;
            padding: 15px;
            font-size: 15px;
            font-weight: 600;
            width: 100%;

            margin-top: 5px;

            cursor: pointer;
        }

        .form button:hover {
            background-color: #584ff5;
            transition: 0.3s;
        }

        .form-control.success input {
            border: 3px solid #4ECA64
        }

        .form-control.error input{
        border: 3px solid #DB5A5A;
        }

        .form-control.error small{
            visibility: visible;
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


    </form>

</html>
        <?php
        if(isset($_SESSION["invalido"])){
            echo ("<h2> Senha/Usuário inválido <h2>");
        }
            unset($_SESSION["invalido"]);
        ?>



    </form>

</html>