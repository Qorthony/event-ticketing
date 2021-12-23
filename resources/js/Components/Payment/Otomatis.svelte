<script>
import { Inertia } from "@inertiajs/inertia";


    export let order_id;

    function handleSubmit() {
        Inertia.post("/event/payment/otomatis/"+order_id)

    }
</script>

<div class="mt-3">
    <form on:submit|preventDefault={handleSubmit}>
        <button type="submit" class="btn btn-primary">Proses pembayaran otomatis</button>
    </form>
</div>
