<?php

namespace App\Http\Livewire\Persembahan;

use App\Models\Persembahan;
use Livewire\Component;

class Hitung extends Component
{
    public $seratus;
    public $limaRatus;
    public $seribu;
    public $duaRibu;
    public $limaRibu;
    public $sepuluhRibu;
    public $duaPuluhRibu;
    public $limaPuluhRibu;
    public $seratusRibu;
    public $total;
    public $formattedTotal;

    public $route;

    public function mount()
    {
        $this->route = url()->previous();
    }

    public function save()
    {
        Persembahan::create(
            [
                "seratus" => $this->seratus ?? 0,
                "limaRatus" => $this->limaRatus ?? 0,
                "seribu" => $this->seribu ?? 0,
                "duaRibu" => $this->duaRibu ?? 0,
                "limaRibu" => $this->limaRibu ?? 0,
                "sepuluhRibu" => $this->sepuluhRibu ?? 0,
                "duaPuluhRibu" => $this->duaPuluhRibu ?? 0,
                "limaPuluhRibu" => $this->limaPuluhRibu ?? 0,
                "seratusRibu" => $this->seratusRibu ?? 0,
                "total" => $this->total ?? 0
            ]
        );
        return redirect($this->route)->with('toastState', 'show');
    }

    public function hitungPersembahan()
    {
        $this->total = 100 * $this->seratus +
            500 * $this->limaRatus +
            1000 * $this->seribu +
            2000 * $this->duaRibu +
            5000 * $this->limaRibu +
            10000 * $this->sepuluhRibu +
            20000 * $this->duaPuluhRibu +
            50000 * $this->limaPuluhRibu +
            100000 * $this->seratusRibu;
        $this->formattedTotal = number_format($this->total, 0, '.', '.');
    }

    public function render()
    {
        return view('livewire.persembahan.hitung');
    }
}
