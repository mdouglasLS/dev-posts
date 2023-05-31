<x-app-layout>
    <x-slot name="title">
        {{ $post->title }}
    </x-slot>
    <x-section>
        <x-card>
            <x-slot name="header">
                <div class="float-start me-2">
                    <a href="{{ route('profile', ['user' => $post->user->username]) }}" class="">
                        <img src="https://github.com/mdo.png" alt="" width="45" height="45" class="rounded-circle">
                    </a>
                </div>
                <div class="">
                    <a href="{{ route('profile', ['user' => $post->user->username]) }}" class="text-decoration-none text-light">{{ $post->user->fullName }}</a>
                    <p class="card-text"><small class="text-muted" style="font-size: .8em">Publicado em {{ $post->created_at->format('d \d\e M. \d\e Y') }}</small></p>
                </div>
                @if (Auth::check())
                    @if(Auth::user()->id == $post->user_id)
                        <div class="">
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary bg-transparent border-0 pt-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    ...
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                    @if(Auth::user()->id == $post->user_id)
                                        <li>
                                            <a class="dropdown-item" href="#">Editar</a>
                                        </li>
                                        <li>
                                            <form action="" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="dropdown-item" href="">Excluir</button>
                                            </form>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    @endif
                @endif
            </x-slot>

            <div>
                <h1 class="fs-2">{{ $post->title }}</h1>
                <p>{{ Str::of($post->content)->toHtmlString() }}</p>
            </div>
            <div class="border-top border-secondary border-opacity-10 pt-2">
                <a href="#" class="text-muted text-decoration-none me-5"><i class="far fa-heart me-2"></i>{{ count($post->reactions) }} Curtidas</a>
                <a href="#" class="text-muted text-decoration-none" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="far fa-comment me-2"></i>{{ count($post->comments) }} Comentários</a>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="bg-transparent">
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

            <x-slot name="footer"></x-slot>

        </x-card>
    </x-section>
</x-app-layout>
