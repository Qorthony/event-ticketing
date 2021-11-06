<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#ModalCreate">
    Buat Event
</button>

<!-- Modal -->
<div class="modal fade" id="ModalCreate" tabindex="-1" aria-labelledby="ModalCreateLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title" id="ModalCreateLabel">Buat Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('admin.event.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_event">Nama Event</label>
                        <input required type="text" class="form-control" id="nama_event" name="nama_event">
                    </div>
                    <div class="form-group">
                        <label for="jenis_event">Jenis Event</label>
                        <input required type="text" class="form-control" id="jenis_event" name="jenis_event">
                    </div>
                    <div class="form-group">
                        <label for="tgl_event">Tanggal Event</label>
                        <input required type="datetime-local" class="form-control" id="tgl_event" name="tgl_event">
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input required type="text" class="form-control" id="lokasi" name="lokasi">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input required type="number" class="form-control" id="harga" name="harga">
                    </div>
                    <div class="form-group">
                        <label for="kuota">Kuota</label>
                        <input required type="number" class="form-control" id="kuota" name="kuota">
                    </div>
                    <div class="form-group">
                        <label for="penyelenggara">Penyelenggara</label>
                        <input required type="text" class="form-control" id="penyelenggara" name="penyelenggara">
                    </div>
                    <div class="form-group">
                        <label for="poster">Upload Poster</label>
                        <input required type="file" class="form-control" id="poster" name="poster" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea required class="form-control" name="deskripsi" id="deskripsi" cols="1" rows="10" ></textarea>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-start">
                    <button type="submit" class="btn btn-success">Buat</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
