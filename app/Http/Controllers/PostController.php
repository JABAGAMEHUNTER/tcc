<?php


namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::latest()->paginate(5);

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(StoreUpdatePost $request)
    {
        $data = $request->all();
        if ($request->image->isValid()) {

            $nameFile = Str::of($request->title)->slug('-') . '.' .$request->image->getClientOriginalExtension();

            $image = $request->image->storeAs('posts', $nameFile, 'public');
            $data['image'] = $image;
        }

        Post::create($data);
        return redirect()
            ->route('posts.index')
            ->with('message','Ola!');
    }

    public function show($id)
    {
        $post = Post::find($id);
        if(!$post){
            return redirect()->route('posts.index');
        }
        return view('admin.posts.show', compact('post'));
    }

    public function destroy($id){
        if(!$post = Post::find($id))
            return redirect()->route('posts.index');

        if(Storage::exists('public/'.$post->image))
            Storage::delete('public/'.$post->image);

            $post->delete();

            return redirect()
            ->route('posts.index')
            ->with('message', 'Post Deletado com Sucesso');

    }

    public function edit($id){
        //$post = Post::where('id', $id)->first();

        if(!$post = Post::find($id)){
            return redirect()->back();
        }

        return view ('admin.posts.edit', compact('post'));
    }
    
    public function update(StoreUpdatePost $request, $id){
        //$post = Post::where('id', $id)->first();

        if(!$post = Post::find($id)){
            return redirect()->back();
        }

        $data = $request->all();

        if($request->image && $request->image->isValid()){
            if(Storage::exists( 'public/'.$post->image))
               Storage::delete('public/'.$post->image);

            $nameFile = Str::of($request->title)->slug('-') . '.'.$request->image->getClientOriginalExtension();

            /* $image = $request->image->storeAs('posts', $nameFile);
            $data['image'] = $image; */
            $file = $request->image->storeAs('public/posts',$nameFile);
            $file = str_replace('public/','',$file);
            $data['image'] = $file;
        }
        $post->update($data);

        return redirect()
        ->route('posts.index')
        ->with('message', 'Post editado com sucesso');
    }

    public function search(Request $request)
    {



        $filters = $request->except('_token');

        $posts = Post::where('title', 'LIKE', "%{$request->search}%")
                            ->orWhere('content', 'LIKE', "%{$request->search}%")
                            ->paginate(3);
                        return view('admin.posts.index', compact('posts', 'filters'));
    }
    public function index2()
    {

      /*  $posts = Post::latest()->paginate(5);*/

        return view('admin.posts.index2');
    }
    public function categorias()
    {

      /*  $posts = Post::latest()->paginate(5);*/

        return view('admin.posts.categorias');
    }

    public function produtores()
    {

      /*  $posts = Post::latest()->paginate(5);*/

        return view('admin.posts.produtores');
    }

}
