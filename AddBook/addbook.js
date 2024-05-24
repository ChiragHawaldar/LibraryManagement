
const inputBox = document.getElementById("input-box");
const listContainer = document.getElementById("list-container"); // Use querySelector for class selection
const bookNo = document.getElementById("bookNo"); 

function addTask() {
    if (inputBox.value === '') {
        alert("Enter Book Name");
    } else {
        let li = document.createElement('li');
        li.innerHTML = inputBox.value;
        listContainer.appendChild(li);

        let span = document.createElement("span");
        span.innerHTML = "Remove";
        li.appendChild(span);
    }
    alert("Book Added");
    saveData();
}

inputBox.addEventListener('keyup',function(e){
    if(e.keyCode==13){
        addTask();
    }
});

// listContainer.addEventListener('click', function(e){
//     if(e.target.tagName==="LI"){
//         e.target.classList.toggle("checked");
//         saveData();
//     }
//     else if(e.target.tagName === "SPAN"){
//         e.target.parentElement.remove();
//         saveData();
//     }
// },false);


// function saveData(){
//     localStorage.setItem("data", listContainer.innerHTML);
// }

// function showTask(){

//     listContainer.innerHTML = localStorage.getItem("data");
// }

