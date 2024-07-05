<div class="modal fade" id="createDataModal" tabindex="-1" role="dialog" aria-labelledby="createDataModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalTitle">Data Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.industri.create') }}" method="post" id="createForm">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="owner">Owner</label>
                        <input type="text" name="owner" id="owner" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="contact">Kontak</label>
                                <input type="text" name="contact" id="contact" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary"
                    onclick="document.getElementById('createForm').submit()">Simpan</button>
            </div>
        </div>
    </div>
</div>