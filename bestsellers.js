"use strict";

// Define an array of book objects containing details about each book
const books = [
    { 
        title: "The Great Gatsby", 
        author: "F. Scott Fitzgerald", 
        image: "./img/The Great Gatsby.jpg", 
        popularity: 3, 
        trendingRate: "High", 
        funFactBook: "The original title Fitzgerald chose for The Great Gatsby was 'Trimalchio in West Egg.'",
        funFactAuthor: "F. Scott Fitzgerald's full name was Francis Scott Key Fitzgerald. He is named after his distant cousin, Francis Scott Key, who wrote the lyrics to 'The Star-Spangled Banner.'"  
    },
    { 
        title: "To Kill a Mockingbird", 
        author: "Harper Lee", 
        image: "./img/To Kill a Mockingbird.jpg", 
        popularity: 4, 
        trendingRate: "Medium", 
        funFactBook: "To Kill a Mockingbird was Harper Lee's only published book until 'Go Set a Watchman' was released in 2015.",
        funFactAuthor: "Harper Lee was childhood friends with Truman Capote, who later became a famous author." 
    },
    { 
        title: "Harry Potter", 
        author: "J.K. Rowling", 
        image: "./img/Harry Potter and the Sorcerers Stone.jpg", 
        popularity: 5, 
        trendingRate: "High", 
        funFactBook: "J.K. Rowling came up with the idea for Harry Potter while on a delayed train journey from Manchester to London King's Cross in 1990. She began writing the series that would become immensely popular worldwide.", 
        funFactAuthor: "J.K. Rowling's birth name is Joanne Rowling. She adopted the pen name 'J.K.' to appeal to boys, as her publishers were concerned that a female author might deter them from reading the book."
    },
    { 
        title: "The Catcher in the Rye", 
        author: "J.D. Salinger", 
        image: "./img/The Catcher in the Rye.jpg", 
        popularity: 4, 
        trendingRate: "Medium", 
        funFactBook: "The Catcher in the Rye has been surrounded by controversy since its publication in 1951. It has been both widely praised and criticized, and it's one of the most frequently banned books in American literature due to its themes of rebellion and teenage angst.", 
        funFactAuthor: "J.D. Salinger was notoriously reclusive later in life, avoiding interviews and public appearances. He lived in seclusion in Cornish, New Hampshire, and published very little after the success of The Catcher in the Rye." 
    }
];

// Get reference to the HTML element with id "bookContainer"
const bookContainer = document.getElementById("bookContainer");

// Function to create HTML elements for each book object and return the container element
function createBookElement(book) {
    // Create a <div> element for each book
    const div = document.createElement("div");
    div.classList.add("book");
  
    // Create an <img> element for the book cover image
    const img = document.createElement("img");
    img.src = book.image;
    img.alt = book.title;
    div.appendChild(img);
  
    // Create an <h3> element for the book title
    const title = document.createElement("h3");
    const titleLink = document.createElement("a");
    titleLink.textContent = book.title;
    titleLink.href = "#";
    // Add event listener to show fun fact when title is clicked
    titleLink.addEventListener("click", () => {
        alert(book.funFactBook);
    });
    title.appendChild(titleLink);
    div.appendChild(title);
  
    // Create a <p> element for the book author
    const author = document.createElement("p");
    const authorLink = document.createElement("a");
    authorLink.textContent = `Author: ${book.author}`;
    authorLink.href = "#";
    // Add event listener to show fun fact when author is clicked
    authorLink.addEventListener("click", () => {
        alert(book.funFactAuthor);
    });
    author.appendChild(authorLink);
    div.appendChild(author);
  
    // Create a <p> element for the book popularity
    const popularity = document.createElement("p");
    popularity.textContent = `Popularity: ${book.popularity} / 5`;
    div.appendChild(popularity);
  
    // Create a <p> element for the book trending rate
    const trendingRate = document.createElement("p");
    trendingRate.textContent = `Trending Rate: ${book.trendingRate}`;
    div.appendChild(trendingRate);
  
    // Return the created <div> element
    return div;
}

// Function to render each book by creating HTML elements and appending them to the book container
function renderBooks() {
    // Loop through each book in the books array
    books.forEach(book => {
        // Create HTML elements for the current book
        const bookElement = createBookElement(book);
        // Append the created HTML elements to the book container
        bookContainer.appendChild(bookElement);
    });
}

// Call the renderBooks function to render all books when the script is executed
renderBooks();
