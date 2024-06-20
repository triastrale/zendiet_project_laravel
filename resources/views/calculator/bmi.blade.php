<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Complete Responsive Diet Website</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- custom css link -->
    <link rel="stylesheet" href="{{ asset('css/calculator.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
</head>

<body>
    <!-- header section starts -->
    @include('calculator.navbar')
    <!-- header section ends -->

    <!-- calcuator start -->
    <section class="single-post" id="single-post">
        <div class="single-post-container">
            <title>BMI Calculator</title>
            </head>

            <body>
                <div class="container">
                    <div class="box">
                    <h1 id="bmi-calculator-heading">BMI Calculator</h1>
                        <div class="content">
                            <div class="input">
                                <label for="height">Age</label>
                                <input type="text" class="text-input" id="age" autocomplete="off" required />
                            </div>
                            <div class="gender">
                                <label class="container">
                                    <input type="radio" name="radio" id="m" />
                                    <p class="text">Male</p>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">
                                    <input type="radio" name="radio" id="f" />
                                    <p class="text">Female</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="containerHW">
                                <div class="inputH">
                                    <label for="height">Height(cm)</label>
                                    <input type="number" id="height" required />
                                </div>
                                <div class="inputW">
                                    <label for="weight">Weight(kg)</label>
                                    <input type="number" id="weight" required />
                                </div>
                            </div>
                            <button class="calculate" id="submit" onclick="calculate();">
                                Calculate BMI
                            </button>
                        </div>
                        <div class="result">
                            <p>Your BMI is</p>
                            <div id="result">00.00</div>
                            <p class="comment"></p>
                        </div>
                    </div>
                </div>
                <!-- The Modal -->
                <div id="myModal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p id="modalText"></p>
                    </div>
                </div>
        </div>
    </section>
    <!-- calculator ends -->

    <!-- JQuery-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Slick Carousel-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <!-- Custom Script -->
    <script src="{{ asset('js/calculator.js') }}"></script>
</body>

</html>