<script>
    import AuthLayout from "../../Shared/Layout/AuthLayout.svelte";
    import { inertia, useForm } from "@inertiajs/inertia-svelte";

    let form = useForm({
        name: null,
        email: null,
        password: null,
    });

    function handleSubmit() {
        $form.post("/register");
    }
</script>

<AuthLayout title="Register">
    <div class="row justify-content-center mb-5">
        <div class="col-11">
            <div class="d-flex justify-content-center mb-3 pt-4 pb-2">
                <img src="images/icons/icon_auth.png" alt="icon" />
            </div>
            <form on:submit|preventDefault={handleSubmit}>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" bind:value={$form.name}/>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" bind:value={$form.email}/>
                    <small class="text-muted"
                        >We’ll never share your email with anyone else</small
                    >
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" bind:value={$form.password}/>
                    <small class="text-muted"
                        >Must be 8-20 characters long.</small
                    >
                </div>
                <div class="mb-3">
                    <label for="tgl_lhr" class="form-label">Tanggal lahir</label
                    >
                    <input type="date" class="form-control" id="tgl_lhr" />
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">No HP</label>
                    <input type="text" class="form-control" id="no_hp" />
                </div>
                <div class="mb-3 d-flex align-items-center">
                    <button type="submit" class="btn btn-e-blue" disabled={$form.processing}>Register</button>
                    <div class="ms-2">
                        <small>Sudah punya akun?</small>
                        <a
                            use:inertia
                            class="text-e-blue text-decoration-none fw-bold"
                            href="/">Login</a
                        >
                    </div>
                </div>
            </form>
        </div>
    </div>
</AuthLayout>
