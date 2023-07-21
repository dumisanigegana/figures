<div>
    <form wire:submit.prevent="register">
        <h2 class="text-xl font-bold text-gray-800 my-5">Register</h2>
      <h3 class="text-sm font-bold text-gray-800 my-5"></h3>
      <div class="flex flex-wrap  mb-4">
        <div class="w-full md:w-1/2 px-3 order-2">
          <label class="block uppercase tracking-wide text-gray-800 text-sm  mb-2 mt-8">Name</label>
          @error('data.name') <span class="error">{{ $message }}</span> @enderror
          <input class="appearance-none block w-full text-gray-800 border border-green-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-300" type="text" wire:model.lazy="data.name" value="{{ old('name') }}"/>
        </div>        
        <div class="w-full md:w-1/2 px-3 order-3"> 
          <label class="block uppercase tracking-wide text-gray-800 text-sm mb-2 mt-8">Email</label>
            @error('data.emial') <span class="error">{{ $message }}</span> @enderror
          <input class="appearance-none block w-full text-gray-800 border border-green-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-300" type="email" value="{{ old('middle_names') }}" wire:model.lazy="data.emial"/>
        </div>                 
      </div>

      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 order-1  ">      
          <label class="block uppercase tracking-wide text-gray-800 text-sm  mb-2 mt-8">Physical password</label>
          <input class="appearance-none block w-full text-gray-800 border border-green-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-300" type="text" value="{{ old('password') }}" wire:model.lazy="data.password"/>
          @error('data.password') <span class="error text-red-800">{{ $message }}</span> @enderror
        </div>
        <div class="w-full md:w-1/2 px-3 order-2">
          <label class="block uppercase tracking-wide text-gray-800 text-sm  mb-2 mt-8">password_confirmation</label>
          <input type="text" class="appearance-none block w-full text-gray-800 border border-green-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-300" value="{{ old('password_confirmation') }}" wire:model.lazy="data.password_confirmation">
          @error('data.password_confirmation') <span class="error text-red-800">{{ $message }}</span> @enderror
        </div>              
      </div>
                
      <div class="w-full block px-3 order-3 block">
      </div>

      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 order-1  ">      
          <label class="block uppercase tracking-wide text-gray-800 text-sm  mb-2 mt-8">Password</label>
          <input class="appearance-none block w-full text-gray-800 border border-green-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-300" type="password" value="{{ old('password') }}" wire:model.lazy="data.password"/>
          @error('data.password') <span class="error text-red-800">{{ $message }}</span> @enderror
        </div>
        <div class="w-full md:w-1/2 px-3 order-2">
          <label class="block uppercase tracking-wide text-gray-800 text-sm  mb-2 mt-8">Confirm Password</label>
          <input type="password" class="appearance-none block w-full text-gray-800 border border-green-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-300" value="{{ old('password_confirmation') }}" wire:model.lazy="data.password_confirmation">
          @error('data.password_confirmation') <span class="error text-red-800">{{ $message }}</span> @enderror
        </div>              
      </div>
                
      <div class="w-full block px-3 order-3 block">
        <label class="uppercase tracking-wide text-gray-800 text-sm mt-8 inline-flex items-center">
          <input type="checkbox" class="w-5 h-5 mr-4 bg-green-100 border-green-300 text-green-500 focus:ring-green-200"  checked="{{ old('terms') }}" wire:model.lazy="data.terms">Accept the registration terms</label>
        
        @error('data.terms') <span class="error text-red-800">{{ $message }}</span> @enderror
      </div>
      <div class="w-full flex flex-col items-center px-3">
        <button class="mx-auto my-5 bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
          Submit
        </button>
        <p class="error text-yellow-500">By submitting you agree to the <b>Terms and Conditions</b> of Inspired Business Network</p>
      </div>
    </form>
</div>
