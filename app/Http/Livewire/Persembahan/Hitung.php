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


    public function save()
    {
        Persembahan::create(
            [
                "seratus" => $this->seratus,
                "limaRatus" => $this->limaRatus,
                "seribu" => $this->seribu,
                "duaRibu" => $this->duaRibu,
                "limaRibu" => $this->limaRibu,
                "sepuluhRibu" => $this->sepuluhRibu,
                "duaPuluhRibu" => $this->duaPuluhRibu,
                "limaPuluhRibu" => $this->limaPuluhRibu,
                "seratusRibu" => $this->seratusRibu,
                "total" => $this->total
            ]
        );
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
