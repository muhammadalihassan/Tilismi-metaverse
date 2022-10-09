@extends('layouts.main')
@section('content') 

<main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">System Setting</h4></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item">System</li>
                                <li class="breadcrumb-item active"><a href="#">Configuration</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-header">                               
                                <h4 class="card-title">Web CMS</h4>                                
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            <form class="needs-validation" novalidate action="{{route('config_update')}}" method="POST">
                                            	@csrf
                                                <div class="form-row">
                                                    @if($config)
                                                    @foreach($config as $key => $val)
                                                    <div class="col-md-12 mb-12">
                                                        <label for="validationCustomUsername"></label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroupPrepend-{{$key}}">{{$val->view}}</span>
                                                            </div>
                                                            <input type="text" name="{{$val->type}}" value="{{$val->value}}" class="form-control" id="validationCustomUsername" placeholder="{{$val->view}}" aria-describedby="inputGroupPrepend-{{$key}}" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a {{$val->view}}.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                </div>
                                               
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
@endsection
