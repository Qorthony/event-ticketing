<script>
    import Layout from "../../Shared/Layout/Layout.svelte";
    import { inertia } from "@inertiajs/inertia-svelte";
    import { parseTgl,parseWaktu } from "../../Shared/Helpers/dateAndTime";
    import { getUrlPoster } from "../../Shared/Helpers/posterEvent";


    export let events;
    // console.log(events);
</script>

<Layout>
    <h1 class="text-center h2 mb-3">Event tersedia</h1>
    <div class="row justify-content-center">
        {#each events as event}
            <div class="col-11 mb-4">
                <article class="card">
                    <img
                        src={getUrlPoster(event.poster_url)}
                        class="card-img-top"
                        alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-4">{event.nama_event}</h5>
                        <div class="d-flex justify-content-between">
                            <div>{event.jenis_event}</div>
                            <div>
                                <p>Tanggal : {parseTgl(event.tgl_event)}</p>
                                <p>Waktu : {parseWaktu(event.tgl_event) } WIB</p>
                            </div>
                        </div>
                        <a
                            use:inertia
                            href={'/event/'+event.id_event}
                            class="text-reset fw-bold text-decoration-none stretched-link"
                            >More</a
                        >
                    </div>
                </article>
            </div>
        {/each}
    </div>
</Layout>
