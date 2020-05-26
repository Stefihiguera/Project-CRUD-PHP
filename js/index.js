// Use localStorage for print inputs

window.addEventListener("load", ()=>{

var form = document.querySelector("#form");
form.addEventListener('submit', ()=>{
    var tittle = document.querySelector("#form-task").value;
    var text = document.querySelector("#form-text").value;
    if(tittle.length > 1 && text.length >1){
        localStorage.setItem(tittle, text);
    }else{
        alert("faltan datos");
    }
});



})