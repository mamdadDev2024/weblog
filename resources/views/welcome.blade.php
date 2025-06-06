<x-layout.app>
    @foreach ($articles as $article)
        <x-section.article.card :article="$article" />
    @endforeach
</x-layout.app>
