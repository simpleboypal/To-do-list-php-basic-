<?php require('config.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <title>edit management</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php 
         if (isset($_GET['id'])){
            $id = $_GET['id'];

            // to fetch
            $select_query = "SELECT * FROM tasks WHERE id=$id";
            $select_result = mysqli_query($conn,$select_query);
            $select_row = $select_result->fetch_assoc();

            $select_title = $select_row['title'];
            $select_des = $select_row['des'];

         }
         ?>
      <div class="card">
          <div class="card-header">
             <div class="container">
                 <div class="row">
                     <a name="" id="" class="btn btn-primary" href="index.php" role="button">Manage task</a>
                 </div>
             </div>
            </div>
    <div class="container">     
    <div class="row">
        <h3>edit Task</h3>
      <div class="col-md-12">
    
      <?php
       if (isset($_POST['submit'])){
        $title = $_POST['title'];
        $des = $_POST['des'];

        $update_query = "UPDATE tasks SET title='$title',des='$des' WHERE id=$id";
        $update_result = mysqli_query($conn,$update_query);
       
    if($update_result){
    ?>
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading"><?php echo "updated sucessfully"; ?>  </h4>
    
     
    </div>
    <?php 
    }
    else{
        echo "not sucess";
    }
    }
      ?>
      <form action="#" method="POST" enctype="multipart/form-data">  
      <div class="form-group">
         <label for="">Task Title</label>
         <input type="text"  value="<?php echo $select_title;?>" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId">
      </div>
      <div class="form-group">
         <label for="">Task Description</label>
        <textarea  class="form-control" name="des" id="" cols="30" rows="5"><?php echo $select_des;?></textarea>         
       </div>
       <button type="submit"  class="btn btn-primary" name="submit">Submit</button>
      </div>
      </form>
    </div>
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