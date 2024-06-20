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
    <link rel="stylesheet" href="{{ asset('css/article.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
</head>

<body>
    <!-- header section starts -->
    @include('article.navbar')
    <!-- header section ends -->

    <!-- post start -->
    <section class="single-post" id="single-post">
        <div class="single-post-container">
            <h1>{{$post->title}}</h1>
            <div class="post-profile">
                <div class="post-profile-info">
                    <h5>{{$post->usertype}}</h5>
                    <small>{{$post->created_at}}</small>
                </div>
            </div>
            <div class="single-post-thumb">
                <img src="{{ asset('postimage/' . $post->image) }}" alt="" />
            </div>
            <p>{{$post->description}}</p>
        </div>
    </section>
    <!-- post end -->

    <!-- footer section starts -->
    @include('article.footer')
    <!-- footer section ends -->

    <!-- JQuery-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Slick Carousel-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <!-- Custom Script -->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>