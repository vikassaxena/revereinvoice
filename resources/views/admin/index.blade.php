@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
         
        <div class="col-md-12">
              
        <h1>Users</h1>
        <table class="table">
            <thead>
                <th></th>
                <th></th>
                 
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                     
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        
     
        </div>
    </div>
</div>
@endsection
