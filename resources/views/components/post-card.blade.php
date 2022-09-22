<article style="border: solid 1px rgba(104,104,104,0.11)" class="bg-dark shadow rounded-3 p-2 mb-4">
    <div class="card bg-transparent border-0">
        <div class="card-header pb-2 bg-transparent border-0">
            <div class="float-start  me-2">
                <a href="#" class="">
                    <img src="https://github.com/mdo.png" alt="" width="45" height="45" class="rounded-circle">
                </a>
            </div>
            <div class="">
                <a href="#" class="text-decoration-none text-light py-2">{{ $post->user->fullName }}</a>
                <p class="card-text"><small class="text-muted">{{ $post->created_at }}</small></p>
            </div>
        </div>
        <div class="card-body pt-2">
            <a href="" class="text-light text-decoration-none"><h1 class="fs-2 card-title">{{ $post->title }}</h1></a>
            <p class="card-text">{{ Str::words($post->content, 20) }}</p>
        </div>
        <div class="card-footer">
            <a href="#" class="text-muted text-decoration-none me-5"><i class="far fa-heart me-2"></i> Curtidas</a>
            <a href="#" class="text-muted text-decoration-none"><i class="far fa-comment me-2"></i>{{ $post->comments->count() }} Comentários</a>
        </div>
    </div>
</article>
