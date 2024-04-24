"use strict"; // Enable strict mode for better error handling and secure coding practices

// Define a function named start
function start(){
    // Add an event listener to the element with id "sathvikData"
    document.getElementById("sathvikData").addEventListener("click",function(){
        // Define a variable named value containing information about Sathvik
        var value="Student ID : 700763648 <br><br> Email Id : SXK36480@ucmo.edu <br><br> Contributed in designing and implementing the Books Menu page, Book details Page as well as the about Us page.<br><br> Has used HTML, CSS , PHP and Java Script to Implement these Pages.<br><br>We have also used the three tier architecture for connecting to the database."
        // Set the inner HTML of the element with id "data" to the value variable
        document.getElementById("data").innerHTML=value;
    },false);

    // Add an event listener to the element with id "karthikData"
    document.getElementById("karthikData").addEventListener("click",function(){
        // Define a variable named value containing information about Karthik
        var value="Student ID : 700745482 <br><br> Email Id : KXB54820@ucmo.edu <br><br> Contributed in designing and implementing the Home Page, Best Sellers Page as well as the Reviews page.<br><br> Has used HTML, CSS , PHP and Java Script to Implement these Pages.<br><br>We have also used the three tier architecture for connecting to the database."
        // Set the inner HTML of the element with id "data" to the value variable
        document.getElementById("data").innerHTML=value;
    },false);

    // Add an event listener to the element with id "sahithiData"
    document.getElementById("sahithiData").addEventListener("click",function(){
        // Define a variable named value containing information about Sahithi
        var value="Student ID : 700747202 <br><br> Email Id : SXB72020@ucmo.edu <br><br> Contributed in building and designing the Favourites page, Purchase confirmation page as well as the Contact us page.<br><br>Used HTML, CSS , PHP for connecting to the database , JavaScript for creating the interactive web pages."
        // Set the inner HTML of the element with id "data" to the value variable
        document.getElementById("data").innerHTML=value;
    },false);
}

// Add an event listener to the window object for the "load" event, which calls the start function
window.addEventListener("load",start,false);
