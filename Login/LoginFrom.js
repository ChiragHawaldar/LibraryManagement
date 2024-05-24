document.addEventListener('DOMContentLoaded', function() {

let signupBtn = document.getElementById("signupBtn");
let signinBtn = document.getElementById("signinBtn");
let nameField = document.getElementById("nameField");
let classField = document.getElementById("classField");
let title1 = document.getElementById("title1");
let title2 = document.getElementById("title2");
let NewStudent = document.getElementById("NewStudent");
let NewStudent1 = document.getElementById("NewStudent1");
let NewStudent2 = document.getElementById("NewStudent2");




NewStudent.onclick = function(){
  
  nameField.classList.toggle("disable");
  classField.classList.toggle("disable");
  NewStudent1.classList.toggle("display");
  NewStudent2.classList.toggle("display");
  title1.classList.toggle("display");
  title2.classList.toggle("display");
  signupBtn.classList.toggle("display");
  signinBtn.classList.toggle("display");


}



});







