<?php
    //include the databse class file
    include("inc_databaseClass.php");

    //intermediary class
    class IntermediaryClass{
        //methods for connecting to the database
        function GetBooks($select){
            
            $dbClass=new DatabaseClass;
            //Build query
          //  $selectSql="SELECT ". $select." FROM cars";
          $select=$_GET["category"];
            if($select=="all"){
                $sql = "SELECT * FROM `book_info`";
            }else{
                $sql= "SELECT * FROM `book_info` WHERE category='$select'";
            }
            
            //call the select query method of dbclass
            try{
                $result=$dbClass->Select($sql);
                if($result){
                    
                    return $result;
                }//end if
            }
            catch(Exception $e){
                echo "<script>window.alert(".$e->getMessage().")</script>)";

                    
            }//end try catch
        }//end function getCars


    }

?>