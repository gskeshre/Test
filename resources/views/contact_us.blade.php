contact us page
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
   {{ csrf_field() }}
    
   <label> Display User </label>
   <input type="submit" value="Submit">

         <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show User</h2> <br>
            </div>
            <div>
                <a class="btn btn-primary" href="/sample"> Back</a>
            </div>
        </div>
    </div>
   @foreach($users as $user)
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $user->name }}
            </div><br>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Username:</strong>
                {{ $user->uname }}
            </div><br>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                {{ $user->password }}
            </div><br>
        </div>
    </div>
    @endforeach

</form>
</body>
</html>


