<script>
    import Layout from "../../Shared/Layout/Layout.svelte";
    import { inertia } from "@inertiajs/inertia-svelte";

    // export let id
    let event = {
        judul: "INDONESIA YOUTH MUSIC FESTIVAL",
        jenis: "Konser",
        tanggal: "23 Aug 2021",
        waktu: "19:00",
        harga: 200000,
        poster_url:"https://www.namastra.co.id/img?src=9fa8a5b94738aa2ba3d214d77c0aff1e.jpg&width=1200&height=860",
        deskripsi:"Event ini sangat bermanfaat dan <strong>menarik</strong> untuk diikuti. Pesan tiketnya sekarang juga!"
    }
</script>

<Layout>
    <div class="row justify-content-center mb-5">
        <div class="col-11">
            <div class="card mb-3">
                <img src={event.poster_url} class="card-img-top" alt="...">
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{event.judul}</h5>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="text-e-blue fw-bold">Tanggal & Waktu</h6>
                            <p class="mb-0">{event.tanggal}</p>
                            <p>{event.waktu} WIB</p>
                        </div>
                        <div>
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
                <a href="/event/1/payment" use:inertia class="btn btn-e-blue btn-lg">Daftar</a>
            </div>
        </div>
    </div>
</Layout>
