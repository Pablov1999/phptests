<?php namespace phptests\Task2;

class Task2 {

    function Task2($date){

        $date = strtotime();
    
        $today = mktime();
    
        $birthDateThisYear = mktime(0,0,0,$month,$day);
    
        if ($birthDateThisYear<$today)
        {
            $nextBirthDate = mktime(0,0,0,$month,$day,date('Y',$today+1));
        }
        else
        {
            $nextBirthDate = $birthDateThisYear;
        }
    
        $daysTillNextBirthday = floor(($nextBirthDate-$today)/60/60/24);
    
    
    
    }
    


    public function main(){
        return $daysTillNextBirthday;
    }
}

?>