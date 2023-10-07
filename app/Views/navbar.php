<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .navbar-nav p, .navbar-nav i{
            border-bottom: solid 5px transparent;
            border-top: solid 10px transparent;
            transition: ease-in-out 0.3s;
        }
        .navbar-nav .active{
            color: #80CC28 !important;
        }
        .navbar-nav a p:hover{
            transition: ease-in-out 0.3s;
            border-bottom: solid 5px #80CC28;
        }

        .nav2 a{
            transition: transform 0.3s;
        }
        .nav2 a:hover{
            transition: transform 0.3s;
            transform: scale(1.1);
        }
    </style>
</head>

<body style="font-family: 'Poppins', sans-serif; background-color: #D8D8D8;">
    <nav class="navbar navbar-expand-lg shadow-sm fixed-top" style="background-color: #D8D8D8;">
        <div class="container align-items-center">
            <a class="navbar-brand" href="#"><img src="img/Logo.png" alt="" class="img-fluid p-3" style="height: 75px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto gap-xl-2">
                    <a class="nav-link active d-flex gap-2" href="#"><i class="bi bi-house-door"></i><p class="mb-0">Home</p></a>
                    <a class="nav-link d-flex gap-2" href="#"><i class="bi bi-lightbulb"></i><p class="mb-0">Challenges</p></a>
                    <a class="nav-link d-flex gap-2" href="#"><i class="bi bi-gift"></i><p class="mb-0">Reward</p></a>
                    <a class="nav-link d-flex gap-2" href="#"><i class="bi bi-book"></i><p class="mb-0">Learn</p></a>
                    <a class="nav-link d-flex gap-2" href="#"><i class="bi bi-people"></i><p class="mb-0">Community</p></a>
                </div>
                <div class="d-flex align-items-center ms-auto gap-2 nav2">
                    <a href="#" class="btn border-0 rounded px-4 text-white" style="background-color: #15C626;">Login</a>
                    <a href="#" class="btn border-0 rounded px-4" style="background-color: #F9F871;">Register</a>
                </div>
            </div>
        </div>
    </nav>