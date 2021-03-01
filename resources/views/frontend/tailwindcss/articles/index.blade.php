<x-app>

    @forelse($articles as $article)
        @include('frontend.tailwindcss.articles._list_card')
    @empty
        <div class="text-gray-500 text-center my-2 text-2xl">Not available</div>
    @endforelse

    {{method_exists($articles, 'links') ? $articles->links() : ''}}

</x-app>