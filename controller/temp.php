<?php
class QuanLyNhietDo extends Dbh{
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
}
 
?>