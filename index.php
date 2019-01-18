<?php
$client = new SoapClient("http://localhost/calculadora/wsdl/calculadora_service_definition.wsdl");

?>

<form action="#" method="post">
    Numero 1 <input type="text" name="num1" id="num1"><br><br>
    Numero 2 <input type="text" name="num2" id="num2"><br><br>
    Operacion <select name="operation" id="operation">
        <option value="Suma">Sumar</option>
        <option value="Resta">Restar</option>
        <option value="Multiplicacion">Multiplicar</option>
        <option value="Division">Dividir</option>
        <option value="RaizCuadrada">Raiz cuadrada</option>
    </select><br><br>
    <input type="submit" value="Calcular"><br><br>
</form><hr>

<?php

if ($_POST) {
    $params = array('intA' => $_POST['num1'], 'intB' => $_POST['num2']);

    switch ($_POST['operation']) {
        case 'Suma':
            $suma = $client->Suma($params);
            /*var_dump($params);
            echo "<br>Funciones:<br>";
            var_dump($client->__getFunctions());
            echo "<br>Tipos:<br>";
            var_dump($client->__getTypes());
            echo "<br>Resultado:<br>";
            var_dump($suma);
            echo "<br>";*/
            echo "El resultado de la suma es: " . $suma->resultadoSuma;
            break;
        case 'Resta':
            $resta = $client->Resta($params);
            echo "El resultado de la resta es: " . $resta->resultadoResta;
            break;
        case 'Multiplicacion':
            $multiplicacion = $client->Multiplicacion($params);
            echo "El resultado de la multiplicacion es: " . $multiplicacion->resultadoMultiplicacion;
            break;
        case 'Division':
            $division = $client->Division($params);
            echo "El resultado de la division es: " . $division->resultadoDivision;
            break;
        case 'RaizCuadrada':
            $raizCuadrada = $client->RaizCuadrada($params);
            echo "El resultado de la raiz cuadrada es: " . $raizCuadrada->resultadoRaizCuadrada;
            break;
    }
}

?>

