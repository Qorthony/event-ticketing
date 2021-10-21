<script>
    import AuthLayout from "../../Shared/Layout/AuthLayout.svelte";
    import { inertia } from "@inertiajs/inertia-svelte";
</script>


<AuthLayout title="Login">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="d-flex justify-content-center mb-3 pt-4 pb-2">
                <img src="images/icons/icon_auth.png" alt="icon">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email">
                <small class="text-muted">We’ll never share your email with anyone else</small>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="mb-3 d-flex align-items-center">
                <a use:inertia href="/event" class="btn btn-e-blue">Login</a>
                <div class="ms-2"><small>Belum punya akun?</small> <a use:inertia class="text-e-blue text-decoration-none fw-bold" href="/register">Register</a> </div>
            </div>
        </div>
    </div>
</AuthLayout>
