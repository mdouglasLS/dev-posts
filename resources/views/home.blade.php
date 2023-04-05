<x-app-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <x-section>
        <div class="">
            <p class="fs-6">Posts relevantes</p>
        </div>

        @forelse($posts as $post)
{{--            <x-post-card :post="$post" />--}}
            <x-card>

                <x-slot name="header">
                    <div class="float-start me-2">
                        <a href="#" class="">
                            <img src="https://github.com/mdo.png" alt="" width="45" height="45" class="rounded-circle">
                        </a>
                    </div>
                    <div class="">
                        <a href="#" class="text-decoration-none text-light py-2">{{ $post->user->fullName }}</a>
                        <p class="card-text"><small class="text-muted">{{ $post->created_at->format('M/y') }}</small></p>
                    </div>
                </x-slot>

                <div>
                    <a href="{{ route('get-post',['user' => $post->user->username, 'slug' => $post->slug]) }}" class="text-light text-decoration-none"><h1 class="fs-2 card-title">{{ $post->title }}</h1></a>
                </div>

                <x-slot name="footer">
                    <a href="{{ route('get-post',['user' => $post->user->username, 'slug' => $post->slug]) }}" class="text-muted text-decoration-none me-5"><i class="far fa-heart me-2"></i> Curtidas</a>
                    <a href="{{ route('get-post',['user' => $post->user->username, 'slug' => $post->slug]) }}" class="text-muted text-decoration-none"><i class="far fa-comment me-2"></i>{{ $post->comments->count() }} Comentários</a>
                </x-slot>

            </x-card>
        @empty
            <h2>Nenhum post encontrado</h2>
        @endforelse

        {{ $posts->appends(['search' => request()->input('search')])->links('components.pagination') }}
    </x-section>

</x-app-layout>




