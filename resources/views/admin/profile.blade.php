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
    <!-- ACTIONS -->
    <section id="actions" class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ url('admin/dashboard') }}" class="btn background-light btn-block">
                        <i class="fas fa-arrow-left"></i> Back To Dashboard
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- PROFILE -->
    <section id="profile">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Edit Profile</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" value="Admin">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" value="zendiet3095@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label for="bio">Bio</label>
                                    <textarea name="editor1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit libero illum voluptatibus similique laboriosam nesciunt, saepe optio sed amet facilis quis sit ab omnis error eligendi ad aspernatur officiis sequi nisi facere earum. Asperiores voluptas ut magni consectetur quibusdam quia!</textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <img src="{{ asset('admincss/img/avatar.png') }}" alt="avatar" class="d-block img-fluid mb-3">
                    <h3>Your Avatar</h3>
                    <button class="btn background-accent btn-block">Edit Image</button>
                    <button class="btn background-dark btn-block">Delete Image</button>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    @include('admin.footer')

    @include('admin.js')
</body>

</html>