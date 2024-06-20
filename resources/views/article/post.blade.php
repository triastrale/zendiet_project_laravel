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

    <!-- article starts -->
    <div class="container">
        <div class="header">
            <h1>ZenDiet: Articles</h1>
            <p>Your ultimate resource for the latest insights and trends in nutrition and wellness. Our platform is dedicated to providing you with comprehensive, well-researched information to help you navigate the ever-evolving landscape of health and well-being. We understand that maintaining a healthy lifestyle can be challenging in today's fast-paced world, which is why we're here to offer guidance, support, and inspiration every step of the way.</p>
        </div>
        <section class="post container">
            @foreach ($posts as $allPost)
            <div class="post-box">
                <div class="image">
                    <img src="{{ asset('postimage/' . $allPost->image) }}" alt="Image" class="post-img">
                </div>
                <div class="content">
                    <h2 class="post-title">{{ $allPost->title }}</h2>
                    <span class="post-date">{{ $allPost->created_at->format('d M Y') }}</span>
                    <p class="post-description">{{ $allPost->description }}</p>
                    <div class="profile">
                        <span class="profile-name">{{ $allPost->usertype }}</span>
                    </div>
                    <a href="{{ route('home.post_details', $allPost->id) }}" class="btn-read-more">Read More</a>
                </div>
            </div>
            @endforeach
        </section>
    </div>
    <!-- article ends -->

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