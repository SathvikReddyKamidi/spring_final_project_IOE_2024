"use strict";

document.addEventListener("DOMContentLoaded", function() {
    // Selecting necessary DOM elements
    var buyForm = document.getElementById("buyNow"); // The "Buy Now" button
    var quantityInput = document.getElementById("quantity"); // The quantity input field
    var quantityError = document.getElementById("quantity-error"); // Error message for quantity

    // Adding event listener to the "Buy Now" button
    buyForm.addEventListener("click", function(event) {
        // Parsing the quantity input value to an integer
        var integerValue = parseInt(quantityInput.value);

        // Retrieving the total available quantity from the hidden input field
        var quantity = document.getElementById('hidden_input').value;
        var integerQuantity = parseInt(quantity);

        // Checking if the entered quantity is less than or equal to 0
        if (integerValue <= 0) {
            // Displaying an error message if quantity is less than or equal to 0
            quantityError.textContent = "Quantity must be greater than 0.";
            // Preventing the default form submission behavior
            event.preventDefault();
        }
        // Checking if the entered quantity exceeds the available quantity
        else if (integerValue > integerQuantity) {
            // Displaying an error message if entered quantity exceeds available quantity
            quantityError.textContent = "There are only " + quantity + " books left. Please enter a lesser number.";
            // Preventing the default form submission behavior
            event.preventDefault();
        }
        // If no validation errors, clearing the error message
        else {
            quantityError.textContent = "";
        }
    });
});
