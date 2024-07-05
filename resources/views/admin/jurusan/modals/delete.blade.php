<div class="modal fade" id="deleteDataModal-{{ $jurusan->id }}" tabindex="-1" role="dialog"
    aria-labelledby="deleteDataModal-{{ $jurusan->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteDataModal-{{ $jurusan->id }}Title">Edit Data {{ $jurusan->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Dengan ini saya secara sadar menghapus data <code>{{ $jurusan->name }}</code></p>
                <form action="{{ route('dashboard.jurusan.delete', $jurusan->id) }}" method="post"
                    id="deleteForm-{{ $jurusan->id }}">
                    @method('DELETE')
                    @csrf
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary"
                    onclick="document.getElementById('deleteForm-{{ $jurusan->id }}').submit()">Hapus</button>
            </div>
        </div>
    </div>
</div>