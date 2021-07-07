<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $currentIdUser = session('user')->human_rights;
        $users = null;
        if(intval(session('user')->human_rights) == 0)
        {
            $users = DB::table('user')->get();
        } else {
            $users = DB::table('user')->where('id', session('user')->id) ->get();
        }

        $services = DB::table('services')->get();
        $categories = DB::table('categories')->get();


        return view("_adminView.user.index")->with(['services' => $services,
                                                    'categories' => $categories,
                                                    'users' => $users
                                                    ]);
    }

    public function editUser(Request $request)
    {
        $services = DB::table('services')->get();
        $categories = DB::table('categories')->get();

        $user = DB::table('user')->where('id', $request->id)->get();


        return view("_adminView.user.update")->with(['services' => $services,
                                                    'categories' => $categories,
                                                    'users' => $user
                                                    ]);
    }

    public function updateRoleUser(Request $request)
    {

        $avatar = DB::table('user')->select('avata')->where('id', $request->userId)->first();
        $newImageName = $avatar->avata;

        if($request->avatar != null)
        {
            $newImageName = time() .'-'.$request->name.'.'.$request->avatar->extension();
            $request->avatar->move(public_path('avatars'), $newImageName);
        }

        DB::table('user')->where('id', $request->userId)->update(['avata'=> $newImageName,'human_rights' => $request->role, 'name'=>$request->name]);
        return redirect('/admin/user/edit/'.$request->userId);
    }
}