<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::all();

        return view('admin.posts.index', compact('posts', $posts));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post = new Posts;


        if ($request->hasFile('image')){
            
            $extension = $request->file('image')->extension();

            $imageName =  $request->titulo .".". $extension;
            
            $path = $request->file('image')->storeAs(
                'public/images', $imageName
            );

            $post->image = $imageName;

        }
        
        $post->titulo = $request->titulo;
        $post->texto = $request->wysiwyg;
        $post->autor = $request->autor;
        $post->save();

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Posts::where('id', $id)->get();
        // var_dump($post);
        return view('admin.posts.edit',)->with('post', $post[0]);;
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
        // if(in_array('', $request->only('titulo', 'wysiwyg', 'autor', 'image'))){
        //     $json['message'] = $this->message->error('Informe todos os dados para efetuar o login')->render();
        //     return response()->json($json);
        // }


        $post = Posts::find($id);

        if (!$request->hasFile('image')){

            $json['message'] = $this->message->error('imagem nao enviada')->render();
            return response()->json($json);
            
            // $extension = $request->file('image')->extension();

            // $imageName =  $request->titulo .".". $extension;
            
            // $path = $request->file('image')->storeAs(
            //     'public/images', $imageName
            // );

            // $post->image = $imageName;

        }
        
        $post->titulo = $request->titulo;
        $post->texto = $request->wysiwyg;
        $post->autor = $request->autor;
        $post->save();

        $json['message'] = $this->message->success('Post alterado com sucesso!')->render();
        return response()->json($json);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
