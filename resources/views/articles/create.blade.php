<x-app-layout>
    <div class="container">
        <h1>Create Article</h1>
        <form action="/articles" method="POST">
            @csrf
            <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="content">Content:</label>
            <textarea id="content" name="content" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</x-app-layout>
