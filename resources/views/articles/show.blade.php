<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold">{{ $article->title }}</h1>
                    <p class="mt-4">{!! $article->content !!}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <a href="{{ route('articles.edit', $article->slug) }}" class="text-blue-500 hover:underline">Edit</a>

        <form action="{{ route('articles.destroy', $article->slug) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 hover:underline ml-4">Delete</button>
        </form>
    </div>
</x-app-layout>
