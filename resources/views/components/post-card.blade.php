<div class="card bg-dark border-1 border-secondary border-opacity-10 mb-3 p-2">
    <div class="card-header">
        <div class="float-start me-2">
            <a href="#" class="">
                <img src="https://github.com/mdo.png" alt="" width="45" height="45" class="rounded-circle">
            </a>
        </div>
        <div class="">
            <a href="#" class="text-decoration-none text-light py-2">{{ $post->user->fullName }}</a>
            <p class="card-text"><small class="text-muted">{{ $post->created_at->format('d-m-Y') }}</small></p>
        </div>
    </div>
    <div class="card-body pt-2">
        <a href="{{ route('get-post',['user' => $post->user->username ,'slug' => $post->slug]) }}" class="text-light text-decoration-none"><h1 class="fs-2 card-title">{{ $post->title }}</h1></a>
    </div>
    <div class="card-footer">
        <a href="#" class="text-muted text-decoration-none me-5"><i class="far fa-heart me-2"></i>{{ count($post->reactions) }} Curtidas</a>
        <a href="#" class="text-muted text-decoration-none"><i class="far fa-comment me-2"></i>{{ count($post->comments) }} Comentários</a>
    </div>
</div>
