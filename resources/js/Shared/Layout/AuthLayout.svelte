<script>
    import { inertia } from "@inertiajs/inertia-svelte";
    export let title;
</script>

<nav class="navbar navbar-dark bg-dark">
    <div class="app-container">
        <span class="navbar-brand mb-0 h1">{title}</span>
    </div>
</nav>
<main class="app-container">
    <slot />
</main>
