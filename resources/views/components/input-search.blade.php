<div class="position-relative">

    <x-input class="" type="text" name="search" placeholder="Pesquisar" value="{{ request()->input('search') ?? '' }}"/>

    <x-button class="btn-outline-secondary text-light bg-black me-1 border-0 position-absolute top-50 end-0 translate-middle-y">
        <i class="fa-solid fa-magnifying-glass"></i>
    </x-button>

</div>
