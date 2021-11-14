<script>
import { inertia } from "@inertiajs/inertia-svelte";
export let previous;
</script>

<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="app-container">
        <span class="navbar-brand mb-0 h1">
            <a class="text-decoration-none text-white fw-bold d-flex align-items-center" use:inertia href={previous}> <img src="https://img.icons8.com/ios-filled/24/ffffff/left.png" alt=""/> <div class="ms-2"> Kembali</div></a>
        </span>
    </div>
</nav>
<main class="app-container" style="padding-top: 5rem;">
    <slot />
</main>
