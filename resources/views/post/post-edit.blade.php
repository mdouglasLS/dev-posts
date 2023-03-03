<x-app-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <x-section>
        <div class="card bg-dark">
            <div class="card-body">
                <h2>Editar</h2>
                <div class="mx-auto my-2">
                    <form action="{{ route('store-edit-post',['user' => $post->user->username , 'slug' => $post->slug]) }}" method="POST" role="form">
                        @csrf
                        <div class="form-group mb-3">
                            <x-input type="text" name="title" id="title" placeholder="Adicione um título ao post" class="border-primary border-opacity-25"/>
                        </div>

                        <x-textarea :name="__('content')" :rows="__('1')"/>

                        <x-button>Salvar</x-button>
                    </form>
                </div>
            </div>
        </div>
    </x-section>

</x-app-layout>
