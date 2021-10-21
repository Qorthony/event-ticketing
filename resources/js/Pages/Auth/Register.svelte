<script>
    import AuthLayout from "../../Shared/Layout/AuthLayout.svelte";
    import { inertia } from "@inertiajs/inertia-svelte";
</script>

<AuthLayout title="Register">
    <div class="row justify-content-center mb-5">
        <div class="col-11">
            <div class="d-flex justify-content-center mb-3 pt-4 pb-2">
                <img src="images/icons/icon_auth.png" alt="icon">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email">
                <small class="text-muted">We’ll never share your email with anyone else</small>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
                <small class="text-muted">Must be 8-20 characters long.</small>
            </div>
            <div class="mb-3">
                <label for="tgl_lhr" class="form-label">Tanggal lahir</label>
                <input type="date" class="form-control" id="tgl_lhr">
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="no_hp">
            </div>
            <div class="mb-3 d-flex align-items-center">
                <button class="btn btn-e-blue">Register</button>
                <div class="ms-2"><small>Sudah punya akun?</small> <a use:inertia class="text-e-blue text-decoration-none fw-bold" href="/">Login</a> </div>
            </div>
        </div>
    </div>
</AuthLayout>
