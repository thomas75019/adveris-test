<x-app-layout>``
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('articles.list') }}
        </h2>
        <a href="{{ route('articles.create') }}" class="btn btn-primary">
            {{ __('articles.new') }}
        </a>

        <div class="flex justify-end">
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-secondary">
                        {{ __('articles.logout') }}
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-secondary">
                    {{ __('articles.login') }}
                </a>
                <a href="{{ route('register') }}" class="btn btn-secondary ml-2">
                    {{ __('articles.register') }}
                </a>
            @endauth
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-4">
                    <h3 class="text-lg font-medium text-gray-900">{{ __('articles.list') }}</h3>
                    <div class="flex flex-wrap -mx-2">
                        @foreach ($articles as $article)
                            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 px-2 mb-4">
                                @include('articles.card', ['article' => $article])
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
