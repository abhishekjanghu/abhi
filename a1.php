<html>
<head>
<title>Student Registration </title>
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="login-box">
   <div class="row">
         <div class="col-md-6">
             <h2 >Details</h2>
             <form action="reg.php" method="post">
             <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
                </div>
             
            <div class="form-group">
                <label>Age</label>
                <input type="text" name="age" class="form-control" required>
                </div>
            <div class="form-group">
                <label>Roll Number</label>
                <input type="text" name="rollno" class="form-control" required>
                </div>
            <div class="form-group">
                <label>Marks1</label>
                <input type="text" name="m1" class="form-control" required>
                </div>
            <div class="form-group">
                <label>Marks2</label>
                <input type="text" name="m2" class="form-control" required>
                </div>
	     <div class="Abhishek">
            <button type="submit" class="btn btn-primary">Register</button>
            </div></form>
         </div>
      </div>
</div>
</div>
</body>
</html>
