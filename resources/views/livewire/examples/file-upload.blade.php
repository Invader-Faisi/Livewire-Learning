<div class="container">
    <h1>File Upload</h1>
    @if (session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
    @endif
    <form wire:submit='saveFile'>
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" wire:model='name' id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Name</label>
            @error('name')
                <span class="alert alert-danger">{{$message}}</span>
            @enderror
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <input type="file" wire:model='file' class="form-control mb-4" id="customFile" />
            @error('file')
                <span class="alert alert-danger">{{$message}}</span>
            @enderror
        </div>
            <!-- Submit button -->
        <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block">Upload</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($downloads as $download)
                <tr>
                    <th scope="row">{{$loop->index + 1}}</th>
                    <td>{{$download->name}}</td>
                    <td>
                        <button wire:click='downloadFile({{$download->id}})' class="btn btn-primary btn-sm">Action</button>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>

</div>
