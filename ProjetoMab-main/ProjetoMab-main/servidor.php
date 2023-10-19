<?php
//definir variaveis de conexão
define("servidor", "localhost");
define("usuario", "root");
define("senha", "");
define("banco", "miniphp");
define("porta", "3306");

//fazer ca conexão com banco
$cx = mysqli_connect(servidor,usuario,senha, banco, porta);
if($cx){
   // echo "conectou ao banco";
}else{
    echo "erro de banco"  . mysqli_error ($cx);
    exit();
}
  ?>