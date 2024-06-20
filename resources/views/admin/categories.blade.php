<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    <!-- NAVBAR -->
    @include('admin.navbar')
    <!-- HEADER -->
    @include('admin.header')
    <!-- SEARCH -->
    <section id="search" class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Categories...">
                        <div class="input-group-append">
                            <button class="btn background-accent">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ACTIONS -->
    <section id="actions" class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="btn background-accent btn-block" data-toggle="modal" data-target="#addCategoryModal">
                        <i class="fas fa-plus"></i> Add Category
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- CATEGORIES -->
    @include('admin.show_food', ['food' => $food])

    <!-- FOOTER -->
    @include('admin.footer')

    <!-- ADD CATEGORY MODAL -->
    @include('admin.add_food');

    @include('admin.js')
</body>

</html>