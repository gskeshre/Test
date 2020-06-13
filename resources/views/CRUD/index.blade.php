@extends('layout')
 
@section('content')

 <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 7 CRUD Example </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('user.create') }}"> Create New User</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>UserName</th>
            <th>Password</th>
            <th width="280px">Action</th>
        </tr>
        @foreach($users as $use)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $use->name }}</td>
            <td>{{ $use->uname }}</td>
            <td>{{ $use->password }}</td>
            <td>
                 <form action="{{ route('user.destroy',$use->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('user.show',$use->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('user.edit',$use->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    
      
@endsection