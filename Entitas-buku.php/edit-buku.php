<?php 
  
  //panggil koneksi database
  include('koneksi.php');
  
  $id = $_GET['id'];
  //var_dunp($id)
  
  $query = "SELECT * FROM buku WHERE id_buku = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit buku</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT BUKU
            </div>
            <div class="card-body">
              <form action="update.php" method="POST">
               
                <input hidden name="id_buku" value="<?php echo $row['id_buku'] ?>" placeholder="Masukkan id_buku" class="form-control">

                <div class="form-group">
                  <label>judul</label>
                  <input type="text" class="form-control" name="judul" placeholder="Masukkan judul" value="<?php echo $row['judul'] ?>" rows="4"/>
                </div>
                 
                <div class="form-group">
                  <label>pengarang</label>
                  <input type="text" class="form-control" name="pengarang" placeholder="Masukkan pengarang" value="<?php echo $row['pengarang'] ?>" rows="4"/>
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