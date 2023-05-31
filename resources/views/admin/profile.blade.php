<x-app-layout>
    <x-slot name="title">
        {{ __('Perfil') }}
    </x-slot>

    <section class="h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
                <div class="card">
                    <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                        <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                                 alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                                 style="width: 150px; z-index: 1">
                            <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                                    style="z-index: 1;">
                                Edit profile
                            </button>
                        </div>
                        <div class="ms-3" style="margin-top: 130px;">
                            <h5>{{ $user->firstName . ' ' . $user->lastName }}</h5>
                            <p>{{ '@'.$user->username }}</p>
                        </div>
                    </div>
                    <div class="p-4 bg-dark" style="background-color: #f8f9fa;">
                        <div class="d-flex justify-content-end text-center py-1">
                            <div>
                                <p class="mb-1 h5">{{ count($posts) }}</p>
                                <p class="small text-muted mb-0">Posts</p>
                            </div>
                            <div class="px-3">
                                <p class="mb-1 h5">{{ count($user->followers) }}</p>
                                <p class="small text-muted mb-0">Seguidores</p>
                            </div>
                            <div>
                                <p class="mb-1 h5">{{ count($user->following) }}</p>
                                <p class="small text-muted mb-0">Seguindo</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-4 bg-dark">
                        <div class="mb-5">
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus corporis cumque dignissimos error excepturi expedita nihil obcaecati odit, pariatur placeat tempora, vel, vero voluptatibus. Architecto blanditiis ex necessitatibus nobis quasi!</p>
                        </div>
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
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
