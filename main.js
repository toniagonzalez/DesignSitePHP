//Header Variable funtionality
const passionVariable = document.getElementsByClassName('passionVariable')[0];
const textArray = ["art", "music", "small business", "research", "craft", "cause", "non-profit", "passion"];

function printVariables(array) {

    array.forEach((variable, index)=>{
        setTimeout(()=>{
            passionVariable.innerHTML = variable; 
        }, index * 800)
    });
}

printVariables(textArray);



//Navbar toggle button funtionality
const navToggle = document.getElementById("navbarNav");

function toggleNav(){
    navToggle.classList.toggle("show")
}






