<div class="p-5">
    <form wire:submit='RegisterUser'>
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <!-- Name input -->
    <div class="form-outline mb-4">
        {{-- Binding the name property with backend (RegisterUser.php class) --}}
        <input type="text" name="name" wire:model='name' class="form-control" />
        <label class="form-label" for="name">Full Name</label>
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" name="email" wire:model='email' class="form-control" />
    <label class="form-label" for="email">Email address</label>
    @error('email')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name="password" wire:model='password' class="form-control" />
    <label class="form-label" for="password">Password</label>
    @error('password')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div>

  <!-- Submit button -->
  <button class="btn btn-primary" type="submit">
    Submit
    <span wire:loading class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>    
</button>
 
</form>
</div>
