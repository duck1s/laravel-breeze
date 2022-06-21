<x-site-layout>


    <section class="blog">
        <h2>Blog</h2>
        <section class="blog__articles">
            @foreach($articles as $article)
                <article class="blogarticle">
                    <h3 class="blogarticle__title">{{ $article->title }}</h3>
                    <h4 class="blogarticle__author">{{ $article->author }}</h4>
                    <p class="blogarticle__intro">{{ $article->intro }}</p>
                </article>
            @endforeach

            {{ $articles->onEachSide(2)->links() }}

        </section>

    </section>
</x-site-layout>
