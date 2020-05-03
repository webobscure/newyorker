<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Nav</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/70bf0f3a41.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="img/newyorker.svg" width="60px" height="60px" alt="newyorker"></a>
        </div>
        <nav>
            <ul>
                <li><a href="men.php" class="nav-item"><i class="fas fa-male"></i>Мужское</a></li>
                <li><a href="women.php" class="nav-item"><i class="fas fa-female"></i>Женское</a></li>
                <li><a href="lifestyle.php" class="nav-item"><i class="fas fa-heartbeat"></i>Лайфстайл</a></li>
                <li><a href="#" class="nav-item"><i class="fas fa-sign-in-alt"></i>Войти</a></li>
            </ul>
        </nav>
        <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
    </header>
    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const nav = document.querySelector('nav');
        menuToggle.addEventListener('click', () => {
            if (nav.className != 'active') { nav.className = 'active'; }
            else { nav.className = ''; }
        });
    </script>
</body>
</html>