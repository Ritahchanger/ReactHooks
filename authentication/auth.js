document.getElementById("signup_form").onsubmit = (e) => {
    const fname = document.getElementById("fname").value;
    const sname = document.getElementById("sname").value;
    const username = document.getElementById("username").value;
    const phone = document.getElementById("phone").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("original_password").value;
    const confirm_password = document.getElementById("confirm_password").value;
    const fname_error = document.getElementById("fname_error");
    const sname_error = document.getElementById("sname_error");
    const phone_error = document.getElementById("phone_error");
    const username_error = document.getElementById("username_error");
    const email_error = document.getElementById("email_error");
    const password_error = document.getElementById("original_password_error");
    const confirm_password_error = document.getElementById(
      "confirm_password_error"
    );
  
    name_validator(fname, fname_error);
    name_validator(sname, sname_error);
    idno_validator(phone, phone_error);
    email_validator(email, email_error);
    password_validator(password, password_error);
    password_validator(confirm_password, confirm_password_error);
    username_validator(username, username_error);
    if (
      name_validator(fname, fname_error) &&
      name_validator(sname, sname_error) &&
      idno_validator(phone, phone_error) &&
      username_validator(username, username_error) &&
      email_validator(email, email_error) &&
      password_validator(password, password_error) &&
      password_validator(confirm_password, confirm_password_error) &&
      password !== confirm_password
    ) {
      e.preventDefault();
      confirm_password_error.style.display = "block";
      confirm_password_error.innerText = "Your passwords don't match!";
    } else if (
      name_validator(fname, fname_error) &&
      name_validator(sname, sname_error) &&
      idno_validator(phone, phone_error) &&
      email_validator(email, email_error) &&
      password_validator(password, password_error) &&
      password_validator(confirm_password, confirm_password_error) &&
      password === confirm_password
    ) {
      return;
    } else {
      e.preventDefault();
      return;
    }
  };
  const name_validator = (name, inputError) => {
    const nameRegex = /^[A-Za-z\s.'-]+$/;
    if (name.trim().length === 0) {
      inputError.style.display = "block";
      inputError.innerText = "Please fill this field";
      return false;
    } else if (!nameRegex.test(name)) {
      inputError.style.display = "block";
      inputError.innerText = "Write valid name";
      return false;
    } else {
      inputError.style.display = "none";
      inputError.innerText = " ";
      return true;
    }
  };
  const idno_validator = (number_validate, inputError) => {
    if (number_validate.trim().length === 0) {
      inputError.style.display = "block";
      inputError.innerText = "Please fill this field";
      return false;
    } else if (number_validate.length != 10) {
      inputError.style.display = "block";
      inputError.innerText = "The phone number must be 10";
      return false;
    } else {
      inputError.style.display = "none";
      inputError.innerText = " ";
      return true;
    }
  };
  const email_validator = (email, inputError) => {
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (email.trim().length === 0) {
      inputError.style.display = "block";
      inputError.innerText = "Please fill this field";
      return false;
    } else if (!emailRegex.test(email)) {
      inputError.style.display = "block";
      inputError.innerText = "Type valid email address";
      return false;
    } else {
      inputError.style.display = "none";
      inputError.innerText = " ";
      return true;
    }
  };
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
  };
  const username_validator = (username, inputError) => {
    const minLength = 3;
    const maxLength = 20;
    const allowedCharacters = /^[a-zA-Z0-9]+$/;
    if (username.length < minLength || username.length > maxLength) {
      inputError.style.display = "block";
      inputError.innerText = "Please fill this field";
      return false;
    } else if (!allowedCharacters.test(username)) {
      inputError.style.display = "block";
      inputError.innerText = "Invalid username";
      return false;
    } else {
      inputError.style.display = "none";
      inputError.innerText = "";
      return true;
    }
  };
  
  