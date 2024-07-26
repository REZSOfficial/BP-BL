<div class="card p-3 gap-4">
    <div class="d-flex justify-content-between align-items-center">
        <h1>
            {{ $title }}
        </h1>
        <i class="icon la {{ $iconClass }}"></i>
    </div>
    <div>
        <a class="btn btn-primary" href="{{ $route }}">Megtekintés</a>
    </div>
</div>

@section('after_styles')
<style>
    .card {
        overflow: hidden;
        z-index: 1;
    }

    .icon {
        position: absolute;
        top: calc(50% - 0.5rem);
        right: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13rem;
        color: #3333336c;
        filter: drop-shadow(0 40px 40px rgb(0 0 0 / 0.15));
        z-index: -1;
    }
</style>
@endsection