<script>
    import Layout from "../../Shared/Layout/Layout.svelte";
    import { inertia } from "@inertiajs/inertia-svelte";
    import { parseTgl, parseWaktu } from "../../Shared/Helpers/dateAndTime";
    import { useForm } from "@inertiajs/inertia-svelte";
    import Manual from "../../Components/Payment/ManualPayment.svelte";
    import Otomatis from "../../Components/Payment/Otomatis.svelte";

    export let order;
</script>

<Layout>
    <div class="row justify-content-center mb-5">
        <div class="col-11">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="fw-bold">{order.nama_event}</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-2 col-sm-5">
                            <p class="fw-bold mb-1">Diselenggarakan Oleh :</p>
                            <p class="mb-0">{order.penyelenggara}</p>
                        </div>
                        <div class="col mb-2 col-sm-4">
                            <p class="fw-bold mb-1">Tanggal&Waktu</p>
                            <p class="mb-0">
                                <img
                                    class="me-1"
                                    src="https://img.icons8.com/small/16/000000/calendar.png"
                                    alt=""
                                />
                                {parseTgl(order.tgl_event)}
                            </p>
                            <p class="mb-0">
                                <img
                                    class="me-1"
                                    src="https://img.icons8.com/small/16/000000/clock.png"
                                    alt=""
                                />
                                {parseWaktu(order.tgl_event)} WIB
                            </p>
                        </div>
                        <div class="col mb-2 col-sm-3">
                            <p class="fw-bold mb-1">Lokasi</p>
                            <p class="mb-0">
                                <img
                                    src="https://img.icons8.com/small/16/000000/marker.png"
                                    alt=""
                                />
                                {order.lokasi}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="fw-bold">Pembayaran Tiket Event</h5>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link active"
                                id="otomatis-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#otomatis"
                                type="button"
                                role="tab"
                                aria-controls="otomatis"
                                aria-selected="true">Otomatis</button
                            >
                        </li>
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link"
                                id="manual-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#manual"
                                type="button"
                                role="tab"
                                aria-controls="manual"
                                aria-selected="false">Manual</button
                            >
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div
                            class="tab-pane fade show active"
                            id="otomatis"
                            role="tabpanel"
                            aria-labelledby="otomatis-tab"
                        >
                            <Otomatis order_id={order.id_order}/>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="manual"
                            role="tabpanel"
                            aria-labelledby="manual-tab"
                        >
                            <Manual/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</Layout>
