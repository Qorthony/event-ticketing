<script>
    import Layout from "../../Shared/Layout/Layout.svelte";
    import { inertia } from "@inertiajs/inertia-svelte";
    import { parseTgl, parseWaktu } from "../../Shared/Helpers/dateAndTime";
    import { useForm } from "@inertiajs/inertia-svelte";
    import { Inertia } from "@inertiajs/inertia";

    export let order;
    export let errors = {}

    let data = {
        nama_pengirim:null,
        no_rek:null,
        bank_pengirim:null,
        bukti_payment:null
    };

    function submit() {
        console.log(data.bukti_payment);
        Inertia.post("/event/payment/"+order.id_order, data, {
            forceFormData: true,
        })
    }

    let files=null;
    $: data.bukti_payment = files? files[0]:null;
</script>

<Layout>
    <div class="row justify-content-center mb-5">
        <div class="col-11">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="fw-bold">{order.nama_event}</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-2 col-sm-5">
                            <p class="fw-bold mb-1">Diselenggarakan Oleh :</p>
                            <p class="mb-0">{order.penyelenggara}</p>
                        </div>
                        <div class="col mb-2 col-sm-4">
                            <p class="fw-bold mb-1">Tanggal&Waktu</p>
                            <p class="mb-0">
                                <img
                                    class="me-1"
                                    src="https://img.icons8.com/small/16/000000/calendar.png"
                                    alt=""
                                />
                                {parseTgl(order.tgl_event)}
                            </p>
                            <p class="mb-0">
                                <img
                                    class="me-1"
                                    src="https://img.icons8.com/small/16/000000/clock.png"
                                    alt=""
                                />
                                {parseWaktu(order.tgl_event)} WIB
                            </p>
                        </div>
                        <div class="col mb-2 col-sm-3">
                            <p class="fw-bold mb-1">Lokasi</p>
                            <p class="mb-0">
                                <img
                                    src="https://img.icons8.com/small/16/000000/marker.png"
                                    alt=""
                                />
                                {order.lokasi}
                            </p>
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
                    <div class="alert alert-danger">
                        Mohon segera melakukan pembayaran untuk mendapatkan
                        tiket.
                    </div>
                    <div class="d-flex">
                        <div />
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
                    <form on:submit|preventDefault={submit} enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama-pengirim" class="form-label"
                                >Nama Pengirim</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="nama-pengirim"
                                bind:value={data.nama_pengirim}
                            />
                            <small
                                >*Pastikan nama pengirim sesuai dengan struk
                                pengiriman</small
                            >
                            {#if errors.nama_pengirim}<div class="alert alert-danger">{errors.nama_pengirim}</div>{/if}
                        </div>
                        <div class="mb-3">
                            <label for="bank-pengirim" class="form-label"
                                >Bank Pengirim</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="bank-pengirim"
                                bind:value={data.bank_pengirim}
                            />
                            {#if errors.bank_pengirim}<div class="alert alert-danger">{errors.bank_pengirim}</div>{/if}
                        </div>
                        <div class="mb-3">
                            <label for="no-rek" class="form-label"
                                >No. Rekening</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="no-rek"
                                bind:value={data.no_rek}
                            />
                            {#if errors.no_rek}<div class="alert alert-danger">{errors.no_rek}</div>{/if}
                        </div>
                        <div class="mb-3">
                            <label for="bukti-pembayaran" class="form-label"
                                >Bukti Pembayaran</label
                            >
                            <input
                                class="form-control"
                                type="file"
                                id="bukti-pembayaran"
                                bind:files
                                accept="image/*"
                            />
                            {#if errors.bukti_payment}<div class="alert alert-danger">{errors.bukti_payment}</div>{/if}
                        </div>
                        <!-- {#if $form.progress}
                            <progress value={$form.progress.percentage} max="100">
                            {$form.progress.percentage}%
                            </progress>
                        {/if} -->
                        <div class="d-grid gap-2 mb-3">
                            <button
                                type="submit"
                                class="btn btn-e-blue">
                                    Kirim
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</Layout>
