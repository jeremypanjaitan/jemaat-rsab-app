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
                                <td>{{ $persembahan->created_at->setTimezone('Asia/Jakarta')->format('d M Y H:i')
                                    }}
                                </td>
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
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id=" liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true"
            data-bs-animation="true" data-bs-delay="3000" data-bs-autohide="true">
            <div class="toast-header">
                <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#007aff"></rect>
                </svg>
                <strong class="me-auto">System</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Persembahan Disimpan
            </div>
        </div>
    </div>

    @if(session('toastState'))
    <script>
        const toastExample = document.querySelector('.toast')
        const toast = new bootstrap.Toast(toastExample)
        toast.show()
    </script>
    @endif

</div>