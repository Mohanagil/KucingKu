@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Data Adopter</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Adopter Data</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            <table id="table-list">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kucing</th>
                        <th>Nama Adopter</th>
                        <th>Alamat</th>
                        <th>Profesi</th>
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
@section('js')
<script>
   $(document).ready( function () {
        $('#table-list').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{route('adopter.data')}}',
            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                },
                {
                    data: 'kucing_data.nama',
                    name: 'kucing_data.nama'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'alamat',
                    name: 'alamat'
                },
                {
                    data: 'profesi',
                    name: 'profesi'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });
    });
</script>
@endsection
