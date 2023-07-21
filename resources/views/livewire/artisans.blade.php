<div>
    <form wire:submit.prevent="store">
        <h2 class="text-xl font-bold text-gray-800 my-5">Register</h2>
      <h3 class="text-sm font-bold text-gray-800 my-5"></h3>
      <div class="flex flex-wrap  mb-4">
        <div class="w-full md:w-1/2 px-3 order-2">
          <label class="block uppercase tracking-wide text-gray-800 text-sm  mb-2 mt-8" >Name of The Entity</label>
          @error('data.entity_name') <span class="error">{{ $message }}</span> @enderror
          <input class="appearance-none block w-full text-gray-800 border border-green-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-300" type="text" wire:model.lazy="data.entity_name" value="{{ old('entity_name') }}"/>
        </div>        
        <div class="w-full md:w-1/2 px-3 order-3"> 
          <label class="block uppercase tracking-wide text-gray-800 text-sm mb-2 mt-8">Business line</label>
            @error('data.business_line') <span class="error">{{ $message }}</span> @enderror
          <input class="appearance-none block w-full text-gray-800 border border-green-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-300" type="text" value="{{ old('middle_names') }}" wire:model.lazy="data.business_line"/>
        </div>                 
      </div>

      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 order-1  ">      
          <label class="block uppercase tracking-wide text-gray-800 text-sm  mb-2 mt-8">Compamy Number</label>
          <input class="appearance-none block w-full text-gray-800 border border-green-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-300" type="text" value="{{ old('company_number') }}" wire:model.lazy="data.company_number"/>
          @error('data.company_number') <span class="error text-red-800">{{ $message }}</span> @enderror
        </div>
        <div class="w-full md:w-1/2 px-3 order-2">
          <label class="block uppercase tracking-wide text-gray-800 text-sm  mb-2 mt-8">Registration date</label>
          <input type="date" class="appearance-none block w-full text-gray-800 border border-green-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-300" value="{{ old('reg_date') }}" wire:model.lazy="data.reg_date">
          @error('data.reg_date') <span class="error text-red-800">{{ $message }}</span> @enderror
        </div>              
      </div>

      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 order-2">
          <label class="block uppercase tracking-wide text-gray-800 text-sm  mb-2 mt-8">Address</label>
          <input type="text" class="appearance-none block w-full text-gray-800 border border-green-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-300" value="{{ old('address') }}" wire:model.lazy="data.address">
          @error('data.address') <span class="error text-red-800">{{ $message }}</span> @enderror
        </div>
        <div class="w-full md:w-1/2 px-3 order-2">
          <label class="block uppercase tracking-wide text-gray-800 text-sm  mb-2 mt-8">Email</label>
          <input type="email" class="appearance-none block w-full text-gray-800 border border-green-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-300" value="{{ old('email') }}" wire:model.lazy="data.email">
          @error('data.email') <span class="error text-red-800">{{ $message }}</span> @enderror
        </div>              
      </div>

      <div class="flex flex-wrap -mx-3 mb-6">
        
        <div class="w-full md:w-1/2 px-3 order-3">
          <label class="block uppercase tracking-wide text-gray-800 text-sm  mb-2 mt-8">Entity Phone</label>
          <input class="appearance-none block w-full text-gray-800 border border-green-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-300" type="text" value="{{ old('e_phone') }}" wire:model.lazy="data.e_phone"/>
          @error('data.e_phone') <span class="error text-red-800">{{ $message }}</span> @enderror
        </div> 
        <div class="w-full md:w-1/2 px-3 order-1  ">      
          <label class="block uppercase tracking-wide text-gray-800 text-sm  mb-2 mt-8">Website</label>
          <input class="appearance-none block w-full text-gray-800 border border-green-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-300" type="text" value="{{ old('website') }}" wire:model.lazy="data.website"/>
          @error('data.website') <span class="error text-red-800">{{ $message }}</span> @enderror
        </div>              
      </div>

      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 order-2">
          <label class="block uppercase tracking-wide text-gray-800 text-sm  mb-2 mt-8">Name of the Director</label>
          <input type="text" class="appearance-none block w-full text-gray-800 border border-green-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-300" value="{{ old('director_name') }}" wire:model.lazy="data.director_name">
          @error('data.director_name') <span class="error text-red-800">{{ $message }}</span> @enderror
        </div>
        <div class="w-full md:w-1/2 px-3 order-3">
          <label class="block uppercase tracking-wide text-gray-800 text-sm  mb-2 mt-8">Phone Number</label>
          <input class="appearance-none block w-full text-gray-800 border border-green-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-300" type="text" value="{{ old('d_phone') }}" wire:model.lazy="data.d_phone"/>
          @error('data.d_phone') <span class="error text-red-800">{{ $message }}</span> @enderror
        </div>                  
      </div>

      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 order-1">      
          <label class="block uppercase tracking-wide text-gray-800 text-sm  mb-2 mt-8">Designation</label>
          <input class="appearance-none block w-full text-gray-800 border border-green-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-300" type="text" value="{{ old('designation') }}" wire:model.lazy="data.designation"/>
          @error('data.designation') <span class="error text-red-800">{{ $message }}</span> @enderror
        </div>
        <div class="w-full md:w-1/2 px-3 order-2">
          <label class="block uppercase tracking-wide text-gray-800 text-sm  mb-2 mt-8">Full Name</label>
          <input type="text" class="appearance-none block w-full text-gray-800 border border-green-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-300" value="{{ old('fname') }}" wire:model.lazy="data.fname">
          @error('data.fname') <span class="error text-red-800">{{ $message }}</span> @enderror
        </div>               
      </div>
      <div class="bg-white text-gray-800 w-full mx-auto border border-gray-200" x-data="{selected:0}">
        <ul class="shadow-box">
                
          <li class="relative border-b border-gray-50">
      
            <button type="button" class="w-full px-8 py-2 text-left bg-green-50" @click="selected !== 1 ? selected = 1 : selected = null">
              <p class="text-green-600 text-center text-xl underline">Signing up terms</p>
            </button>
    
            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
              <div class="p-6">
                <ol class="list-decimal list-outside hover:list-inside text-justify">
                  <li>Your admission into the network is subjective to meeting the requirements.</li>
                  <li>This registration is renewed at the beginning of each year.</li>
                  <li>You will be required to perform to your best of your ability on all tasks and to meet deadlines.</li>
                  <li>As much as you will be allocated job(s) you will be in turn encouraged but not obligated to subscribe to the network should you require a service thereby ensuring livelihood of the members.</li>
                  <li>Your subscription entitles you to a basic business advice and appointment or reference to upcoming jobs or services requiring your expertise.</li>
                  <li>Over the course of time you shall be invited to seminars and advisory meetings to ensure business growth either free or booked depending on the host or invited guest and agenda.</li>
                  <li>You shall be entitled to voice your opinion at our offices or by calling.</li>
                  <li>Failure to renew your registration will be assumed as a disinterest resulting in elimination from the network.</li>
                  <li>Failure to deliver on allocated job or task within the given time frame will result in expulsion from the network.</li>
                  <li>Failure to meet the deadline and or substandard delivery will mean you shall be replacedand any cost incurred will be at your expense.</li>
                  <li>Please attach a copy of the Certificate of Incorporation.</li>
                </ol>
              </div>
            </div>
      
          </li>
        </ul>
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
