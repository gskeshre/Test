@extends('layout')

@section('content')

            <div class="row">
                <div class="col-sm-4" align="right">
    			     <div align="right">
                       <a href="create"> Create New User</a>
                    </div>
                </div>

                <div class="col-sm-4">

                            	 <table align="center" class="table table-border" >
                                    <tr>
                                        <th>#Id</th>
                                        <th>RollNo</th>
                                        <th>Name</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                    @foreach($stud as $use)
                                    <tr>
                                        <td>{{ $use->id }} </td>                             
                                        <td>{{ $use->rollno }}</td>
                                        <td>{{ $use->name }}</td>
                                        <td><a  href="show/{{$use->id}}" class="btn btn-primary">Show</a>    
                                            <a  href="edit/{{$use->id}}" class="btn btn-info"> Edit </a>

                                               
                                             <form action="destroy/{{$use->id}}" method="POST">
                                          
                                                @csrf
                                                @method('DELETE')
                                  
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                </div>
        </div>           
       
        
                        
@endsection