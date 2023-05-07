<?php

namespace App\Http\Livewire\Announcement;

use App\Models\Announcement;
use Livewire\Component;

class Delete extends Component
{
    public $announcements;

    public $listeners = ['delete'];

    public function deleteConfirm()
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'id' => $this->announcements->id,
            'message' => 'Are you sure?',
        ]);
    }

    public function delete($id)
    {
        $anc = Announcement::where('id', $id)->first();
        if ($anc != null) {
            $anc->delete();
            return redirect()->to('/announcement')->with('success', 'Record deleted successfully');
        }
        return redirect()->to('/announcement')->with('error', 'Record not found');
    }

    public function render()
    {
        return view('livewire.announcement.delete');
    }
}
