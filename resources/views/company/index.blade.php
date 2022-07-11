@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-md-12">
     
        

         <table class="table">
            <thead>
                <th>NO</th>
                <th>Company</th>
                <th>Owner</th>
                <th>Address</th>
                <th>Phone1</th>
                <th>Phone2</th>                 
                <th>#</th>
            </thead>
            <tbody>

                @if(count($company)>0)
                @foreach($company as $index => $c)
                <tr>
                    <td>{{$index+1}}</td>                      
                    <td>{{$c->cname}}</td>
                    <td>{{$c->owner}}</td>
                    <td>{{$c->address}}</td>
                    <td>{{$c->phone1}}</td>
                    <td>{{$c->phone2}}</td>
                     
                    <td>
                        <a href="" id="ShowCompany" data-toggle="modal" data-target='#practice_modal' data-id="{{ $c->id }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                       
                        <a href="{{route('company.edit',[$c->id])}}"><i class="fa fa-edit"></i></a>
                        <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                    
                </tr>
                @endforeach
                @else
                <tr><td colspan="8">No Record Found</td></tr>
                @endif
            </tbody>
        </table>

        <div class="modal fade" id="practice_modal">
                        <div class="modal-dialog">
                           <form id="companydata">
                                <div class="modal-content">
                                <div class="col-md-12">
             
                       
                <div class="card">
                    <div class="card-header">About Your Company</div>
                    <div class="card-body">
                    <p>Company Name : <span id="cname"></span>  </p>
                    <p>Company Owner : <span id="owner"></span> </p>
                    <p>Company Address : <span id="address"></span> </p>
                    <p>Company Phone1: <span id="phone1"></span>  </p>
                    <p>Company Phone2 : <span id="phone2"></span>  </p>
                    <p>Company Website : <span id="website"></span>  </p>
                    <p>Company PIN : <span id="pin"></span>  </p>
                    <p>Company TIN : <span id="tin"></span>  </p>
                         
                    </div>
                </div>
          
            
             
         </div>
                            </div>
                           </form>
                        </div>
                    </div>
    
</div>
</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script>

$(document).ready(function () {

$('body').on('click', '#ShowCompany', function (event) {

    
    event.preventDefault();

    var id = $(this).data('id');
    $.get('company/' + id + '/show', function (data) {
 
        $('#cname').html(data.data.cname);
        $('#owner').html(data.data.owner);
        $('#address').html(data.data.address);
        $('#phone1').html(data.data.phone1);
        $('#phone1').html(data.data.phone2);
        $('#website').html(data.data.website);
        $('#pin').html(data.data.pin);
        $('#tin').html(data.data.tin); 
         
     })
  
});

}); 
</script>