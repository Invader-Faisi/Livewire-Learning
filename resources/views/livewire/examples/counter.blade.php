<div class="card w-50 mx-auto">
    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top"
        alt="Fissure in Sandstone" />
    <div class="card-body">
        <h5 class="card-title">Counter</h5>
        @if (session('status'))
            <div class="alert alert-danger">{{session('status')}}</div>
        @endif
        <div class="d-flex items-center justify-center gap-2">
            <button class="btn btn-primary" wire:click='add'>+</button>
            <p class="card-text">{{$count}}</p>
            <button class="btn btn-info" wire:click='decre'>-</button>
        </div>                
    </div>
    {{-- adding the livewire component in another component --}}
    <livewire:examples.create-user />
</div>
