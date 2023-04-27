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
        $soilpars = SoilParam::where('id', $id)->first();
        if ($soilpars != null) {
            $soilpars->delete();
            return redirect()->to('/soil-param');
        }
        return redirect()->to('/soil-param')->with('error', 'Record not found');
    }

    public function render()
    {
        return view('livewire.soil-param.delete');
    }
}
