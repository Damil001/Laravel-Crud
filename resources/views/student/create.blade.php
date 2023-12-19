<!DOCTYPE html>
<html>
<head>
 <title>Add New Student</title>
 <!-- For Success alert that appears after deletion -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.
css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 <h2 style="border: 1px solid black; background-color:DodgerBlue; text-align:center;">
 Add New Student
 </h2>
 <!-- For Redirecting With Flashed Session Data when 'Submit' button -->
 <!-- is pressed in the 'create.blade.php' view which calls the relevant -->
 <!-- function 'store' in the StudentController and then this -->
 <!-- view, 'create.blade.php' is again called -->
 <!-- START -->
 @if (session('status'))
 <div class="alert alert-success alert-dismissible">
 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 {{ session('status') }}
 </div>
 @endif
 <!-- END -->
 <form action="/student/store" method="post">
 @csrf
 <label for="cnic">Student CNIC: &nbsp;</label>
 <input type="text" id="cnic" name="cnic" value="12101-1133234-8"><br><br>
 <label for="name">Name: &nbsp;</label>
 <input type="text" id="name" name="name" value="DAMIL"><br><br>
 <label for="address">Address: &nbsp;</label>
 <input type="text" id="address" name="address" value="sialkot"><br><br>
 <label for="telNo">Tel. No.: &nbsp;</label>
 <input type="text" id="telNo" name="telNo" value="0333#######"><br><br>
 <label for="age">Age: &nbsp;</label>
 <input type="text" id="age" name="age" value="21"><br><br>
 <input type="submit" value="Submit">
 </form>
</body>
</html>