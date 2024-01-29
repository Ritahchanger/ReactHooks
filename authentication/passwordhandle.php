<?php
include("../includes/auth_header.php");
?>
<div class="container">
    <div class="auth_form_container">
        <form id="password_form_handler">
            <div class="preloaders" id="circular_preloader">
                <img src="../images/Spinner-2.gif" alt="">
            </div>
            <div class="input_group">
                <input type="email" name="email" id="email" placeholder="Enter your email...">
                <p class="error" id="email_error">Enter email...</p>
            </div>
            <input type="submit" value="SENT">
        </form>
    </div>
</div>
<script>
    $(document).ready(() => {
        const password_form_handler = document.getElementById("password_form_handler");
        password_form_handler.addEventListener("submit", (e) => {
            e.preventDefault();

            const email = document.getElementById("email").value;
            const emailError = document.getElementById("email_error");
            if (!email_validator(email, emailError)) {
                return;
            }

            const formData = {
                email: email
            };

            $('#circular_preloader').show();
            $.ajax({
                type: "POST",
                url: './password_verify.php',
                data: formData,
                success: function(response) {
                    $('#circular_preloader').hide();
    
                },
                error: function(xhr, status, error) {
                    $('#circular_preloader').hide();
            
                }
            });
        });

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
    });
</script>
<?php include("../includes/auth_footer.php"); ?>
