<?php

namespace App\Http\Livewire\News;

use App\Models\News;
use Livewire\Component;

class Delete extends Component
{
    public $news;

    public $listeners = ['delete'];

    public function deleteConfirm()
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'id' => $this->news->id,
            'message' => 'Are you sure?',
        ]);
    }

    public function delete($id)
    {
        $new = News::where('id', $id)->first();
        if ($new != null) {
            $new->delete();
            return redirect()->to('/news')->with('success', 'Record deleted successfully');
        }
        return redirect()->to('/news')->with('error', 'Record not found');
    }

    public function render()
    {
        return view('livewire.news.delete');
    }
}
