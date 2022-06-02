@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Data Blog</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Blog Data</li>
    </ol>
    <a class="btn btn-success" style="float: right" href="{{route('blog.tambah')}}">Tambah Data</a><br><br>
    <div class="card mb-4">
        <div class="card-body">
            <table id="table-list">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>penulis</th>
                        <th>judul</th>
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
            ajax: '{{route('blog.data')}}',
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
                },
                {
                    data: 'penulis',
                    name: 'penulis'
                },
                {
                    data: 'judul',
                    name: 'judul'
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
