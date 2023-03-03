<x-app-layout>
    <x-slot name="title">
        {{ $post->title }}
    </x-slot>
    <x-section>
        <x-card>

            <x-slot name="header">
                <div class="float-start me-2">
                    <a href="#" class="">
                        <img src="https://github.com/mdo.png" alt="" width="45" height="45" class="rounded-circle">
                    </a>
                </div>
                <div class="">
                    <a href="#" class="text-decoration-none text-light py-2">{{ $post->user->fullName }}</a>
                    <p class="card-text"><small class="text-muted">{{ $post->created_at->format('d-m-Y') }}</small></p>
                </div>
            </x-slot>

            <div>
                <h1 class="fs-2">{{ $post->title }}</h1>
                <p>{{ Str::of($post->content)->toHtmlString() }}</p>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item bg-transparent">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed bg-transparent text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <span>Comentar</span>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-light">
                            @auth()
                                <form action="{{ route('comment-post', ['user' => $post->user->username,'slug'=>$post->slug]) }}" method="post">
                                    @csrf
                                    <x-textarea :name="__('comment')"/>
                                    <x-button>Comentar</x-button>
                                </form>
                            @endauth

                            @guest()
                                <div>
                                    <p>É necessário fazer login para fazer comentários</p>
                                    <a href="{{ route('login') }}" class="btn btn-primary">Fazer login</a>
                                </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>


            <div>
                @forelse($post->comments as $comment)
                    <x-comment :comment="$comment"/>
                @empty
                @endforelse
            </div>

            <x-slot name="footer">
                <a href="#" class="text-muted text-decoration-none me-5"><i class="far fa-heart me-2"></i> Curtidas</a>
                <a href="#" class="text-muted text-decoration-none"><i class="far fa-comment me-2"></i>{{ $post->comments->count() }} Comentários</a>
            </x-slot>

        </x-card>
    </x-section>
</x-app-layout>
