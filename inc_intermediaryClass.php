<?php
    //include the databse class file
    include("inc_databaseClass.php");
    
    // Intermediary class
    class IntermediaryClass
    {
        // Methods for connecting to the database
        function GetAllBooks()
        {
            $dbClass = new DatabaseClass;

            // Query to fetch all books
            $sql = "SELECT * FROM `books`";

            // Call the select query method of dbclass
            try {
                $result = $dbClass->Select($sql);
                // echo $result;
                if ($result) {
                    return $result;
                }
            } catch (Exception $e) {
                echo "<script>window.alert(" . $e->getMessage() . ")</script>)";
            }
        }

        // Method to get books by category
        function GetBooksByCategory($category)
        {
            $dbClass = new DatabaseClass;

            // Query to fetch books by category
            $sql = "SELECT * FROM `books` WHERE category='$category'";

            // Call the select query method of dbclass
            try {
                $result = $dbClass->Select($sql);
                if ($result) {
                    return $result;
                    
                }
            } catch (Exception $e) {
                echo "<script>window.alert(" . $e->getMessage() . ")</script>)";
            }
        }
    }


?>