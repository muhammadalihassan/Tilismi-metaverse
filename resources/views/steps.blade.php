@extends('layouts.main') @section('content')

<main>
    <div class="container-fluid site-width">

        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="row">
                    {{--
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModaltooltip">Function </button>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModaltooltip2">Project </button>
                    <div class="modal fade" id="exampleModaltooltip" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle2" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle2">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-12 col-md-12 mt-12">
                                        <div class="card bg-dark text-white">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h4 class="card-title">Polaris skin</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="skin skin-polaris">
                                                    <ul class="list list-unstyled mr-3">
                                                        <li>
                                                            <input tabindex="21" type="checkbox" id="polaris-checkbox-1" />
                                                            <label for="polaris-checkbox-1">Checkbox 1</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="22" type="checkbox" id="polaris-checkbox-2" checked />
                                                            <label for="polaris-checkbox-2">Checkbox 2</label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" id="polaris-checkbox-disabled" disabled />
                                                            <label for="polaris-checkbox-disabled">Disabled</label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" id="polaris-checkbox-disabled-checked" checked disabled />
                                                            <label for="polaris-checkbox-disabled-checked">Disabled &amp; checked</label>
                                                        </li>
                                                    </ul>
                                                    <ul class="list list-unstyled mr-3">
                                                        <li>
                                                            <input tabindex="23" type="radio" id="polaris-radio-1" name="polaris-radio" />
                                                            <label for="polaris-radio-1">Radio button 1</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="24" type="radio" id="polaris-radio-2" name="polaris-radio" checked />
                                                            <label for="polaris-radio-2">Radio button 2</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="polaris-radio-disabled" disabled />
                                                            <label for="polaris-radio-disabled">Disabled</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="polaris-radio-disabled-checked" checked disabled />
                                                            <label for="polaris-radio-disabled-checked">Disabled &amp; checked</label>
                                                        </li>
                                                    </ul>

                                                    <ul class="list list-unstyled">
                                                        <li>
                                                            <div class="state icheckbox_polaris"></div>
                                                            <div class="state iradio_polaris"></div>
                                                            Normal
                                                        </li>
                                                        <li>
                                                            <div class="state icheckbox_polaris hover"></div>
                                                            <div class="state iradio_polaris hover"></div>
                                                            Hover
                                                        </li>
                                                        <li>
                                                            <div class="state icheckbox_polaris checked"></div>
                                                            <div class="state iradio_polaris checked"></div>
                                                            Checked
                                                        </li>
                                                        <li>
                                                            <div class="state icheckbox_polaris disabled"></div>
                                                            <div class="state iradio_polaris disabled"></div>
                                                            Disabled
                                                        </li>
                                                        <li>
                                                            <div class="state icheckbox_polaris checked disabled"></div>
                                                            <div class="state iradio_polaris checked disabled"></div>
                                                            Disabled &amp; checked
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="exampleModaltooltip2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle2" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle2">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Popover in a modal</h5>
                                    <p>
                                        This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-toggle="popover" data-content="Popover body content is set in this attribute.">button</a> triggers a
                                        popover on click.
                                    </p>
                                    <hr />
                                    <h5>Tooltips in a modal</h5>
                                    <p><a href="#" class="tooltip-test" data-toggle="tooltip" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" data-toggle="tooltip" title="Tooltip">that link</a> have tooltips on hover.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                    --}}

                    <div class="modal fade" id="exampleModaltooltip2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle2" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle2">Switch to</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        @if($projects)
                                            @foreach($projects as $project)
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

                </div>
            </div>
        </div>
        <!-- END: Card DATA-->
    </div>
</main>

@endsection @section('css')
<style type="text/css"></style>
<link rel="stylesheet" href="{{asset('vendors/icheck/skins/all.css')}}" />
@endsection @section('js')
<!-- START: Page Vendor JS-->
<script src="{{asset('vendors/icheck/icheck.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- START: Page Script JS-->
<script src="{{asset('js/icheck.script.js')}}"></script>
<!-- END: Page Script JS-->
<script type="text/javascript">
    //$("#exampleModaltooltip2").modal("show");
</script>
@endsection
