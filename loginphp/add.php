<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Add Users</title>
</head>

<body>

    <a href="index.php" type="buttom" href="add.php" class="btn btn-dark btn-primary">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1"> 
    <div class="card mx-auto d-block text-center" style="width: 18rem;">
  <img src="img/haha.jpg" class="card-img-top rounded-circle">
  <div class="card-body">
    
  </div>
  <p>Welcome To This Website</p>
  <ul class="list-group list-group-flush text-center ">
    <li class="list-group-item">Name : <input type="text" name="name"></li>
    <li class="list-group-item">Email : <input type="text" name="email"></li>
    <li class="list-group-item">Mobile : <input type="text" name="mobile"></li>
  </ul>
  <div class="card-body pb">
  <button class="btn btn-sm btn-outline-success " input type="submit" name="Submit" value="Add">ADD</button>
    
    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
    

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }?>
    </div>
    </div>
    </form>
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>