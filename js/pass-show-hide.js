const passField = document.querySelector(".form input[type='password']"), 
toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = ()=>{
    if(passField.type == "text"){
        passField.type = "password";

        toggleBtn.classList.add("active");
    }
    else{
        passField.type = "text";
        toggleBtn.classList.remove("active");
    }
}