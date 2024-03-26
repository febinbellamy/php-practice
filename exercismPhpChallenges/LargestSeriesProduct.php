<?php

class Series
{
    public $series;
    
    public function __construct(string $input)
    {
        $this->series = $input;
    }

    public function largestProduct(int $span): int
    {
        $beginPoint = 0;
        $endPoint = $span;
        $maxProduct = -INF;

        if ($span < 0 || preg_match('/\D/', $this->series) || strlen($this->series) < $span) {
            throw new InvalidArgumentException("Error!");
        }
               
        while ($beginPoint + $endPoint <= strlen( $this->series )) {
            $currentChunk = substr($this->series, $beginPoint, $endPoint);
            var_dump( $currentChunk );
            $arrOfDigits = str_split($currentChunk);
            
            $productOfAllDigits = array_reduce($arrOfDigits, function($acc, $curr) {
                return (int)$acc * (int)$curr;
            }, 1);
            
            if ($productOfAllDigits > $maxProduct) {
                $maxProduct = $productOfAllDigits;
            }
            $beginPoint += 1;
        }
        return $maxProduct;
    }
}
