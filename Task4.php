<?php namespace phptests\Task4;

class Task4 {

    function Task4(string $input){
        $input = preg_replace('/[-_]/', ' ', $input);
        $input = ucwords($input);
        $input = str_replace(' ', '', $input);
    }


    public function main(){
        return $input;
    }
}

?>