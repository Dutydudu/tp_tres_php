<?php
require_once "Contabilidade.class.php";
require_once "ZinSoftware.php";
require_once "ZinMobile.php";

$zinsft = new ZinSoftware("Zin Software", 282000.00, 19500.00, 142, "Rua Tranquedo Neves, 3000 - Sao Paulo - SP");
$zinsft->contrato("Zin Software", 282000.00, 19500.00, 142);
echo nl2br("<br>\n");
$zinsft->declaracao("08/04/2021");
echo nl2br("<br>\n");

$zinmbl = new ZinMobile("Zin Mobile", 160000.00, 8500.00, 15, "Rua Particular, 22 - Sao Paulo - SP");
$zinmbl->contrato("Zin Mobile", 102000.00, 3200.00, 10);
echo nl2br("<br>\n");
$zinsft->declaracao("07/04/2021");
echo nl2br("<br>\n");
?>