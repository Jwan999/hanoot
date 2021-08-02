<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="icon" href="/assets/image_2021-08-02_20-20-12.png">

    <title>Hanoot</title>
    <style>
        body {
            font-family: 'Comfortaa', cursive;
        }

        .darkbg {
            background-color: #161616;
        }
    </style>
</head>
<body class="darkbg">

@include('layout.navbar')

<div class="flex justify-center items-center mx-20 mt-20">
    <div class="">
        <h1 class="text-7xl text-white">Pay with bracelets not money.</h1>
        <p class="text-lg text-gray-200 mt-10">
            Our e-payment solution focuses on working with the parents to manage their expenses during school with not
            money lost or giving the children the responsibility of carrying money with them.
        </p>
        <p class="font-bold text-white text-xl mt-3">
            Want to be the first to try our service?
        </p>
        <button class="px-8 py-3 font-bold bg-yellow-400 text-black rounded-3xl mt-6">
            sign up now!
        </button>
    </div>
    <div class="">
        <img src="/assets/image_2021-08-02_17-10-37.png" alt="">
    </div>
</div>


</body>
</html>