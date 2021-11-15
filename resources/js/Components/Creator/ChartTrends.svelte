<script>
    import ApexCharts from 'apexcharts'
    import { onMount } from 'svelte';

    let chartEl;

    onMount(()=>{
        let options = {
            chart: {
                type: "line",
            },
            series: [
                {
                    name: "Penjualan",
                    data: [1, 1, 3, 2, 2],
                },
            ],
            xaxis: {
                categories: [11,12,13,14,15],
            },
        };

        let chart = new ApexCharts(chartEl, options);

        chart.render();
    })
</script>
<div bind:this={chartEl}></div>
