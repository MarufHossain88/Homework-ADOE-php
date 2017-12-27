<?php



class Demo
{
    function AtoZ($i)
    {
         $x=1;
        $btn = $i['btn'];
        switch ($btn) {
            case 'A-Z':
                for ( $x = $i['first_number']; $x <= $i['second_number']; $x++) {
                    $result=$x;
                    echo $result,' ';
                }
                break;

            case 'Z-A':
                for ($x = $i['second_number']; $x >= $i['first_number']; $x--) {
                    $result=$x;
                    echo $result,' ';
                }
                break;

            case 'Odd':
                for ($x = $i['first_number']; $x <= $i['second_number']; $x++) {
                    if($x%2!=0){
                        $result=$x;
                        echo $result,' ';
                    }
                }
                break;

            case 'Even':
                for ($x = $i['first_number']; $x <= $i['second_number']; $x++) {
                    if($x%2==0){
                        $result=$x;
                        echo $result,' ';
                    }
                }
                break;
        }
        return $result;
    }
}