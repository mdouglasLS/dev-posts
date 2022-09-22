<x-app-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <x-section>
        <div class="">
            <p class="fs-6">Resultados para {{ request()->input('search') ?? '' }}</p>
        </div>

        @forelse($results as $post)
            <x-post-card :post="$post" />
        @empty
            <h3>Nenhum post encontrado</h3>
        @endforelse

        {{ $results->appends(['search' => request()->input('search')])->links('components.pagination') }}
    </x-section>

</x-app-layout>




