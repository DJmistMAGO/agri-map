<?php

namespace App\Http\Livewire\SoilParam;

use App\Models\SoilParam;
use Livewire\Component;

class Delete extends Component
{
    public $soilParam;

    public $listeners = ['delete'];

    public function deleteConfirm()
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'id' => $this->soilParam->id,
            'message' => 'Are you sure?'
        ]);
    }

    public function delete($id)
    {
        $soilParam = SoilParam::where('id', $id)->first();
        // check first  if soilParam is not null
        if ($soilParam != null) {
            // delete first the resident records with the soilParam_id of the soilParam
            $soilParam->delete();
            return redirect()->route('soil-param.index');
        } else {
            $this->dispatchBrowserEvent('swal:deleted', ['message' => 'Date not found!']);
        }

        return redirect()->route('soil-param.index');
    }
    public function render()
    {
        return view('livewire.soil-param.delete');
    }
}
