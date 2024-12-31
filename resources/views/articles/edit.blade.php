<x-app-layout>
    <div class="container">
        <h1>Edit Article</h1>
        <form action="{{ route('articles.update', $article->slug) }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control"
                    value="{{ old('title', $article->title) }}" required>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control" rows="5" required>{{ old('content', $article->content) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Article</button>
        </form>
    </div>
</x-app-layout>
