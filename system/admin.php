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
            <div class="logo_div">
                <a href="#" class="logos">DASHBOARD</a>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, ad! Incidunt, tempora hic? Odio, eaque quos eos nemo similique dolorem quam culpa dolor ullam tempora id nulla ipsum facere hic molestias numquam vero ut nihil perferendis et quia molestiae! Accusantium, perspiciatis autem! Minima autem in quae quaerat voluptatem assumenda maxime quo quasi porro aliquam officiis facere, illo velit, accusantium officia amet eaque. Dolorum, odio, delectus maiores, ratione nihil consequuntur ipsa amet fuga nostrum dolore deserunt magni officia dolorem! Ipsa hic dolorem vitae vero ratione, facere vel aspernatur placeat iusto quod reprehenderit molestiae ad maxime sequi, recusandae accusamus commodi quidem tenetur veritatis! Velit dolorum pariatur consectetur magni laborum. Corporis repudiandae fuga voluptatibus nostrum veniam aut magni culpa eos cumque, quam, totam asperiores odit expedita ratione rem ex deserunt tenetur eligendi. Illum culpa quasi, eum nisi sit, debitis, aliquid voluptatem molestiae iure architecto velit doloremque fugiat! Vero sunt dignissimos rerum eius laudantium. Dignissimos tempore dolore neque placeat hic inventore. Minus, optio id saepe fugit est doloribus maiores vitae impedit labore molestias dolorem exercitationem modi laboriosam voluptate! Nostrum quia esse facilis consequuntur dolor tempore perferendis eaque, itaque aspernatur nihil iste recusandae veniam laborum explicabo ducimus quis? Omnis odio asperiores assumenda qui quia dicta hic? Dicta similique facere ex molestiae eum possimus architecto itaque consequuntur aperiam sit inventore, excepturi alias ducimus a nam eveniet obcaecati accusantium voluptatum odit, recusandae minus cupiditate quae ad. Itaque rerum laborum asperiores labore nemo voluptates nobis ea, modi cumque saepe nesciunt id animi aliquid. Enim ducimus sed eius error perferendis? Pariatur aliquid ex dicta est omnis asperiores ullam provident atque doloribus aspernatur, repudiandae eum? Autem, quisquam tempore minus minima sequi, voluptates deleniti asperiores aut optio atque dolorum, aperiam dolores veniam numquam. Iusto neque nihil maiores ea ipsum. Exercitationem placeat possimus ad aspernatur quod natus magnam, iusto iste doloremque, mollitia eius nulla eveniet beatae et facilis atque ratione. Ipsum sequi maiores autem suscipit libero veritatis labore minima mollitia incidunt magni omnis consectetur natus ad aperiam tenetur nesciunt ipsam similique, ullam voluptatem nam rem tempore. Voluptatibus laudantium fugiat, nihil, officia odio doloremque magnam voluptatum eius quibusdam dignissimos modi reprehenderit officiis? Fuga, distinctio quae, nesciunt reiciendis omnis earum optio laborum magnam, excepturi ducimus itaque delectus qui quas! Nesciunt sapiente eaque adipisci suscipit nisi error est illum. Laborum voluptatum temporibus dolor sit omnis eveniet placeat illum facilis earum itaque voluptates at ipsa natus eum aperiam animi accusamus, deleniti fugit, vero sequi tenetur alias!</p>
            </div>
        </section>

    </main>


</body>

</html>