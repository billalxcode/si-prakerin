<div class="modal fade" id="editDataModal-{{ $jurusan->id}}" tabindex="-1" role="dialog" aria-labelledby="editDataModal-{{ $jurusan->id}}"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDataModal-{{ $jurusan->id}}Title">Edit Data {{ $jurusan->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.jurusan.edit', $jurusan->id) }}" method="post" id="editForm-{{ $jurusan->id }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">name Jurusan</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $jurusan->name }}">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary"
                    onclick="document.getElementById('editForm-{{ $jurusan->id }}').submit()">Simpan</button>
            </div>
        </div>
    </div>
</div>