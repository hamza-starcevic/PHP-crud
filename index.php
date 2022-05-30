<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="Description" content="Enter your description here" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>PHP CRUD</title>
  </head>
  <body>
      <div class="container">
      <?php require_once 'process.php'; ?>

    <?php
        $mysqli = new mysqli('localhost', 'root','kenansin','phpcrud') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM data");
        //ispis($result->fetch_assoc());?>
        <div><div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
        <?php
            while($row = $result->fetch_assoc()):?>
        
        <tr>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['location'] ?></td>
            <td></td>
        </tr>
        <?php endwhile; ?>

        </table>
        </div>
        
        <?php
        function ispis($niz) {
            echo '<pre>';
            print_r($niz);
            echo '</pre>';
        }
    ?>

      <div class="row justify-content-center">
    <form action="process.php" method="post">
      <div class="form-group">
        <label>Name</label>
      <input type="text" name="name" class="form-control" value="Enter your name" />
      <label>Location</label>
      </div>
      <div class="form-group">
      <input type="text" name="location" class="form-control" value="Enter your location" />
      </div> 
      <div class="form-group">
          <button class="btm btn-primary" type="submit" name="save">Save</button>
      </div>
    </form>
</div>
    </div>
  </body>
</html>
