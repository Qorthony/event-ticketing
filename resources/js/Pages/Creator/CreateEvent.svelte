<script>
    import { Inertia } from "@inertiajs/inertia";

    import Layout from "../../Shared/Layout/StepLayout.svelte";

    export let errors

    let imageSelected

    let form = {
        nama_event:null,
        jenis_event:null,
        tgl_event:null,
        lokasi:null,
        harga:null,
        kuota:null,
        penyelenggara:null,
        deskripsi:null,
        poster:null
    }

    // const imageSelected = (e) => {
    //     let image = e.target.files[0];
    //     let reader = new FileReader();
    //     reader.readAsDataURL(image);
    //     reader.onload = e =>{
    //         form.poster = e.target.result
    //     }
    // }

    function showImageSelected(file) {
        let reader= new FileReader();
        reader.readAsDataURL(file);
        reader.onload= e =>{
            imageSelected = e.target.result;
        }
        return file;
    }

    function submit() {
        console.log(form);
        Inertia.post('/creator/buatEvent', form, {
            forceFormData: true,
        })
    }

    let files=null;
    $: form.poster = files? showImageSelected(files[0]):null;
</script>

<Layout previous="/creator">
    <h4 class="fw-bold mb-4 text-e-blue">Form Buat Event</h4>
    <div class="card mb-5">
        <div class="card-body">
            <form on:submit|preventDefault={submit} enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nama_event" class="form-label fw-bold">Nama Event</label>
                    <input bind:value={form.nama_event} type="text" class="form-control" id="nama_event">
                    {#if errors.nama_event}<div class="alert alert-danger">{errors.nama_event}</div>{/if}
                </div>
                <div class="mb-3">
                    <label for="jenis_event" class="form-label fw-bold">Jenis Event</label>
                    <input bind:value={form.jenis_event} type="text" class="form-control" id="jenis_event">
                    {#if errors.jenis_event}<div class="alert alert-danger">{errors.jenis_event}</div>{/if}
                </div>
                <div class="mb-3">
                    <label for="tgl_event" class="form-label fw-bold">Tanggal Event</label>
                    <input bind:value={form.tgl_event} type="datetime-local" class="form-control" id="tgl_event">
                    {#if errors.tgl_event}<div class="alert alert-danger">{errors.tgl_event}</div>{/if}
                </div>
                <div class="mb-3">
                    <label for="lokasi" class="form-label fw-bold">Lokasi</label>
                    <input bind:value={form.lokasi} type="text" class="form-control" id="lokasi">
                    {#if errors.lokasi}<div class="alert alert-danger">{errors.lokasi}</div>{/if}
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label fw-bold">Harga</label>
                    <input bind:value={form.harga} type="number" class="form-control" id="harga">
                    {#if errors.harga}<div class="alert alert-danger">{errors.harga}</div>{/if}
                </div>
                <div class="mb-3">
                    <label for="kuota" class="form-label fw-bold">Kuota</label>
                    <input bind:value={form.kuota} type="number" class="form-control" id="kuota">
                    {#if errors.nama_event}<div class="alert alert-danger">{errors.nama_event}</div>{/if}
                </div>
                <div class="mb-3">
                    <label for="penyelenggara" class="form-label fw-bold">Penyelenggara</label>
                    <input bind:value={form.penyelenggara} type="text" class="form-control" id="penyelenggara">
                    {#if errors.penyelenggara}<div class="alert alert-danger">{errors.penyelenggara}</div>{/if}
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                    <textarea bind:value={form.deskripsi} class="form-control" id="deskripsi" rows="3"></textarea>
                    {#if errors.deskripsi}<div class="alert alert-danger">{errors.deskripsi}</div>{/if}
                </div>
                <div class="mb-3">
                    <label for="poster" class="form-label fw-bold">Poster</label>
                    {#if form.poster}
                        <img class="img-fluid mb-3" src={imageSelected} alt="poster">
                    {/if}
                    <input bind:files class="form-control" type="file" id="poster" accept="image/*">
                    {#if errors.poster}<div class="alert alert-danger">{errors.poster}</div>{/if}
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-e-blue">Buat Event</button>
                </div>
            </form>
        </div>
    </div>
</Layout>
