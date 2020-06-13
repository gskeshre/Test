
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
        <h2>Add New User</h2>
    </div>
    <div>
        <a  href="index"> Back</a>
        </div>

<form action="store" method="POST">
    @csrf
  
     <div>
                <strong>Roll No:</strong>
                <input type="text" name="rollno" class="form-control" placeholder="Roll" required>
     </div>
                <strong>User Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" required>
        </div>
        
        <div >
                <button type="submit" >Submit</button>
        </div>
    </div>
   
</form>
</body>
</html>
