<script>
    import Layout from "../../Shared/Layout/Layout.svelte";
    import {inertia} from "@inertiajs/inertia-svelte";
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
                <form>
                    <div class="mb-3">
                        <label for="nama_bank" class="form-label fw-bold">Nama Bank</label>
                        <input type="text" class="form-control" id="nama_bank" placeholder="ex: BCA, BRI">
                    </div>
                    <div class="mb-3">
                        <label for="no_rek" class="form-label fw-bold">Nomor Rekening</label>
                        <input type="text" class="form-control" id="no_rek" placeholder="111*****">
                    </div>
                    <div class="mb-3">
                        <label for="nama_rek" class="form-label fw-bold">Nama Rekening</label>
                        <input type="text" class="form-control" id="nama_rek" placeholder="Ahmad">
                    </div>
                    <div class="mb-3">
                        <a use:inertia href="/creator" class="btn btn-primary">Simpan</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</Layout>
