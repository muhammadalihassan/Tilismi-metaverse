<?php
namespace App\Http\Controllers;
use App\Http\Requests\RequestAttributes;
use App\Models\attributes;
use App\Models\role_assign;
use App\Models\User;
use App\Models\category;
use App\Models\products;
use App\Models\web_cms;
use App\Models\newsletter;
use App\Models\generateEvent;
use App\Models\promotions;
use App\Models\news;
use App\Models\blogs;

use Auth;
use Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;

class GenericController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $user = Helper::curren_user();

        // $att_tag = attributes::where('is_active' ,1)->select('attribute')->distinct()->get();
        // $role_assign = role_assign::where('is_active' ,1)->where("role_id" ,$user->role_id)->first();

        // View()->share('att_tag',$att_tag);
        // View()->share('role_assign',$role_assign);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
      public function delete_news($id = "")
         {
        if ($id != "") {
             $id  = base64_decode(urldecode($id));
            $news=news::find($id)->delete();
            return redirect()->back()->with('message', 'Data has been deleted');
        } else {
            return redirect()->back()->with('error', "No Record Found");
        }
     }

      public function delete_blogs($id = "")
         {
        if ($id != "") {
             $id  = base64_decode(urldecode($id));
            $blogs=blogs::find($id)->delete();
            return redirect()->back()->with('message', 'Data has been deleted');
        } else {
            return redirect()->back()->with('error', "No Record Found");
        }
    }
    public function roles()
    {
        $user = Auth::user();
        if ($user->role_id != 1) {
            return redirect()->back()->with('error', "No Link found");
        }
        $att_tag = attributes::where('is_active', 1)->select('attribute')->distinct()->get();
        $attributes = attributes::where('is_active', 1)->get();
        $role_assign = role_assign::where('is_active', 1)->where("role_id", $user->role_id)->first();

        return view('roles/roles')->with(compact('attributes', 'att_tag', 'role_assign'));
    }

    public function generic_submit(RequestAttributes $request)
    {
        // $user = User::find(Auth::user()->id);
        // $columns  = \Schema::getColumnListing("attributes");
        // $ignore = ['id' , 'is_active' ,'is_deleted' , 'created_at' , 'updated_at' ,'deleted_at'];
        //$push_in = array_diff($columns, $ignore);

        $token_ignore = ['_token' => ''];
        $post_feilds = array_diff_key($_POST, $token_ignore);
        // dd($request->file('img'));
        if ($request->file('img') != '') {
            $cover_path = ($request->file('img'))->store('logo/' . md5(Str::random(20)), 'public');
            $post_feilds['img'] = $cover_path;
        }

        try {
            attributes::insert($post_feilds);
            return redirect()->back()->with('message', 'Information updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error will saving record');
        }
    }

    public function role_assign_modal()
    {
        $user = Auth::user();
        $role_assign = role_assign::where('is_active', 1)->where("role_id", $_POST['role_id'])->first();
        $att_tag = attributes::where('is_active', 1)->select('attribute')->distinct()->get();
        $body = "";
        if ($att_tag) {
            $route = route('roleassign_submit');
            $body .= "<input type='hidden' name='role_id' id='fetch-role-id' value='" . $_POST['role_id'] . "'>";
            if ($role_assign) {
                $checker = unserialize($role_assign->assignee);
                $body .= "<input type='hidden' name='record_id' value='" . $role_assign->id . "'>";
            } else {
                $checker = [];
            }
            foreach ($att_tag as $key => $role) {
                $body .= "<tr><td>" . ucwords($role->attribute) . "</td><td><div class='custom-control custom-checkbox'>
                                  <input type='checkbox' name='assignee[]' class='custom-control-input' id='customCheck1" . $key . "' ";
                if (in_array($role->attribute . "_1", $checker)) {
                    $body .= "checked";
                }
                $body .= " value='" . $role->attribute . "_1'>
                                  <label class='custom-control-label' for='customCheck1" . $key . "'>1</label></div></td>

                            <td><div class='custom-control custom-checkbox'>
                                  <input type='checkbox' name='assignee[]' class='custom-control-input' id='customCheck2" . $key . "' ";
                if (in_array($role->attribute . "_2", $checker)) {
                    $body .= "checked";
                }
                $body .= " value='" . $role->attribute . "_2'>
                                  <label class='custom-control-label' for='customCheck2" . $key . "'>2</label></div></td>

                            <td><div class='custom-control custom-checkbox'>
                                  <input type='checkbox' name='assignee[]' class='custom-control-input' id='customCheck3" . $key . "' ";
                if (in_array($role->attribute . "_3", $checker)) {
                    $body .= "checked";
                }
                $body .= " value='" . $role->attribute . "_3'>
                                  <label class='custom-control-label' for='customCheck3" . $key . "'>3</label></div></td>

                            <td><div class='custom-control custom-checkbox'>
                                  <input type='checkbox' name='assignee[]' class='custom-control-input' id='customCheck4" . $key . "' ";
                if (in_array($role->attribute . "_4", $checker)) {
                    $body .= "checked";
                }
                $body .= " value='" . $role->attribute . "_4'>
                                  <label class='custom-control-label' for='customCheck4" . $key . "'>4</label></div></td></tr>";
            }
        }

        $bod['body'] = $body;
        $response = json_encode($bod);
        return $response;
    }

    public function roleassign_submit(Request $request)
    {
        if (isset($request->record_id) && $request->record_id != 0) {
            $role_assign = role_assign::where('is_active', 1)->where("id", $request->record_id)->first();
        } else {
            $role_assign = new role_assign;
            $role_assign->role_id = $request->role_id;
        }

        $role_assign->assignee = serialize($request->assignee);
        $role_assign->save();
        return redirect()->back()->with('message', 'Role has been assigned successfully');
    }

    public function listing($slug = '')
    {


        $user = Auth::user();
        $role_assign = role_assign::where('is_active', 1)->where("role_id", $user->role_id)->first();
        if ($role_assign) {
            $validator = Helper::check_rights($slug);
            if (is_null($validator)) {
                return redirect()->back()->with('error', "Don't have sufficient rights to access this page");
            }
        } else {
            return redirect()->back()->with('error', "Don't have sufficient rights to access this page");
        }
        $form = null;
        $table = null;
        $eloquent = '';

        if ($slug == "roles") {
            $att_tag = attributes::where('is_active', 1)->select('attribute')->distinct()->get();
            $attributes = attributes::where('is_active', 1)->where('attribute', $slug)->get();
            $is_hide = 0;
        } else {
            $att_tag = attributes::where('is_active', 1)->select('attribute')->distinct()->get();
            $attributes = attributes::where('is_active', 1)->where('attribute', $slug)->get();
            $get_eloquent = attributes::where('is_active', 1)->where('attribute', $slug)->first();
            $eloquent = ($get_eloquent->model != '') ? $get_eloquent->model : '';
            $is_hide = 1;

            if ($eloquent != '') {
                $form = $this->generated_form($slug);

                $table = $this->generated_table($slug);
            }
        }

        return view('roles/crud')->with(compact('attributes', 'att_tag', 'role_assign', 'validator', 'slug', 'is_hide', 'eloquent', 'form', 'table'));
    }

    private function generated_form($slug = '')
    {

        $body = '';

        $route_url = route('crud_generator', $slug);

        $setImage = asset("images/no-img-avalible.png");


        if ($slug == 'testimonials') {

            $body = '<form class="" id="generic-form" method="POST" action="' . $route_url . '">
                    <input type="hidden" name="_token" value="' . csrf_token() . '">
                    <input type="hidden" name="record_id" id="record_id" value="">

                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Name:</label>
                                <div class="d-flex">
                       <input id="name" placeholder="Name" name="name" class="form-control" type="text" autocomplete="off" required="" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 col-12" id="role-label">
                            <div class="form-group end-date">
                                <label for="end-date" class="">Description:</label>
                                <div class="d-flex">
                                    <textarea id="description" required name="desc" class="form-control" required=""></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>';
            return $body;
        } else if ($slug == 'footer') {

            $body = '<form class="" id="generic-form" method="POST" action="' . $route_url . '">
                    <input type="hidden" name="_token" value="' . csrf_token() . '">
                    <input type="hidden" name="record_id" id="record_id" value="">

                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Useful links</label>
                                <div class="d-flex">
                <input id="useful_links" placeholder=" Enter useful links Here" name="useful_links" class="form-control" type="text" autocomplete="off" required="" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Touch Links</label>
                                <div class="d-flex">
                                    <input id="touch_links" placeholder=" Enter touch links Here" name="touch_links" class="form-control" type="text" autocomplete="off" required="" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Description</label>
                                <div class="d-flex">
                                    <input id="description" placeholder=" Enter description Here" name="desc" class="form-control" type="text" autocomplete="off" required="" required/>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>';
            return $body;
        }else if ($slug == 'discount') {

            $body = '<form class="" id="generic-form" method="POST" action="' . $route_url . '">

                            <input type="hidden" name="_token" value="' . csrf_token() . '" />
                            <input type="hidden" name="record_id" id="record_id" value="" />

                            <div class="row">

                                <div id="assignrole"></div>
                                <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                                    <div class="form-group start-date">
                                        <label for="start-date" class="">Discount Detail</label>
                                        <div class="d-flex">
                                            <input id="discount_detail" placeholder=" Enter Discount Detail Here" name="discount_detail" class="form-control" type="text" autocomplete="off" required="" required />
                                        </div>
                                    </div>
                                </div>

                             <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Limit Price:</label>
                                <div class="d-flex">
                                    <input id="limit_price" placeholder="Limit Price" name="limit_price" class="form-control" type="text" autocomplete="off" required="" />
                                </div>
                            </div>
                        </div>
                         <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Discount</label>
                                <div class="d-flex">
                                    <input id="discount" placeholder="Discount" name="discount" class="form-control" type="text" autocomplete="off" required="" />
                                </div>
                            </div>
                        </div>
                         <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Discount Type</label>
                                <div class="d-flex">
                                 <label for="start-date" class="">%</label>
                                  <input type="radio"  class="form-control" id="discount_type" name="discount_type" value="%">

                                       <label for="start-date"  class="">Rupees</label>
                                     <input type="radio"  class="form-control" id="discount_type" name="discount_type" value="rupees">
                                </div>

                            </div>
                        </div>

                    </div>

                    </form>';
            return $body;
        }  else if ($slug == 'cmsbanner') {

            $body = '<form class="" id="generic-form" method="POST" action="' . $route_url . '" enctype="multipart/form-data">

                        <input type="hidden" name="_token" value="' . csrf_token() . '">
                        <input type="hidden" name="record_id" id="record_id" value="">

                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Page Name :</label>
                                <div class="d-flex">
                                    <input id="page_name" placeholder="Page Name" name="page_name" class="form-control" type="text" autocomplete="off" required="" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Slug :</label>
                                <div class="d-flex">
                                    <input id="slug" placeholder="Slug " name="slug" class="form-control" type="text" autocomplete="off" required="" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Description :</label>
                                <div class="d-flex">
                                    <textarea id="description"  name="desc" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Image :</label>
                                <div class="d-flex">
                                    <input id="img" type="file" placeholder=" upload Image Here" name="img" class="form-control" autocomplete="off" required="" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12 img_div" id="role-label">
                            <div class="form-group end-date">
                                <label for="end-date" class="">Image:</label>
                                <div class="d-flex">
                                    <img style="width:470px; height:200px" src="' . $setImage . '" id="editImg" alt="banner"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12 video_div" id="role-label" style="display : none;">
                            <div class="form-group end-date">

                                <video id="editVideo" width="470" height="200" autoplay muted loop>
                                    <source src="" type="video/mp4">
                                </video>

                            </div>
                        </div>


                    </div>

                </form>';
            return $body;
        }else if ($slug == 'products') {
                $category=category::where('is_active',1)->get();
            $body = '<form class="" id="generic-form" method="POST" action="' . $route_url . '" enctype="multipart/form-data">

                        <input type="hidden" name="_token" value="' . csrf_token() . '">
                        <input type="hidden" name="record_id" id="record_id" value="">

                    <div class="row">
                            <div id="assignrole"></div>
                 <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class=""> Choose Category:</label>
                                <div class="d-flex">                           
               <select name="category_id" class="form-control" id="category_id">
                <option selected="true" disabled="disabled">Select Category</option>';
                                    if ($category) {
                                        foreach($category as $key => $val){
                                            $body.='<option value="'.$val->id.'">'.$val->category_name.'</option>';
                                        }
                                    }
                                    $body.='</select>
                                </div>
                            </div>
                        </div>

             <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Product Name:</label>
                                <div class="d-flex">
                                    <input id="product_name" onload="convertToSlug(this.value)" 
           onkeyup="convertToSlug(this.value)" placeholder="Product Name" name="product_name" class="form-control" type="text" autocomplete="off" required="" />
                                </div>
                            </div>
                        </div>

                         <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Product Slug:</label>
                                <div class="d-flex">
                                    <input id="slug" placeholder="Product Slug" name="slug" class="form-control" type="text" autocomplete="off" required="" />
                                </div>
                            </div>
                        </div>
                          <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Old Price</label>
                                <div class="d-flex">
                                    <input id="old_price" placeholder="Old Price" name="old_price" class="form-control" type="text" autocomplete="off" required="" />
                                </div>
                            </div>
                        </div>

                          <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class=""> New Price:</label>
                                <div class="d-flex">
                                    <input id="new_price" placeholder="New price" name="new_price" class="form-control" type="text" autocomplete="off" required="" />
                                </div>
                            </div>
                        </div>

                         <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Stock:</label>
                                <div class="d-flex">
                                    <input id="stock" placeholder="Stock" name="stock" class="form-control" type="text" autocomplete="off" required="" />
                                </div>
                            </div>
                        </div>

               <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Item Number:</label>
                                <div class="d-flex">
                                    <input id="item_no" placeholder="Item Number" name="item_no" class="form-control" type="text" autocomplete="off" required="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Tags:</label>
                                <div class="d-flex">
                                    <input id="tags" placeholder="Tags" name="tags" class="form-control" type="text" autocomplete="off" required="" />
                                </div>
                            </div>
                        </div>


                       <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Description :</label>
                                <div class="d-flex">
                                    <textarea id="description"  name="desc" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Image :</label>
                                <div class="d-flex">
                                    <input id="img" type="file" placeholder=" upload Image Here" name="img" class="form-control" autocomplete="off" required="" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12 img_div" id="role-label">
                            <div class="form-group end-date">
                                <label for="end-date" class="">Image:</label>
                                <div class="d-flex">
                                    <img style="width:470px; height:200px" src="' . $setImage . '" id="editImg" alt="banner"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12 video_div" id="role-label" style="display : none;">
                            <div class="form-group end-date">

                                <video id="editVideo" width="470" height="200" autoplay muted loop>
                                    <source src="" type="video/mp4">
                                </video>

                            </div>
                        </div>


                    </div>

                </form>';
            return $body;
        }else if ($slug == 'navbar') {

            $body = '<form class="" id="generic-form" method="POST" action="' . $route_url . '">

                            <input type="hidden" name="_token" value="' . csrf_token() . '" />
                            <input type="hidden" name="record_id" id="record_id" value="" />

                            <div class="row">

                                <div id="assignrole"></div>
                                <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                                    <div class="form-group start-date">
                                        <label for="start-date" class=""> Page Name</label>
                                        <div class="d-flex">
                                            <input id="page_name" placeholder=" Enter Page Name Here" name="page_name" class="form-control" type="text" autocomplete="off" required="" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                                    <div class="form-group start-date">
                                        <label for="start-date" class="">Name</label>
                                        <div class="d-flex">
                                            <input id="name" placeholder=" Enter Name Here" name="name" class="form-control" type="text" autocomplete="off" required="" required />
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </form>';
            return $body;
        } else if ($slug == 'logo') {

            $body = '<form class="" id="generic-form" method="POST" action="' . $route_url . '" enctype="multipart/form-data">

                        <input type="hidden" name="_token" value="' . csrf_token() . '" />
                        <input type="hidden" name="record_id" id="record_id" value="" />

                        <div class="row">
                            <div id="assignrole"></div>
                            <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                                <div class="form-group start-date">
                                    <label for="start-date" class="">Image :</label>
                                    <div class="d-flex">
                                        <input id="img" type="file" placeholder=" upload Image Here" name="img" class="form-control" autocomplete="off" required="" required />
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 col-sm-6 col-12 img_div" id="role-label">
                                <div class="form-group end-date">
                                    <label for="end-date" class="">Image:</label>
                                    <div class="d-flex">
                                        <img style="width:470px; height:200px" src="' . $setImage . '" id="editImg" alt="banner"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-6 col-12 video_div" id="role-label" style="display : none;">
                                <div class="form-group end-date">

                                    <video id="editVideo" width="470" height="200" autoplay muted loop>
                                        <source src="" type="video/mp4">
                                    </video>

                                </div>
                            </div>

                        </div>

                    </form>';
            return $body;
        }else if ($slug == 'videos') {

            $body = '<form class="" id="generic-form" method="POST" action="' . $route_url . '" enctype="multipart/form-data">

                        <input type="hidden" name="_token" value="' . csrf_token() . '">
                        <input type="hidden" name="record_id" id="record_id" value="">

                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Heading :</label>
                                <div class="d-flex">
                                    <input id="heading" placeholder="Heading" name="heading" class="form-control" type="text" autocomplete="off" required="" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Vedio Link :</label>
                                <div class="d-flex">
                                    <input id="vedio_link" placeholder="Vedio Link " name="vedio_link" class="form-control" type="text" autocomplete="off" required="" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Image :</label>
                                <div class="d-flex">
                                    <input id="img" type="file" placeholder=" upload Image Here" name="img" class="form-control" autocomplete="off" required="" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12 img_div" id="role-label">
                            <div class="form-group end-date">
                                <label for="end-date" class="">Image:</label>
                                <div class="d-flex">
                                    <img style="width:470px; height:200px" src="' . $setImage . '" id="editImg" alt="banner"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12 video_div" id="role-label" style="display : none;">
                            <div class="form-group end-date">

                                <video id="editVideo" width="470" height="200" autoplay muted loop>
                                    <source src="" type="video/mp4">
                                </video>

                            </div>
                        </div>


                    </div>

                </form>';
            return $body;
        }else if ($slug == 'news') {

            $body = '<form class="" id="generic-form" method="POST" action="' . $route_url . '" enctype="multipart/form-data">

                        <input type="hidden" name="_token" value="' . csrf_token() . '">
                        <input type="hidden" name="record_id" id="record_id" value="">

                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Heading :</label>
                                <div class="d-flex">
                                    <input id="heading" placeholder="Heading" name="heading" class="form-control" type="text" autocomplete="off" required="" required />
                                </div>
                            </div>
                        </div>

                            <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Paragraph :</label>
                                <div class="d-flex">
                                    <textarea id="description"  name="desc" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Image :</label>
                                <div class="d-flex">
                                    <input id="img" type="file" placeholder=" upload Image Here" name="img" class="form-control" autocomplete="off" required="" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12 img_div" id="role-label">
                            <div class="form-group end-date">
                                <label for="end-date" class="">Image:</label>
                                <div class="d-flex">
                                    <img style="width:470px; height:200px" src="' . $setImage . '" id="editImg" alt="banner"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12 video_div" id="role-label" style="display : none;">
                            <div class="form-group end-date">

                                <video id="editVideo" width="470" height="200" autoplay muted loop>
                                    <source src="" type="video/mp4">
                                </video>

                            </div>
                        </div>


                    </div>


                </form>';
            return $body;
        }else if ($slug == 'blogs') {

            $body = '<form class="" id="generic-form" method="POST" action="' . $route_url . '" enctype="multipart/form-data">

                        <input type="hidden" name="_token" value="' . csrf_token() . '">
                        <input type="hidden" name="record_id" id="record_id" value="">

                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Name :</label>
                                <div class="d-flex">
                                    <input id="name" placeholder="Name" name="name" class="form-control" type="text" autocomplete="off" required="" maxlength="15" required />
                                </div>
                            </div>
                        </div>
                          <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Heading:</label>
                                <div class="d-flex">
                                   <input id="heading" placeholder="Heading" name="heading" class="form-control" type="text" autocomplete="off" required="" required />
                                </div>
                            </div>
                        </div>

                         <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Paragraph :</label>
                                <div class="d-flex">
                                    <textarea id="description"  name="desc" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Image :</label>
                                <div class="d-flex">
                                    <input id="img" type="file" placeholder=" upload Image Here" name="img" class="form-control" autocomplete="off" required="" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12 img_div" id="role-label">
                            <div class="form-group end-date">
                                <label for="end-date" class="">Image:</label>
                                <div class="d-flex">
                                    <img style="width:470px; height:200px" src="' . $setImage . '" id="editImg" alt="banner"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12 video_div" id="role-label" style="display : none;">
                            <div class="form-group end-date">

                                <video id="editVideo" width="470" height="200" autoplay muted loop>
                                    <source src="" type="video/mp4">
                                </video>

                            </div>
                        </div>


                    </div>

                </form>';
            return $body;
        }else if ($slug == 'affiliations') {

            $body = '<form class="" id="generic-form" method="POST" action="' . $route_url . '" enctype="multipart/form-data">

                        <input type="hidden" name="_token" value="' . csrf_token() . '">
                        <input type="hidden" name="record_id" id="record_id" value="">

                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Heading :</label>
                                <div class="d-flex">
                                    <input id="heading" placeholder="Heading" name="heading" class="form-control" type="text" autocomplete="off" required="" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Paragraph :</label>
                                <div class="d-flex">
                                    <input id="paragraph" placeholder="paragraph " name="paragraph" class="form-control" type="text" autocomplete="off" required="" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Image :</label>
                                <div class="d-flex">
                                    <input id="img" type="file" placeholder=" upload Image Here" name="img" class="form-control" autocomplete="off" required="" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12 img_div" id="role-label">
                            <div class="form-group end-date">
                                <label for="end-date" class="">Image:</label>
                                <div class="d-flex">
                                    <img style="width:470px; height:200px" src="' . $setImage . '" id="editImg" alt="banner"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12 video_div" id="role-label" style="display : none;">
                            <div class="form-group end-date">

                                <video id="editVideo" width="470" height="200" autoplay muted loop>
                                    <source src="" type="video/mp4">
                                </video>

                            </div>
                        </div>


                    </div>

                </form>';
            return $body;
        }else if ($slug == 'category') {

            $body = '<form class="" id="generic-form" method="POST" action="' . $route_url . '">
                    <input type="hidden" name="_token" value="' . csrf_token() . '">
                    <input type="hidden" name="record_id" id="record_id" value="">

                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Category Name</label>
                                <div class="d-flex">
                <input id="category_name" onload="convertToSlug(this.value)"
                            onkeyup="convertToSlug(this.value)" placeholder=" Enter Category Name" name="category_name" class="form-control" type="text" autocomplete="off" required="" required/>
                                </div>
                            </div>
                        </div>

                       <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Category Slug:</label>
                                <div class="d-flex">
                                    <input id="slug" placeholder="Category Slug" name="slug" class="form-control" type="text" autocomplete="off" required="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>';
            return $body;
        }else if ($slug == 'newsletter') {

            $body = '<form class="" id="generic-form" method="POST" action="' . $route_url . '">
                    <input type="hidden" name="_token" value="' . csrf_token() . '">
                    <input type="hidden" name="record_id" id="record_id" value="">

                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Email</label>
                                <div class="d-flex">
                <input id="email"  placeholder="Email" name="email" class="form-control" type="text" autocomplete="off" required="" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>';
            return $body;
        } else if ($slug == 'contactus') {
            $body = '<form class="" id="generic-form" method="POST" action="' . $route_url . '">
                        <input type="hidden" name="_token" value="' . csrf_token() . '">
                        <input type="hidden" name="record_id" id="record_id" value="">
                        <div class="row">
                            <div id="assignrole"></div>
                            <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                                <div class="form-group start-date">
                                    <label for="start-date" class="">Full Name :</label>
                                    <div class="d-flex">
                                        <input id="fname" placeholder="Full Name" name="fname" class="form-control" type="text" autocomplete="off" required="" />
                                    </div>
                                </div>
                            </div>

                        
                            <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                                <div class="form-group start-date">
                                    <label for="start-date" class="">Last Name:</label>
                                    <div class="d-flex">
                                        <input id="lname" placeholder="Last Name" name="lname" class="form-control" type="text" autocomplete="off" required="" maxlength="16" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                                <div class="form-group start-date">
                                    <label for="start-date" class="">Email :</label>
                                    <div class="d-flex">
                                        <input id="email" placeholder="Email" name="email" class="form-control" type="email" autocomplete="off" required="" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-6 col-12" id="role-label">
                                <div class="form-group end-date">
                                    <label for="end-date" class="">Message :</label>
                                    <div class="d-flex">
                                        <textarea id="message" name="message" class="form-control" required=""></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>';
            return $body;
        }else if ($slug == 'promotions') {

            $body = '<form class="" id="generic-form" method="POST" action="' . $route_url . '" enctype="multipart/form-data">

                        <input type="hidden" name="_token" value="' . csrf_token() . '">
                        <input type="hidden" name="record_id" id="record_id" value="">

                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Heading :</label>
                                <div class="d-flex">
                                    <input id="heading" placeholder="Heading" name="heading" class="form-control" type="text" autocomplete="off" required="" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Title :</label>
                                <div class="d-flex">
                                    <input id="title" placeholder="Title" name="title" class="form-control" type="text" autocomplete="off" required="" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Paragraph :</label>
                                <div class="d-flex">
                                    <input id="paragraph" placeholder="paragraph" name="   paragraph" class="form-control" type="text" autocomplete="off" required="" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Description :</label>
                                <div class="d-flex">
                                    <textarea id="description"  name="desc" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Image :</label>
                                <div class="d-flex">
                                    <input id="img" type="file" placeholder=" upload Image Here" name="img" class="form-control" autocomplete="off" required="" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12 img_div" id="role-label">
                            <div class="form-group end-date">
                                <label for="end-date" class="">Image:</label>
                                <div class="d-flex">
                                    <img style="width:470px; height:200px" src="' . $setImage . '" id="editImg" alt="banner"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12 video_div" id="role-label" style="display : none;">
                            <div class="form-group end-date">

                                <video id="editVideo" width="470" height="200" autoplay muted loop>
                                    <source src="" type="video/mp4">
                                </video>

                            </div>
                        </div>


                    </div>

                </form>';
            return $body;
        } else if ($slug == 'feedback') {
            $body = '<form class="" id="generic-form" method="POST" action="' . $route_url . '">
                        <input type="hidden" name="_token" value="' . csrf_token() . '">
                        <input type="hidden" name="record_id" id="record_id" value="">

                        <div class="row">
                            <div id="assignrole"></div>
                            <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                                <div class="form-group start-date">
                                    <label for="start-date" class="">Name :</label>
                                    <div class="d-flex">
                                        <input id="username" placeholder="Name" name="username" class="form-control" type="text" autocomplete="off" required="" />
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                                <div class="form-group start-date">
                                    <label for="start-date" class="">Email :</label>
                                    <div class="d-flex">
                                        <input id="email" placeholder="Email" name="email" class="form-control" type="email" autocomplete="off" required="" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-6 col-12" id="role-label">
                                <div class="form-group end-date">
                                    <label for="end-date" class="">Message :</label>
                                    <div class="d-flex">
                                        <textarea id="message" name="message" class="form-control" required=""></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>';
            return $body;
        } else {
            return $body;
        }
    }

    private function generated_table($slug = '')
    {
        $data = 'App\Models\\' . $slug;

        $loop = $data::where("is_active", 1)->where("is_deleted", 0)->orderBy("id", 'desc')->get();

        $setImage = asset("images/no-img-avalible.png");

        $body = '';


        if (!function_exists('mime_content_type_')) {

            function mime_content_type_($filename)
            {

                $mime_types = array(

                    'txt' => 'text/plain',
                    'htm' => 'text/html',
                    'html' => 'text/html',
                    'php' => 'text/html',
                    'css' => 'text/css',
                    'js' => 'application/javascript',
                    'json' => 'application/json',
                    'xml' => 'application/xml',
                    'swf' => 'application/x-shockwave-flash',
                    'flv' => 'video/x-flv',

                    // images
                    'png' => 'image/png',
                    'jpe' => 'image/jpeg',
                    'jpeg' => 'image/jpeg',
                    'jpg' => 'image/jpeg',
                    'gif' => 'image/gif',
                    'bmp' => 'image/bmp',
                    'ico' => 'image/vnd.microsoft.icon',
                    'tiff' => 'image/tiff',
                    'tif' => 'image/tiff',
                    'svg' => 'image/svg+xml',
                    'svgz' => 'image/svg+xml',

                    // archives
                    'zip' => 'application/zip',
                    'rar' => 'application/x-rar-compressed',
                    'exe' => 'application/x-msdownload',
                    'msi' => 'application/x-msdownload',
                    'cab' => 'application/vnd.ms-cab-compressed',

                    // audio/video
                    'mp3' => 'audio/mpeg',
                    'mp4' => 'video/mp4',
                    'qt' => 'video/quicktime',
                    'mov' => 'video/quicktime',

                    // adobe
                    'pdf' => 'application/pdf',
                    'psd' => 'image/vnd.adobe.photoshop',
                    'ai' => 'application/postscript',
                    'eps' => 'application/postscript',
                    'ps' => 'application/postscript',

                    // ms office
                    'doc' => 'application/msword',
                    'rtf' => 'application/rtf',
                    'xls' => 'application/vnd.ms-excel',
                    'ppt' => 'application/vnd.ms-powerpoint',

                    // open office
                    'odt' => 'application/vnd.oasis.opendocument.text',
                    'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
                );

                $value = explode(".", $filename);
                $ext = strtolower(array_pop($value));
                if (array_key_exists($ext, $mime_types)) {
                    return $mime_types[$ext];
                } elseif (function_exists('finfo_open')) {
                    $finfo = finfo_open(FILEINFO_MIME);
                    $mimetype = finfo_file($finfo, $filename);
                    finfo_close($finfo);
                    return $mimetype;
                } else {
                    return 'application/octet-stream';
                }
            }
        }

        if ($slug == "testimonials") {
            $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                          <th>Description</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
            if ($loop) {
                foreach ($loop as $key => $val) {
                    $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                          <td>' . $val->name . '</td>
                                          <td>' . $val->desc . '</td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '" data-name= "' . $val->name . '" data-desc= "' . $val->desc . '" >Edit</button>
                                             <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                          </td>
                                       </tr>';
                }
            }
            $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                          <th>Description</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';
            $script = '$(".editor-form").click(function(){
                                                $("#name").val($(this).data("name"))
                                                $("#record_id").val($(this).data("edit_id"))
                                                var texta = $(this).data("desc");
                                                CKEDITOR.instances.description.setData(texta);
                                                $("#addevent").modal("show")
                                            })';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
         } elseif ($slug == "category") {
            $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Category Name</th>
                                           <th>Slug</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
            if ($loop) {
                foreach ($loop as $key => $val) {
                    $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                          <td>' . $val->category_name . '</td>
                                           <td>' . $val->slug . '</td>
            

                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '" data-category_name= "' . $val->category_name . '"
                                                  data-slug= "' . $val->slug . '"
                                                  >Edit</button>
                                             <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                          </td>
                                       </tr>';
                }
            }
            $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                           <th>S. No</th>
                                          <th>Category Name</th>
                                           <th>Slug</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';
            $script = '$(".editor-form").click(function(){
                                                $("#category_name").val($(this).data("category_name"))
                                                $("#slug").val($(this).data("slug"))
                                                $("#record_id").val($(this).data("edit_id"))
                                               
                                                $("#addevent").modal("show")
                                            })';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        }elseif ($slug == "discount") {
            $body = '<thead>
                                       <tr>
                                         <th>S. No</th>
                                         <th>Discount Detail</th>
                                         <th>Limit Price</th>
                                          <th>Discount</th>
                                          <th>Discount Type</th>
                                          <th>Creation Date</th>
                                          <th>Enable Discount</th>
                                          <th>Disable Discount</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
            if ($loop) {
                foreach ($loop as $key => $val) {
                 $show_dis= route('show_discount', $val->id);
                 $disable_dis= route('disable_discount', $val->id);
                if ($val->show_discount=='1') {
                  $highlightClass = 'btn btn-success';
                  }
                 else{
                          $highlightClass = 'btn btn-warning';

                 }
                  if ($val->show_discount=='0') {
                  $highlightClass1 = 'btn btn-danger';
                  }
                 else{
                          $highlightClass1 = 'btn btn-warning';

                 }
                 
                 
                    $body .= '<tr>
                                         <td>' . ++$key . '</td>
                                         <td>' . $val->discount_detail . '</td>
                                         <td>' . $val->limit_price . '</td>
                                         <td>' . $val->discount . '</td>
                                          <td>' . $val->discount_type . '</td>
                                    

                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          
                                           <td><a class="'.$highlightClass.'" href="'. $show_dis.'" target="_blank"> Enable</td>

                                          <td><a class="'.$highlightClass1.'" href="'.$disable_dis.'" target="_blank"> Disable</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '" data-discount_detail= "' . $val->discount_detail . '"
                                             data-limit_price= "' . $val->limit_price . '"
                                             data-discount= "' . $val->discount . '"
                                             data-discount_type= "' . $val->discount_type . '"

                                                  >Edit</button>
                                             <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                          </td>
                                       </tr>';
                }
            }
            $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                        <th>S. No</th>
                                         <th>Discount Detail</th>
                                         <th>Limit Price</th>
                                          <th>Discount</th>
                                          <th>Discount Type</th>
                                          <th>Creation Date</th>
                                          <th>Enable Discount</th>
                                          <th>Disable Discount</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';
            $script = '$(".editor-form").click(function(){
                             $("#discount_detail").val($(this).data("discount_detail"))
                               $("#limit_price").val($(this).data("limit_price"))
                                    $("#discount").val($(this).data("discount"))
                                 $("#discount_type").val($(this).data("discount_type"))
                                                $("#discount").val($(this).data("discount"))

                                                $("#record_id").val($(this).data("edit_id"))
                                               
                                                $("#addevent").modal("show")
                                            })';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        }elseif ($slug == "products") {

            $image = "";

            $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Category</th>
                                          <th>Product</th>
                                           <th>Old Price</th>
                                          <th>New Price</th>
                                           <th>Stock</th>
                                           <th>Tags </th>
                                          <th>Image</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
            if ($loop) {
                foreach ($loop as $key => $val) {
      $category= category::where("is_active" ,1)->where("is_deleted" ,0)->where('id',$val->category_id)->first();
          
     
                    $imageLink = "";

                    $mime = mime_content_type_($val->img);

                    if (strstr($mime, "video/")) {

                        $imageLink = asset($val->img);

                        $image = "<video id='editImg' width='200' height='200' autoplay muted loop>
                                    <source src='$imageLink' type='video/mp4'>
                                </video>";

                    } else if (strstr($mime, "image/")) {

                        $imageLink = asset($val->img);

                        $image = "<img style='width:200px; height:150' src='$imageLink' id='editImg' alt='banner'/>";

                    }


                    $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                          <td>' . $category->category_name . '</td>
                                           <td>' . $val->product_name . '</td>
                                            
                                             <td>' . $val->old_price . '</td>
                                             <td>' . $val->new_price . '</td>
                                            <td>' . $val->stock . '</td>
                                            <td>' . $val->tags . '</td>
                                          
                                          <td>' . $image . '</td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '" data-category_id= "' . $val->category_id . '"
                                             data-product_name= "' . $val->product_name . '"
                                             data-slug= "' . $val->slug . '"
                                               data-old_price= "' .$val->old_price . '"
                                               data-new_price= "' .$val->new_price . '"
                                             data-stock= "' . $val->stock . '"
                                              data-item_no= "' .$val->item_no . '"
                                             data-tags= "' . $val->tags . '"
                                                  data-desc= "' . $val->desc . '"
                                                   data-img= "' . $val->img . '" >Edit</button>
                                             <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                          </td>
                                       </tr>';
                }
            }
            $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                         <th>S. No</th>
                                          <th>Category</th>
                                          <th>Product</th>
                                           <th>Old Price</th>
                                          <th>New Price</th>
                                           <th>Stock</th>
                                           <th>Tags</th>
                                          <th>Image</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';
            $script = '

                var imageFile = "";

                $("#page_name").keyup(function () {

                    var Text = $(this).val();

                    Text = Text.toLowerCase();

                    Text = Text.replace(/[^a-zA-Z0-9]+/g, "-");

                    $("#slug").val(Text);

                });

                $("#img").change(function (){

                    var fileExtensions = /(\.png|\.jpe|\.jpeg|\.jpg|\.gif|\.bmp|\.ico|\.tiff|\.tif|\.jfif|\.svg|\.svgz)$/i;

                    imageFile = this.files[0];

                    if (imageFile) {


                        if(fileExtensions.exec(imageFile["name"])){

                            $(".img_div").css("display","block");

                            $(".video_div").css("display","none");

                            $("#editImg").attr("src", " ");

                            $("#editImg").attr("src", URL.createObjectURL(imageFile));

                            $("#editVideo").attr("src", " ");


                        }else{

                            $(".img_div").css("display","none");

                            $(".video_div").css("display","block");

                            $("#editVideo").attr("src", " ");

                            $("#editVideo").attr("src", URL.createObjectURL(imageFile));

                            $("#editImg").attr("src", " ");

                        }

                    }

                });

                $(".updateevent").on("click", function (){

                    $("input[type=text]").val("");

                    $("input[type=number]").val("");

                    $("input[type=file]").val("");

                    CKEDITOR.instances.description.setData("");

                    $("#editImg").attr("src", "' . $setImage . '");

                    $("#editVideo").attr("src", " ");

                    $(".img_div").css("display","block");

                    $(".video_div").css("display","none");


                });

                $(".editor-form").click(function () {

                    var fileExtensions = /(\.png|\.jpe|\.jpeg|\.jpg|\.gif|\.bmp|\.ico|\.tiff|\.tif|\.jfif|\.svg|\.svgz)$/i;
                    
                    $("#category_id").val($(this).data("category_id"));
                    $("#product_name").val($(this).data("product_name"));
                    $("#slug").val($(this).data("slug"));
                    $("#old_price").val($(this).data("old_price"));
                    $("#new_price").val($(this).data("new_price"));
                     $("#item_no").val($(this).data("item_no"));
                    $("#stock").val($(this).data("stock"));
                    $("#tags").val($(this).data("tags"));

                    $("#record_id").val($(this).data("edit_id"));
                    var texta = $(this).data("desc");
                    CKEDITOR.instances.description.setData(texta);

                    var callImage = $(this).data("img");

                    if (callImage != " ") {

                         var getUrl = "' . asset('') .'" +  callImage ;
                      

                        if (fileExtensions.exec(callImage)) {
                            $(".img_div").css("display", "block");

                            $(".video_div").css("display", "none");

                            $("#editImg").attr("src", " ");

                            $("#editImg").attr("src", getUrl);

                            $("#editVideo").attr("src", " ");
                        } else {
                            $(".img_div").css("display", "none");

                            $(".video_div").css("display", "block");

                            $("#editVideo").attr("src", " ");

                            $("#editVideo").attr("src", getUrl);

                            $("#editImg").attr("src", " ");
                        }
                    }

                    $("#addevent").modal("show");
                });

                ';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        }elseif ($slug == "orders") {

            $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Product</th>
                                          <th>Price</th>
                                           <th>Quantity</th>
                                           <th>Image</th>
                                          <th>Order Details</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
            if ($loop) {
                foreach ($loop as $key1 => $val) {
                $order_detail=route('order_details',$val->id);
              if($val->product_id != "")

                  {

                  $product_id=unserialize($val->product_id);
                  // $sizes=unserialize($val->product_size);
                  $quantity=unserialize($val->product_quantity);
                
                 // $size = size::whereIn('id', $sizes)->get();
                 // $product_size="";
                 // foreach ($size as $key => $val_size) {

                
                 //  $product_size.='<li>'. $val_size->size.'</li>';
                 
                 //  }

                  $product_quantity="";
                
                 foreach ($quantity as $key => $qty) {
                  $product_quantity.='<li>'. $qty.'</li>';
                 
                }
                
                $products = products::whereIn('id', $product_id)->get();
             
                $product_name="";
                $product_price="";
                foreach ($products as $key => $pro) {
                  $product_name.='<li>'. $pro->product_name.'</li>';
                  $product_price.='<li>'. $pro->new_price.'</li>';
                }
                
                }else{

                 return  false;
                }
                
            
                    $imageLink = "";

                    $mime = mime_content_type_($pro->img);

                    if (strstr($mime, "video/")) {

                        $imageLink = asset($pro->img);

                        $image = "<video id='editImg' width='200' height='200' autoplay muted loop>
                                    <source src='$imageLink' type='video/mp4'>
                                </video>";

                    } else if (strstr($mime, "image/")) {

                        $imageLink = asset($pro->img);

                        $image = "<img style='width:200px; height:150' src='$imageLink' id='editImg' alt='banner'/>";

                    }


                    $body .= '<tr>
                                          <td>' . ++$key1 . '</td>
                                        
                                          <td><ul>'. $product_name.'</ul></td>
                                           <td><ul>'. $product_price.'</ul></td>
                                           <td><ul>'. $product_quantity.'</ul></td>
                                          

                                              <td>' . $image . '</td>
                                            <td>
                                             <a class="btn btn-warning" href="'. $order_detail.'" target="_blank"> View Order Detail</a>
                                            </td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             
                                             <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                          </td>
                                       </tr>';
                }
            }
            $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                           <th>S. No</th>
                                          <th>Product</th>
                                          <th>Price</th>
                                           <th>Quantity</th>
                                           <th>Image</th>
                                          <th>Order Details</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';


            $script = '

                                var imageFile = "";


                                $("#img").change(function (){

                                    var fileExtensions = /(\.png|\.jpe|\.jpeg|\.jpg|\.gif|\.bmp|\.ico|\.tiff|\.tif|\.jfif|\.svg|\.svgz)$/i;

                                    imageFile = this.files[0];

                                    if (imageFile) {


                                        if(fileExtensions.exec(imageFile["name"])){

                                            $(".img_div").css("display","block");

                                            $(".video_div").css("display","none");

                                            $("#editImg").attr("src", " ");

                                            $("#editImg").attr("src", URL.createObjectURL(imageFile));

                                            $("#editVideo").attr("src", " ");


                                        }else{

                                            $(".img_div").css("display","none");

                                            $(".video_div").css("display","block");

                                            $("#editVideo").attr("src", " ");

                                            $("#editVideo").attr("src", URL.createObjectURL(imageFile));

                                            $("#editImg").attr("src", " ");


                                        }

                                    }

                                });

                                $(".updateevent").on("click", function (){

                                    $("input[type=text]").val("");

                                    $("input[type=number]").val("");

                                    $("input[type=file]").val("");

                                    $("#editImg").attr("src", "' . $setImage . '");

                                    $("#editVideo").attr("src", " ");

                                    $(".img_div").css("display","block");

                                    $(".video_div").css("display","none");

                                });

                                    $(".editor-form").click(function(){

                                            var fileExtensions = /(\.png|\.jpe|\.jpeg|\.jpg|\.gif|\.bmp|\.ico|\.tiff|\.tif|\.jfif|\.svg|\.svgz)$/i;

                                            $("#record_id").val($(this).data("edit_id"));

                                            // $("#img").val($(this).data("img"));

                                            var callImage = $(this).data("img");

                                            if (callImage != " ") {

                                                var getUrl = window.location.origin + "/" + callImage;

                                                if (fileExtensions.exec(callImage)) {

                                                    $(".img_div").css("display", "block");

                                                    $(".video_div").css("display", "none");

                                                    $("#editImg").attr("src", " ");

                                                    $("#editImg").attr("src", getUrl);

                                                    $("#editVideo").attr("src", " ");

                                                } else {

                                                    $(".img_div").css("display", "none");

                                                    $(".video_div").css("display", "block");

                                                    $("#editVideo").attr("src", " ");

                                                    $("#editVideo").attr("src", getUrl);

                                                    $("#editImg").attr("src", " ");
                                                }
                                            }

                                            $("#addevent").modal("show");

                                        });

                                        ';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        }elseif ($slug == "cmsbanner") {

            $image = "";

            $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Page Name</th>
                                          <th>Description</th>
                                          <th>Image</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
            if ($loop) {
                foreach ($loop as $key => $val) {

                    $imageLink = "";

                    $mime = mime_content_type_($val->img);

                    if (strstr($mime, "video/")) {

                        $imageLink = asset($val->img);

                        $image = "<video id='editImg' width='200' height='200' autoplay muted loop>
                                    <source src='$imageLink' type='video/mp4'>
                                </video>";
                    } else if (strstr($mime, "image/")) {

                        $imageLink = asset($val->img);

                        $image = "<img style='width:200px; height:150' src='$imageLink' id='editImg' alt='banner'/>";
                    }


                    $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                          <td>' . $val->page_name . '</td>
                                           <td>' .Str::limit(html_entity_decode($val->desc), 150)  . '</td>
                                          <td>' . $image . '</td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '" data-page_name= "' . $val->page_name . '"
                                                  data-desc= "' . $val->desc . '"
                                                   data-slug= "' . $val->slug . '"
                                                   data-img= "' . $val->img . '" >Edit</button>
                                             <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                          </td>
                                       </tr>';
                }
            }
            $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                         <th>S. No</th>
                                          <th>Page Name</th>
                                          <th>Description</th>
                                          <th>Image</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';
            $script = '

                var imageFile = "";

                $("#page_name").keyup(function () {

                    var Text = $(this).val();

                    Text = Text.toLowerCase();

                    Text = Text.replace(/[^a-zA-Z0-9]+/g, "-");

                    $("#slug").val(Text);

                });

                $("#img").change(function (){

                    var fileExtensions = /(\.png|\.jpe|\.jpeg|\.jpg|\.gif|\.bmp|\.ico|\.tiff|\.tif|\.jfif|\.svg|\.svgz)$/i;

                    imageFile = this.files[0];

                    if (imageFile) {


                        if(fileExtensions.exec(imageFile["name"])){

                            $(".img_div").css("display","block");

                            $(".video_div").css("display","none");

                            $("#editImg").attr("src", " ");

                            $("#editImg").attr("src", URL.createObjectURL(imageFile));

                            $("#editVideo").attr("src", " ");


                        }else{

                            $(".img_div").css("display","none");

                            $(".video_div").css("display","block");

                            $("#editVideo").attr("src", " ");

                            $("#editVideo").attr("src", URL.createObjectURL(imageFile));

                            $("#editImg").attr("src", " ");

                        }

                    }

                });

                $(".updateevent").on("click", function (){

                    $("input[type=text]").val("");

                    $("input[type=number]").val("");

                    $("input[type=file]").val("");

                    CKEDITOR.instances.description.setData("");

                    $("#editImg").attr("src", "' . $setImage . '");

                    $("#editVideo").attr("src", " ");

                    $(".img_div").css("display","block");

                    $(".video_div").css("display","none");


                });

                $(".editor-form").click(function () {

                    var fileExtensions = /(\.png|\.jpe|\.jpeg|\.jpg|\.gif|\.bmp|\.ico|\.tiff|\.tif|\.jfif|\.svg|\.svgz)$/i;

                    $("#page_name").val($(this).data("page_name"));
                    $("#slug").val($(this).data("slug"));

                    $("#record_id").val($(this).data("edit_id"));
                    var texta = $(this).data("desc");
                    CKEDITOR.instances.description.setData(texta);

                    var callImage = $(this).data("img");

                    if (callImage != " ") {
                       var getUrl = "' . asset('') .'" +  callImage ;

                        if (fileExtensions.exec(callImage)) {
                            $(".img_div").css("display", "block");

                            $(".video_div").css("display", "none");

                            $("#editImg").attr("src", " ");

                            $("#editImg").attr("src", getUrl);

                            $("#editVideo").attr("src", " ");
                        } else {
                            $(".img_div").css("display", "none");

                            $(".video_div").css("display", "block");

                            $("#editVideo").attr("src", " ");

                            $("#editVideo").attr("src", getUrl);

                            $("#editImg").attr("src", " ");
                        }
                    }

                    $("#addevent").modal("show");
                });

                ';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        } elseif ($slug == "logo") {

            $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Logo Image</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
            if ($loop) {
                foreach ($loop as $key => $val) {

                    $imageLink = "";

                    $mime = mime_content_type_($val->img);

                    if (strstr($mime, "video/")) {

                        $imageLink = asset($val->img);

                        $image = "<video id='editImg' width='200' height='200' autoplay muted loop>
                                    <source src='$imageLink' type='video/mp4'>
                                </video>";
                    } else if (strstr($mime, "image/")) {

                        $imageLink = asset($val->img);

                        $image = "<img style='width:200px; height:150' src='$imageLink' id='editImg' alt='banner'/>";
                    }


                    $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                          <td>' . $image . '</td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '" data-img="' . $val->img . '"

                                                >Edit</button>
                                             <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                          </td>
                                       </tr>';
                }
            }
            $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Logo Image</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';


            $script = '

                                var imageFile = "";


                                $("#img").change(function (){

                                    var fileExtensions = /(\.png|\.jpe|\.jpeg|\.jpg|\.gif|\.bmp|\.ico|\.tiff|\.tif|\.jfif|\.svg|\.svgz)$/i;

                                    imageFile = this.files[0];

                                    if (imageFile) {


                                        if(fileExtensions.exec(imageFile["name"])){

                                            $(".img_div").css("display","block");

                                            $(".video_div").css("display","none");

                                            $("#editImg").attr("src", " ");

                                            $("#editImg").attr("src", URL.createObjectURL(imageFile));

                                            $("#editVideo").attr("src", " ");


                                        }else{

                                            $(".img_div").css("display","none");

                                            $(".video_div").css("display","block");

                                            $("#editVideo").attr("src", " ");

                                            $("#editVideo").attr("src", URL.createObjectURL(imageFile));

                                            $("#editImg").attr("src", " ");


                                        }

                                    }

                                });

                                $(".updateevent").on("click", function (){

                                    $("input[type=text]").val("");

                                    $("input[type=number]").val("");

                                    $("input[type=file]").val("");

                                    $("#editImg").attr("src", "' . $setImage . '");

                                    $("#editVideo").attr("src", " ");

                                    $(".img_div").css("display","block");

                                    $(".video_div").css("display","none");

                                });

                                    $(".editor-form").click(function(){

                                            var fileExtensions = /(\.png|\.jpe|\.jpeg|\.jpg|\.gif|\.bmp|\.ico|\.tiff|\.tif|\.jfif|\.svg|\.svgz)$/i;

                                            $("#record_id").val($(this).data("edit_id"));

                                            // $("#img").val($(this).data("img"));

                                            var callImage = $(this).data("img");

                                            if (callImage != " ") {

                                                  var getUrl = "' . asset('') .'" +  callImage ;

                                                if (fileExtensions.exec(callImage)) {

                                                    $(".img_div").css("display", "block");

                                                    $(".video_div").css("display", "none");

                                                    $("#editImg").attr("src", " ");

                                                    $("#editImg").attr("src", getUrl);

                                                    $("#editVideo").attr("src", " ");

                                                } else {

                                                    $(".img_div").css("display", "none");

                                                    $(".video_div").css("display", "block");

                                                    $("#editVideo").attr("src", " ");

                                                    $("#editVideo").attr("src", getUrl);

                                                    $("#editImg").attr("src", " ");
                                                }
                                            }

                                            $("#addevent").modal("show");

                                        });

                                        ';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        } elseif ($slug == "footer") {
            $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Useful Links</th>
                                           <th>Touch Links</th>
                                          <th>Description</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
            if ($loop) {
                foreach ($loop as $key => $val) {
                    $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                          <td>' . $val->useful_links . '</td>
                                           <td>' . $val->touch_links . '</td>
                                            <td>' . $val->desc . '</td>

                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '" data-useful_links= "' . $val->useful_links . '"
                                                  data-touch_links= "' . $val->touch_links . '"
                                                  data-desc= "' . $val->desc . '" >Edit</button>
                                             <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                          </td>
                                       </tr>';
                }
            }
            $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Useful Links</th>
                                           <th>Touch Links</th>
                                          <th>Description</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';
            $script = '$(".editor-form").click(function(){
                                                $("#useful_links").val($(this).data("useful_links"))
                                                $("#touch_links").val($(this).data("touch_links"))
                                                $("#record_id").val($(this).data("edit_id"))
                                                var texta = $(this).data("desc");
                                                CKEDITOR.instances.description.setData(texta);
                                                $("#addevent").modal("show")
                                            })';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        } elseif ($slug == "navbar") {
            $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Page Name</th>
                                          <th>Name</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
            if ($loop) {
                foreach ($loop as $key => $val) {
                    $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                          <td>' . $val->page_name . '</td>
                                          <td>' . $val->name . '</td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '" data-page_name= "' . $val->page_name . '"
                                                  data-name= "' . $val->name . '"
                                                 >Edit</button>
                                             <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                          </td>
                                       </tr>';
                }
            }
            $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Page Name</th>
                                          <th>Name</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';
            $script = '$(".editor-form").click(function(){

                                                $("#page_name").val($(this).data("page_name"))
                                                $("#name").val($(this).data("name"))
                                                $("#record_id").val($(this).data("edit_id"))
                                                $("#addevent").modal("show")
                                            })';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        }elseif ($slug == "contactus") {
            $body = '<thead>
                                        <tr>
                                            <th>S. No</th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Creation Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                     <tbody>';
            if ($loop) {
                foreach ($loop as $key => $val) {
                    $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                          <td>' . $val->fname . '</td>
                                          <td>' . $val->lname . '</td>
                                          <td>' . $val->email . '</td>
                                          <td>' . $val->message . '</td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '" data-fname= "' . $val->fname . '" data-lname= "' . $val->lname . '"data-email= "' . $val->email . '"  data-message= "' . $val->message . '" >Show</button>
                                             
                                             <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                          </td>
                                       </tr>';
                }
            }
            $body .= '</tbody>
                                    <tfoot>
                                        <tr>
                                            <th>S. No</th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Creation Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>';

            $script = '$(".editor-form").click(function(){

                                                $("#record_id").val($(this).data("edit_id"));

                                                $("#fname").val($(this).data("fname"));
                                                $("#lname").val($(this).data("lname"));
                                               
                                                $("#email").val($(this).data("email"));

                                                $("#message").val($(this).data("message"));
                                               


                                                $("#addevent").modal("show");

                                            })';

            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        }elseif($slug == "promotions"){
            $body = '<thead>
                                            <tr>
                                            <th>S. No</th>
                                            <th>Heading</th>
                                            <th>Title</th>
                                            <th>Paragraph</th>
                                            <th>Description</th>
                                             <th>Image</th>
                                            <th>Enable</th>
                                            <th>Disable</th>
                                            <th>Creation Date</th>
                                            <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
            if ($loop){
                foreach ($loop as $key => $val) {
                $promotion=route('email_newsletter',$val->id);
                $promotion_disable=route('newsletter_disable',$val->id);
                if ($val->status=='1'){
                  $highlightClass = 'btn btn-success';
                  }
                 else{
                 $highlightClass = 'btn btn-warning';

                 }

                    $imageLink = "";

                    $mime = mime_content_type_($val->img);

                    if (strstr($mime, "video/")) {

                        $imageLink = asset($val->img);

                        $image = "<video id='editImg' width='200' height='200' autoplay muted loop>
                                    <source src='$imageLink' type='video/mp4'>
                                </video>";
                    }else if (strstr($mime, "image/")){

                        $imageLink = asset($val->img);

                        $image = "<img style='width:200px; height:150' src='$imageLink' id='editImg' alt='banner'/>";
                    }

                    $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                          <td>' . $val->heading . '</td>
                                          <td>' . $val->title . '</td>
                                          <td>' . $val->paragraph . '</td>
                                          <td>' . $val->desc . '</td>
                                          <td>' . $image . '</td>
                                          <td>
                                         <a class="'.$highlightClass.'" href="'.$promotion.'" target"_blank" style="font-weight:bold;">Enable</a>
                                          </td>
                                          <td>
                                            <a class="btn btn-warning" href="'.$promotion_disable.'"target"_blank"style="font-weight:bold;">Disable</a>
                                          </td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '" 
                                              data-heading="' . $val->heading . '"
                                               data-title="' . $val->title . '"
                                                data-paragraph="' . $val->paragraph . '"
                                            data-desc="' . $val->desc . '"
                                             data-img="' . $val->img . '"

                                                >Edit</button>
                                             <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                          </td>
                                       </tr>';
                }
            }
            $body .= '</tbody>
                                    <tfoot>
                                           <tr>
                                          <th>S. No</th>
                                            <th>Heading</th>
                                            <th>Title</th>
                                            <th>Paragraph</th>
                                            <th>Description</th>
                                             <th>Image</th>
                                            <th>Enable</th>
                                            <th>Disable</th>
                                            <th>Creation Date</th>
                                            <th>Action</th>
                                       </tr>
                                    </tfoot>';


            $script = '

                                var imageFile = "";


                                $("#img").change(function (){

                                    var fileExtensions = /(\.png|\.jpe|\.jpeg|\.jpg|\.gif|\.bmp|\.ico|\.tiff|\.tif|\.jfif|\.svg|\.svgz)$/i;

                                    imageFile = this.files[0];

                                    if (imageFile) {


                                        if(fileExtensions.exec(imageFile["name"])){

                                            $(".img_div").css("display","block");

                                            $(".video_div").css("display","none");

                                            $("#editImg").attr("src", " ");

                                            $("#editImg").attr("src", URL.createObjectURL(imageFile));

                                            $("#editVideo").attr("src", " ");


                                        }else{

                                            $(".img_div").css("display","none");

                                            $(".video_div").css("display","block");

                                            $("#editVideo").attr("src", " ");

                                            $("#editVideo").attr("src", URL.createObjectURL(imageFile));

                                            $("#editImg").attr("src", " ");


                                        }

                                    }

                                });

                                $(".updateevent").on("click", function (){

                                    $("input[type=text]").val("");

                                    $("input[type=number]").val("");

                                    $("input[type=file]").val("");

                                    $("#editImg").attr("src", "' . $setImage . '");

                                    $("#editVideo").attr("src", " ");

                                    $(".img_div").css("display","block");

                                    $(".video_div").css("display","none");

                                });

                                    $(".editor-form").click(function(){

                                            var fileExtensions = /(\.png|\.jpe|\.jpeg|\.jpg|\.gif|\.bmp|\.ico|\.tiff|\.tif|\.jfif|\.svg|\.svgz)$/i;



                                            $("#record_id").val($(this).data("edit_id"));

                                             $("#heading").val($(this).data("heading"));

                                              $("#title").val($(this).data("title"));

                                                $("#paragraph").val($(this).data("paragraph"));
                                                 var texta = $(this).data("desc");
                                                CKEDITOR.instances.description.setData(texta);
                                            // $("#img").val($(this).data("img"));

                                            var callImage = $(this).data("img");

                                            if (callImage != " ") {

                                                var getUrl = window.location.origin + "/" + callImage;

                                                if (fileExtensions.exec(callImage)) {

                                                    $(".img_div").css("display", "block");

                                                    $(".video_div").css("display", "none");

                                                    $("#editImg").attr("src", " ");

                                                    $("#editImg").attr("src", getUrl);

                                                    $("#editVideo").attr("src", " ");

                                                } else {

                                                    $(".img_div").css("display", "none");

                                                    $(".video_div").css("display", "block");

                                                    $("#editVideo").attr("src", " ");

                                                    $("#editVideo").attr("src", getUrl);

                                                    $("#editImg").attr("src", " ");
                                                }
                                            }

                                            $("#addevent").modal("show");

                                        });

                                        ';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        }elseif ($slug == "generateEvent"){
             $subscriber=newsletter::where('is_active',1)->count();
             $newsletter_send=route('newsletter_send');
              $newsletter=route('newsletter_view');


            $body = '<thead>
                                        <tr>
                                            <th>S. No</th>
                                             <th>Subscriber</th>
                                            <th>View Promotion</th>
                                            <th>Mail Send</th>
                                            <th>Creation Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                     <tbody>';
            if ($loop) {
                foreach ($loop as $key => $val) {
             $promotion=promotions::where('id',$val->promotion_id)->first();
            if ($val->status=='1') {
                  $highlightClass = 'btn btn-success';
                  }
                 else{
                 $highlightClass = 'btn btn-warning';

                 }

    
                    $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                           <td>' . $subscriber . '</td>
                                          <td>
                                            <a class="btn btn-warning" href="'.$newsletter.'" target"_blank " style="font-weight:bold;">View Pormotion</a>
                                          </td>
                                        <td>
                                            <a class="'. $highlightClass.'" href="'.$newsletter_send.'" target"_blank " style="font-weight:bold;">Email Send</a>
                                          </td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '"   data-heading= "' . $val->heading . '" >Show</button>
                                             <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                          </td>
                                       </tr>';
                }
            }
            $body .= '</tbody>
                                    <tfoot>
                                        <tr>
                                            <th>S. No</th>
                                             <th>Subscriber</th>
                                            <th>View Promotion</th>
                                            <th>Mail Send</th>
                                            <th>Creation Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>';

            $script = '$(".editor-form").click(function(){

                                                $("#record_id").val($(this).data("edit_id"));

                                                $("#fname").val($(this).data("fname"));
                                                 $("#lname").val($(this).data("lname"));
                                                $("#email").val($(this).data("email"));
                                                $("#subject").val($(this).data("subject"));
                                                $("#message").val($(this).data("message"));
                                                $("#address").val($(this).data("address"));


                                                $("#addevent").modal("show");

                                            })';

            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        }elseif ($slug == "videos") {

            $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                           <th>Heading</th>
                                          <th>Image</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
            if ($loop) {
                foreach ($loop as $key => $val) {

                    $imageLink = "";

                    $mime = mime_content_type_($val->img);

                    if (strstr($mime, "video/")) {

                        $imageLink = asset($val->img);

                        $image = "<video id='editImg' width='200' height='200' autoplay muted loop>
                                    <source src='$imageLink' type='video/mp4'>
                                </video>";
                    } else if (strstr($mime, "image/")) {

                        $imageLink = asset($val->img);

                        $image = "<img style='width:200px; height:150' src='$imageLink' id='editImg' alt='banner'/>";
                    }


                    $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                            <td>' . $val->heading . '</td>
                                          <td>' . $image . '</td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '"
                                             data-heading="' . $val->heading . '" 
                                             data-img="' . $val->img . '"

                                                >Edit</button>
                                             <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                          </td>
                                       </tr>';
                }
            }
            $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                          <th>S. No</th>
                                           <th>Heading</th>
                                          <th>Image</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';


            $script = '

                                var imageFile = "";


                                $("#img").change(function (){

                                    var fileExtensions = /(\.png|\.jpe|\.jpeg|\.jpg|\.gif|\.bmp|\.ico|\.tiff|\.tif|\.jfif|\.svg|\.svgz)$/i;

                                    imageFile = this.files[0];

                                    if (imageFile) {


                                        if(fileExtensions.exec(imageFile["name"])){

                                            $(".img_div").css("display","block");

                                            $(".video_div").css("display","none");

                                            $("#editImg").attr("src", " ");

                                            $("#editImg").attr("src", URL.createObjectURL(imageFile));

                                            $("#editVideo").attr("src", " ");


                                        }else{

                                            $(".img_div").css("display","none");

                                            $(".video_div").css("display","block");

                                            $("#editVideo").attr("src", " ");

                                            $("#editVideo").attr("src", URL.createObjectURL(imageFile));

                                            $("#editImg").attr("src", " ");


                                        }

                                    }

                                });

                                $(".updateevent").on("click", function (){

                                    $("input[type=text]").val("");

                                    $("input[type=number]").val("");

                                    $("input[type=file]").val("");

                                    $("#editImg").attr("src", "' . $setImage . '");

                                    $("#editVideo").attr("src", " ");

                                    $(".img_div").css("display","block");

                                    $(".video_div").css("display","none");

                                });

                                    $(".editor-form").click(function(){

                                            var fileExtensions = /(\.png|\.jpe|\.jpeg|\.jpg|\.gif|\.bmp|\.ico|\.tiff|\.tif|\.jfif|\.svg|\.svgz)$/i;
                                             $("#heading").val($(this).data("heading"));
                                            $("#record_id").val($(this).data("edit_id"));

                                            // $("#img").val($(this).data("img"));

                                            var callImage = $(this).data("img");

                                            if (callImage != " ") {

                                              var getUrl = "' . asset('') .'" +  callImage ;
                                                if (fileExtensions.exec(callImage)) {

                                                    $(".img_div").css("display", "block");

                                                    $(".video_div").css("display", "none");

                                                    $("#editImg").attr("src", " ");

                                                    $("#editImg").attr("src", getUrl);

                                                    $("#editVideo").attr("src", " ");

                                                } else {

                                                    $(".img_div").css("display", "none");

                                                    $(".video_div").css("display", "block");

                                                    $("#editVideo").attr("src", " ");

                                                    $("#editVideo").attr("src", getUrl);

                                                    $("#editImg").attr("src", " ");
                                                }
                                            }

                                            $("#addevent").modal("show");

                                        });

                                        ';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        }elseif ($slug == "newsletter") {
            $body = '<thead>
                                        <tr>
                                            <th>S. No</th>
                                            <th>Email</th>
                                             <th>Status</th>
                                            <th>Creation Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                     <tbody>';
            if ($loop) {
                foreach ($loop as $key => $val) {
            
                    $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                          <td>' . $val->email . '</td>
                                           <td>'.'Subscribe'.'</td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '"   data-email= "' . $val->email . '" >Show</button>
                                             <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                          </td>
                                       </tr>';
                }
            }
            $body .= '</tbody>
                                    <tfoot>
                                        <tr>
                                            <th>S. No</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Creation Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>';

            $script = '$(".editor-form").click(function(){

                                                $("#record_id").val($(this).data("edit_id"));

                                                $("#email").val($(this).data("email"));

                                                $("#addevent").modal("show");

                                            })';

            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        }elseif ($slug == "news") {

            $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                           <th>Heading</th>
                                            <th>Paragraph</th>
                                          <th>Image</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
            if ($loop) {
                foreach ($loop as $key => $val) {
                   $deleteNews=route('delete_news', ['id' => urlencode(base64_encode($val->id))]);
                    $imageLink = "";

                    $mime = mime_content_type_($val->img);

                    if (strstr($mime, "video/")) {

                        $imageLink = asset($val->img);

                        $image = "<video id='editImg' width='200' height='200' autoplay muted loop>
                                    <source src='$imageLink' type='video/mp4'>
                                </video>";
                    } else if (strstr($mime, "image/")) {

                        $imageLink = asset($val->img);

                        $image = "<img style='width:200px; height:150' src='$imageLink' id='editImg' alt='banner'/>";
                    }


                    $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                            <td>' . $val->heading . '</td>
                                             <td>' .Str::limit($val->desc,60) . '</td>
                                          <td>' . $image . '</td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '"
                                             data-heading="' . $val->heading . '" 
                                                data-desc= "' . $val->desc . '"
                                             data-img="' . $val->img . '"

                                                >Edit</button>
                          <a href="'.$deleteNews.'" class="btn btn-danger delete-record" data-model="'.$data .'" data-id= "'.$val->id.'" >Delete</a>
                                          </td>
                                       </tr>';
                }
            }
            $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                          <th>S. No</th>
                                           <th>Heading</th>
                                            <th>Paragraph</th>
                                          <th>Image</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';


            $script = '

                                var imageFile = "";


                                $("#img").change(function (){

                                    var fileExtensions = /(\.png|\.jpe|\.jpeg|\.jpg|\.gif|\.bmp|\.ico|\.tiff|\.tif|\.jfif|\.svg|\.svgz)$/i;

                                    imageFile = this.files[0];

                                    if (imageFile) {


                                        if(fileExtensions.exec(imageFile["name"])){

                                            $(".img_div").css("display","block");

                                            $(".video_div").css("display","none");

                                            $("#editImg").attr("src", " ");

                                            $("#editImg").attr("src", URL.createObjectURL(imageFile));

                                            $("#editVideo").attr("src", " ");


                                        }else{

                                            $(".img_div").css("display","none");

                                            $(".video_div").css("display","block");

                                            $("#editVideo").attr("src", " ");

                                            $("#editVideo").attr("src", URL.createObjectURL(imageFile));

                                            $("#editImg").attr("src", " ");


                                        }

                                    }

                                });

                                $(".updateevent").on("click", function (){

                                    $("input[type=text]").val("");

                                    $("input[type=number]").val("");

                                    $("input[type=file]").val("");

                                    $("#editImg").attr("src", "' . $setImage . '");

                                    $("#editVideo").attr("src", " ");

                                    $(".img_div").css("display","block");

                                    $(".video_div").css("display","none");

                                });

                                    $(".editor-form").click(function(){

                                            var fileExtensions = /(\.png|\.jpe|\.jpeg|\.jpg|\.gif|\.bmp|\.ico|\.tiff|\.tif|\.jfif|\.svg|\.svgz)$/i;
                                             $("#heading").val($(this).data("heading"));
                                               $("#paragraph").val($(this).data("paragraph"));
                                            $("#record_id").val($(this).data("edit_id"));

                                            // $("#img").val($(this).data("img"));
                                              var texta = $(this).data("desc");
                    CKEDITOR.instances.description.setData(texta);

                                            var callImage = $(this).data("img");
                                            

                                            if (callImage != " ") {

                                                var getUrl = "' . asset('') .'" +  callImage ;
                                                if (fileExtensions.exec(callImage)) {

                                                    $(".img_div").css("display", "block");

                                                    $(".video_div").css("display", "none");

                                                    $("#editImg").attr("src", " ");

                                                    $("#editImg").attr("src", getUrl);

                                                    $("#editVideo").attr("src", " ");

                                                } else {

                                                    $(".img_div").css("display", "none");

                                                    $(".video_div").css("display", "block");

                                                    $("#editVideo").attr("src", " ");

                                                    $("#editVideo").attr("src", getUrl);

                                                    $("#editImg").attr("src", " ");
                                                }
                                            }

                                            $("#addevent").modal("show");

                                        });

                                        ';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        }elseif ($slug == "blogs") {

            $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                           <th>Heading</th>
                                            <th>Paragraph</th>
                                          <th>Image</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
            if ($loop) {
                foreach ($loop as $key => $val) {
           $deleteBlogs=route('delete_blogs', ['id' => urlencode(base64_encode($val->id))]);
                    $imageLink = "";

                    $mime = mime_content_type_($val->img);

                    if (strstr($mime, "video/")) {

                        $imageLink = asset($val->img);

                        $image = "<video id='editImg' width='200' height='200' autoplay muted loop>
                                    <source src='$imageLink' type='video/mp4'>
                                </video>";
                    } else if (strstr($mime, "image/")) {

                        $imageLink = asset($val->img);

                        $image = "<img style='width:200px; height:150' src='$imageLink' id='editImg' alt='banner'/>";
                    }


                    $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                           <td>' . $val->name . '</td>
                                            <td>' . $val->heading . '</td>
                                             <td>' . Str::limit($val->desc,60) . '</td>
                                          <td>' . $image . '</td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '"
                                             data-name="' . $val->name . '" 
                                             data-heading="' . $val->heading . '" 
                                              data-desc="' . $val->desc . '" 
                                             data-img="' . $val->img . '"

                                                >Edit</button>
                                             <a href="'.$deleteBlogs.'" class="btn btn-danger delete-record">Delete</a>
                                          </td>
                                       </tr>';
                }
            }
            $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                          <th>S. No</th>
                                           <th>Name</th>
                                           <th>Heading</th>
                                            <th>Paragraph</th>
                                          <th>Image</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';


            $script = '

                                var imageFile = "";


                                $("#img").change(function (){

                                    var fileExtensions = /(\.png|\.jpe|\.jpeg|\.jpg|\.gif|\.bmp|\.ico|\.tiff|\.tif|\.jfif|\.svg|\.svgz)$/i;

                                    imageFile = this.files[0];

                                    if (imageFile) {


                                        if(fileExtensions.exec(imageFile["name"])){

                                            $(".img_div").css("display","block");

                                            $(".video_div").css("display","none");

                                            $("#editImg").attr("src", " ");

                                            $("#editImg").attr("src", URL.createObjectURL(imageFile));

                                            $("#editVideo").attr("src", " ");


                                        }else{

                                            $(".img_div").css("display","none");

                                            $(".video_div").css("display","block");

                                            $("#editVideo").attr("src", " ");

                                            $("#editVideo").attr("src", URL.createObjectURL(imageFile));

                                            $("#editImg").attr("src", " ");


                                        }

                                    }

                                });

                                $(".updateevent").on("click", function (){

                                    $("input[type=text]").val("");

                                    $("input[type=number]").val("");

                                    $("input[type=file]").val("");

                                    $("#editImg").attr("src", "' . $setImage . '");

                                    $("#editVideo").attr("src", " ");

                                    $(".img_div").css("display","block");

                                    $(".video_div").css("display","none");

                                });

                                    $(".editor-form").click(function(){

                                            var fileExtensions = /(\.png|\.jpe|\.jpeg|\.jpg|\.gif|\.bmp|\.ico|\.tiff|\.tif|\.jfif|\.svg|\.svgz)$/i;
                                             $("#name").val($(this).data("name"));
                                             $("#heading").val($(this).data("heading"));
                                               $("#paragraph").val($(this).data("paragraph"));
                                            $("#record_id").val($(this).data("edit_id"));

                                            // $("#img").val($(this).data("img"));
                                               var texta = $(this).data("desc");
                    CKEDITOR.instances.description.setData(texta);


                                            var callImage = $(this).data("img");

                                            if (callImage != " ") {

                                                var getUrl = "' . asset('') .'" +  callImage ;
                                                if (fileExtensions.exec(callImage)) {

                                                    $(".img_div").css("display", "block");

                                                    $(".video_div").css("display", "none");

                                                    $("#editImg").attr("src", " ");

                                                    $("#editImg").attr("src", getUrl);

                                                    $("#editVideo").attr("src", " ");

                                                } else {

                                                    $(".img_div").css("display", "none");

                                                    $(".video_div").css("display", "block");

                                                    $("#editVideo").attr("src", " ");

                                                    $("#editVideo").attr("src", getUrl);

                                                    $("#editImg").attr("src", " ");
                                                }
                                            }

                                            $("#addevent").modal("show");

                                        });

                                        ';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        }elseif ($slug == "affiliations") {

            $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                           <th>Heading</th>
                                            <th>Paragraph</th>
                                          <th>Image</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
            if ($loop) {
                foreach ($loop as $key => $val) {

                    $imageLink = "";

                    $mime = mime_content_type_($val->img);

                    if (strstr($mime, "video/")) {

                        $imageLink = asset($val->img);

                        $image = "<video id='editImg' width='200' height='200' autoplay muted loop>
                                    <source src='$imageLink' type='video/mp4'>
                                </video>";
                    } else if (strstr($mime, "image/")) {

                        $imageLink = asset($val->img);

                        $image = "<img style='width:200px; height:150' src='$imageLink' id='editImg' alt='banner'/>";
                    }


                    $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                            <td>' . $val->heading . '</td>
                                             <td>' . $val->paragraph . '</td>
                                          <td>' . $image . '</td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '"
                                             data-heading="' . $val->heading . '" 
                                              data-paragraph="' . $val->paragraph . '" 
                                             data-img="' . $val->img . '"

                                                >Edit</button>
                                             <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                          </td>
                                       </tr>';
                }
            }
            $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                          <th>S. No</th>
                                           <th>Heading</th>
                                            <th>Paragraph</th>
                                          <th>Image</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';


            $script = '

                                var imageFile = "";


                                $("#img").change(function (){

                                    var fileExtensions = /(\.png|\.jpe|\.jpeg|\.jpg|\.gif|\.bmp|\.ico|\.tiff|\.tif|\.jfif|\.svg|\.svgz)$/i;

                                    imageFile = this.files[0];

                                    if (imageFile) {


                                        if(fileExtensions.exec(imageFile["name"])){

                                            $(".img_div").css("display","block");

                                            $(".video_div").css("display","none");

                                            $("#editImg").attr("src", " ");

                                            $("#editImg").attr("src", URL.createObjectURL(imageFile));

                                            $("#editVideo").attr("src", " ");


                                        }else{

                                            $(".img_div").css("display","none");

                                            $(".video_div").css("display","block");

                                            $("#editVideo").attr("src", " ");

                                            $("#editVideo").attr("src", URL.createObjectURL(imageFile));

                                            $("#editImg").attr("src", " ");


                                        }

                                    }

                                });

                                $(".updateevent").on("click", function (){

                                    $("input[type=text]").val("");

                                    $("input[type=number]").val("");

                                    $("input[type=file]").val("");

                                    $("#editImg").attr("src", "' . $setImage . '");

                                    $("#editVideo").attr("src", " ");

                                    $(".img_div").css("display","block");

                                    $(".video_div").css("display","none");

                                });

                                    $(".editor-form").click(function(){

                                            var fileExtensions = /(\.png|\.jpe|\.jpeg|\.jpg|\.gif|\.bmp|\.ico|\.tiff|\.tif|\.jfif|\.svg|\.svgz)$/i;
                                             $("#heading").val($(this).data("heading"));
                                               $("#paragraph").val($(this).data("paragraph"));
                                            $("#record_id").val($(this).data("edit_id"));

                                            // $("#img").val($(this).data("img"));

                                            var callImage = $(this).data("img");

                                            if (callImage != " ") {

                                               var getUrl = "' . asset('') .'" +  callImage ;
                                                if (fileExtensions.exec(callImage)) {

                                                    $(".img_div").css("display", "block");

                                                    $(".video_div").css("display", "none");

                                                    $("#editImg").attr("src", " ");

                                                    $("#editImg").attr("src", getUrl);

                                                    $("#editVideo").attr("src", " ");

                                                } else {

                                                    $(".img_div").css("display", "none");

                                                    $(".video_div").css("display", "block");

                                                    $("#editVideo").attr("src", " ");

                                                    $("#editVideo").attr("src", getUrl);

                                                    $("#editImg").attr("src", " ");
                                                }
                                            }

                                            $("#addevent").modal("show");

                                        });

                                        ';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        } elseif ($slug == "faq") {
            $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Heading</th>
                                          <th>Vedio Link</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
            if ($loop) {
                foreach ($loop as $key => $val) {
                    $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                          <td>' . $val->heading . '</td>
                                          <td>' . $val->vedio_link . '</td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                            <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '" data-heading= "' . $val->heading . '" data-vedio_link= "' . $val->vedio_link . '" >Edit</button>
                                            <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                          </td>
                                       </tr>';
                }
            }
            $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                            <th>S. No</th>
                                          <th>Heading</th>
                                          <th>Vedio Link</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';
            $script = '$(".editor-form").click(function(){
                                                $("#heading").val($(this).data("heading"))
                                                 $("#vedio_link").val($(this).data("vedio_link"))
                                                $("#record_id").val($(this).data("edit_id"))
                                                $("#addevent").modal("show")
                                            })';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        } else {
            return $body;
        }
    }

    public function report_user($slug)
    {

        $user = Auth::user();

        $role_assign = role_assign::where('is_active', 1)->where("role_id", $user->role_id)->first();
        if ($role_assign) {
            $validator = Helper::check_rights($slug);
            if (is_null($validator)) {
                return redirect()->back()->with('error', "Don't have sufficient rights to access this page");
            }
        } else {
            return redirect()->back()->with('error', "Don't have sufficient rights to access this page");
        }

        $att_tag = attributes::where('is_active', 1)->select('attribute')->distinct()->get();
        $attributes = attributes::where('is_active', 1)->where('attribute', $slug)->get();
        return view('reports/report_generic_user')->with(compact('attributes', 'att_tag', 'role_assign', 'validator', 'slug'));
    }

    public function custom_report()
    {
        $status['status'] = 0;
        if (isset($_POST['role_id'])) {
            $attributes = attributes::find($_POST['role_id']);
            if ($attributes->attribute == "departments") {
                $status['status'] = 1;
                $status['redirect'] = route('custom_report_user', [$attributes->attribute, str::slug($attributes->name)]);

                return json_encode($status);
            } elseif ($attributes->attribute == "designations") {
                $status['status'] = 1;
                $status['redirect'] = route('custom_report_user', [$attributes->attribute, str::slug($attributes->name)]);
                return json_encode($status);
            } elseif ($attributes->attribute == "roles") {
                $status['status'] = 1;
                $status['redirect'] = route('custom_report_user', [$attributes->attribute, str::slug($attributes->role)]);
                return json_encode($status);
            } else {
                $status['status'] = 0;
                return json_encode($status);
            }
        } else {
            $status['status'] = 0;
            return json_encode($status);
        }
    }

    public function custom_report_user($slug = '', $slug2 = '')
    {
        $attributes = attributes::where("attribute", $slug)->first();
        $designation = attributes::where("is_active", 1)->get();
        $project_id = Session::get("project_id");
        if ($attributes) {

            if ($attributes->attribute == "departments") {
                $all_user = User::where("is_active", 1)->where("department", $attributes->id)->get();
                return view('reports/custom-user-report')->with(compact('attributes', 'all_user', 'slug', 'designation'));
            } elseif ($attributes->attribute == "designations") {
                $slug2 = ucwords(str_replace('-', ' ', $slug2));
                $attributes = attributes::where("attribute", $slug)->where("name", "LIKE", $slug2)->first();
                $all_user = User::where("is_active", 1)->where("designation", $attributes->id)->get();
                return view('reports/custom-user-report')->with(compact('attributes', 'all_user', 'slug', 'designation'));
            } elseif ($attributes->attribute == "roles") {
                $slug2 = ucwords(str_replace('-', ' ', $slug2));
                $attributes = attributes::where("attribute", $slug)->where("role", "LIKE", $slug2)->first();
                if (!$attributes) {
                    return redirect()->back()->with('error', "Didn't find any records.!");
                }
                $all_user = User::where("is_active", 1)->where("role_id", $attributes->id)->get();
                return view('reports/custom-user-report')->with(compact('attributes', 'all_user', 'slug', 'designation'));
            } else {
                return redirect()->back()->with('error', "Didn't find any records.!");
            }
        } else {
            return redirect()->back()->with('error', "Didn't find any records..");
        }
    }

    public function crud_generator($slug = '', Request $request)
    {
        $token_ignore = ['_token' => '', 'record_id' => ''];
        $post_feilds = array_diff_key($_POST, $token_ignore);
        $data = 'App\Models\\' . $slug;
        try {
            if (isset($_POST['record_id']) && $_POST['record_id'] != '') {

                if (!empty($_FILES['img']['name'])) {

                    $imgnumber = rand();

                    $img = $request->img;

                    $img->move(base_path('public\uploads\\' . $slug), '_' . $imgnumber . '.' . $img->getClientOriginalName());

                    $imgNameToStore = "uploads/" . $slug . "/" . '_' . $imgnumber . '.' . $img->getClientOriginalName();

                    $post_feilds['img'] = $imgNameToStore;
                }


                $create = $data::where("id", $_POST['record_id'])->update($post_feilds);

                $msg = "Record has been updated";
            } else {

                if (!empty($_FILES['img']['name'])) {

                    $imgnumber = rand();

                    $img = $request->img;

                    $img->move(base_path('public\uploads\\' . $slug), '_' . $imgnumber . '.' . $img->getClientOriginalName());

                    $imgNameToStore = "uploads/" . $slug . "/" . '_' . $imgnumber . '.' . $img->getClientOriginalName();

                    $post_feilds['img'] = $imgNameToStore;
                }

                $create = $data::create($post_feilds);

                $msg = "Record has been created";
            }
            return redirect()->back()->with('message', $msg);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return redirect()->back()->with('error', "Error Code: " . $error);
        }
    }

    public function delete_record(Request $request)
    {
        $token_ignore = ['_token' => '', 'id' => '', 'model' => ''];
        $post_feilds = array_diff_key($_POST, $token_ignore);
        $data = 'App\Models\\' . $_POST['model'];
       
        try {
            $update = $_POST['model']::where("id", $_POST['id'])->update($post_feilds);
            $status['message'] = "Record has been deleted";
            $status['status'] = 1;
            return json_encode($status);
        } catch (Exception $e) {
            $error = $e->getMessage();
            $status['message'] = $error;
            $status['status'] = 0;
            return json_encode($status);
        }
    }

    public function modalform(Request $request)
    {
        $desc = $_POST['desc'];
        $slug = $_POST['slug'];
        $class = $_POST['class'];
        $tag = $_POST['tag'];
        $body = "";
        try {
            $route_url = route('cms_generator');
            $body .= '<div id="addcms" class="modal fade" role="dialog">
                        <div class="modal-dialog text-left">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form class="" id="cms_form" method="POST" action="' . $route_url . '">
                                        <div class="row">
                                            <input type="hidden" name="_token" value="' . csrf_token() . '">
                                            <input type="hidden" name="tag" id="tag" value="' . $tag . '">
                                            <input type="hidden" name="class" id="class" value="' . $class . '">
                                            <input type="hidden" name="slug" id="slug" value="' . $slug . '">
                                            <div class="col-md-12 col-sm-6 col-12" id="role-label">
                                                <div class="form-group end-date">
                                                    <div class="d-flex">
                                                        <textarea id="description" required name="desc" class="form-control" required="">' . $desc . '</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button id="discard" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                    <button id="cms-generic" type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>';
            $status['message'] = $body;
            $status['status'] = 1;
            return json_encode($status);
        } catch (Exception $e) {
            $error = $e->getMessage();
            $status['message'] = $error;
            $status['status'] = 0;
            return json_encode($status);
        }
    }

    public function cms_generator(Request $request)
    {
        $token_ignore = ['_token' => ''];
        $post_feilds = array_diff_key($_POST, $token_ignore);
        try {
            $cms = web_cms::where("slug", $_POST['slug'])->first();
            if ($cms) {
                $create = web_cms::where("slug", $_POST['slug'])->update($post_feilds);
                $msg = "Record has been updated";
            } else {
                $create = web_cms::create($post_feilds);
                $msg = "Record has been updated";
            }
            return redirect()->back()->with('message', $msg);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return redirect()->back()->with('error', "Error Code: " . $error);
        }
    }
}
