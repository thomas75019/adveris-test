<x-app-layout>
    <div class="container">
        <h1>{{ __('articles.new') }}</h1>
        <form action="/articles" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">{{ __('articles.title') }}</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="content">{{ __('articles.content') }}</label>
                <textarea id="content" name="content" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">{{ __('articles.submit') }}</button>
        </form>
</x-app-layout>
