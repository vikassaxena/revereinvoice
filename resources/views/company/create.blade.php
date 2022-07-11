@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
          

         <div class="col-md-5">
             @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                     @endif
             <div class="card">
                 <div class="card-header">Create Your Company</div>
            <form method="POST" action="{{route('company.store')}}" >
                        @csrf
                  <div class="card-body">
                    <div class="form-group">
                         <label for="">Company Name</label>
                         <input type="text" name="cname" class="form-control">
                     </div>
                     <div class="form-group">
                         <label for="">Owner Name</label>
                         <input type="text" name="owner" class="form-control">
                     </div>
                     <div class="form-group">
                         <label for="">Address</label>
                         <input type="text" name="address" class="form-control">
                     </div>
                      <div class="form-group">
                         <label for="">Phone1</label>
                         <input type="text" name="phone1" class="form-control"  v>
                     </div>

                      <div class="form-group">
                         <label for="">Phone2</label>
                         <input type="text" name="phone2" class="form-control"  v>
                     </div>
                      <div class="form-group">
                         <label for="">Website</label>
                         <input type="text" name="website" class="form-control">
                     </div>
                      <div class="form-group">
                         <label for="">PIN</label>
                         <input type="text" name="pin" class="form-control">
                     </div>
                     <div class="form-group">
                         <label for="">TIN</label>
                         <input type="text" name="tin" class="form-control">
                     </div>
                      

                      <div class="form-group">
                          
                          <button type="submit" class="btn btn-success">Submit</button>

                     </div>

                    
             </div>
         </form>
             </div>

         </div>

       
    </div>
</div>
@endsection
