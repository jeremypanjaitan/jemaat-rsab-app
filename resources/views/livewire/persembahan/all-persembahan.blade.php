<div class="container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Persembahan</div>
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <a wire:navigate href="{{ route('persembahan.hitung') }}" type="menu"
                                class="btn btn-success">Create
                            </a>
                        </div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allPersembahan as $persembahan)
                                <tr>
                                    <td>{{ $persembahan->created_at }}</td>
                                    <td>Rp. {{ number_format($persembahan->total, 0, '.') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $allPersembahan->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>

    </div>