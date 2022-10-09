@extends('layouts.main')
@section('content') 
<main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><span class="h4 my-auto">User Designation</span></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item">User</li>
                                <li class="breadcrumb-item active"><a href="{{route('designations.index')}}">Department</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <!-- <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2> -->
            </div>
            <div class="pull-right text-right p-2">
                <a class="btn btn-success" href="" data-toggle="modal" data-target="#AddModal"> Create New designation</a>
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
            <th>No</th>
            <th>Title</th>
            <!-- <th>Details</th> -->
            <th width="280px">Action</th>
        </tr>
        @foreach ($designations as $designation)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $designation->name }}</td>
            <!-- <td>{{ $designation->detail }}</td> -->
            <td>
                <form action="{{ route('designations.destroy',$designation->id) }}" method="POST"  class="form-delete">
   
                    <a class="btn btn-info" href="{{ route('designations.show',$designation->id) }}" data-toggle="modal" data-target="#showModal{{$designation->id}}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('designations.edit',$designation->id) }}" data-toggle="modal" data-target="#editModal{{$designation->id}}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger delete_button" onclick="return confirm('Are you sure you want to delete this designation?');">Delete</button>
                </form>
            </td>
        </tr>
<!-- Show Modal start -->
<div class="modal fade" id="ShowModal{{$designation->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLongTitle1">Show Designation</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
               </button>
            </div>
            <div class="modal-body">
               
               <div class="document-content">  
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID:</strong>
                    <input type="text" value="{{ $designation->id }}" class="form-control mt-2" placeholder="ID" readonly>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" value="{{ $designation->name }}" class="form-control mt-2" placeholder="Name" readonly>
                </div>
            </div>
        </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <!-- <button type="submit" class="btn btn-primary">Save changes</button> -->
            </div>
    </form>
         </div>
      </div>
</div>
</div>
</div>
<!-- Show Modal start -->
<!-- Edit Modal start -->
<div class="modal fade" id="editModal{{$designation->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$designation->id}}" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLongTitle{{$designation->id}}">Edit Designation</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
               </button>
            </div>
            <div class="modal-body">
               
               <div class="document-content">

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('designations.update',$designation->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="name" value="{{ $designation->name }}" class="form-control mt-2" placeholder="Name">
                </div>
            </div>
        </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
    </form>
         </div>
      </div>
</div>
</div>
</div>
<!-- Edit Modal start -->

        @endforeach
    </table>
  
    {!! $designations->links() !!}
      
                
                <div class="row mt-3"></div>
                <!-- END: Card DATA-->
            </div>
</main>
    
@endsection

@section('css')
<style type="text/css">
    
</style>
@endsection

@section('js')
@endsection
<!-- Add Modal start -->
<div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLongTitle">Add Designation</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
               </button>
            </div>
            <div class="modal-body">
               
               <div class="document-content">

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 
<form action="{{ route('designations.store') }}" method="POST">
    @csrf  
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title</strong>
                    <input type="text" name="name" value="" class="form-control mt-2" placeholder="Name">
                </div>
            </div>
        </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
    </form>
         </div>
      </div>
</div>
</div>
</div>
<!-- Add Modal start -->