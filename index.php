<?php
session_start();

?>
  <HTML>

  <HEAD>
    <META HTTP-EQUIV='Content-Type' CONTENT='text/html;charset=UTF-8'>
    <meta name="viewport" content="width=640">
    <title>記事一覧</title>
    <link rel="stylesheet" href="css/index.css">

  </HEAD>

  <BODY>
    <?php
require_once(__DIR__."/include/dbinit.php");
$na=$db->query("SELECT id,na FROM t01user WHERE id=1;")->fetchcolumn();
echo$na;
if($na="宇佐美"){echo"マスターです。";}
?>

  </BODY>

  </HTML>