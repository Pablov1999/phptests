<?php namespace phptests\Task10;

class Task10 {

    function Task10(int $input)
    {
        $arr = [$input];
        if ($input < 1)
        {
           return [];
        }
        while ($input > 1)
          {
           if ($input % 2 == 0)
           {
            $input = $input / 2;
           }
           else
           {
            $input = 3 * $input + 1;
           }
         array_push($arr, $input);
          }}


    public function main(){
        return $arr;
    }
}

?>