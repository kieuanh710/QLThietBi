<?php
class TempModel extends Dbh{
    protected function getAllTemp(){
        $sql = "SELECT nhiet_do FROM nhiet_do;";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if($numRows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }
    protected function getAllTimeTemp(){
        $sql = "SELECT time FROM nhiet_do;";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if($numRows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }
    protected function random(){
        $randomTemp = (rand(22, 32));
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('m/d/Y h:i:s a', time());  
        $sql = "INSERT INTO nhiet_do (nhiet_do, time) VALUE ('$randomTemp', '$date')";
        $this->connect()->query($sql);
    }
   
}
 
?>