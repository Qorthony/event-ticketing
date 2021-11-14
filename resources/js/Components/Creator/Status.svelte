<script>
    export let status;
</script>
{#if status==='acc'}
<small class="mb-0 badge bg-success">Terverifikasi</small>
{:else if status==='wait'}
<small class="mb-0 badge bg-secondary">Tunggu Verifikasi</small>
{:else}
<small class="mb-0 badge bg-danger">Ditolak</small>
{/if}
