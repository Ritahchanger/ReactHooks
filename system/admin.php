<?php

session_start();
require_once('../database/functions.php');
if (!isset($_GET['id'])) {
    redirect('../authentication/Login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheets/index.css">
    <link rel="stylesheet" href="./admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <div class="nav">
        <div class="container_wrapper flex">
            <div class="logo_div flex">
                <a href="#" class="logos">DASHBOARD</a>
                <a href="#" class="main_menu" id="menu_bar">&#9776;</a>
            </div>
            <div class="profile_div flex">
                <div class="profile_image">
                    <i class="fa-solid fa-user"></i>
                </div>
                <p class="profileName">Caro Milicent</p>
                <i class="fa-sharp fa-solid fa-caret-down"></i>
            </div>
        </div>
    </div>

    <main class="main">
        <section class="section_left">
            <h3 class="sub_headers">ADMIN</h3>
        </section>

        <section class="center_section">
            <div class="main_content">
                <h3 class="sub_headers">APPOINTMENTS</h3>
                <div class="appointment_table">
                    <table>
                        <thead>
                            <tr>
                                <td>App No</td>
                                <td>Ptn Name</td>
                                <td>App Date</td>
                                <td>App Time</td>
                                <td>App Day</td>
                                <td>App Sts</td>
                                <td>View</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>67231</td>
                                <td>Fendiola</td>
                                <td>6-07-2023</td>
                                <td>12:00am</td>
                                <td>Thursday</td>
                                <td>pending</td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </main>


</body>

</html>