<?php
require 'conf.php';



/**
 *
 * several recipient
 *$destinaratios =
 *   Array(
 *       array('name'=> 'name1', 'email' => "email1"),
 *       array('name'=> 'name2', 'email' => "email2"),
 *   );
 *
 *   The function will return an array with the following parameters
 *   Result(bool) and Errorinfo(String)
 * **/
$destinaratios  = Array(array('name'=> 'recipient name', 'recipient email' => 'email@dominio.com.br'),);

$return = sendNewEmail($destinaratios,'TITLE','BODY');

var_dump($return);