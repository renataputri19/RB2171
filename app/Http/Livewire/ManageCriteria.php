<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Criterion;

class ManageCriteria extends Component
{
    public $criteria;

    public function mount()
    {
        // Fetch all criteria from the database
        $this->criteria = Criterion::where('category', 'Manajemen Perubahan - Pemenuhan')->get();
    }

    public function render()
    {
        return view('livewire.manage-criteria', ['criteria' => $this->criteria]);
    }

    public function updateRow($id, $field, $value)
    {
        $criterion = Criterion::find($id);
    
        if ($criterion && array_key_exists($field, $criterion->getAttributes())) {
            $criterion->$field = $value; // Dynamically assign the field value
            $criterion->save();
    
            session()->flash('message', 'Row updated successfully!');
        } else {
            session()->flash('message', 'Invalid field or ID!');
        }
    }
    
    
    
    

}
