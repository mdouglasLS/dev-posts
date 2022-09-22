<x-app-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <x-section>
        <div class="">
            <p class="fs-6">Posts relevantes</p>
        </div>

        @forelse($posts as $post)
            <x-post-card :post="$post" />
        @empty
            <h2>Nenhum post encontrado</h2>
        @endforelse

        {{ $posts->appends(['search' => request()->input('search')])->links('components.pagination') }}
    </x-section>

</x-app-layout>




