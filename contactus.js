// Created by Group-2
//Javascript for displaying details of the web page creators.
"use strict";

var count=0;
function groupMember1(){
    //display the details of groupMmeber1 on to webpage on clicking the button.
    let name ='Sahithi Bade';
    let email='@ucmo.edu';
    let imageSrc='img/sahithi.jpg';
    let linkedIn ='https://www.linkedin.com/in/sahithi-bade-0a95a82a5/';
    display("sahithiLabel", name, email, linkedIn,imageSrc);
}

function groupMember2(){
    //display the details of groupMmeber2 on to webpage on clicking the button.
    let name ='Sathvik Reddy Kamidi';
    let email='@ucmo.edu';
    let imageSrc='img/sathvik.jpg';
    let linkedIn ='https://www.linkedin.com/in/sathvik-reddy-kamidi-6a49971a3?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app';
    display("sathvikLabel", name, email, linkedIn,imageSrc);
}

function groupMember3(){
    //display the details of groupMmeber3 on to webpage on clicking the button.
    let name ='Karthik Reddy Badinehal';
    let email='@ucmo.edu';
    let imageSrc='img/karthik.jpg';
    let linkedIn ='https://www.linkedin.com/in/karthik-reddy-badinehal-888271218?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app';
    display("karthikLabel", name, email, linkedIn,imageSrc);
   }

function display(id, name, email, linkedIn, imageSrc) { // Add an imageSrc parameter for the image source path
    let container = document.getElementById(id);
    container.style.textAlign = "left";
    container.innerHTML = `
    <img src="${imageSrc}" alt="${name}" height="100" width="100"><br> 
    <span style="font-weight: bold;">Name: </span>${name}<br>
    <span style="font-weight: bold;">Email: </span>${email}<br>
    <span style="font-weight: bold;">LinkedIn: </span>
    <a href="${linkedIn}">${name}</a>`; // Corrected the anchor tag for LinkedIn
}

function nonDisplay(id){
        document.getElementById(id).style.display="none";
}

//event listener for page load
window.addEventListener("load",function(){
    //Event Listener for submit button using anonymous function
    document.getElementById("karthikDetails").addEventListener("click",groupMember3, false);
    document.getElementById("sahithiDetails").addEventListener("click", groupMember1, false);
    document.getElementById("sathvikDetails").addEventListener("click", groupMember2, false);
}, false);