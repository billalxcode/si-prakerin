<div class="modal fade" id="createDataModal" tabindex="-1" role="dialog" aria-labelledby="createDataModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalTitle">Data Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.guru.create') }}" method="post" id="createForm">
                    @csrf
                    <div class="form-group">
                        <label for="name">name Guru</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="whatsapp">Nomor Whatsapp</label>
                        <input type="text" name="whatsapp" id="whatsapp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="mapel">Mapel</label>
                        <input type="text" name="mapel" id="mapel" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" onclick="document.getElementById('createForm').submit()">Simpan</button>
            </div>
        </div>
    </div>
</div>