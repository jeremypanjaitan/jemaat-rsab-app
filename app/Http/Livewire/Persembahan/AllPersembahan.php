<?php

namespace App\Http\Livewire\Persembahan;

use App\Models\Persembahan;
use Livewire\Component;
use Livewire\WithPagination;

class AllPersembahan extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.persembahan.all-persembahan', [
            'allPersembahan' => Persembahan::latest()->paginate(5)
        ]);
    }
}
