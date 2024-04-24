"use strict";

// When the DOM content is fully loaded
document.addEventListener("DOMContentLoaded", function() {
    // Select all images inside elements with class 'book'
    const bookImages = document.querySelectorAll('.book img');

    // Loop through each selected image
    bookImages.forEach(image => {
        // Add a click event listener to each image
        image.addEventListener('click', function() {
            // When clicked, redirect the user to 'inc_QueryResults.php'
            window.location.href = 'inc_QueryResults.php';
        });
    });
});
