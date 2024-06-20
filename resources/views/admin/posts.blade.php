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

    @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        {{ session()->get('message') }}
    </div>
    @endif

    <!-- ACTIONS -->
    <section id="actions" class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="btn background-primary btn-block" data-toggle="modal" data-target="#addPostModal">
                        <i class="fas fa-plus"></i> Add Post
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- POSTS -->
    @include('admin.show_post');

    <!-- PAGINATION -->
    <nav class="ml-4">
        <ul class="pagination">
            <li class="page-item disabled">
                <a href="#" class="page-link">Previous</a>
            </li>
            <li class="page-item active">
                <a href="#" class="page-link">1</a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link">2</a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link">3</a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link">Next</a>
            </li>
        </ul>
    </nav>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- FOOTER -->
    @include('admin.footer')

    <!-- MODALS -->
    <!-- ADD POST MODAL -->
    @include('admin.add_post');


    @include('admin.js')

</body>

</html>