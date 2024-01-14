<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Product</h5>
                <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                @endif
                <form>
                    <!-- Title input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" wire:model='title' id="form1Example1" class="form-control" />
                        <label class="form-label" for="form1Example1">Product Title</label>
                        @error('title')
                            <span class="text-danger">{{$message}}</span>                            
                        @enderror
                    </div>
                
                    <!-- Desc input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" wire:model='description' id="form1Example1"
                            class="form-control" />
                        <label class="form-label" for="form1Example1">Product Description</label>
                        @error('description')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                
                    <!-- Title input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="number" wire:model='price' id="form1Example1"
                            class="form-control" />
                        <label class="form-label" for="form1Example1">Product Price</label>
                        @error('price')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                
                </form>
            </div>
            <div class="modal-footer">
                <button wire:click='close' type="button" class="btn btn-secondary" data-mdb-ripple-init
                    data-mdb-dismiss="modal">Close</button>
                <button type="button" wire:click='AddProduct' class="btn btn-primary" data-mdb-ripple-init>Save changes</button>
            </div>
        </div>
    </div>
</div>
