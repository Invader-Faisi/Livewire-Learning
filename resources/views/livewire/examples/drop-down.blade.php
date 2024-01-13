<div class="mx-auto">
    <h1>Dynamic Dependent Dropdown</h1>
    <select class="select col-6 rounded-4 border border-success" wire:model.live='selectedCounty' style="height: 40px">
        <option value="">Select County</option>
        @foreach ($counties as $county)
            <option value="{{$county->id}}">{{$county->name}}</option>
        @endforeach                
    </select>

    @if (!is_null($selectedCounty))
        <div class="mt-3">
            <select class="select col-6 rounded-4 border border-success" id="" wire:model='selectedSubCounty' style="height: 40px">
                <option value="">Select SubCounty</option>
                @foreach ($subCounties as $subcounty)
                    <option value="{{$subcounty->id}}">{{$subcounty->name}}</option>
                @endforeach
            </select>
        </div>
    @endif
    
</div>
