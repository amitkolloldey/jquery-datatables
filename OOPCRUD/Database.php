<?php
include('config.php');
class Database{
    public $db_name = DB_NAME;
    public $db_user = DB_USER;
    public $db_pass = DB_PASS;
    public $db_host = DB_HOST;
    
    public $connect;
    public $error;
    
    
    public function __construct(){
        $this->Connection();
    }
    
    private function Connection(){ 
        $this->connect = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
        if(!$this->connect){
            $this->error = "Error Establishing Database Connectiion!".$this->connect->connect_error;
            return false; 
        }
    }
    
    public function select($query){
        $result = $this->connect->query($query) or die($this->connect->error.__LINE__);
        if($result->num_rows > 0){
            return $result;
        }else{
            header('Location: home.php');
        } 
    }
    
    public function insert($query){
        $result = $this->connect->query($query) or die($this->connect->error.__LINE__);
        if($result){
            header('Location: index.php?message='.urlencode("New Employee Added!").'');
        }
    }
    
    public function update($query){
        $result = $this->connect->query($query) or die($this->connect->error.__LINE__);
        if($result){
            header('Location: index.php?message='.urlencode("Employee Updated Successfully!").'');
        }
    } 
    
    public function delete($query){
        $result = $this->connect->query($query) or die($this->connect->error.__LINE__);
        if($result){
            header('Location: index.php?message='.urlencode("Employee Deleted Successfully!").'');
        }else{
            header('Location: index.php');
        }
    }
}