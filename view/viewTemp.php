<?php
class ViewTemp extends QuanLyNhietDo{
    public function showAllTemp(){
        $datas = $this->getAllTemp();
        foreach($datas as $data){;
            $nhiet_do[] = $data['nhiet_do'];
            echo $data['nhiet_do']."<br>";
        }
        return $nhiet_do;
    }
    public function showAllTimeTemp(){
        $datas = $this->getAllTimeTemp();
        foreach($datas as $data){;
            echo $data['time']."<br>";
        }
    }
}

?>