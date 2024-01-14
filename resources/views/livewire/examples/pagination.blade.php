<div class="container">
    <h1>All User Paginate</h1>
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
