<?php
if(!isset($_SESSION)){
 session_start();
}
    include("conexao.php");
    $nome_res = $_POST["nome_reserva"];
    $tel_res = $_POST["tel_res"];
    $email_res = $_POST["email_res"];
    $guests = $_POST["guests"];
    $data_res = $_POST["data_res"];
    $horario = $_POST["horario"];

    $sql ="INSERT INTO reservas(nome, hora, data_res, qtde)"
    . "VALUES( '$nome_res', '$horario', '$data_res', '$guests')";
    $mysqli -> query($sql);
    header("location: index.php?link=1");
?>