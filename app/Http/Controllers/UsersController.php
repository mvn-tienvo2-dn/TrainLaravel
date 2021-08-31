<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['userslist']=User::all();
        return view('home',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-users');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users|max:255|email',
        ]);

        if ($validator->fails()) {
            return redirect('users/create')->withErrors($validator,'email');       
        }
        $data=$request->all();
        $data['password']=bcrypt($request->password);
        //store User
        User::create($data);
        return redirect('users/')->with('success','Create User Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['postlist']=User::find($id)->posts()->get();
        return view('show-posts',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user']=User::find($id);
        return view('edit-user',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'email' =>'email:rfc,dns',
        ]);

        if ($validator->fails()) {
            return redirect(route('users.edit',['user'=>$id]))->withErrors($validator,'email');       
        }

        $data=$request->except(['_method']);
        $data['password']=bcrypt($request->password);
        $data['_token']=$request->_token;
        //Update User
        User::where('id',$id)->update($data);
        return redirect('users/')->with('success','Update User Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        User::destroy($id);
        return redirect('users/')->with(['success'=>'Delete User Success']);
    }
}
