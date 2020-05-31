<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostsCreateRequest;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Photo;
use App\User;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

$categories=Category::all();
        return view('admin.posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $input=  Validator::make($request->all(),[
            'category_id'=>'required',
            'photo_id'=>'required', 
            'title' => 'required|max:255',
            'body' => 'required',
        ])->validate();

        $user= Auth::user();
        if($file=$request->file('photo_id')){
            $name=time().$file->getClientOriginalName();
            $file->move('images', $name);
            $photo= Photo::create(['file'=>$name]);

$input['photo_id']=$photo->id;


        }
        $user->posts()->create($input);
        return redirect('/admin/posts');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories= Category::all();
        $post= Post::findOrfail($id);
       return view('admin.posts.edit',compact('post','categories'));
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
        
        $input=  $request->all();
            

       
        if($request->file('photo_id')== null|| $request->file('photo_id')== ''){
       
$input=$request->except('photo_id');

        }else{
            
            $file=$request->file('photo_id');
            $name=time().$file->getClientOriginalName();
            $file->move('images', $name);
            $photo= Photo::create(['file'=>$name]);

$input['photo_id']=$photo->id;
        }
        $user= Auth::user();
        $user->posts()->whereId($id)->first()->update($input);
        Session::flash('message','El post ha sido Actualizado Correctamente');
        return redirect('/admin/posts');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::findOrFail($id);
        if($post->photo_id){
        unlink(public_path().$post->photo->file);
    }
        $post->delete();
        Session::flash('message','El post ha sido Eliminado Correctamente');
        return redirect('/admin/posts');
       
    }
}
