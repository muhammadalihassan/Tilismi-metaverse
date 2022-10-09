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
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-header  justify-content-between align-items-center">                               
                                <h4 class="card-title">Employee</h4> 
                            </div>
                            <div class="card-body">

                                <div class="sort-panel">
                                    <div class="form-group row">
                                        <label for="sortingField" class="col-sm-1 col-form-label">Sorting:</label>
                                        <div class="col-sm-2 d-flex">
                                            <select id="sortingField" class="form-control">
                                                <option>Role</option>
                                                <option>Create</option>
                                                <option>View</option>
                                                <option>Edit</option>
                                                <option>Delete</option>
                                            </select>
                                            <button type="button" class="btn btn-primary ml-2" id="sort">Sort</button>
                                        </div>

                                    </div>

                                </div>
                                <div id="userRoleSorting"></div>

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
    $("#userRoleSorting").jsGrid({
        height: "80%",
        width: "100%",

        autoload: true,
        selecting: false,

        controller: db,

        fields: [
            {name: "Role", type: "text", width: 150},
            {name: "Create", type: "checkbox", title: "Create"},
            {name: "View", type: "checkbox", title: "View"},
            {name: "Edit", type: "checkbox", title: "Edit"},
            {name: "Delete", type: "checkbox", title: "Delete"}
        ]
    });
</script>
@endsection