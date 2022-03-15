<script>
    import Layout from "../../Shared/Layout/Layout.svelte";
    import { inertia } from "@inertiajs/inertia-svelte";
    import { onMount } from 'svelte';

    export let order;

    let status;

    onMount(() => {
		fetch('/event/payment/otomatis/status?order_id='+order.kode_midtrans)
        .then(res=>res.json())
        .then(res=>{
            console.log(res.status.transaction_status);
            status = res.status.transaction_status;
        })

	});

    function cekStatus() {
        console.log(order);
        fetch('/event/payment/otomatis/status?order_id='+order.kode_midtrans)
        .then(res=>res.json())
        .then(res=>{
            console.log(res.status.transaction_status);
            status = res.status.transaction_status;
        })

    }
</script>

<Layout>
    <div class="row justify-content-center mb-5">
        <div class="col-11">
            <div class="card mb-3">
                <div class="card-body">
                    <h5>Pembayaran Selesai</h5>
                    <p>Status order : {order.status_order}</p>
                    <a href={`/event/orderHistory`} use:inertia class="btn btn-success btn-lg">Cek Pesanan</a>
                    {#if order.status_order!=="ACC" || status!=="settlement"}
                    <button class="btn btn-primary btn-lg" on:click={cekStatus} >Cek pembayaran</button>
                    {/if}
                    {#if status}
                        <p>status: {status}</p>
                    {/if}
                </div>
            </div>
        </div>
    </div>
</Layout>
