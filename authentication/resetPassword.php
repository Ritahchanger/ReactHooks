<?php
include("../includes/auth_header.php");
?>
<div class="container">
    <div class="auth_form_container">
    
        <form id="change_password">
        <a href="#" class="form_title">CHANGE PASSWORD</a>
            <div class="preloaders" id="circular_preloader">
                <img src="../images/Spinner-2.gif" alt="">
            </div>
            <div class="input_group">
                <input type="email" name="email" id="email" placeholder="Enter new password...">
                <p class="error" id="password_error"></p>
            </div>
            <div class="input_group">
                <input type="email" name="email" id="email" placeholder="Confirm password....">
                <p class="error" id="password_error"></p>
            </div>
            <input type="submit" value="SENT">
        </form>
    </div>
</div>

<script>

$(document).ready(()=>{


    document.getElementById("change_password").addEventListener("submit",(e)=>{
        e.preventDefault();

        console.log("This document has been submitted");


    })



})


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
</script>

<?php
include("../includes/auth_footer.php");
?>