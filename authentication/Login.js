const login_form=document.getElementById('login_form');
login_form.addEventListener("submit",(e)=>{


    const username=document.getElementById('username').value;
    const password=document.getElementById('password').value;

    const username_error=document.getElementById('username_error');
    const password_error=document.getElementById('password_error');
    
    username_validator(username,username_error);
    password_validator(password, password_error);

    if(username_validator(username,username_error) &&
    password_validator(password, password_error)){
        return;
    }else{
        e.preventDefault();
    }

  


});
const username_validator = (username, inputError) => {
    const minLength = 3;
    const maxLength = 20;
    const allowedCharacters = /^[a-zA-Z0-9]+$/;
    if (username.length < minLength || username.length > maxLength) {
        inputError.style.display = "block";
        inputError.innerText = "Please fill this field";
        return false;
    }
    else if (!allowedCharacters.test(username)) {
        inputError.style.display = "block";
        inputError.innerText = "Invalid username";
        return false;
    } else {
        inputError.style.display = "none";
        inputError.innerText = "";
        return true;
    }
}

const password_validator = (password, inputError) => {
    const pattern_password = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/;
    if (password.length === 0) {
        inputError.style.display = "block";
        inputError.innerText = "Please fill this field";
        return false;
    } else if (!pattern_password.test(password)) {
        inputError.style.display = "block";
        inputError.innerText = "Include uppercase,lowercase and numbers";
        return false;
    } else {
        inputError.style.display = "none";
        inputError.innerText = " ";
        return true;
    }
}

const forgotPassword=document.getElementById("forgot_password");

forgotPassword.addEventListener("click",()=>{
    window.location.href = './verify.php';
})