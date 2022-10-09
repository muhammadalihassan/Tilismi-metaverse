<?php  
$project_open = App\Models\attributes::where('attribute' , 'project')->where('is_active' ,1)->get();
?>
<div class="modal fade" id="exampleModaltooltip2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle2" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle2">Switch to</h5>
                                    
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        @if($project_open)
                                            @foreach($project_open as $project)
                                                <a href="{{route('switch_project' , [$project->id])}}">
                                                <div class="col-12 col-md-12 col-lg-12 mt-12 role-assign-modal" data-role_id="{{$project->id}}" data-rolename='{{$project->role}}' style="cursor: pointer;">
                                                    <div class="card border-bottom-0">
                                                        <div class="card-content border-bottom border-primary border-w-5" style="border-color: {{$project->color}} !important;">
                                                            <div class="card-body p-4">
                                                                <div class="d-flex">
                                                                    <div class="circle-50 outline-badge-primary" style="color: {{$project->color}};border: 1px solid {{$project->color}};"><span class="cf card-liner-icon cf-xsn mt-2"></span></div>
                                                                    <div class="media-body align-self-center pl-3">
                                                                        <span class="mb-0 h6 font-w-600">{{$project->name}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </a>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                            <div id="addrole-modal" class="modal fade" role="dialog">
            <div class="modal-dialog text-left">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title show-role-name" id="model-header"></h4>
                    </div>
                    <div class="modal-body">
                        <form method='POST' action="{{route('roleassign_submit')}}" id='assign-role-form'>
                        @csrf
                        <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Role</th>
                            <th scope="col">Create</th>
                            <th scope="col">View</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody id="body_modal">
                        </tbody>
                        
                      </table>
                      </form>
                    </div>
                    <div class="modal-footer">
                        <button id="discard" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                        <button id="former-submit" type="button" class="btn btn-primary eventbutton">Save and Update</button>
                    </div>
                </div>
            </div>
        </div>