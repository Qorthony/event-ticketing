<script>
    import ApexCharts from "apexcharts";
    import { onMount } from "svelte";

    let chartEl;

    onMount(() => {
        let options = {
            series: [44, 55, 13],
            chart: {
                width: 380,
                type: "pie",
            },
            labels: ["16-21", "22-35 ", ">36"],
            responsive: [
                {
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200,
                        },
                        legend: {
                            position: "bottom",
                        },
                    },
                },
            ],
        };

        let chart = new ApexCharts(chartEl, options);

        chart.render();
    });
</script>

<div bind:this={chartEl} />
