<h1>Tiket Event : {{$order->nama_event}}</h1>
<h5>Kode Tiket : {{strtotime($order->tgl_order)}}</h5>
<table>
    <thead>
        <th colspan="2">Informasi Peserta</th>
    </thead>
    <tr>
        <td>Atas nama</td>
        <td>: {{$order->name}}</td>
    </tr>
</table>

<table>
    <thead>
        <th colspan="2">Informasi Event</th>
    </thead>
    <tr>
        <td>Tanggal Acara</td>
        <td>: {{$order->tgl_event}}</td>
    </tr>
    <tr>
        <td>Lokasi</td>
        <td>: {{$order->lokasi}}</td>
    </tr>
    <tr>
        <td>Tanggal Acara</td>
        <td>: {{$order->tgl_event}}</td>
    </tr>
    <tr>
        <td>Biaya</td>
        <td>: {{$order->harga}}</td>
    </tr>
</table>
