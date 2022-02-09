<script>
    import Layout from "../../Shared/Layout/Layout.svelte";
    import { inertia } from "@inertiajs/inertia-svelte";

    export let order;

    let status;

    function cekStatus() {
        console.log(order);
        fetch('/event/payment/otomatis/status?order_id='+order.kode_midtrans)
        .then(res=>res.json())
        .then(res=>console.log(res))

    }
</script>

<Layout>
    <div class="row justify-content-center mb-5">
        <div class="col-11">
            <div class="card mb-3">
                <div class="card-body">
                    <h5>Pembayaran Selesai</h5>
                    <a href={`/event/orderHistory`} use:inertia class="btn btn-success btn-lg">Cek Pesanan</a>
                    <button class="btn btn-primary btn-lg" on:click={cekStatus} >Cek pembayaran</button>
                </div>
            </div>
        </div>
    </div>
</Layout>
