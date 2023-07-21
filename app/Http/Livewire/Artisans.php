<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Contractor;
use App\Models\Reference;
use App\Models\Profesion;
use Carbon\Carbon;


class Artisans extends Component
{
    public $data = array();    

    public function render()
    {
        $profs = Profesion::all();
        return view('livewire.artisans');
    }

   
  public function store()
  {
     //ERP::permissionToAccess('contactors.admin');
        // $contractor = $this->contractor;
        $this->validate([
            'data.entity_name' => 'required |max:225',
            'data.business_line' => 'required |max:225',
            'data.company_number' => 'required |max:225',
            'data.company_number' => 'required |max:225',
            'data.address'=> 'required |max:505',
            'data.e_phone' => 'required |max:225',
            'data.d_phone' => 'max:225',
            'data.website' => 'required |max:225',
            'data.director_name'=> 'required |max:225', 
            'data.fname'=> 'required |max:225', 
            'data.designation'=> 'required |max:225', 
            'data.terms'=> 'required | boolean',
        ]);        
        do {
            $reg_num = "F" . random_int(1000, 9999) . Str::random(1);
        } while (Contractor::where("reg_num", "=", $reg_num)->first());
    
        $this->data['reg_num'] = strtoupper($reg_num);

        $mess ='Your account has been created successfully';
    
        $contractor = Contractor::Create($this->data);
        
        
        $this->resetInputFields();
        // $this->dispatchBrowserEvent('close-modal');
        $this->emit('close-modal');

        $this->emit('swal:modal', [
            'type'    => 'success',
            'icon'    => 'success',
            'title'   => $mess, 
            'timeout' => 10000
        ]);
        
    }

    public function edit($id)
    {
        $this->contractor = Contractor::findOrFail($id);
        $this->contractor_id = $id;
        $this->data['name'] = $this->contractor->name;
        $this->data['type'] = $this->contractor->type;
        // $this->dispatchBrowserEvent('eModal');
        
    }

     public function delete($id)
    {
        $this->contractor_id = $id;
        $this->contactor = Contactor::find($id);
        // dd($this->contactor);
        $this->emit('swal:confirm', [
            'type'    => 'warning',
            'icon'    => 'warning',
            'title'   => 'This action can not be reversed! ', 
            'text'   => 'Are sure you want to delete '. $this->contractor->reg_num, 
            'timeout' => 10000,
            'confirmText' => 'Yes', 
            'method' => 'destroy',
            'params' => $this->contractor->id,
            'callback' => 'reset'
        ]);
    }

     public function destroy($id)
    {
        Contactor::find($id)->delete();
        $this->emit('swal:modal', [
            'type'    => 'success',
            'icon'    => 'success',
            'title'   => 'contactor deleted', 
            'timeout' => 10000
        ]);
        $this->resetInputFields();

    }
    
   private function resetInputFields() {
    $this->data =  []; 
    // $this->contactor =  []; 
    // $this->contactor_id = 0;
    }

 
}
