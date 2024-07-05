<div class="modal fade" id="editDataModal-{{ $kelas->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataModal-{{ $kelas->id }}"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDataModal-{{ $kelas->id }}Title">Edit Data {{ $kelas->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.kelas.edit', $kelas->id) }}" method="post" id="editForm-{{ $kelas->id }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">name Kelas</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $kelas->name }}">
                    </div>
                    <div class="form-group">
                        <label for="wali">Wali</label>
                        <select name="guru_id" id="wali" class="form-control">
                            @foreach ($gurus as $guru)
                                <option value="{{ $guru->id }}" {{ $guru->id == $kelas->guru_id ? 'selected' : '' }}>{{ $guru->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan_id" id="jurusan" class="form-control">
                            @foreach ($jurusans as $jurusan)
                                <option value="{{ $jurusan->id }}" {{ $jurusan->id == $kelas->jurusan_id ? 'selected' : '' }}>{{ $jurusan->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary"
                    onclick="document.getElementById('editForm-{{ $kelas->id }}').submit()">Simpan</button>
            </div>
        </div>
    </div>
</div>