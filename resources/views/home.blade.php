<x-app-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <section style="max-width: 800px" class="mx-auto">
        <div class="text-secondary">
            <p class="fs-6">Posts relevantes</p>
        </div>

        @forelse($posts as $post)
            <x-post-card :post="$post" />
        @empty
            <h2>Nenhum post encontrado</h2>
        @endforelse

        {{ $posts->appends(['search' => request()->input('search')])->links('components.pagination') }}
    </section>

</x-app-layout>




