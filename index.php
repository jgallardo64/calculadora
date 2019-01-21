<?php
$client = new SoapClient("http://localhost/calculadora/wsdl/calculadora_service_definition.wsdl");

?>

<form action="#" method="post">
Operacion <select onchange="mostrar(this);" name="operation" id="operation">
    <option value="Suma">Sumar</option>
    <option value="Resta">Restar</option>
    <option value="Multiplicacion">Multiplicar</option>
    <option value="Division">Dividir</option>
    <option value="RaizCuadrada">Raiz cuadrada</option>
    <option value="Seno">Seno</option>
    <option value="Coseno">Coseno</option>
    <option value="Tangente">Tangente</option>
</select><br><br>

Numero 1 <input type="text" name="num1" id="num1"><br><br>

<div id="num2" style="display: block;">
    Numero 2 <input type="text" name="num2" id="num2"><br><br>
</div>

<input type="submit" value="Calcular"><br><br>

</form><hr>

<script>
    function mostrar(that) {
        if (that.value == "RaizCuadrada" || that.value == "Seno" || that.value == "Coseno" || that.value == "Tangente") {
            document.getElementById("num2").style.display = "none";
        }
        else {
            document.getElementById("num2").style.display = "block";
        }
    }
</script>

<?php

if ($_POST) {
    $params = array('intA' => $_POST['num1'], 'intB' => $_POST['num2']);

    switch ($_POST['operation']) {
        case 'Suma':
            $suma = $client->Suma($params);
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
        case 'Seno':
            $seno = $client->Seno($params);
            echo "El seno es: " . $seno->resultadoSeno;
            break;
        case 'Coseno':
            $coseno = $client->Coseno($params);
            echo "El coseno es: " . $coseno->resultadoCoseno;
            break;
        case 'Tangente':
            $tangente = $client->Tangente($params);
            echo "La tangente es: " . $tangente->resultadoTangente;
            break;
    }
}

?>

