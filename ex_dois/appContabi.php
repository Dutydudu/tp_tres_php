<?php
require_once 'EscritorioContabi.php';
require_once 'DeptContas.php';

$dept = new DeptContas(31640, 18600, 16051);

print " {$dept->getInfo()} <br>\n";

$dept->recebBens(6200);
print "A Empresa ACME efetuou o pagamento de R$ 6200 <br>\n";
print " {$dept->getInfo()} <br>\n";

$dept->recebBens(8700);
print "A Empresa NIKE efetuou o pagamento de R$ 8700 <br>\n";
print " {$dept->getInfo()} <br>\n";

print "Pagar conta de 12000 <br>\n";
$dept->pgConta(12000);
print " {$dept->getInfo()} <br>\n";

print "Pagar conta de 20000 <br>\n";
$dept->pgConta(20000);
print " {$dept->getInfo()} <br>\n";
?>