<?php
class Calculadora
{

    public function factorial($x)
    {

        if ($x == 0) {
            return 1;
        } else if ($x > 0) {
            $result = 1;
            while ($x > 0) {
                $result = $result * $x;
                $x = $x - 1;

            }
            return $result;
        } else if ($x < 0) {
            throw new Exception('Negative factorial');
        }

    }

    public function coeficienteBinomial($n, $k)
    {
        if ($n < 1 || $k < 1) {
            throw new Exception('Cannot use negatives');
        }

        return ($this->factorial($n) / $this->factorial($k) * $this->factorial($n - $k));

    }

    public function convierteBinarioDecimal($cadenaBits)
    {

        if (strlen($cadenaBits) > 8) {
            throw new Exception('Only 8 bits are allowed');
        } else {
            $total = 0;

            $inverted = strrev($cadenaBits);

            for ($i = 0; $i < (strlen($inverted)); $i++) 
            {
                if ($inverted[$i] == 1) {
                    $total = $total + (2 ** $i);
                }
            }
            return $total;
        }

    }

    public function sumaNumerosPares($array)
    {
        $result = 0;

        for ($i = 0; $i < (count($array)); $i++) 
        {
            if($array[$i]%2 == 0)
            {
                $result += $array[$i];
            }
        }

        return $result;
    }

    public function esCapicua($string)
    {
       return (strrev($string) == $string);
    }
}
