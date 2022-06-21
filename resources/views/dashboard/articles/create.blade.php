<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('articles.store') }}" method="POST">
                        @csrf
                        <div class="mt-8 max-w-md">
                            <div class="grid grid-cols-1 gap-6">
                                <label class="block">
                                    <span class="text-gray-700">Title</span>
                                    <input type="text" name="title" value="{{ old('title') }}" class="mt-1 block w-full" placeholder="">
                                    @error('title')
                                    <p>{{ $message }}</p>
                                    @enderror
                                </label>
                                <label class="block">
                                    <span class="text-gray-700">Intro</span>
                                    <textarea name="intro" class="mt-1 block w-full" rows="3">{{ old('intro') }}</textarea>
                                    @error('intro')
                                    <p>{{ $message }}</p>
                                    @enderror
                                </label>
                                <label class="block">
                                    <span class="text-gray-700">Content</span>
                                    <textarea name="content" class="mt-1 block w-full" rows="3">{{ old('content') }}</textarea>
                                    @error('content')
                                    <p>{{ $message }}</p>
                                    @enderror
                                </label>
                                <label class="block">
                                    <span class="text-gray-700">Author</span>
                                    <input type="text" name="author" value="{{ old('author') }}" class="mt-1 block w-full" placeholder="">
                                    @error('author')
                                    <p>{{ $message }}</p>
                                    @enderror
                                </label>
                                <div class="block">
                                    <div class="mt-2">
                                        <div>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="published" value="1" checked="">
                                                <span class="ml-2">Published</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="underline">Opslaan</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
