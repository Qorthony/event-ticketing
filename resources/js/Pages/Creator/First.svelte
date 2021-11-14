<script>
    import Layout from "../../Shared/Layout/Layout.svelte";
    import {inertia} from "@inertiajs/inertia-svelte";
    import { useForm } from "@inertiajs/inertia-svelte";

    let form = useForm({
        nama_bank:null,
        no_rek:null,
        nama_rek:null
    })

    function submit() {
        // console.log($form);
        $form.post('/creator/regist');
    }
</script>

<Layout>
    <div class="mt-5 pb-5">
        <div class="d-flex justify-content-center mb-4">
            <img src="/images/icons/credit-card.svg" alt=""/>
        </div>
        <div class="card rounded mb-5">
            <div class="card-body">
                <div class="text-center mb-3">
                    <h5 class="fw-bold">Informasi Rekening Creator</h5>
                    <small class="text-secondary">Sebelum menjadi Creator silahkan isi informasi berikut</small>
                </div>
                <form on:submit|preventDefault={submit}>
                    <div class="mb-3">
                        <label for="nama_bank" class="form-label fw-bold">Nama Bank</label>
                        <input type="text" bind:value={$form.nama_bank} class="form-control" id="nama_bank" placeholder="ex: BCA, BRI">
                        {#if $form.errors.nama_bank}
                            <div class="alert alert-danger">{$form.errors.nama_bank}</div>
                        {/if}
                    </div>
                    <div class="mb-3">
                        <label for="no_rek" class="form-label fw-bold">Nomor Rekening</label>
                        <input type="text" bind:value={$form.no_rek} class="form-control" id="no_rek" placeholder="111*****">
                        {#if $form.errors.no_rek}
                            <div class="alert alert-danger">{$form.errors.no_rek}</div>
                        {/if}
                    </div>
                    <div class="mb-3">
                        <label for="nama_rek" class="form-label fw-bold">Nama Rekening</label>
                        <input type="text" bind:value={$form.nama_rek} class="form-control" id="nama_rek" placeholder="Ahmad">
                        {#if $form.errors.nama_rek}
                            <div class="alert alert-danger">{$form.errors.nama_rek}</div>
                        {/if}
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</Layout>
