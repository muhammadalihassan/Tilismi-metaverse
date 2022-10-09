@extends('layouts.main') 
@section('content')
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12 align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto"><span class="h4 my-auto">Sheet Upload</span></div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item" aria-current="page">Attendance</li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#">Sheet Upload</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="row">
                    
                    <div class="col-12 col-md-6 mt-3">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title">User Attendance</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('attendance_import_submit') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="custom-file overflow-hidden rounded-pill mb-5">
                                    <input id="customFile1" type="file" name="file" class="custom-file-input rounded-pill" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" required="" />
                                    <label for="customFile1" class="custom-file-label rounded-pill">Choose file</label>
                                </div>
                                <button class="btn btn-success" type="submit">Import Attendance Data</button>
                                </form>
                                <!-- End -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END: Card DATA-->
    </div>
</main>
@endsection @section('css')
<style type="text/css"></style>
@endsection @section('js') @endsection
