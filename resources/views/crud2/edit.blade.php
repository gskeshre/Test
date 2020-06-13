<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="pull-right">
                <a href="/index"> Back</a>
            </div>

            <form action="/update/{{$st['id']}}" method="POST">
              @csrf
              
            <input type="hidden" name="id" value="{{ $st['id'] }}"  placeholder="Rollno">
   
   			<div>
                    <strong>Roll No:</strong>
                    <input type="text" name="rollno" value="{{ $st['rollno'] }}"  placeholder="Rollno" required>
                </div>
            </div>
            <div>
                    <strong>User Name:</strong>
                    <input type="text" name="name" value="{{ $st['name'] }}"  placeholder="Name" required>
            </div>
            
            
            <div> 
              <button type="submit">Submit</button>
            </div>
        </div>
   
    </form>
</body>
</html>