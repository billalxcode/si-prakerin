<div class="modal fade" id="deleteDataModal-{{ $perusahaan->id }}" tabindex="-1" role="dialog"
    aria-labelledby="deleteDataModal-{{ $perusahaan->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteDataModal-{{ $perusahaan->id }}Title">Hapus Data {{ $perusahaan->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Dengan ini saya secara sadar menghapus data <code>{{ $perusahaan->name }}</code></p>
                <form action="{{ route('dashboard.industri.delete', $perusahaan->id) }}" method="post"
                    id="deleteForm-{{ $perusahaan->id }}">
                    @method('DELETE')
                    @csrf
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary"
                    onclick="document.getElementById('deleteForm-{{ $perusahaan->id }}').submit()">Hapus</button>
            </div>
        </div>
    </div>
</div>