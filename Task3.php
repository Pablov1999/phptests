<?php namespace phptests\Task3;

class Task3 {

    function Task3($number){
        if ($number > 0) {
            return ($number - 1) % 9 + 1;
        }else{
            return 0;
        }
    }

    public function main(){
        return $number;
    }
}

?>