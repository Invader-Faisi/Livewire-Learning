<div class="container mx-auto">
    <h3 class="text-primary text-center">Create Post</h3>
    @if (session('status'))
     <div class="alert alert-success">{{session('status')}}</div>
    @endif
    <form style="width: 26rem;" class="mx-auto" wire:submit='AddPost'>
        <!-- Title input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="form4Example1" wire:model.blur='title' wire:dirty.class='border border-danger border-2' class="form-control" />
            <label class="form-label" for="form4Example1">Title</label>
        </div>
        @error('title')
            <span class="text-danger">{{$message}}</span>
        @enderror
    
        <!-- Description input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <textarea class="form-control" id="form4Example3" wire:model.blur='description' rows="4"></textarea>
            <label class="form-label" for="form4Example3">Description</label>
        </div>
        @error('description')
        <span class="text-danger">{{$message}}</span>
        @enderror
        <div class="alert alert-danger" wire:dirty>Unsaved ...</div>
        <div class="alert alert-success" wire:dirty.remove>All OK</div>
        <div class="alert alert-info" wire:dirty wire:dirty.targer='title'>Title is not incorrect form</div>
        <!-- Submit button -->
        <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Create Post</button>
    </form>
</div>
