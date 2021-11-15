<script>
    import Layout from "../../Shared/Layout/StepLayout.svelte";
    import Trends from "../../Components/Creator/ChartTrends.svelte";
    import UsiaPembeli from "../../Components/Creator/ChartUsiaPembeli.svelte";

</script>
<Layout previous="/creator">
    <h4 class="text-e-blue mb-4 fw-bold">Penjualan Tiket Event</h4>
    <div class="row mb-4">
        <div class="col">
            <div class="card bg-e-red text-white">
                <div class="card-body">
                    <small>Tiket Terjual</small>
                    <h5 class="fw-bold">50</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-e-blue text-white">
                <div class="card-body">
                    <small>Pendapatan</small>
                    <h5 class="fw-bold">Rp.500000</h5>
                </div>
            </div>
        </div>
    </div>
    <h5 class="text-e-blue mb-4 fw-bold">Trend Penjualan</h5>
    <Trends/>
    <h5 class="text-e-blue mb-4 fw-bold">Rentang Usia Pembeli</h5>
    <UsiaPembeli/>
    <div class="mb-5 pb-5"></div>
</Layout>
