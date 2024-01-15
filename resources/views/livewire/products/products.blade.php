<div>
    <h1>Products</h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#exampleModal">
        Create Product
    </button>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($this->products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->title}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <button @click="$dispatch('edit-product', {id:{{$product->id}}})" class="btn btn-sm btn-danger" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#exampleModal">Edit</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <span>{{$this->products->links()}}</span>

    <livewire:products.create-products/>
</div>
