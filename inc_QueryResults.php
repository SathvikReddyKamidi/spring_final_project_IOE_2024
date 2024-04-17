<?php
    //include php function files here to access the database
    include("inc_intermediaryClass.php");

    //getting the variables from post autoglobals for forming the query based on what was seleted
    $select=$_GET["category"];//creates variable $select for query
    $result;
    $intermediaryClass=new IntermediaryClass();
    $result=$intermediaryClass->GetBooks($select);


?>

<!-- <h3>Query : "SELECT <?php echo ("$select");?>  FROM CARS "</h3> -->

<table>
    <caption><b>Results</b></caption>
    <?php
        // $columnNames="<tr>";//starting with row tag
        // $numberOfColumns=$result->field_count;
        // $coulumInfo=$result->fetch_fields();
        // foreach($coulumInfo as $column){
        //     $columnNames.="<th>".ucfirst($column->name)."</th>";
        // }// end foreach
        // echo $columnNames;

        // while($row=$result->fetch_assoc()){
        //     //fetch returns an associative array
        //     print("<tr>");
        //     foreach($row as $value){
        //         print("<td>$value</td>");
        //     }//end for each
        //     print("</tr>");
        // }
            require("results.php")
    ?>
</table>
<p>
    Your search yielded
    <?php print($result->num_rows); ?> results.</p>

