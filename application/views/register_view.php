<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanban</title>
    <?php include 'bootstrap_short.php' ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/register.css') ?>">
</head>

<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="https://img.icons8.com/color/48/000000/trello.png" alt="logo" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link branding" href="#">Kanban <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <span class="navbar-text">
                <a class="nav-link login" type="submit" href="<?php echo base_url('kanban/login') ?>">Login</a>
            </span>
        </div>
    </nav>

    <header>
        <p id="heading">Register on Kanban to haldle your works efficently</p>
    </header>

    <!-- Registration Form -->
    <form action="<?php echo base_url('kanban/login') ?>" method="post">
        <div class="container">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" placeholder="John Doe" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" placeholder="email@domain.com" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" placeholder="************" class="form-control" name="password" id="password">
            </div>
            <input type="submit" name="submit" class="form-control btn btn-primary register-submit-btn" id="pwd">
        </div>
    </form>


    <!-- Footer -->
    <footer class="page-footer font-small pt-4">
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a style="font-weight:600" href="https://www.github.com/p4avinash" target="_blank" rel="noreferrer"> p4avinash</a>
        </div>
    </footer>

</body>

</html>