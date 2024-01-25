<div class="container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Hitung Persembahan') }}</div>
                    <div class="card-body">
                        <form wire:submit.prevent="save">
                            <div class="mb-3">
                                <label class="form-label">Rp 100</label>
                                <input type="number" class="form-control" wire:model="seratus"
                                    wire:keyup="hitungPersembahan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Rp 500</label>
                                <input type="number" class="form-control" wire:model="limaRatus"
                                    wire:keyup="hitungPersembahan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Rp 1.000</label>
                                <input type="number" class="form-control" wire:model="seribu"
                                    wire:keyup="hitungPersembahan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Rp 2.000</label>
                                <input type="number" class="form-control" wire:model="duaRibu"
                                    wire:keyup="hitungPersembahan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Rp 5.000</label>
                                <input type="number" class="form-control" wire:model="limaRibu"
                                    wire:keyup="hitungPersembahan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Rp 10.000</label>
                                <input type="number" class="form-control" wire:model="sepuluhRibu"
                                    wire:keyup="hitungPersembahan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Rp 20.000</label>
                                <input type="number" class="form-control" wire:model="duaPuluhRibu"
                                    wire:keyup="hitungPersembahan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Rp 50.000</label>
                                <input type="number" class="form-control" wire:model="limaPuluhRibu"
                                    wire:keyup="hitungPersembahan" k>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Rp 100.000</label>
                                <input type="number" class="form-control" wire:model="seratusRibu"
                                    wire:keyup="hitungPersembahan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Total (Rp)</label>
                                <input type="text" class="form-control" readonly value="{{ $formattedTotal }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ url()->previous() }}" type="button" class="btn btn-secondary">back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>