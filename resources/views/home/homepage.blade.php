<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Complete Responsive Diet Website</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- custom css link -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
</head>

<body>
    <!-- header section starts -->
    @include('home.header')
    <!-- header section ends -->

    <!-- home section starts -->
    @include('home.home')
    <!-- home section ends -->

    <!-- about section starts-->
    @include('home.about')
    <!-- about section ends -->

    <!-- article section starts-->
    @include('home.article')
    <!-- article section ends-->

    <!-- categories section starts -->
    @include('home.categories')
    <!-- categories section ends -->

    <!-- contact section starts -->
    @include('home.contact')
    <!-- contact section ends -->

    <!-- footer section starts -->
    @include('home.footer')
    <!-- footer section ends -->

    <!-- JQuery-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Slick Carousel-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <!-- Custom Script -->
    <script src="js/scripts.js"></script>
</body>

</html>