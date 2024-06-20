<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Números</title>
</head>
<body>
    <h1>Conversor de Números</h1>
    <form method="post" action="">
        <label for="decimal">Ingrese el número decimal que desea convertir:</label><br>
        <input type="number" id="decimal" name="decimal" required><br><br>

        <label for="opcion">Seleccione una opción:</label><br>
        <input type="radio" id="binario" name="opcion" value="1" required>
        <label for="binario">Convertir de decimal a binario</label><br>
        <input type="radio" id="octal" name="opcion" value="2">
        <label for="octal">Convertir de decimal a octal</label><br>
        <input type="radio" id="hexadecimal" name="opcion" value="3">
        <label for="hexadecimal">Convertir de decimal a hexadecimal</label><br><br>

        <input type="submit" value="Convertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $decimal = intval($_POST["decimal"]);
        $opcion = $_POST["opcion"];

        function decimalABinario($decimal) {
            return decbin($decimal);
        }

        function decimalAOctal($decimal) {
            return decoct($decimal);
        }

        function decimalAHexadecimal($decimal) {
            return dechex($decimal);
        }

        switch ($opcion) {
            case 1:
                echo "<p>El equivalente binario de $decimal es: " . decimalABinario($decimal) . "</p>";
                break;
            case 2:
                echo "<p>El equivalente octal de $decimal es: " . decimalAOctal($decimal) . "</p>";
                break;
            case 3:
                echo "<p>El equivalente hexadecimal de $decimal es: " . decimalAHexadecimal($decimal) . "</p>";
                break;
            default:
                echo "<p>Opción no válida. Por favor, seleccione una opción del 1 al 3.</p>";
                break;
        }
    }
    ?>
</body>
</html>
