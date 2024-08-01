<?php 
  
  //panggil koneksi database
  include('koneksi.php');
  
  $id = $_GET['id'];
  //var_dunp($id)
  
  $query = "SELECT * FROM pegawai WHERE id_pegawai = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit pegawai</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT PEGAWAI
            </div>
            <div class="card-body">
              <form action="update-pegawai.php" method="POST">
               
              <div class="form-group">
                <label>id pegawai</label>
                  <input type="varchar" name="id_pegawai" value="<?php echo $row['id_pegawai'] ?>" placeholder="Masukkan id_pegawai" class="form-control">
                </div>

                <div class="form-group">
                <label>Nama pegawai</label>
                  <input type="text" name="nama_pegawai" value="<?php echo $row['nama_pegawai'] ?>" placeholder="Masukkan Nama pegawai" class="form-control">
                </div>


                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat pegawai" rows="4"><?php echo $row['alamat'] ?></textarea>
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