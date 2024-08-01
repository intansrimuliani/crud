<?php 
  
  //panggil koneksi database
  include('koneksi.php');
  
  $id = $_GET['id'];
  //var_dunp($id)
  
  $query = "SELECT * FROM peminjaman WHERE id_peminjaman = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit peminjaman</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT PEMINJAMAN
            </div>
            <div class="card-body">
              <form action="update-Peminjaman.php" method="POST">
               
              <input hidden type="text" name="id_peminjaman" value="<?php echo $row['id_peminjaman'] ?>" placeholder="Masukkan id_peminjaman" class="form-control">
                
                <div class="form-group">
                  <label>nama anggota</label>
                  <textarea class="form-control" name="nama_anggota" placeholder="Masukkan nama anggota" rows="4"><?php echo $row['nama_anggota'] ?></textarea>
                </div>
                 
                <div class="form-group">
                  <label>nama buku</label>
                  <textarea class="form-control" name="nama_buku" placeholder="Masukkan nama buku" rows="4"><?php echo $row['nama_Buku'] ?></textarea>
                </div>


                <div class="form-group">
                  <label>jumlah peminjaman</label>
                  <textarea class="form-control" name="jumlah_peminjaman" placeholder="Masukkan jumlah peminjaman" rows="4"><?php echo $row['jumlah_peminjaman'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>tanggal peminjaman</label>
                  <textarea class="form-control" name="tanggal_peminjaman" placeholder="Masukkan tanggal peminjaman" rows="4"><?php echo $row['tanggal_peminjaman'] ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>