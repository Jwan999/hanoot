<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta name="yandex-verification" content="9b5f8d5ecc5a95ab"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="icon" href="/assets/image_2021-08-02_20-20-12.png">
    <link rel="icon" href="/assets/hanoot.svg">
    <title>Hanoot</title>
    <style>
        body {
            font-family: 'Comfortaa', cursive;
            /*background-color: #FFF6F1;*/
        }

        /*.bg-blue {*/
        /*    background-color: #2CCCFF;*/
        /*}*/

        /*.bg-orange {*/
        /*    background-color: #ED5502;*/
        /*}*/

        /*.ring-blue {*/
        /*    --tw-ring-color: #c0f0ff;*/
        /*}*/

        /*.ring-blue-light {*/
        /*    --tw-ring-color: #eafaff;*/
        /*}*/

        /*.ring-orange-light {*/
        /*    --tw-ring-color: #fdeee6;*/
        /*}*/

        /*.ring-orange {*/
        /*    --tw-ring-color: #faccb3;*/
        /*}*/

        /*.text-orange {*/
        /*    color: #ED5502;*/
        /*}*/

        /*.text-blue {*/
        /*    color: #2CCCFF;*/
        /*}*/


        /*.ring{*/
        /*    box-shadow: #c0f0ff 0 0 0 calc(2px + 2px);*/
        /*}*/

    </style>
</head>
<body class="bg-orange-50">

@include('layout.navbar')
{{--welcoming--}}
<div class="flex lg:flex-nowrap flex-wrap justify-center items-center lg:mx-32 mx-6 mt-20">
    <div class="">
        <div class="lg:w-10/12 w-full">
            <h1 class="text-orange-900 mb-4 text-sm font-semibold">
                WELCOME
            </h1>
            <h1 class="text-7xl">Give your child a bracelet instead of money.</h1>
            <p class="text-lg mt-10">
                We are here to provide every school possible with a fast and a smart payment system
                for the students.
            </p>

            <button class="px-8 py-6 font-bold bg-orange-900 ring-4 ring-orange-100 text-white rounded-3xl mt-6">
                Sign up now!
            </button>

        </div>

    </div>
    <div class=" lg:mt-0 mt-10">
        <img src="/assets/woodHand1.png" alt="">
    </div>
</div>
{{--problem--}}
<div class="flex flex-wrap items-center lg:mx-32 mx-6 mt-20 mt-32">
    <div class="flex justify-center lg:justify-start lg:mr-32 mr-0">
        <img class="lg:w-2/12 w-6/12" src="/assets/solution.png" alt="">
    </div>
    <div class="lg:w-8/12 w-full lg:mt-0 mt-10">
        <h1 class="text-orange-900 mb-4 text-sm font-semibold">
            OUR SOLUTION
        </h1>
        <h1 class="text-4xl font-semibold">What we want to help you with</h1>
        <p class="mt-6 text-xl text-gray-700 text-justify">
            We know the struggle you go through when it comes to giving money to your children, when they keep asking
            for more or if they lose the money, you can make It easier on them to purchase during school hours the
            responsibility of money can be heavy on children that’s why we are trying to help you with that.
        </p>
    </div>
</div>
{{--benefits--}}
<div class="lg:mx-32 mx-6 mt-20 mt-32">
    <h1 class="text-orange-900 text-center mb-4 text-sm font-semibold">
        OUR FEATURES
    </h1>
    <h1 class="text-center text-4xl font-semibold">Hello Hello</h1>
    <div class="grid lg:grid-cols-3 grid-cols-1 gap-20">
        <div class="bg-white ring-4 ring-blue-100 rounded-3xl p-6 mt-10">
            <div class="flex justify-center">
                <img class="w-28" src="assets/food.png" alt="">
            </div>
            <div class="mt-6">
                <h1 class="text-lg font-semibold text-center">Your children’s purchases</h1>
                <p class="mt-6 text-justify">to understand more what they like and how you can help to guide them and
                    buy better healthy options from time to time</p>
            </div>
        </div>
        <div class="bg-white ring-4 ring-orange-100 rounded-3xl p-6 mt-10">
            <div class="flex justify-center">
                <img class="w-28" src="assets/money.png" alt="">
            </div>
            <div class="mt-6">
                <h1 class="text-lg font-semibold text-center">How much you need to give them</h1>
                <p class="mt-6 text-justify">We will let you know how much your child really needs during the day
                    instead of giving them more than they need or even less</p>
            </div>
        </div>
        <div class="bg-white ring-4 ring-blue-100 rounded-3xl p-6 mt-10">
            <div class="flex justify-center">
                <img class="w-28" src="assets/time.png" alt="">
            </div>
            <div class="mt-6">
                <h1 class="text-lg font-semibold text-center">When they buy at school</h1>
                <p class="mt-6 text-justify">the purchases your child makes are synced with the platform so you can stay
                    updated during the day so you can check if they buy once or twice during school hours</p>
            </div>
        </div>
    </div>
</div>
{{--app--}}
<div class="bg-blue-800 mt-32">
    <div class="flex flex-wrap lg:flex-nowrap items-center lg:pl-32 pl-6 py-20">
        <div class="lg:w-6/12 w-full">
            <h1 class="text-white mb-4 text-sm font-semibold">
                OUR SOLUTION
            </h1>
            <h1 class="text-4xl font-semibold">
                Creating an account
            </h1>
            <p class="mt-10 text-3xl">
                Your family account will be created by the school and given to you.
                <br>
                You can top up your child's credit when ever needed directly from the school.
            </p>
        </div>
        <div class="lg:w-6/12 w-full lg:mt-0 mt-10">
            <img src="/assets/woodhand2.png" alt="">
        </div>
    </div>
    <div class="flex flex-wrap-reverse lg:flex-nowrap items-center lg:pl-32 pl-6 mt-10">
        <div class="lg:w-5/12 w-full lg:mt-0 mt-10">
            <img src="/assets/woodhand3.png" alt="">
        </div>
        <div class="lg:px-20 px-0 lg:w-7/12 w-full">
            <h1 class="text-white mb-4 text-sm font-semibold">
                OUR SOLUTION
            </h1>
            <h1 class="text-4xl font-semibold">
                Checking up on your children
            </h1>
            <p class="mt-10 text-3xl">
                Check how much your child needs per week, what they purchase and when.
                <br>
                with an additional feature of choosing specific items that your child shouldn't buy due to dietary
                habits or allergies.
            </p>
        </div>

    </div>
</div>
{{--contact--}}
<div class="mt-32 lg:mx-40 mx-10">
    <div class="bg-white rounded-3xl p-10">
        <div class="flex flex-wrap justify-between items-center">
            <div class="lg:w-5/12 w-full">
                <img src="/assets/reachout.png" alt="">
            </div>
            <div class="lg:w-6/12 w-full mt-10 lg:mt-0">
                <h1 class="text-orange-900 mb-4 text-sm font-semibold">
                    CONTACT US
                </h1>
                <h1 class="text-4xl font-semibold">
                    Reach Out to us
                </h1>
                <p class="mt-6 text-lg">
                    Please reach out to us if you want any more information about our service or any other feature you
                    would like to
                    see in the platform
                </p>
                <div class="flex space-x-4 mt-6">
                    <div>
                        <a href="">
                            <img class="w-10" src="/assets/facebook.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img class="w-10" src="/assets/instagram.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
{{--footer--}}
<div class="bg-gray-800 mt-32 p-6 text-white flex space-x-4 items-center">

    <svg class="w-8 h-8" viewBox="0 0 190 190" version="1.1" xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Artboard" transform="translate(-3575.000000, -9671.000000)" fill="#2CCCFF" fill-rule="nonzero">
                <g id="copyright" transform="translate(3575.000000, 9671.000000)">
                    <path d="M95,189.795455 C42.7081818,189.795455 0.204545455,147.291818 0.204545455,95 C0.204545455,42.7081818 42.7081818,0.204545455 95,0.204545455 C147.291818,0.204545455 189.795455,42.7081818 189.795455,95 C189.795455,147.291818 147.291818,189.795455 95,189.795455 Z M95,13.4318182 C50.0272727,13.4318182 13.4318182,50.0272727 13.4318182,95 C13.4318182,139.972727 50.0272727,176.568182 95,176.568182 C139.972727,176.568182 176.568182,139.972727 176.568182,95 C176.568182,50.0272727 139.972727,13.4318182 95,13.4318182 Z"
                          id="Shape"></path>
                    <path d="M97.1181273,136.886364 C74.0147555,136.886364 55.2320282,118.103636 55.2320282,95 C55.2320282,71.8963636 74.0147555,53.1136364 97.1181273,53.1136364 C107.259036,53.1136364 117.1354,56.8172727 124.719036,63.6072727 C127.452673,65.9881818 127.717218,70.2209091 125.336309,72.9545455 C122.9554,75.6881818 118.722673,75.9528155 115.989036,73.5719064 C110.786309,68.9864518 104.084491,66.4291791 97.1181273,66.4291791 C81.3335818,66.4291791 68.4593009,79.3036364 68.4593009,95.0881818 C68.4593009,110.872727 81.3335818,123.747273 97.1181273,123.747273 C103.996309,123.747273 110.786309,121.19 115.989036,116.604545 C118.722673,114.223636 122.9554,114.488182 125.336309,117.221818 C127.717218,119.955455 127.452673,124.188182 124.719036,126.569091 C117.047218,133.182727 107.259036,136.886364 97.1181273,136.886364 Z"
                          id="Path"></path>
                </g>
            </g>
        </g>
    </svg>

    <p>
        2021 Hanoot
    </p>
</div>

</body>
</html>