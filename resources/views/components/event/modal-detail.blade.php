{{-- <div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
</div> --}}

<button href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#detailEventModal{{$event->id_event}}"> <i
        class="fa fa-eye"></i> </button>
<!-- Modal -->
<div class="modal fade" id="detailEventModal{{$event->id_event}}" tabindex="-1" aria-labelledby="detailEventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title" id="detailEventModalLabel">Detail Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex align-items-start">
                    <img style="width: 500px;max-width:40%;" class="mr-3" src="{{ str_starts_with($event->poster_url, 'http')?$event->poster_url:url('storage/'.$event->poster_url) }}" alt="poster">
                    <table class="table table-borderless bg-white">
                        <tr class="bg-white pb-0 mb-0">
                            <td class="font-weight-bold py-1">Nama Event</td>
                            <td class="py-1">: {{$event->nama_event}} </td>
                        </tr>
                        <tr class="bg-white">
                            <td class="font-weight-bold py-1">Jenis Event</td>
                            <td class="py-1">: {{$event->jenis_event}} </td>
                        </tr>
                        <tr class="bg-white">
                            <td class="font-weight-bold py-1">Tanggal&Waktu</td>
                            <td class="py-1">: {{$event->tgl_event}} </td>
                        </tr>
                        <tr class="bg-white">
                            <td class="font-weight-bold py-1">Lokasi</td>
                            <td class="py-1">: {{$event->lokasi}} </td>
                        </tr>
                        <tr class="bg-white">
                            <td class="font-weight-bold py-1">Harga</td>
                            <td class="py-1">: Rp. {{$event->kuota}} </td>
                        </tr>
                        <tr class="bg-white">
                            <td class="font-weight-bold py-1">Kuota</td>
                            <td class="py-1">: {{$event->kuota}} </td>
                        </tr>
                        <tr class="bg-white">
                            <td class="font-weight-bold py-1">Deskripsi</td>
                            <td class="py-1">: {{$event->deskripsi}} </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
