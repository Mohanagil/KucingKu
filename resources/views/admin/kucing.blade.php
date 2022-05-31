@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Data Kucing</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Cats List</li>
    </ol>
    <a class="btn btn-success" style="float: right" href="{{route('kucing.tambah')}}">Tambah Data</a><br><br>
    <div class="card mb-4">
        <div class="card-body">
            <table id="table-list">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Ras</th>
                        <th>Umur</th>
                        <th>Berat</th>
                        <th>Jenis Kelamin</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
<script type="text/javascript">
    $(document).ready(function () {
        $('#table-list').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{route('kucing.data')}}',
            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                },
                {
                    data: 'image',
                    name: 'image'
                    searchable:false,
                    orderable:false;
                },
                {
                    data: 'ras',
                    name: 'ras'
                },
                {
                    data: 'umur',
                    name: 'umur'
                },
                {
                    data: 'berat',
                    name: 'berat'
                },
                {
                    data: 'jenis_kelamin',
                    name: 'jenis_kelamin'
                },
                {
                    data:
                    name:
                },
            ]
        });
    });
</script>
