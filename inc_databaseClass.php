<!DOCTYPE html>
<?php
    class DatabaseClass{
        static $connection;
        public function connect(){
            if(!isset(self::$connection)){
                include("inc_dbConfig.php");
                self::$connection=new mysqli($host,$username,$password,$dbname);
            }
            if(self::$connection==false){
                return false;
            }
           
            return self::$connection;
        }
        public function Select($query){
            $connection=$this->connect();
            $result=$connection->query($query);
            
            $this->CloseConnection();
            if(!$result){
                return $connection->error;
            }else{
                return $result;
            }

        }//end of function Select
        public function error(){
            //gets the last error from the database
            $connection=$this->connect();
            return $connection->error;
        }// end of the error
        public function CloseConnection(){
            self::$connection->close();
        }
    }//end class

?>