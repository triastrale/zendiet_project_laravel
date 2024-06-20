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
    <link rel="stylesheet" href="{{ asset('css/food.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
</head>

<body>
    <!-- header section starts -->
    @include('categories.navbar')
    <!-- header section ends -->

    <!-- fruit n veggie starts -->
    <div class="container">
        <div class="header">
            <h1>Fruit & Vegetables: Calories</h1>
            <p>Fruits and vegetables are essential components of a healthy diet. Generally low in calories and rich in vitamins and micronutrients, fruits are primarily made up of carbohydrates, with some calories also coming from fat. Vegetables are a great high-volume, low-calorie option. You can eat a lot of them, they're satiating and packed with vitamins. Check out our Fruit and Vegetables Calorie Chart below for more nutritional information.</p>
        </div>
        <div class="controls">
            <input type="text" placeholder="Browse chart">
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Food</th>
                        <th>Serving</th>
                        <th>Calories</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($food as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->serving }}</td>
                        <td>{{ $item->calories }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- fruit n veggie ends -->

    <!-- footer section starts -->
    @include('categories.footer')
    <!-- footer section ends -->

    <!-- JQuery-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Slick Carousel-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <!-- Custom Script -->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>