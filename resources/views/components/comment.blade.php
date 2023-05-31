<div class="row bg-transparent p-4">
    <div class="col-1 mt-3">
        <div class="float-end">
            <a href="{{ route('profile', $comment->user->username) }}" class="">
                <img src="https://github.com/mdo.png" alt="" width="45" height="45" class="rounded-circle">
            </a>
        </div>
    </div>
    <div class="col-11 card bg-transparent p-3 border-opacity-10 border-light">
        <div class="mb-3 position-relative">
            <a href="{{ route('profile', $comment->user->username) }}" class="text-decoration-none text-light me-4">{{ $comment->user->fullName }}</a>
            @if (Auth::check())
                @if(Auth::user()->id == $comment->user_id || Auth::user()->id == $comment->post->user_id)
                    <div class="position-absolute top-50 end-0 translate-middle-y">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary bg-transparent border-0 pt-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ...
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                @if(Auth::user()->id == $comment->user_id)
                                    <li><a class="dropdown-item" href="#">Editar</a></li>
                                @endif
                                @if(Auth::user()->id == $comment->user_id || Auth::user()->id == $comment->post->user_id)
                                    <li>
                                        <form action="{{ route('delete-comment',['comment' => $comment->id]) }}" method="post">
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
        </div>
        <div class="w-75">
            {{ Str::of($comment->comment)->toHtmlString() }}
        </div>
        <span class=""><small class="text-muted" style="font-size: .8em">{{ $comment->created_at->format('M, y') }}</small></span>
    </div>
</div>
