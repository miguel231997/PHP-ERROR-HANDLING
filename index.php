<?php

class DivideByZeroException extends Exception 
{
    public function __construct($message = "Division by Zero is not allowed", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

class Calculator
{
    public function divide($numerator, $denominator)
    {
        if($denominator === 0)
        {
            throw new DivideByZeroExcpetion();
        }
        return $numerator / $denominator;
    }
}

//usage example

$calculator = new Calculator();

try {
    $result = $calculator->divide(10, 2);
    echo 'Result: ' . $result . PHP_EOL;

    $result = $calculator->divide(10, 0);
    echo 'Result: ' . $result . PHP_EOL;
} catch (DivideByZeroException $e) {
    echo "Erro: " . $e->getMessage(). PHP_EOL;
}

?>