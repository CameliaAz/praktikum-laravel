<html>
   <body>
    <h1>Form Tambah Data User</h1>
    <form method="post" action="/user/tambah_simpan">
        @csrf

        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama">
        <br>
        <label>Level ID</label>
        <input type="number" name="level_id" placeholder="Masukkan ID Level">
        <br><br>
        <input type="submit" class="btn btn-success" value="Simpan">

    </form>
   </body> 
</html>