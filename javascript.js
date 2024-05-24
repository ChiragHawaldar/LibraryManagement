let AddBook = document.getElementById("Addbook");
let RemoveBook = document.getElementById("RemoveBook");
let RenewBook = document.getElementById("RenewBook");

AddBook.onclick= function(){
    window.location.href="AddBook/addbook.php";
    console.log("hello");
};

RemoveBook.onclick= function(){
    window.location.href="RemoveBook/removeBook.php";
    console.log("hello");
};


RenewBook.onclick= function(){
    window.location.href="RenewBook/Renew.php";
    console.log("hello");
};
