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
    
        if ($criterion) {
            $criterion->$field = $value;
    
            // Update nilai_unit or nilai_tpi based on the input
            if ($field === 'jawaban_unit') {
                $criterion->nilai_unit = $this->calculateScore($value, $criterion->pilihan_jawaban);
            } elseif ($field === 'jawaban_tpi') {
                $criterion->nilai_tpi = $this->calculateScore($value, $criterion->pilihan_jawaban);
            }
    
            $criterion->save();
    
            session()->flash('message', 'Row updated successfully!');
        }
    }
    
    // Helper method to calculate score
    private function calculateScore($answer, $options)
    {
        if ($options === 'Ya/Tidak') {
            return strtolower($answer) === 'ya' ? 1 : 0;
        } elseif ($options === 'A/B/C') {
            return match (strtoupper($answer)) {
                'A' => 1,
                'B' => 0.5,
                default => 0,
            };
        }
    
        return 0; // Default if no valid options are provided
    }
    
    
    
    
    

}
