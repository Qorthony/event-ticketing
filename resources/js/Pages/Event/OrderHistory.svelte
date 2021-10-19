<script>
    import Layout from "../../Shared/Layout.svelte";
    import { inertia } from "@inertiajs/inertia-svelte";

    let history = [
        {
            judul: "INDONESIA YOUTH MUSIC FESTIVAL",
            jenis: "Konser",
            tanggal: "23 Aug 2021",
            waktu: "19:00",
            harga: 200000,
            status_pesanan:"Menunggu konfirmasi",
            poster_url:"https://www.namastra.co.id/img?src=9fa8a5b94738aa2ba3d214d77c0aff1e.jpg&width=1200&height=860",
            deskripsi:"Event ini sangat bermanfaat dan <strong>menarik</strong> untuk diikuti. Pesan tiketnya sekarang juga!"
        },
        {
            judul: "INDONESIA YOUTH MUSIC FESTIVAL",
            jenis: "Konser",
            tanggal: "23 Aug 2021",
            waktu: "19:00",
            harga: 200000,
            status_pesanan:"Terkonfirmasi",
            poster_url:"https://www.namastra.co.id/img?src=9fa8a5b94738aa2ba3d214d77c0aff1e.jpg&width=1200&height=860",
            deskripsi:"Event ini sangat bermanfaat dan <strong>menarik</strong> untuk diikuti. Pesan tiketnya sekarang juga!"
        },
    ];
</script>

<Layout>
    <div class="row mb-5 justify-content-center">
        <div class="col-11">
            {#each history as h}
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img
                            src={h.poster_url}
                            class="img-fluid rounded-start"
                            alt="..."
                        />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"> {h.judul} </h5>
                            <p> {h.jenis} </p>
                            <hr>
                            <p>Status : <span class="text-e-blue fw-bold">{h.status_pesanan}</span> </p>
                            <div class="d-flex align-items-center mb-2">
                                <img class="icon-size" src="https://img.icons8.com/material-outlined/24/000000/bank-card-back-side.png" alt=""/>
                                <div class="ms-2">
                                    <p class="mb-0 fw-bold">Biaya</p>
                                    <p class="mb-0">Rp. {h.harga} </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="icon-size" src="https://img.icons8.com/material-outlined/24/000000/calendar.png" alt=""/>
                                <div class="ms-2">
                                    <p class="mb-0 fw-bold">Tanggal Pesan</p>
                                    <p class="mb-0">{h.tanggal} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {/each}
        </div>
    </div>
</Layout>

<style>
    .icon-size{
        width:30px;
        height: 30px;
    }
</style>