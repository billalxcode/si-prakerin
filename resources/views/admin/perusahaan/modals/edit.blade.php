<div class="modal fade" id="editDataModal-{{ $perusahaan->id}}" tabindex="-1" role="dialog" aria-labelledby="editDataModal-{{ $perusahaan->id}}"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDataModal-{{ $perusahaan->id}}Title">Edit Data {{ $perusahaan->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.industri.edit', $perusahaan->id) }}" method="post" id="editForm-{{ $perusahaan->id }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $perusahaan->name }}">
                    </div>
                    <div class="form-group">
                        <label for="owner">Owner</label>
                        <input type="text" name="owner" id="owner" class="form-control" value="{{ $perusahaan->owner }}">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" name="address" id="address" class="form-control" value="{{ $perusahaan->address }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="contact">Kontak</label>
                                <input type="text" name="contact" id="contact" class="form-control" value="{{ $perusahaan->contact }}">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary"
                    onclick="document.getElementById('editForm-{{ $perusahaan->id }}').submit()">Simpan</button>
            </div>
        </div>
    </div>
</div>