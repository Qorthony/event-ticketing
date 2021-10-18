<script>
    import Layout from '../../Shared/Layout.svelte'



    let nama = "adeq";
</script>

<Layout>
    <h1 class="text-center h2 mb-3" >Event tersedia</h1>
    <div class="row justify-content-center">
        <div class="col-11 mb-4">
            <div class="card">
                <img src="https://www.namastra.co.id/img?src=9fa8a5b94738aa2ba3d214d77c0aff1e.jpg&width=1200&height=860" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href={"#"} class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-11">
            <div class="card">
                <img src="https://eventkampus.com/data/event/poster/_thumbnail/600x600/post-ig-techtalk-joints.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href={"#"} class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    <p>Hello World {nama} </p>
    <h1>HAiiiiii</h1>
    
    <button class="btn btn-primary">Klik</button>
</Layout>