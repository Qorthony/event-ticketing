<script>
    import Layout from "../../Shared/Layout/Layout.svelte";
    import { inertia } from "@inertiajs/inertia-svelte";
    import { getUrlPoster } from "../../Shared/Helpers/posterEvent";
    import { parseTgl } from "../../Shared/Helpers/dateAndTime";
    import Action from "../../Components/OrderHistory/Action.svelte";

    export let orders;

    function msgStatusOrder(status) {
        switch (status) {
            case 'MP':
                return "Belum dibayar"
                break;
            case 'MV':
                return "Menunggu Verifikasi Pembayaran"
                break;
            case 'ACC':
                return "Selesai"
                break;
            case 'PR':
                return "Verifikasi Pembayaran Ditolak"
                break;
            case 'PB':
                return "Batal"
                break;

            default:
                break;
        }
    }

</script>

<Layout>
    <div class="row mb-5 justify-content-center">
        <div class="col-11">
            {#if orders.length===0}
                <div class="alert alert-primary">Belum pernah melakukan pemesanan tiket event!</div>
            {/if}
            {#each orders as order}
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img
                            src={getUrlPoster(order.poster_url)}
                            class="img-fluid rounded-start"
                            alt="..."
                        />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"> {order.nama_event} </h5>
                            <p> {order.jenis_event} </p>
                            <hr>
                            <p>Status : <span class="text-e-blue fw-bold">{msgStatusOrder(order.status_order)}</span> </p>
                            <div class="d-flex align-items-center mb-2">
                                <img class="icon-size" src="https://img.icons8.com/material-outlined/24/000000/bank-card-back-side.png" alt=""/>
                                <div class="ms-2">
                                    <p class="mb-0 fw-bold">Biaya</p>
                                    <p class="mb-0">Rp. {order.harga} </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="icon-size" src="https://img.icons8.com/material-outlined/24/000000/calendar.png" alt=""/>
                                <div class="ms-2">
                                    <p class="mb-0 fw-bold">Tanggal Pesan</p>
                                    <p class="mb-0">{parseTgl(order.tgl_order)} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <Action order={order}/>
            </div>
            {/each}
        </div>
    </div>
</Layout>

<style>
    .icon-size{
        width:30px;
        height: 30px;
    }
</style>
