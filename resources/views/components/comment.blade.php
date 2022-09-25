<div class="row bg-transparent p-4">
    <div class="col-1 mt-3">
        <div class="float-end">
            <a href="#" class="">
                <img src="https://github.com/mdo.png" alt="" width="45" height="45" class="rounded-circle">
            </a>
        </div>
    </div>
    <div class="col-11 card bg-transparent p-3 border-opacity-10 border-light">
        <div class="mb-3">
            <a href="#" class="text-decoration-none text-light me-4">{{ $comment->user->fullName }}</a>
            <span class=""><small class="text-muted">{{ $comment->created_at }}</small></span>
        </div>
        <div class="w-75">
            <p class="">{{ $comment->comment }}</p>
        </div>
    </div>
</div>
