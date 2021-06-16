<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>
<style type="text/css">
      h2{
          padding-top: 130px;
          
      }
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
      footer{
  bottom: 0;width: 100%; text-align: center;
}
</style>
<body style="background-color : #BDC3C7;">
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>
<h2 class="text-center">Transfer Money</h2>

<div class="table-responsive">
  <div class="container">
  <table class="table table-hover table-striped table-condensed table-bordered">
  <thead style="color : black;">
                    <tr>
                        <th scope="col" class="text-center py-2">Id</th>
                        <th scope="col" class="text-center py-2">Name</th>
                        <th scope="col" class="text-center py-2">E-Mail</th>
                        <th scope="col" class="text-center py-2">Balance</th>
                        <th scope="col" class="text-center py-2">Operation</th>
                    </tr>
    </thead>
    
            <tbody> 
<?php 
     while($rows=mysqli_fetch_assoc($result)){
?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #A569BD;">Transact</button></a></td> 
                    </tr>
<?php
   }
?>
            
            </tbody>
  </table>
  </div>
</div>
<footer class="footer mt-auto py-3 bg-dark">
  <div class="container">
    <span class="text-light">&copy 2021. Made by <b>SNEHA KUMARI</b> <br> Sneha Kumari Foundation</span>
  </div>
</footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>