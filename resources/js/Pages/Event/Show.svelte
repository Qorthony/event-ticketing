<script>
    import Layout from "../../Shared/Layout.svelte";
    import { inertia } from "@inertiajs/inertia-svelte";

    let events = [
        {
            judul: "INDONESIA YOUTH MUSIC FESTIVAL",
            jenis: "Konser",
            tanggal: "23 Aug 2021",
            waktu: "19:00",
        },
        {
            judul: "INDONESIA YOUTH MUSIC FESTIVAL",
            jenis: "Konser",
            tanggal: "23 Aug 2021",
            waktu: "19:00",
        },
    ];
</script>

<Layout>
    <h1 class="text-center h2 mb-3">Event tersedia</h1>
    <div class="row justify-content-center">
        {#each events as event}
            <div class="col-11 mb-4">
                <article class="card">
                    <img
                        src="https://www.namastra.co.id/img?src=9fa8a5b94738aa2ba3d214d77c0aff1e.jpg&width=1200&height=860"
                        class="card-img-top"
                        alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-4">{event.judul}</h5>
                        <div class="d-flex justify-content-between">
                            <div>{event.jenis}</div>
                            <div>
                                <p>Tanggal : {event.tanggal}</p>
                                <p>Waktu : {event.waktu} WIB</p>
                            </div>
                        </div>
                        <a
                            use:inertia
                            href="/event/1"
                            class="text-reset fw-bold text-decoration-none stretched-link"
                            >More</a
                        >
                    </div>
                </article>
            </div>
        {/each}
    </div>
</Layout>
