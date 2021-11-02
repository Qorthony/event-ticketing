<script>
    import AuthLayout from "../../Shared/Layout/AuthLayout.svelte";
    import { inertia, useForm } from "@inertiajs/inertia-svelte";
    // import { Inertia } from "@inertiajs/inertia";

    let form = useForm({
        email: null,
        password: null,
        remember: false,
    })

    function handleSubmit() {
        $form.post('/login')
    }
</script>

<AuthLayout title="Login">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="d-flex justify-content-center mb-3 pt-4 pb-2">
                <img src="images/icons/icon_auth.png" alt="icon" />
            </div>
            <form on:submit|preventDefault={handleSubmit}>
                {#if $form.errors.email}
                    <div class="alert-danger">{$form.errors.email}</div>
                {/if}
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        bind:value={$form.email}
                        error="$form.errors.email"
                    />

                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input
                        type="password"
                        class="form-control"
                        id="password"
                        bind:value={$form.password}
                    />
                </div>
                <div class="mb-3 d-flex align-items-center">
                    <button type="submit" class="btn btn-e-blue" disabled={$form.processing}>Login</button>
                    <div class="ms-2">
                        <small>Belum punya akun?</small>
                        <a
                            use:inertia
                            class="text-e-blue text-decoration-none fw-bold"
                            href="/register">Register</a
                        >
                    </div>
                </div>
            </form>
        </div>
    </div>
</AuthLayout>
