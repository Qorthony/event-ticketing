<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalVerifikasi{{$payment->id_payment}}">
    Verifikasi
  </button>

  <!-- Modal -->
  <div class="modal fade" id="modalVerifikasi{{$payment->id_payment}}" tabindex="-1" aria-labelledby="modalVerifikasi{{$payment->id_payment}}Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalVerifikasi{{$payment->id_payment}}Label">Verifikasi Pembayaran</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="img-fluid" src="/storage/{{$payment->bukti_payment}}" alt="bukti">
        </div>
        <div class="modal-footer">
            <form action="/admin/event/pesanan/{{$payment->id_payment}}/terima" method="post">
                @csrf
                <button class="btn btn-primary btn-sm" > Terima </button>
            </form>
            <form action="/admin/event/pesanan/{{$payment->id_payment}}/tolak" method="post">
                @csrf
                <button class="btn btn-danger btn-sm" onclick="return confirm('Tolak ?')" > Tolak </button>
            </form>
        </div>
      </div>
    </div>
  </div>
