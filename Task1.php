<?php namespace phptests\Task1;

class Task1 {

    function Task1 (int $inputNumber) {
        $value = $inputNumber > 30 ? "More than 30" : ($inputNumber > 20 ? "More than 20" : ($inputNumber > 10 ? "More than 10" : "Less than 10"));
        
        
    }


    public function main(){
        return $value;
    }
}

?>