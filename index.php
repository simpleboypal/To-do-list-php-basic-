<?php require('config.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <title>task management</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="card">
          <div class="card-header">
             <div class="container">
                 <div class="row">
                     <a name="" id="" class="btn btn-primary" href="create.php" role="button">Add task</a>
                 </div>
                 
             </div>
            </div>
    <div class="container">    
        <h4>Manage Task</h4> 
    <table class="table">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Task title</th>
                <th>Task description</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $select_query= "SELECT * FROM tasks";
        $select_result= mysqli_query($conn,$select_query);
        $i=0;

        while($data_row = mysqli_fetch_array($select_result))
        {
          $i++;
             ?>

            <tr>
                <td scope="row"><?php echo $i; ?></td>
                <td><?php echo $data_row['title']; ?></td>
                <td><?php echo $data_row['des']; ?></td>
                <td>
                <a name="" id="" class="btn btn-primary" href="edit.php?id=<?php echo $data_row['id']; ?>" role="button">Edit</a>
                 <a name="" id="" class="btn btn-danger" href="delete.php?id=<?php echo $data_row['id']; ?>" role="button">Delete</a>
                    </td>    
            </tr>
           <?php
        }
           ?>
        </tbody>
    </table>
    </div> 
    <div class="card-footer text-muted">
           Developed by ME
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>