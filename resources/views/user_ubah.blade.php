<html>
   <body>
    <h1>Form Ubah Data User</h1>
    <a href="/user">Kembali</a>
    <br><br>

    <form method="post" action="/user/ubah_simpan/{{ $data->id}}">
        @csrf
        {{ method_field('PUT')}}

        <label>Username</label>
        <input type="text" name="username" value="{{ $data->username }}">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $data->nama }}">
        <br>
        <label>Level ID</label>
        <input type="number" name="level_id" value="{{ $data->level_id }}">
        <br><br>
        <input type="submit" class="btn btn-success" value="Simpan">

    </form>
   </body> 
</html>