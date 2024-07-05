<div class="modal fade" id="editDataModal-{{ $siswa->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataModal-{{ $siswa->id }}"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDataModal-{{ $siswa->id }}Title">Edit Data {{ $siswa->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.siswa.edit', $siswa->id) }}" method="post" id="editForm-{{ $siswa->id }}">
                    @csrf
                    <div class="form-group">
                        <label for="nis">Nomor Induk</label>
                        <input type="text" name="nis" id="nis" class="form-control" value="{{ $siswa->nis }}">
                    </div>
                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $siswa->name }}">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="whatsapp">Whatsapp</label>
                                <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="{{ $siswa->whatsapp }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" name="address" id="address" class="form-control" value="{{ $siswa->address }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select name="kelas_id" id="siswa" class="form-control">
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}">{{ $k->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary"
                    onclick="document.getElementById('editForm-{{ $siswa->id }}').submit()">Simpan</button>
            </div>
        </div>
    </div>
</div>