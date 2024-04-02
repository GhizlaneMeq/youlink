@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Book Categories</div>

                    <div class="card-body">
                        <button type="button" class="btn btn-primary mb-3" onclick="showCreateModal()">Add New Category</button>

                        @if ($categories->isEmpty())
                            <p>No book categories found.</p>
                        @else
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <button onclick="showEditModal({{ $category->id }})" class="btn btn-sm btn-primary">Edit</button>
                                                <form action="{{ route('admin.book_categories.destroy', $category->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Category Modal -->
    <div class="modal fade" id="createCategoryModal" tabindex="-1" role="dialog" aria-labelledby="createCategoryModalLabel" aria-hidden="true">
        <!-- Include your create category form here -->
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createCategoryModalLabel">Add New Category</h5>
                    <button type="button" class="close" onclick="hideCreateModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.book_categories.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Category Modals -->
    @foreach ($categories as $category)
        <div class="modal fade" id="editCategoryModal{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="editCategoryModalLabel{{ $category->id }}" aria-hidden="true">
            <!-- Include your edit category form here -->
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editCategoryModalLabel{{ $category->id }}">Edit Category</h5>
                        <button type="button" class="close" onclick="hideEditModal({{ $category->id }})" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.book_categories.update', $category->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        function showCreateModal() {
            document.getElementById('createCategoryModal').classList.add('block');
            document.getElementById('createCategoryModal').classList.remove('hidden');
        }

        function hideCreateModal() {
            document.getElementById('createCategoryModal').classList.add('hidden');
            document.getElementById('createCategoryModal').classList.remove('block');
        }

        function showEditModal(id) {
            document.getElementById('editCategoryModal' + id).classList.add('block');
            document.getElementById('editCategoryModal' + id).classList.remove('hidden');
        }

        function hideEditModal(id) {
            document.getElementById('editCategoryModal' + id).classList.add('hidden');
            document.getElementById('editCategoryModal' + id).classList.remove('block');
        }
    </script>
@endsection
