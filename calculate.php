<?php
function calculate($x, $y, $operator)
{
    switch ($operator) {
        case "+" :
            echo $x + $y;
            break;
        case "-" :
            echo $x - $y;
            break;
        case "x" :
            echo $x * $y;
            break;
        case "/" :
            if ($y != 0) {
                echo $x / $y;
            } else {
                echo "cannot divide by zero (0)";
            }
            break;
    }
}

