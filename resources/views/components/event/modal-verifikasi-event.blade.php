<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalVerifikasiEvent{{$event->id_event}}">
    Verifikasi
  </button>

  <!-- Modal -->
  <div class="modal fade" id="modalVerifikasiEvent{{$event->id_event}}" tabindex="-1" aria-labelledby="modalVerifikasiEvent{{$event->id_event}}Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-dark">
          <h5 class="modal-title" id="modalVerifikasiEvent{{$event->id_event}}Label">Verifikasi Event</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img class="img-fluid" src="/storage/{{$event->poster_url}}" alt="">
            <div class="row">
                <div class="col-4">Nama Pengirim</div>
                <div class="col-8">:  {{$event->name}}</div>
                <div class="col-4">Nama Event</div>
                <div class="col-8">: {{$event->nama_event}}</div>
                <div class="col-4">Jenis Event</div>
                <div class="col-8">: {{$event->jenis_event}} </div>
                <div class="col-4">Tanggal & Waktu</div>
                <div class="col-8">: {{$event->tgl_event}} WIB</div>
                <div class="col-4">Lokasi</div>
                <div class="col-8">: {{$event->lokasi}}</div>
                <div class="col-4">Kuota</div>
                <div class="col-8">: {{$event->kuota}} </div>
                <div class="col-4">Harga</div>
                <div class="col-8">: Rp.{{$event->harga}}</div>
                <div class="col-4">Penyelenggara</div>
                <div class="col-8">: {{$event->penyelenggara}}</div>
                <div class="col-4">Deskripsi</div>
                <div class="col-8">: {{$event->deskripsi}}</div>
            </div>
        </div>
        <div class="d-flex justify-content-center p-3">
            <form action="/admin/event/verifikasi-pengajuan/{{$event->id_event}}/terima" method="post">
                @csrf
                <button class="btn btn-primary mr-3" > Terima </button>
            </form>
            <form action="/admin/event/verifikasi-pengajuan/{{$event->id_event}}/tolak" method="post">
                @csrf
                <button class="btn btn-danger" > Tolak </button>
            </form>
        </div>
      </div>
    </div>
  </div>
