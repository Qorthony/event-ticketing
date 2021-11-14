@extends('admins.layouts.base')

@section('title', 'Pengajuan Event')

@section('head')
<!-- DataTables -->
<link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@section('content-title', 'Pengajuan Event')

@section('content')
<x-event.alert-success/>
<x-event.alert-error />
<x-event.alert-errors />
<div class="card mb-3">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="card-title">Pengajuan Event</div>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pengirim</th>
                    <th>Nama Event</th>
                    <th>Tanggal&Waktu</th>
                    <th>Kuota</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $key=>$event)
                <tr>
                    <td>{{$key+1}}</td>
                    <td> {{$event->name}} </td>
                    <td> {{$event->nama_event}} </td>
                    <td> {{$event->tgl_event}} </td>
                    <td> {{ $event->kuota }} </td>
                    <td> {{$event->harga}} </td>
                    <td>
                        <x-event.modal-verifikasi-event :event="$event"/>

                    </td>
                </tr>
                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Event</th>
                    <th>Jenis</th>
                    <th>Tanggal & Waktu</th>
                    <th>Kuota</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection

@section('script')

<!-- DataTables -->
<script src="/adminlte/plugins/datatables/jquery.dataTables.js"></script>
<script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
    $(function () {
        $("#example1").DataTable();
    })
</script>

@endsection
