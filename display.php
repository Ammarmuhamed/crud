<?php
    include 'connect.php';

    // $sql = "select * from crud.crudoperation";
    // $records = $conn->exec($sql);
		$sql = "SELECT * FROM crud.crudoperation";
		$query = $conn->prepare($sql);
		$query->execute();
        $records = $query->fetchAll();

        ?>
        
        
<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud operation</title>
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
  </head>
  <body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">add user</a> 
        
    </button>
      <table class="table">
    <thead>
      <tr>
        <th scope="col">sl no</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">mobile</th>
        <th scope="col">operation</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($records as $record){
      ?>
          <tr>
              <td scope="col"><?php echo $record['id'] ?></td>
              <td scope="col"><?php echo $record['name'] ?></td>
              <td scope="col"><?php echo $record['email'] ?></td>
              <td scope="col"><?php echo $record['mobile'] ?></td>
              <td>
              <button class = "btn btn-primary"><a href="update.php?id=<?php echo $record['id'] ?>" class="text-light">update</a></button>
              <!-- how to send id as a param on php and html  -->
              <button class = "btn btn-danger"><a href="delete.php?id=<?php echo $record['id'] ?>" class = "text-light">delete</a></button>
              </td>
          </tr>
      <?php
      } 
      ?>

    </tbody>
  </table>
    </div>
    
  </body>
</html>