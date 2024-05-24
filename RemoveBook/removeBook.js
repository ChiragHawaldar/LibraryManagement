
const inputBox = document.getElementById("input-box");
const listContainer = document.getElementById("list-container"); // Use querySelector for class selection

function removeTask() {
    if (inputBox.value === '') {
        alert("You must write something!");
    } else {
        let li = document.createElement('li');
        li.innerHTML = inputBox.value;
        listContainer.appendChild(li);

        let span = document.createElement("span");
        span.innerHTML = "Remove";
        li.appendChild(span);
    }

    inputBox.value = "";
    saveData();
    alert("Book Removed");
}

inputBox.addEventListener('keyup',function(e){
    if(e.keyCode==13){
        addTask();
    }
});

listContainer.addEventListener('click', function(e){
    if(e.target.tagName==="LI"){
        e.target.classList.toggle("checked");
        saveData();
    }
    else if(e.target.tagName === "SPAN"){
        e.target.parentElement.remove();
        saveData();
    }
},false);


function saveData(){
    localStorage.setItem("data", listContainer.innerHTML);
}

function showTask(){

    listContainer.innerHTML = localStorage.getItem("data");
}

showTask();
