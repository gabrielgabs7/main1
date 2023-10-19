<?php
session_start();
// incluir as script do servidor
include('../servidor.php');

/*pergar os dados de acessp e vereficar os no banco para saber
se o usuario existe

*/
$login = $_POST['login'];
$senha =md5($_POST['senha']);

// fazer um consulta ao banco

$sql = " SELECT * FROM tb_usuario  WHERE login_us = '$login' and ";
$sql .=" senha_us = '$senha'";

//echo $sql;

//MANDA O PHP EXECUTAR  no mysqli

              $resp = mysqli_query($cx, $sql);

              if (mysqli_num_rows($resp)== 1 ){

       //pegar  o resultado do registro do usuario
              $campo = mysqli_fetch_assoc($resp);

              echo $campo['nome_us'];
              echo $campo['cod_us'];
              echo $campo['senha_us'];
       //pega o id do usuario para ficar  na memoria do navegador 
              $_SESSION ['usuario']['id'] = $campo['cod_us'];


       //direcionar para a pagina menu
              header('location:menu.php');
  
       
              }else{

       //caso o usuario nao exitsa retorna para  a tela de login
      header ('location:index.php');

       }
?>
