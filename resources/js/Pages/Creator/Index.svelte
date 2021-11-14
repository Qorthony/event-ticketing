<script>
import { parseTgl, parseWaktu } from "../../Shared/Helpers/dateAndTime";

import { getUrlPoster } from "../../Shared/Helpers/posterEvent";

    import Layout from "../../Shared/Layout/Layout.svelte";

    export let event;
</script>

<Layout>
    <h4 class="text-e-blue mb-4 fw-bold">Dashboard Event Creator</h4>
    <button class="btn btn-e-blue mb-5">Buat Event</button>

    <h5 class="fw-bold text-e-blue mt-3">My Events</h5>
    <hr style="border: 1px solid #F05454;opacity:1">
    <div class="card mb-5">
        <img src={getUrlPoster(event.poster_url)} class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title fw-bold">{event.nama_event}</h5>
          <div class="d-flex justify-content-between mb-1">
              <div>
                  <p class="mb-0">{event.jenis_event}</p>
                  <small class="mb-0 badge bg-success">Terverifikasi</small>
              </div>
              <div>
                  <p class="mb-0">Tanggal : {parseTgl(event.tgl_event) }</p>
                  <p class="mb-0">Waktu :  {parseWaktu(event.tgl_event)} WIB</p>
              </div>
          </div>
        </div>
        <div style="border: 2px dashed #E8E8E8;"></div>
        <div class="card-body">
            <a href={"#"} class="btn btn-e-blue"> <img src="https://img.icons8.com/material-outlined/24/000000/pencil--v1.png" alt=""/> Edit</a>
            <a href={"#"} class="btn btn-e-blue"> <img src="https://img.icons8.com/small/24/000000/bar-chart.png" alt=""/> Laporan</a>
        </div>
    </div>

</Layout>
