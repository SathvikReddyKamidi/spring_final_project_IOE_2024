<?php
    //include php function files here to access the database
    include("nav.php");
    include("inc_intermediaryClass.php");

    //getting the variables from post autoglobals for forming the query based on what was selected
    $select = isset($_GET["category"]) ? $_GET["category"] : "all"; // Creates variable $select for query
    $result;
    $intermediaryClass = new IntermediaryClass();

    if (($select == 'all')) {
        // If category is not set, fetch all books

        $result = $intermediaryClass->GetAllBooks(); // Call GetAllBooks() method to fetch all books
    } 
    else {
        // Fetch books based on the selected category
        $result = $intermediaryClass->GetBooksByCategory($select);
        
    }
?>

<?php
        require("results.php")
?>


