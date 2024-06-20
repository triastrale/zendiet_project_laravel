<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous" />
    <title>Admin Panel</title>
</head>

<body>
    <!-- NAVBAR -->

    @include('admin.navbar')

    <!-- HEADER -->
    <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>{{ $food->name }}</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- ACTIONS -->
    <section id="actions" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ url('admin/categories') }}" class="btn btn-light btn-block">
                        <i class="fas fa-arrow-left"></i> Back To Dashboard
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- DETAILS -->
    <section id="details">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Post</h4>
                        </div>
                        <div class="card-body">

                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                {{ session()->get('message') }}
                            </div>
                            @endif

                            <form action="{{ route('admin.update_food', $food->id) }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group">
                                    <label for="title">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $food->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="category">Categories</label>
                                    <select class="form-control" id="foodCat" name="categories">
                                        <option selected="selected">Choose One...</option>
                                        <option value="Fruit and Vegetables" {{ $food->categories == 'Fruit and Vegetables' ? 'selected' : '' }}>Fruit and Vegetables</option>
                                        <option value="Milk and Dairy Products" {{ $food->categories == 'Milk and Dairy Products' ? 'selected' : '' }}>Milk and Dairy Products</option>
                                        <option value="Meat" {{ $food->categories == 'Meat' ? 'selected' : '' }}>Meat</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="title">Serving</label>
                                    <input type="text" class="form-control" name="serving" value="{{ $food->serving }}">
                                </div>
                                <div class="form-group">
                                    <label for="title">Calories</label>
                                    <input type="text" class="form-control" name="calories" value="{{ $food->calories }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="lead text-center">
                        Copyright &copy; <span id="year"></span>
                        Admin Panel
                    </p>
                </div>
            </div>
        </div>
    </footer>



    @include('admin.js')
</body>

</html>