<script>
import { parseTgl, parseWaktu } from "../../Shared/Helpers/dateAndTime";

import { getUrlPoster } from "../../Shared/Helpers/posterEvent";

    import Layout from "../../Shared/Layout/Layout.svelte";

    import Status from "../../Components/Creator/Status.svelte";

    import { inertia } from "@inertiajs/inertia-svelte";

    export let events;

    // export let success
    // console.log(success);
</script>

<Layout>
    <h4 class="text-e-blue mb-4 fw-bold">Dashboard Event Creator</h4>
    <a use:inertia href="/creator/buatEvent" class="btn btn-e-blue mb-5">Buat Event</a>

    <h5 class="fw-bold text-e-blue mt-3">My Events</h5>
    <hr style="border: 1px solid #F05454;opacity:1">
    {#if events.length==0}
        <div class="d-flex justify-content-center">
            <h4>Belum ada event yang dibuat</h4>
        </div>
    {/if}
    {#each events as event}
    <div class="card mb-5">
        <img src={getUrlPoster(event.poster_url)} class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title fw-bold">{event.nama_event}</h5>
          <div class="d-flex justify-content-between mb-1">
              <div>
                  <p class="mb-0">{event.jenis_event}</p>
                  <Status status={event.status_verifikasi}/>
              </div>
              <div>
                  <p class="mb-0">Tanggal : {parseTgl(event.tgl_event) }</p>
                  <p class="mb-0">Waktu :  {parseWaktu(event.tgl_event)} WIB</p>
              </div>
          </div>
        </div>
        <div style="border: 2px dashed #E8E8E8;"></div>
        <div class="card-body">
            <a use:inertia href={"/creator/editEvent/"+event.id_event} class="btn btn-e-blue"> <img src="https://img.icons8.com/material-outlined/24/000000/pencil--v1.png" alt=""/> Edit</a>
            <a use:inertia href={"/creator/stats/"+event.id_event} class="btn btn-e-blue"> <img src="https://img.icons8.com/small/24/000000/bar-chart.png" alt=""/> Laporan</a>
        </div>
    </div>
    {/each}


</Layout>
