<?php
require_once "Animais.class.php";
require_once "Domestico.php";
require_once "Mamiferos.php";
require_once "Silvestre.php";

$cao = new Domestico("Canis Lupus Familiaris");
$cao->set_nome("Cachorro");
$cao->set_grupo("Vertebrado");
$cao->set_classificacao("Euterio");
$cao->set_alimentacao("Racao e alimentos proprios para caes");
$cao->set_raca("Poodle");
$cao->set_apelido("Mel");

echo nl2br ("Nome: ".$cao->get_nome()."\n");
echo nl2br ("Grupo: ".$cao->get_grupo()."\n");
echo nl2br ("Classificacao: ".$cao->get_classificacao()."\n");
echo nl2br ("Alimentacao: ".$cao->get_alimentacao()."\n");
echo nl2br ("Raca: ".$cao->get_raca()."\n");
echo nl2br ("Apelido: ".$cao->get_apelido()."\n");
echo nl2br ("\n");


$cang = new Silvestre("Macropus");
$cang->set_nome("Canguru");
$cang->set_grupo("Vertebrado");
$cang->set_classificacao("Marsupiais");
$cang->set_alimentacao("Plantas e fungos");
$cang->set_habitat("Savana");
$cang->set_manso(True);

echo nl2br ("Nome: ".$cang->get_nome()."\n");
echo nl2br ("Grupo: ".$cang->get_grupo()."\n");
echo nl2br ("Classificacao: ".$cang->get_classificacao()."\n");
echo nl2br ("Alimentacao: ".$cang->get_alimentacao()."\n");
echo nl2br ("Habitat: ".$cang->get_habitat()."\n");
echo nl2br ("E manso? ".$cang->get_manso()."\n");
echo nl2br ("\n");
?>