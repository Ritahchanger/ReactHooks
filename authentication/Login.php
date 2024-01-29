    <?php

    session_start();

    include("../includes/auth_header.php");
    require_once("../database/functions.php");

    $username_status = $password_status = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $password = trim($_POST["password"]);

        $connection = connection();
        $connection->select_db($database);

        $check_username_stmt = $connection->prepare("SELECT user_id, username, pword FROM users WHERE username=?");

        $check_username_stmt->bind_param("s", $username);
        $check_username_stmt->execute();
        $check_username_result = $check_username_stmt->get_result();

        if ($check_username_result->num_rows === 1) {
            $user_data = $check_username_result->fetch_assoc();
            if (!password_verify($password, $user_data['pword'])) {
                $password_status = "Wrong password";
            } else {
                $_SESSION['id'] = $user_data['user_id'];
                redirect("./Signup.php");
            }
        } else {
            $username_status = "This username is not available";
        }
    }


    ?>
    <div class="container">
        <div class="auth_form_container">
            <form action="./Login.php" id="login_form" class="form" method="POST">
                <a href="#" class="form_title">LOGIN</a>
                <hr>
                <div class="input_group">
                    <p class="input_name">Username</p>
                    <input type="text" name="username" id="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">
                    <p class="error" id="username_error"></p>
                    <?php if (isset($username_status)) { ?>
                        <p class="error" id="username_status"><?php echo $username_status; ?></p>
                    <?php } else { ?>
                        <p class="error" id="username_status"></p>
                    <?php } ?>
                </div>
                <div class="input_group">
                    <p class="input_name">Password</p>
                    <input type="password" name="password" id="password" value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''; ?>">
                    <p class="error" id="password_error"></p>
                    <?php if (isset($password_status)) { ?>
                        <p class="error" id="password_status"><?php echo $password_status; ?></p>
                    <?php } else { ?>
                        <p class="error" id="password_status"></p>
                    <?php } ?>
                </div>
                <input type="submit" value="LOGIN" id="submit-btn">
                <p style="text-align: center;font-size: 2rem;margin-top:1rem; ">OR</p>
                <p class="auth_handle" style="text-align:center;"><a href="#">Forgot password?</a><br>Need an account? - <a href="../authentication/Signup.php">SignUp</a></p>
            </form>
        </div>

    </div>
    <script src="./Login.js"></script>
    <?php include("../includes/auth_footer.php"); ?>