
<?php

function printFibonacci($n)
{
    $sumOfOddNum = 0;
    $first = 0;
    $second = 1;

    echo "Fibonacci Series \n";

    echo $first.' '.$second.' ';

    for($i = 2; $i < $n; $i++){

        $third = $first + $second;

        if ($third >= $n) {
            break;
        } else {
            echo $third.' ';

            $first = $second;
            $second = $third;

            if($third %2 !== 0){
                $sumOfOddNum += $third;
            }

        }
        // echo 'sum '.$sumOfOddNum;
    }
    $sumOfOddNum = $sumOfOddNum + 1;
    echo 'Sum of Odd Numbers: '.$sumOfOddNum;
}

printFibonacci(22);
echo "Hello World";
?>
