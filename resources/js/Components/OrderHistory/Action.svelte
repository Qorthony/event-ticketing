<script>
    import { inertia } from "@inertiajs/inertia-svelte";

    export let order;
</script>

<hr />
<div class="d-flex pb-3 ps-3">
    {#if order.status_order==='MP'||order.status_order==='PR'}
        <a
            use:inertia
            href={"/event/payment/" + order.id_order}
            class="btn btn-success">Konfirmasi Pembayaran</a
        >
    {/if}
</div>
