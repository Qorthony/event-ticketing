<!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalEdit{{$event->id_event}}">
    <i class="fa fa-edit"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="modalEdit{{$event->id_event}}" tabindex="-1" aria-labelledby="modalEdit{{$event->id_event}}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title" id="modalEdit{{$event->id_event}}Label">Edit Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="/admin/event/{{$event->id_event}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_event">Nama Event</label>
                        <input required type="text" class="form-control" id="nama_event" name="nama_event" value="{{$event->nama_event}}">
                    </div>
                    <div class="form-group">
                        <label for="jenis_event">Jenis Event</label>
                        <input required type="text" class="form-control" id="jenis_event" name="jenis_event" value="{{$event->jenis_event}}">
                    </div>
                    <div class="form-group">
                        <label for="tgl_event">Tanggal Event</label>
                        <input required type="datetime-local" class="form-control" id="tgl_event" name="tgl_event" value="{{ date("Y-m-d", strtotime($event->tgl_event))}}T{{ date("H:m:s", strtotime($event->tgl_event))}}">
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input required type="text" class="form-control" id="lokasi" name="lokasi" value="{{ $event->lokasi }}">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input required type="number" class="form-control" id="harga" name="harga" value="{{ $event->harga }}">
                    </div>
                    <div class="form-group">
                        <label for="kuota">Kuota</label>
                        <input required type="number" class="form-control" id="kuota" name="kuota" value="{{ $event->kuota }}">
                    </div>
                    <div class="form-group">
                        <label for="penyelenggara">Penyelenggara</label>
                        <input required type="text" class="form-control" id="penyelenggara" name="penyelenggara" value="{{ $event->penyelenggara }}">
                    </div>
                    <div class="form-group">
                        <label for="poster">Upload Poster</label>
                        <img class="img-fluid mb-3" src="{{ str_starts_with($event->poster_url, 'http')?$event->poster_url:url('storage/'.$event->poster_url) }}" alt="poster">
                        <input type="file" class="form-control" id="poster" name="poster" accept="image/*" >
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea required class="form-control" name="deskripsi" id="deskripsi" cols="1" rows="10" >{{ $event->deskripsi }}
                        </textarea>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-start">
                    <button type="submit" class="btn btn-success">Perbarui</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
