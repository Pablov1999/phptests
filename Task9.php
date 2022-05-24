<?php namespace phptests\Task9;

class Task9 {

    function Task9(array $arr, int $number)
    {
    $count = count($arr) - 2;
    $result=[];
    for ($x = 0; $x < $count; $x++) {
        if ($arr[$x] + $arr[$x+1] + $arr[$x+2] == $number) {
            array_push($result, "{$arr[$x]} + {$arr[$x+1]} + {$arr[$x+2]} = $number");
        }
    }

    }
    public function main(){
        return $result;
    }
}

?>