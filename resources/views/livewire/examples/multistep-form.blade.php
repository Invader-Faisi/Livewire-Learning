<div>
    <h1 class="text-center text-primary">Multistep Form</h1>
    <h6 class="mb-3">Step {{$current_step}} of 3</h6>

    <div class="row d-flex justify-centent-start align-items-center mb-3">
        <button class="btn text-white btn-primary btn btn-lg btn-floating" data-mdb-ripple-init wire:click='Click(1)'>1</button>
        <div style="height: 10px; background-color:gray; width:44%" class="col-10">
            @if ($current_step !== 1)
                <div style="background-color: green; width:110%; height:10px; margin-left:-15px;"></div>
            @endif
        </div>        
        <button class="btn text-white btn-primary btn btn-lg btn-floating" data-mdb-ripple-init wire:click='Click(2)'>2</button>
        <div style="height: 10px; background-color:gray; width:44%" class="col-10">
            @if ($current_step === 3)
                <div style="background-color: green; width:110%; height:10px; margin-left:-15px;"></div>
            @endif
        </div>
        <button class="btn text-white btn-primary btn btn-lg btn-floating" data-mdb-ripple-init wire:click='Click(3)'>3</button>        
    </div>

    <h4 class="text-center text-primary mb-3">Name</h4>

    @if ($current_step === 1)
        <div class="mb-3">
            <label for="form-label">First Name</label>
            <input wire:model='first_name' type="text" class="form-control"/>
            @error('first_name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="form-label">Last Name</label>
            <input wire:model='last_name' type="text" class="form-control" />
            @error('last_name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    @elseif ($current_step === 2)
        <div class="mb-3">
            <label for="form-label">Last Name</label>
            <input wire:model='last_name' type="text" class="form-control" />
            @error('last_name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="form-label">Email</label>
            <input wire:model='email' type="email" class="form-control" />
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    @elseif ($current_step === 3)
        <div class="mb-3">
            <label for="form-label">Email</label>
            <input wire:model='email' type="email" class="form-control" />
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    @endif
    
    <div class="d-flex justify-content-between">
        @if ($current_step !== 1)
            <button class="btn btn-secondary btn-md" wire:click='previous'>Previous</button>
        @endif
        @if ($current_step !== 3)
            <button class="btn btn-secondary btn-md" wire:click='next'>Next</button>
        @endif
        @if ($current_step === 3)
            <button class="btn btn-success btn-md" wire:click='submit'>Submit</button>
        @endif
                 
    </div>

    
    
    
</div>
