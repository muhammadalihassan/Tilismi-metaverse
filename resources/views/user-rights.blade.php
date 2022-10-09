@extends('layouts.main')
@section('content')    

<main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">User-Rights Assignment</h4></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item">Role</li>
                                <li class="breadcrumb-item active"><a href="#">Role Assignment</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                
                  <div class="row">
                    <div class="col-12">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Role</th>
                            <th scope="col">Create</th>
                            <th scope="col">View/Edit</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Reports</th>
                          </tr>
                        </thead>
                        <tbody>
                          @if($roles)
                          <form class="" method="POST" action="{{route('roleassign_submit')}}" id="assign-role-form">
                            @csrf
                          @foreach($roles as $key => $role)
                          <tr>
                            <td>
                              {{$role->role}}
                            </td>
                            <td><div class="custom-control custom-checkbox">
                                  <input type="checkbox" name="{{str_replace(' ','',$role->role)}}[]" class="custom-control-input" id="customCheck1{{$key}}" value="{{$role->id}}_1">
                                  <label class="custom-control-label" for="customCheck1{{$key}}">1</label>
                              </div>
                            </td>
                            
                            <td><div class="custom-control custom-checkbox">
                                  <input type="checkbox" name="{{str_replace(' ','',$role->role)}}[]" class="custom-control-input" id="customCheck2{{$key}}" value="{{$role->id}}_2">
                                  <label class="custom-control-label" for="customCheck2{{$key}}">2</label>
                              </div>
                            </td>

                            <td><div class="custom-control custom-checkbox">
                                  <input type="checkbox" name="{{str_replace(' ','',$role->role)}}[]" class="custom-control-input" id="customCheck3{{$key}}" value="{{$role->id}}_3">
                                  <label class="custom-control-label" for="customCheck3{{$key}}">3</label>
                              </div>
                            </td>

                            <td><div class="custom-control custom-checkbox">
                                  <input type="checkbox" name="{{str_replace(' ','',$role->role)}}[]" class="custom-control-input" id="customCheck4{{$key}}" value="{{$role->id}}_4">
                                  <label class="custom-control-label" for="customCheck4{{$key}}">4</label>
                              </div>
                            </td>

                          </tr>
                          @endforeach
                          </form>
                          @endif
                        </tbody>
                        
                      </table>
                      <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                            </div>
                            <div class="pull-right text-right p-2">
                                <a class="btn btn-success" id="former-submit" href="javascript:void(0)"> Save and Update</a>
                            </div>
                        </div>
                    </div>
                  </div>

                <!-- END: Card DATA-->
            </div>
        </main>

@endsection
@section('css')

@endsection
@section('js')
<script type="text/javascript">
  $("#former-submit").click(function(){
    $("#assign-role-form").submit();
  })
</script>
@endsection