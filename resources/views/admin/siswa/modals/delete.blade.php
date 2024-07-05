<div class="modal fade" id="deleteDataModal-{{ $siswa->id }}" tabindex="-1" role="dialog"
    aria-labelledby="deleteDataModal-{{ $siswa->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteDataModal-{{ $siswa->id }}Title">Hapus Data {{ $siswa->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Dengan ini saya secara sadar menghapus data <code>{{ $siswa->name }}</code></p>
                <form action="{{ route('dashboard.siswa.delete', $siswa->id) }}" method="post"
                    id="deleteForm-{{ $siswa->id }}">
                    @method('DELETE')
                    @csrf
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary"
                    onclick="document.getElementById('deleteForm-{{ $siswa->id }}').submit()">Hapus</button>
            </div>
        </div>
    </div>
</div>