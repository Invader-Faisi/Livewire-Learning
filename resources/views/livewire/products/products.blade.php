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
                    <button @click="$dispatch('edit-product', {id:{{$product->id}}})" class="btn btn-sm btn-info" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#exampleModal"><i class="fas fa-pen-to-square"></i></button>
                    <button @click="$dispatch('delete-product', {id:{{$product->id}}})" class="btn btn-sm btn-danger" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#deleteModal"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <span>{{$this->products->links()}}</span>

    <livewire:products.create-products/>
    <livewire:products.delete-product/>

    <script>
        $(document).ready(function() {            
            $('.deleted').click(function(){
                setTimeout(()=>{
                    $('#deleteModal').modal('hide');
                },2000)                
            }); 

            $('.add-edit').click(function(){
                setTimeout(() => {
                    $('#exampleModal').modal('hide');
                }, 2000);                
            });
        });
        // catching event inside the component [closing the modal if using bootstrap]
        // window.addEventListener('Product_Added', event => {
        //     var modal = document.getElementById('exampleModal');
        //     modal = bootstrap.Modal.getInstance(modal);
        //     setTimeout(()=>{
        //         modal.hide();
        //     },2000)
            
        // })
    </script>
</div>
