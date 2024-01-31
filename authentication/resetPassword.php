<?php
session_start();
include("../includes/auth_header.php");

require_once('../database/functions.php');

if (!isset($_GET['email'])) {
    redirect('./Login.php');
}
$user_email=$_GET['email'];
?>
<div class="container">
    <p id="userEmail" style="display:none;"><?php echo $user_email ?></p>
    <div class="auth_form_container">

        <form id="password_form_handler">
            <div class="preloaders" id="circular_preloader">
                <img src="../images/Spinner-2.gif" alt="">
            </div>
            <a href="#" class="form_title" style="display:block;color:#000;text-align: center;">CHANGE PASSWORD</a>
            <div class="input_group">
                <input type="password" name="password" id="password" placeholder="Enter new password...">
                <p class="error" id="password_error"></p>
            </div>
            <div class="input_group">
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password....">
                <p class="error" id="confirm_password_error"></p>
            </div>
            <input type="submit" value="SENT">
        </form>
    </div>
</div>
<script>
    const password_validator = (password, inputError) => {
        const pattern_password = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/;
        if (password.length === 0) {
            inputError.style.display = "block";
            inputError.innerText = "Please fill this field";
            return false;
        } else if (!pattern_password.test(password)) {
            inputError.style.display = "block";
            inputError.innerText = "Include uppercase, lowercase, and numbers";
            return false;
        } else {
            inputError.style.display = "none";
            inputError.innerText = " ";
            return true;
        }
    };

    $(document).ready(() => {
        document.getElementById("password_form_handler").addEventListener("submit", (e) => {
            e.preventDefault();

            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            const passwordError = document.getElementById('password_error');
            const confirmPasswordError = document.getElementById('confirm_password_error');

            if (password !== confirmPassword) {
                confirmPasswordError.style.display = "block";
                confirmPasswordError.innerText = "Passwords must match";
                return false;
            } else if (!password_validator(password, passwordError) || !password_validator(confirmPassword, confirmPasswordError)) {
                return false;
            } else {

                const userEmail=document.getElementById("userEmail").innerText;
                const formData = {
                    password: password
                };
                $('#circular_preloader').show();
                $.ajax({
                    type: "POST",
                    url:`./reset.php?user_email=${userEmail}`,
                    data: formData,
                    success: function(response) {
                        $('#circular_preloader').hide();
                        console.log(response);

                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                        $('#circular_preloader').hide();
                    }
                });
            }
        });
    });
</script>


<?php
include("../includes/auth_footer.php");
?>