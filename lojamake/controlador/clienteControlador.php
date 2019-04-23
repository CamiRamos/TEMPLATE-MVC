<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       function cadastro(){
         if (ehPost()){
      
             $nome= $_POST["nome"];
             $sobrenome = $_POST["sobrenome"];
             $email = $_POST["email"];
             $senha = $_POST["senha"];
             $confirma = $_POST["confirma"];
             $cpf = $_POST["cpf"];
             $sexo = $_POST["sexo"];
             $data = $_POST["data"];
      //redirecionar("usuario/index");
      print_r($_POST);
  }else {
      exibir ("cliente/cadastro");
  }
}

function contato(){
         if (ehPost()){
      
             $nome= $_POST["nome"];
             $sobrenome = $_POST["sobrenome"];
             $email = $_POST["email"];
             $cpf = $_POST["cpf"];
             $data = $_POST["data"];
             $mensagem =$_POST["mensagem"];
      //redirecionar("usuario/index");
      print_r($_POST);
  }else {
      exibir ("cliente/contato");
  }
}
        ?>
    </body>
</html>
