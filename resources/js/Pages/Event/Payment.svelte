<script>
    import Layout from "../../Shared/Layout/Layout.svelte";
    import { inertia } from "@inertiajs/inertia-svelte";
</script>

<Layout>
    <div class="row justify-content-center mb-5">
        <div class="col-11">

            <div class="card mb-3">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="fw-bold">Talkshow & Beauty Class</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-2 col-sm-5">
                            <p class="fw-bold mb-1">Diselenggarakan Oleh :</p>
                            <p class="mb-0">Brave Ideas</p>
                        </div>
                        <div class="col mb-2 col-sm-4">
                            <p class="fw-bold mb-1">Tanggal&Waktu</p>
                            <p class="mb-0"> <img class="me-1" src="https://img.icons8.com/small/16/000000/calendar.png" alt=""/>  19/20/2030</p>
                            <p class="mb-0"> <img class="me-1" src="https://img.icons8.com/small/16/000000/clock.png" alt=""/> 08:00 WIB</p>
                        </div>
                        <div class="col mb-2 col-sm-3">
                            <p class="fw-bold mb-1">Lokasi</p>
                            <p class="mb-0"> <img src="https://img.icons8.com/small/16/000000/marker.png" alt=""/> Online</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="fw-bold">Pembayaran Tiket Event</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="alert alert-danger">Tersisa 10 tiket di event ini. Mohon segera melakukan pembayaran untuk mendapatkan tiket.</div>
                    <div class="d-flex">
                        <div></div>
                        <div>
                            <table>
                                <tr>
                                    <td>Nama Bank</td>
                                    <td>: Bank Mandiri</td>
                                </tr>
                                <tr>
                                    <td>Cabang</td>
                                    <td>: Margonda Depok</td>
                                </tr>
                                <tr>
                                    <td>Atas Nama</td>
                                    <td>: Annisa Uswatun Hasanah</td>
                                </tr>
                                <tr>
                                    <td>No. Rekening</td>
                                    <td>: 12 8246 595 2950</td>
                                </tr>
                                <tr>
                                    <td>Jumlah</td>
                                    <td>: <strong> Rp. 200.000 </strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="fw-bold">Konfirmasi Pembayaran</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nama-pengirim" class="form-label">Nama Pengirim</label>
                        <input type="text" class="form-control" id="nama-pengirim">
                        <small>*Pastikan nama pengirim sesuai dengan struk pengiriman</small>
                    </div>
                    <div class="mb-3">
                        <label for="bank-pengirim" class="form-label">Bank Pengirim</label>
                        <input type="text" class="form-control" id="bank-pengirim">
                    </div>
                    <div class="mb-3">
                        <label for="no-rek" class="form-label">No. Rekening</label>
                        <input type="text" class="form-control" id="no-rek">
                    </div>
                    <div class="mb-3">
                        <label for="bukti-pembayaran" class="form-label">Bukti Pembayaran</label>
                        <input class="form-control" type="file" id="bukti-pembayaran">
                    </div>
                    <div class="d-grid gap-2 mb-3">
                        <a href="/event/orderHistory" use:inertia class="btn btn-e-blue">Kirim</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</Layout>
