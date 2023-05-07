<?php

namespace App\Http\Livewire\Gal;

use Livewire\Component;
use App\Models\AgriGallery;
class Delete extends Component
{
    public $gal;

    public $listeners = ['delete'];

    public function deleteConfirm()
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'id' => $this->gal->id,
            'message' => 'Are you sure?',
        ]);
    }

    public function delete($id)
    {
        $new = AgriGallery::where('id', $id)->first();
        if ($new != null) {
            $new->delete();
            return redirect()->to('/agri-gal')->with('success', 'Record deleted successfully');
        }
        return redirect()->to('/agri-gal')->with('error', 'Record not found');
    }
    public function render()
    {
        return view('livewire.gal.delete');
    }
}
