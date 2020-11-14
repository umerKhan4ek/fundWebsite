@extends('admin.home')
@section('Funds')
<br><br>
<h3>Available Funds</h3>
<button type="button"  class="btn btn-info" data-toggle="modal" data-target="#myModal">Add new</button>

<!-- <button  data-toggle="model" data-target="#addmodel">Add New</button> -->
<div class="container mt-5 ">
<div class="row">
<div class="col-lg-8">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(Session::has('msg'))
<p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('msg') }}</p>
@endif
<table class="table" id="example">

<thead >
    <tr class="bg-dark text-light"> 
    <th >S no</th>
    <th>Value</th>
    <th>Discrition</th>
    <th>Logo</th>
    <th>Actions</th>
    </tr>
</thead>
<tbody>
    @foreach($funds as $fund)
    <tr class="font-weight-bold">
    <td>{{$loop->iteration}}</td>
    <td>{{$fund->funds}}</td>
    <td>{{$fund->discription}}</td>
    <td><img src="/images/{{$fund->logo}}" alt="name" width="40"></td>
    <td>
      {{-- <i class="fa fa-pencil-square-o" aria-hidden="true"></i> --}}
      <a href="{{route('editfund',$fund->id)}}" class="btn btn-dark"><i class="fa fa-edit text-white" aria-hidden="true"></i></a>
    <a href="{{url('deletefund',$fund->id)}}" class="btn btn-danger"><i class="fa fa-trash text-white" aria-hidden="true"></i></a>

    </tr>
    @endforeach
</tbody>

</table>
</div>
</div>

</div>
<!-- Modal -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      
        <h4 class="modal-title">Add Fund</h4>
       
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
            <form action="{{url('/addfund')}}" method="POST"  enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="my-input">Value</label>
                    <input id="my-input" class="form-control" type="number" name="name">
                </div>
                <div class="form-group">
                    <label for="my-input">Discription</label>
                    <input id="my-input" class="form-control" type="text" name="discription">
                </div>
                <div class="form-group">
                    <label for="my-input">Logo</label>
                    <input id="my-input" class="form-control" type="file" name="logo">
                </div>
                <input type="submit" value="Save" class="btn btn-info">
                

                
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

@endsection