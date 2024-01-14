<div class="container">
    <h1>All User Paginate</h1>
    <div class="input-group">
        <div class="form-outline" data-mdb-input-init>
            <input type="text" wire:model.live='query' class="form-control" />
            <label class="form-label" for="form1">Search</label>
        </div>
            <select class="select border border-success" wire:model.live='pagination' style="height: 40px">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <button class="btn btn-sm btn-danger">Action</button>
                    </td>
                </tr>
            @endforeach            
        </tbody>
    </table>
    <span>{{$users->links()}}</span>
</div>
