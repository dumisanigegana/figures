<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Employers extends Component
{
    public $data = [];   
    
    public function render()
    {
        return view('livewire.employers');
    }

    public function store()
  {
    ['fname', 'address', 'email', 'phone' ];

        $this->validate([
            'data.address'=> 'required |max:505',
            'data.phone' => 'required |max:225', 
            'data.fname'=> 'required |max:225', 
            'data.email'=> 'required |max:225', 
            'data.terms'=> 'required | boolean',
        ]);        
        
        $this->data['reg_num'] = "F". rand(1000, 9999);

        $mess ='Your account has been created successfully';
    
        $contractor = Contractor::Create($this->data);
        
        
        $this->resetInputFields();
        $this->emit('swal:modal', [
            'type'    => 'success',
            'icon'    => 'success',
            'title'   => $mess, 
            'timeout' => 10000
        ]);
        
    }

}
