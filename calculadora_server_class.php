<?php

/* Operaciones que realizará nuestra calculadora:
•Suma
•Resta
•Multiplicacion
•Division
•Raíz cuadrada
•Seno
•Coseno
•Tangente
 */

class Calculadora
{
    public function Suma($params)
    {
        $respuestaSuma->resultadoSuma = $params->intA + $params->intB;
        return $respuestaSuma;
    }

    public function Resta($params)
    {
        $respuestaResta->resultadoResta = $params->intA - $params->intB;
        return $respuestaResta;
    }

    public function Multiplicacion($params)
    {
        $respuestaMultiplicacion->resultadoMultiplicacion = $params->intA * $params->intB;
        return $respuestaMultiplicacion;
    }

    public function Division($params)
    {
        $respuestaDivision->resultadoDivision = $params->intA / $params->intB;
        return $respuestaDivision;
    }

    public function RaizCuadrada($params)
    {
        $respuestaRaizCuadrada->resultadoRaizCuadrada = sqrt($params->intA);
        return $respuestaRaizCuadrada;
    }

    public function Seno($params)
    {
        $respuestaSeno->resultadoSeno = sin(deg2rad($params->intA));
        return $respuestaSeno;
    }

    public function Coseno($params)
    {
        $respuestaCoseno->resultadoCoseno = cos(deg2rad($params->intA));
        return $respuestaCoseno;
    }

    public function Tangente($params)
    {
        $respuestaTangente->resultadoTangente = tan(deg2rad($params->intA));
        return $respuestaTangente;
    }

}
