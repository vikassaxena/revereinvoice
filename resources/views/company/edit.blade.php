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
                 <div class="card-header">Update Your Company</div>
            <form method="POST" action="{{route('company.update')}}"  >
                        @csrf

                        <input type="hidden" name="cid" value="{{$company->id}}">
                  <div class="card-body">
                    <div class="form-group">
                         <label for="">Company Name</label>
                         <input type="text" name="cname" class="form-control" value="{{$company->cname}}">
                     </div>
                     <div class="form-group">
                         <label for="">Owner Name</label>
                         <input type="text" name="owner" class="form-control" value="{{$company->owner}}">
                     </div>
                     <div class="form-group">
                         <label for="">Address</label>
                         <input type="text" name="address" class="form-control" value="{{$company->address}}">
                     </div>
                      <div class="form-group">
                         <label for="">Phone1</label>
                         <input type="text" name="phone1" class="form-control"  value="{{$company->phone1}}">
                     </div>

                      <div class="form-group">
                         <label for="">Phone2</label>
                         <input type="text" name="phone2" class="form-control"  value="{{$company->phone2}}">
                     </div>
                      <div class="form-group">
                         <label for="">Website</label>
                         <input type="text" name="website" class="form-control" value="{{$company->website}}">
                     </div>
                      <div class="form-group">
                         <label for="">PIN</label>
                         <input type="text" name="pin" class="form-control" value="{{$company->pin}}">
                     </div>
                     <div class="form-group">
                         <label for="">TIN</label>
                         <input type="text" name="tin" class="form-control" value="{{$company->tin}}">
                     </div>
                      

                      <div class="form-group">
                          
                          <button type="submit" class="btn btn-success">Update</button>

                     </div>

                    
             </div>
         </form>
             </div>

         </div>

       
    </div>
</div>
@endsection
