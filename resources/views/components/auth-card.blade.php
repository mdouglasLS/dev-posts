<div {{ $attributes->merge(['class' => 'card bg-dark p-4']) }}>
    <div class="card-title">
        {{ $title }}
    </div>

    <div class="card-body">
        {{ $slot }}
    </div>
</div>
