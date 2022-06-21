<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Welkom op de articles page.</p>

                    <p><a class="underline" href="{{ route('articles.create') }}">Nieuw blog artikel maken</a></p>

                    <table class="w-full table-auto p-2 my-3">
                        @foreach($articles as $article)
                            <tr class="border">
                                <td class="py-1 px-2">
                                    <a href="{{ route('articles.edit', ['article' => $article]) }}">{{ $article->title }}</a><br>
                                </td>
                                <td class="py-1 px-2"><a class="underline px-3" href="{{ route('articles.edit', ['article' => $article]) }}">Edit</a><br></td>
                                <td class="py-1 px-2">
                                    <form action="{{ route('articles.destroy', ['article' => $article]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="underline" type="submit">Delete</button>
                                    </form>

                                </td>
                            </tr>

                        @endforeach
                    </table>


                    {{ $articles->links() }}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
