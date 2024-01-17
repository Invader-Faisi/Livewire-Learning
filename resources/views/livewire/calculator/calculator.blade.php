<div class="container">
    <div class="card mx-auto border border-primary">
        <div class="card-header">
            @if(session('status'))
                <div class="alert alert-danger mb-4">
                    {{session('status')}}
                </div>
            @else
            <div class="d-flex justify-content-between">
                <h3 class="text-primary fw-bold">{{$result}}</h3>
                <h3 class="text-primary fw-bold">{{$operator}}</h3>
            </div>
            @endif
        </div>        
        <div class="card-body"> 
            <input type="text" wire:model='input' class="bg-dark text-white z-depth-1 p-2 mb-2"
                style="heigh:40px; font-size:30px; width:100%;" value="" disabled />               
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <button type="button" class="btn btn-info" wire:click="operation('+')" style="color:black; font-weight:bold; font-size:26px">+</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-info" wire:click="operation('-')" style="color:black; font-weight:bold; font-size:26px">-</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-info" wire:click="operation('*')" style="color:black; font-weight:bold; font-size:26px">&times;</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-info" wire:click="operation('/')" style="color:black; font-weight:bold; font-size:26px">&divide;</button>
                        </td>
                    </tr> 
                    <tr>
                        <td><button type="button" wire:click='digit(7)' class="btn btn-outline-dark waves-effect" style="color:black; font-weight:bold; font-size:26px">7</button></td>
                        <td><button type="button" wire:click='digit(8)' class="btn btn-outline-dark waves-effect" style="color:black; font-weight:bold; font-size:26px">8</button></td>
                        <td><button type="button" wire:click='digit(9)' class="btn btn-outline-dark waves-effect" style="color:black; font-weight:bold; font-size:26px">9</button></td>
                        <td><button type="button" wire:click="clear" class="btn btn-primary waves-effect"
                                style="color:black; font-weight:bold; font-size:26px">C</button></td>
                    </tr>  
                    <tr>
                        <td><button type="button" wire:click='digit(4)' class="btn btn-outline-dark waves-effect" style="color:black; font-weight:bold; font-size:26px">4</button></td>
                        <td><button type="button" wire:click='digit(5)' class="btn btn-outline-dark waves-effect" style="color:black; font-weight:bold; font-size:26px">5</button></td>
                        <td><button type="button" wire:click='digit(6)' class="btn btn-outline-dark waves-effect" style="color:black; font-weight:bold; font-size:26px">6</button></td>
                        <td rowspan="3">
                            <button type="button" wire:click="calculate" class="btn btn-warning waves-effect"
                                style="color:black; font-weight:bold; font-size:26px; height:250px"> = </button>
                        </td>
                    </tr>
                    <tr>
                        <td><button type="button" wire:click='digit(1)' class="btn btn-outline-dark waves-effect" style="color:black; font-weight:bold; font-size:26px">1</button></td>
                        <td><button type="button" wire:click='digit(2)' class="btn btn-outline-dark waves-effect" style="color:black; font-weight:bold; font-size:26px">2</button></td>
                        <td><button type="button" wire:click='digit(3)' class="btn btn-outline-dark waves-effect" style="color:black; font-weight:bold; font-size:26px">3</button></td>
                    </tr>
                    <tr>
                        <td><button type="button" wire:click="dot" class="btn btn-success waves-effect" style="color:black; font-weight:bold; font-size:26px">.</button></td>
                        <td><button type="button" wire:click='digit(0)' class="btn btn-outline-dark waves-effect" style="color:black; font-weight:bold; font-size:26px">0</button></td>
                        <td><button type="button" wire:click='resetInput' value="AC" class="btn btn-danger waves-effect" style="color:black; font-weight:bold; font-size:26px">AC</button></td>
                    </tr>             
                </tbody>
            </table>
        </div>
    </div>
</div>    




