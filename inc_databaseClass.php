<!DOCTYPE html>
<?php
    // Define a class DatabaseClass
    class DatabaseClass {
        static $connection; // Static property to hold the database connection
        
        // Method to establish a database connection
        public function connect() {
            // Check if the connection is not already established
            if (!isset(self::$connection)) {
                // Include the database configuration file
                include("inc_dbConfig.php");
                // Create a new MySQLi object and store the connection
                self::$connection = new mysqli($host, $username, $password, $database);
            }
            // Check if the connection is successful
            if (self::$connection == false) {
                return false; // Return false if connection fails
            }
            return self::$connection; // Return the connection object
        }
        
        // Method to execute a SELECT query
        public function Select($query) {
            // Establish database connection
            $connection = $this->connect();
            // Execute the query
            $result = $connection->query($query);
            // Close the connection after query execution
            $this->CloseConnection();
            // Check if there is an error in the query execution
            if (!$result) {
                return $connection->error; // Return the error message
            } else {
                return $result; // Return the query result
            }
        }
        
        // Method to get the last database error
        public function error() {
            // Get the last error from the database
            $connection = $this->connect();
            return $connection->error; // Return the error message
        }
        
        // Method to close the database connection
        public function CloseConnection() {
            self::$connection->close(); // Close the database connection
        }
    } // End of class DatabaseClass
?>
