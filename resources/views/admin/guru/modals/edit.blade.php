<div class="modal fade" id="editDataModal-{{ $guru->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataModal-{{ $guru->id }}"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDataModal-{{ $guru->id }}Title">Edit Data {{ $guru->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.guru.edit', $guru->id) }}" method="post" id="editForm-{{ $guru->id }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">name Guru</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $guru->name }}">
                    </div>
                    <div class="form-group">
                        <label for="whatsapp">Nomor Whatsapp</label>
                        <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="{{ $guru->whatsapp }}">
                    </div>
                    <div class="form-group">
                        <label for="mapel">Mapel</label>
                        <input type="text" name="mapel" id="mapel" class="form-control" value="{{ $guru->mapel }}">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary"
                    onclick="document.getElementById('editForm-{{ $guru->id }}').submit()">Simpan</button>
            </div>
        </div>
    </div>
</div>