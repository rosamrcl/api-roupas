<?php
require_once('../functions.php');

$id = $_GET['id'];
deletarProduto($id);
header("Location: index.php");
exit;