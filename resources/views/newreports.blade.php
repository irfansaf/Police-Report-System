<form action="{{ route('reports.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>
    <div class="form-group">
        <select name="category_id" id="category_id" required>
            <option value="">Select a category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" id="description" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
