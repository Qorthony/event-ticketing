<script>
    import Layout from "../../Shared/Layout/Layout.svelte";
    import { inertia } from "@inertiajs/inertia-svelte";
    import { parseTgl,parseWaktu } from "../../Shared/Helpers/dateAndTime";
    import { getUrlPoster } from "../../Shared/Helpers/posterEvent";

    export let event;
    export let ordered;
</script>

<Layout>
    <div class="row justify-content-center mb-5">
        <div class="col-11">
            <div class="card mb-3">
                <img src={getUrlPoster(event.poster_url)} class="card-img-top" alt="...">
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{event.nama_event}</h5>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-2 col-sm-4">
                            <h6 class="text-e-blue fw-bold">Tanggal & Waktu</h6>
                            <p class="mb-0 d-flex align-items-center"> <img class="me-1" src="https://img.icons8.com/small/16/000000/calendar.png" alt=""/> {parseTgl(event.tgl_event) }</p>
                            <p class="d-flex align-items-center"> <img class="me-1" src="https://img.icons8.com/small/16/000000/clock.png" alt=""/> {parseWaktu(event.tgl_event)} WIB</p>
                        </div>
                        <div class="col mb-2 col-sm-4">
                            <h6 class="text-e-blue fw-bold">Lokasi</h6>
                            <p class="d-flex align-items-center"> <img src="https://img.icons8.com/small/16/000000/marker.png" alt=""/> {event.lokasi} </p>
                        </div>
                        <div class="col mb-2 col-sm-4">
                            <h6 class="text-e-blue fw-bold">Harga</h6>
                            <p> Rp. {event.harga} </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h6 class="text-e-blue fw-bold">Deskripsi</h6>
                    <p>{@html event.deskripsi}</p>
                </div>
            </div>
            <div class="d-grid gap-2">
                {#if ordered}
                    <button class="btn btn-secondary btn-lg" disabled>Anda sudah memesan event ini</button>
                    <a href={`/event/orderHistory`} use:inertia class="btn btn-success btn-lg">Cek Pesanan</a>
                {:else}
                    <a href={`/event/${event.id_event}/order`} use:inertia="{{ method:'post' }}" class="btn btn-e-blue btn-lg">Daftar</a>

                {/if}
            </div>
        </div>
    </div>
</Layout>
