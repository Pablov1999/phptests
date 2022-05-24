<?php namespace phptests\Task7;

class Task7 {

    function Task7($arr){
        $arr = array(1, 2, 3, 4, 5);


        var_dump($arr);
        unset($arr[3]);
        
        $arr = array_values($arr);
        echo '
       ';
       var_dump($arr);

    }


    public function main(){
        return $arr;
    }
}

?>