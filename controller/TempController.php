<?php

class TempController extends TempModel{
    public function showAllTemp(){
        $datas = $this->getAllTemp();
        foreach($datas as $data){;
            $nhiet_do[] = $data['nhiet_do'];
        }
        return $nhiet_do;
    }
    public function showAllTimeTemp(){
        $datas = $this->getAllTimeTemp();
        foreach($datas as $data){;
            $time[] = $data['time'];
        }
        return $time;
    }
    public function randomTemp(){
        return $this->random();
    }
}

?>