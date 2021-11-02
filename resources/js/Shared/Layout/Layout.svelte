<script>
    // import { inertia } from "@inertiajs/inertia-svelte";
    import { Inertia } from '@inertiajs/inertia'
    import { Offcanvas } from 'bootstrap'

    const clearOverflow = () => {
        let body = document.querySelector('body')
        body.style.overflow = ""
        body.style.paddingRight = ""
    }

    const navigate = (link, method='get') => () => {
        Inertia.visit(link, {
            method:method,
            onBefore: () => {
                clearOverflow()
            }
        })
    }
</script>

<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="app-container">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" on:click|preventDefault="{navigate('/event')}"  href="/event">Event Ticketing Platform</a>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header bg-dark text-white justify-content-start">
                <div>
                    <img src="https://img.icons8.com/clouds/100/000000/scream.png" alt="avatar"/>
                </div>
                <div class="ps-2">
                    <p class="mb-0">Salsabilla</p>
                    <p>billa@gmail.com</p>
                </div>
                <!-- <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item d-flex align-items-center">
                        <img class="icon-size" src="https://img.icons8.com/material-outlined/48/000000/home--v2.png" alt=""/>
                        <a class="nav-link text-dark ms-1 active" on:click|preventDefault="{navigate('/event')}" aria-current="page"  href="/event">Home</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <img class="icon-size" src="https://img.icons8.com/ios-glyphs/30/000000/time-machine--v2.png" alt=""/>
                        <a class="nav-link text-dark ms-1" on:click|preventDefault="{navigate('/event/orderHistory')}" href="/event/orderHistory">History Pemesanan</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <img class="icon-size" src="https://img.icons8.com/material/24/000000/property-time.png" alt=""/>
                        <a class="nav-link text-dark ms-1" href="/">Event Creator</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <img class="icon-size" src="https://img.icons8.com/material-two-tone/24/000000/handshake.png" alt=""/>
                        <a class="nav-link text-dark ms-1"  href="/">Mitra</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <img class="icon-size" src="https://img.icons8.com/external-sbts2018-outline-sbts2018/58/000000/external-logout-social-media-basic-1-sbts2018-outline-sbts2018.png" alt=""/>
                        <a class="nav-link text-dark ms-1" on:click|preventDefault="{navigate('/logout', 'post')}"  href="/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<main class="app-container" style="padding-top: 5rem;">
    <slot />
</main>


<style>
    .icon-size{
        width:30px;
        height: 30px;
    }
    ul > li{
        margin-bottom: 0.8rem;
    }
</style>
