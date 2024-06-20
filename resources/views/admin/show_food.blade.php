<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Categories</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>

<body>
    <section id="categories">
        <div class="container">
            <div class="row">
                <div class="col" id="categoryParent">
                    <div class="card" id="categoryContainer">
                        <div class="card-header text-center">
                            <h4>Latest Categories</h4>
                        </div>
                        <table class="table table-striped" id="categoryTable">
                            <thead class="background-dark">
                                <tr>
                                    <th>Name</th>
                                    <th>Categories</th>
                                    <th>Serving</th>
                                    <th>Calories</th>
                                    <th>Date</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody id="categoryTableBody">
                                @foreach ($food as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->categories }}</td>
                                    <td>{{ $item->serving }}</td>
                                    <td>{{ $item->calories }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <form action="{{ route('admin.delete_food', ['food' => $item->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="confirmation(event)">Delete</button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.edit_food', $item->id) }}" class="btn btn-success">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
</body>

</html>