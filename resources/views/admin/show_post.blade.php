<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

<section id="posts">
    <div class="container">
        <div class="row">
            <div class="col" id="postAllParent">
                <div class="card" id="postAllContainer">
                    <div class="card-header text-center">
                        <h4>All Posts</h4>
                    </div>
                    <table class="table table-striped" id="postAllTable">
                        <thead class="background-dark">
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Post By</th>
                                <th>Date</th>
                                <th>Usertype</th>
                                <th>Image</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody id="postAllTableBody">
                            @foreach ($post as $singlePost)
                            <tr>
                                <td>{{$singlePost->title}}</td>
                                <td>{{$singlePost->description}}</td>
                                <td>{{$singlePost->name}}</td>
                                <td>{{$singlePost->created_at}}</td>
                                <td>{{$singlePost->usertype}}</td>
                                <td>
                                    <img class="img_deg" src="{{ asset('postimage/' . $singlePost->image) }}">
                                </td>
                                <td>
                                    <form action="{{ route('admin.show_post', ['post' => $singlePost->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="confirmation(event)">Delete</button>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('admin.edit_page', $singlePost->id) }}" class="btn btn-success">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <script type="text/javascript">
                        function confirmation(id) {
                            var form = document.getElementById('deleteForm_' + id);

                            Swal.fire({
                                    title: "Are you sure to delete this?",
                                    text: "You won't be able to revert this delete",
                                    icon: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#3085d6",
                                    cancelButtonColor: "#d33",
                                    confirmButtonText: "Yes"
                                })
                                .then((willCancel) => {
                                    if (willCancel.isConfirmed) {
                                        // Remove the additional /id from the action URL
                                        form.action = form.action.split('/').slice(0, -1).join('/');
                                        form.submit();
                                    }
                                });
                        }
                    </script>