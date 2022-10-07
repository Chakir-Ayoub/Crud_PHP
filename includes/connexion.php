<?php
$username='root';
$passwd='';
$host='localhost';
$dbname='script';
//$dsn='mysql:host=$host;dbname=$dbname';


  try{
    $con=new PDO('mysql:host=localhost;dbname=script','root','');
echo 'la connexion a bien établier ';
  }catch(PDOException $e){
      
     echo $e->getMessage();
  }
?>