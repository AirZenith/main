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
        .navbar-nav p,
        .navbar-nav i {
            border-bottom: solid 5px transparent;
            border-top: solid 10px transparent;
            transition: ease-in-out 0.3s;
        }

        .navbar-nav .active {
            color: #80CC28 !important;
        }

        .navbar-nav a:hover p {
            transition: ease-in-out 0.3s;
            border-bottom: solid 5px #80CC28;
        }

        .nav2 {
            transition: transform 0.3s;
        }

        .nav2:hover {
            transition: transform 0.3s;
            transform: scale(1.1);
        }

        .w-49 {
            width: 100%;
        }

        @media screen and (min-width: 1025px) {
            .w-49 {
                width: 49%;
            }
        }

        .hero a {
            transition: ease-in-out 0.3s;
        }

        .hero a:hover {
            transform: scale(1.05);
            transition: ease-in-out 0.3s;
        }
    </style>
</head>

<body style="font-family: 'Poppins', sans-serif; background-color: #D8D8D8;">