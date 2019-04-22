<?php
function visualizar (){
$dados = array();
$dados ["produto"] = "Base Ruby Rose";
$dados ["descricao"] = "Tenha uma ótima maquiagem usando a Base Líquida Matte HB8073 da Ruby Rose, sua textura fácil de aplicar e tem uma excelente cobertura A Base Líquida Matte ,foi desenvolvida para conter a oleosidade da pele e disfarçar imperfeições.";
$dados ["preco"] = "8,99";

exibir ("produtos/visualizar", $dados);
}
function adicionar (){
  if (ehPost()){
      $nome= $_POST["nome"];
      $codigo= $_POST["codigo"];
      $preco= $_POST["preco"];
      redirecionar("usuario/index");
  }else {
      exibir ("produtos/formulario");
  }
}
?>