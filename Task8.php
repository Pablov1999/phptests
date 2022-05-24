<?php namespace phptests\Task8;

class Task8 {

    function Task8($value,$key)
    {
    echo "$key : $value"."\n";
    }
    $a = '{"Title": "The Cuckoos Calling",
    "Author": "Robert Galbraith",
    "Detail":
    { 
    "Publisher": "Little Brown"
     }
      }';
    $j1 = json_decode($a,true);

    public function main(){
        return ($value,$key);
    }
}

?>