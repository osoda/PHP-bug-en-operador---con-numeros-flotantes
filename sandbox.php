<?php require_once('vendor/autoload.php');$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);$dotenv->load();

$Lotes = array(array("saldo_actual" => 0.1), array("saldo_actual" => 0.3), array("saldo_actual" => 0.1), array("saldo_actual" => 0.5));
$diferenciaSaldo = $producto_cant = 1;
foreach ($Lotes as $lote) {
    echo PHP_EOL . "diferenciaSaldo = {$diferenciaSaldo} " . PHP_EOL . " lote[saldo_actual] = {$lote['saldo_actual']}" . PHP_EOL;
    $diferenciaSaldo -= $lote['saldo_actual'];
    echo "diferenciaSaldo - lote[saldo_actual] = {$diferenciaSaldo}" . PHP_EOL;
    if ($diferenciaSaldo >= 0) {
        $descuento = $lote['saldo_actual'];
    } else {
        $descuento = $lote['saldo_actual'] + $diferenciaSaldo;
    }
}
if ($diferenciaSaldo > 0) {
    throw new Exception("No hay saldo disponibles para la modificacion", 1001);
}
echo "{$diferenciaSaldo}";
