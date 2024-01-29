<?php
include("../includes/auth_header.php");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once('../database/functions.php');
    $conn = connection();
    $insert_query = $check_username_stmt = $check_email_stmt = null;
    try {
        if (createDatabase($database)) {
            $firstName = $_POST['fname'];
            $secondName = $_POST['sname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $conn->select_db($database);
            $create_query = "CREATE TABLE IF NOT EXISTS users (
                user_id INT AUTO_INCREMENT PRIMARY KEY,
                firstName VARCHAR(255) NOT NULL,
                secondName VARCHAR(255) NOT NULL,
                phone VARCHAR(20) NOT NULL,
                username VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                pword VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
            if (!$conn->query($create_query)) {
                throw new Exception("Error creating the table: " . $conn->error);
            }
            $check_username_stmt = $conn->prepare("SELECT username FROM users WHERE username=?");
            $check_username_stmt->bind_param("s", $username);
            $check_username_stmt->execute();
            $check_username_result = $check_username_stmt->get_result();
            if ($check_username_result->num_rows > 0) {
                $username_status = "This username is taken already";
                throw new Exception();
            }
            $check_email_stmt = $conn->prepare("SELECT email FROM users WHERE email=?");
            $check_email_stmt->bind_param("s", $email);
            $check_email_stmt->execute();
            $check_email_result = $check_email_stmt->get_result();
            if ($check_email_result->num_rows > 0) {
                $email_status = "This email is taken already";
                throw new Exception();
            }
            $insert_query = $conn->prepare("INSERT INTO users (firstName, secondName, phone, username, email, pword) VALUES (?, ?, ?, ?, ?, ?)");
            if (!$insert_query) {
                throw new Exception("Error preparing insert statement: ", $conn->error);
            }
            $insert_query->bind_param("ssssss", $firstName, $secondName, $phone, $username, $email, $password);
            $insert_query->execute();
            redirect('./Login.php');
        } else {
            throw new Exception("Error creating the database");
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        if ($check_username_stmt) {
            $check_username_stmt->close();
        }
        if ($check_email_stmt) {
            $check_email_stmt->close();
        }
        if ($insert_query) {
            $connection->close();
        }
    }
}
?>
<div class="container">
    <div class="auth_form_container">
        <form action="./Signup.php" id="signup_form" class="form" method="POST" autocomplete="off" novalidate>
            <a href="#" class="form_title">SIGNUP</a>
            <hr>
            <div class="row flex">
                <div class="input_group">
                    <p class="input_name">First Name</p>
                    <input type="text" name="fname" id="fname" value="<?php echo isset($_POST['fname']) ? htmlspecialchars($_POST['fname']) : ''; ?>">
                    <p class="error" id="fname_error"></p>
                </div>
                <div class="input_group">
                    <p class="input_name">Second Name</p>
                    <input type="text" name="sname" id="sname" value="<?php echo isset($_POST['sname']) ? htmlspecialchars($_POST['sname']) : ''; ?>">
                    <p class="error" id="sname_error"></p>
                </div>
            </div>
            <div class="input_group">
                <p class="input_name">Phone</p>
                <input type="text" name="phone" id="phone" value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
                <p class="error" id="phone_error"></p>
            </div>
            <div class="input_group">
                <p class="input_name">Email</p>
                <input type="text" name="email" id="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                <p class="error" id="email_error"></p>
                <?php if (isset($email_status)) { ?>
                    <p class="error" id="email_status"><?php echo $email_status; ?></p>
                <?php } else { ?>
                    <p class="error" id="email_status"></p>
                <?php } ?>
            </div>
            <div class="input_group">
                <p class="input_name">Username</p>
                <input type="text" name="username" id="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>" autocomplete="off">
                <p class="error" id="username_error"></p>
                <?php if (isset($username_status)) { ?>
                    <p class="error" id="username_status"><?php echo $username_status; ?></p>
                <?php } else { ?>
                    <p class="error" id="username_status"></p>
                <?php } ?>
            </div>

            <div class="row flex">
                <div class="input_group">
                    <p class="input_name">Password</p>
                    <input type="password" name="password" id="original_password" value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''; ?>" autocomplete="off">
                    <p class="error" id="original_password_error"></p>
                </div>
                <div class="input_group">
                    <p class="input_name">Confirm Password</p>
                    <input type="password" name="confirm_password" id="confirm_password" value="<?php echo isset($_POST['confirm_password']) ? htmlspecialchars($_POST['confirm_password']) : ''; ?>">
                    <p class="error" id="confirm_password_error"></p>
                </div>
            </div>
            <input type="submit" name="signup" value="SIGNUP" id="submit-btn">
            <p style="text-align: center;font-size:1.8rem;margin-top:1rem; ">OR</p>
            <p class="auth_handle" style="text-align:center;">Need an account? - <a href="../authentication/Login.php">Login</a></p>
        </form>
    </div>
</div>
<script src="./auth.js"></script>
<?php include("../includes/auth_footer.php"); ?>