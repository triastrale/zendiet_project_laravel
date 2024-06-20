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
                        <input type="text" class="form-control" placeholder="Search Posts...">
                        <div class="input-group-append">
                            <button class="btn background-primary" id="searchPostBtn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- POSTS -->
    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col-md-9" id="postLatestParent">
                    <div class="card" id="postLatestContainer">
                        <div class="card-header text-center">
                            <h4 class="display-5 mb-0">Latest Posts</h4>
                        </div>
                        <table class="table table-striped" id="postLatestTable">
                            <thead class="background-dark text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="postLatestTableBody">
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center background-primary mb-3">
                        <div class="card-body">
                            <h3>Posts</h3>
                            <h4 class="display-4">
                                <i class="fas fa-pencil-alt"></i>
                                <span id="postCount"></span>
                            </h4>
                            <a href="{{ url('admin/posts') }}" class="btn btn-outline-light btn-sm">View</a>
                        </div>

                    </div>
                    <div class="card text-center background-accent mb-3">
                        <div class="card-body">
                            <h3>Categories</h3>
                            <h4 class="display-4">
                                <i class="fas fa-folder"></i>
                                <span id="categoryCount"></span>
                            </h4>
                            <a href="{{ url('admin/categories') }}" class="btn btn-outline-light btn-sm">View</a>
                        </div>
                    </div>
                    <div class="card text-center background-light mb-3">
                        <div class="card-body">
                            <h3>Users</h3>
                            <h4 class="display-4">
                                <i class="fas fa-users background-light"></i> 4
                            </h4>
                            <a href="{{ url('admin/users') }}" class="btn btn-outline-dark btn-sm">View</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER -->

    @include('admin.footer')

    @include('admin.js')
</body>

</html>