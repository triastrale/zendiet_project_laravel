<div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header background-accent">
                <h5 class="modal-title">Add Category</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.add_food') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text" class="form-control" id="foodName" name="name">
                    </div>
                    <div class="form-group">
                        <label for="category">Categories</label>
                        <select class="form-control" id="foodCat" name="categories">
                            <option selected="selected">Choose One...</option>
                            <option>Fruit and Vegetables</option>
                            <option>Milk and Dairy Products</option>
                            <option>Meat</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Serving</label>
                        <input type="text" class="form-control" id="foodServe" name="serving">
                    </div>
                    <div class="form-group">
                        <label for="title">Calories</label>
                        <input type="text" class="form-control" id="foodCal" name="calories">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add Food</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>