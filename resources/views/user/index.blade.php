@extends('layout.template')
@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools">
            <a class="btn btn-sm btn-primary mt-1" href="{{ url('user/create')}}">Tambah</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover table-sm"
            id="table_user">
            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
                @endif
                
            </div>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Level
                        Pengguna</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

@endsection
@push('css')
@endpush
@push('js')
<script>
    $(document).ready(function() {
        var dataUser = $('#table_user').DataTable({
            serverSide: true, // serverSide: true, jika ingin menggunakan serverside processing
            ajax: {
                "url": "{{ url('user/list') }}",
                "dataType": "json",
                "type": "POST",
                "data": function (d) {
                    d.level_id = $('#level_id').val();
                }
            },
            columns: [{
                data: "DT_RowIndex", // nomor urut dari laravel datatableaddIndexColumn()
                className: "text-center",
                orderable: false,
                searchable: false
            }, {
                data: "username",
                className: "",
                orderable: true, // orderable: true, jika ingin kolom ini bisadiurutkan
                searchable: true // searchable: true, jika ingin kolom ini bisadicari
            }, {
                data: "nama",
                className: "",
                orderable: true, // orderable: true, jika ingin kolom ini bisadiurutkan
                searchable: true // searchable: true, jika ingin kolom ini bisadicari
            }, {
                data: "level_id",
                className: "",
                orderable: false, // orderable: true, jika ingin kolom ini bisadiurutkan
                searchable: false // searchable: true, jika ingin kolom ini bisadicari
            }, {
                data: "aksi",
                className: "",
                orderable: false, // orderable: true, jika ingin kolom ini bisadiurutkan
                searchable: false // searchable: true, jika ingin kolom ini bisadicari
            }]
        });
        

    });
</script>
@endpush