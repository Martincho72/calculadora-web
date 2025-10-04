<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = $_POST['num1'] ?? 0;
    $num2 = $_POST['num2'] ?? 0;
    $operacion = $_POST['operacion'] ?? '';

    function multiplicar($a, $b) { return $a * $b; }
    function dividir($a, $b) { return $b != 0 ? $a / $b : 'Error (división por cero)'; }
    function sumar($a, $b) { return $a + $b; }
    function restar($a, $b) { return $a - $b; }

    switch ($operacion) {
        case 'multiplicar': $resultado = multiplicar($num1, $num2); break;
        case 'dividir': $resultado = dividir($num1, $num2); break;
        case 'sumar': $resultado = sumar($num1, $num2); break;
        case 'restar': $resultado = restar($num1, $num2); break;
        default: $resultado = 'Operación no válida';
    }
} else {
    $resultado = 'Sin datos';
}

echo "Resultado: " . $resultado;
?>
