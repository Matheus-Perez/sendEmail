<?php
require 'conf.php';



/**
 *
 * MANDAR PARA VARIOS DESTINATARIOS
 *$destinaratios =
 *   Array(
 *       array('name'=> 'name1', 'email' => "email1"),
 *       array('name'=> 'name2', 'email' => "email2"),
 *   );
 *   ELE IRA TE RETORNAR UMA ARRAY COM O RESULT(Bool)  E ERRORINFO(String), SE TE DER TRUE O EMAIL FOI ENVIADO COM SUCESSO
 **/
$destinaratios  = Array(array('name'=> 'Matheus Perez', 'email' => 'matheus.perez@iap.org.br'),); // "matheuslperez@gmail.com";//

$return = sendNewEmail($destinaratios,'TESTE DE ENVIO DE EMAIL','TESTE DE ENVIO COM LIB DE EMAIL');

var_dump($return);