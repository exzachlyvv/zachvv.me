<?php

namespace App\Http\Controllers;

use App\Http\Requests\Posts\DeletePostRequest;
use App\Http\Requests\Posts\EditPostRequest;
use App\Http\Requests\Posts\StorePostRequest;
use App\Http\Requests\Posts\UpdatePostRequest;
use App\Post;
use Artesaos\SEOTools\SEOTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function redirect;
use function view;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => [
                'index',
                'show',
            ]
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::
            with('user')
            ->wherePublic(true)
            ->latest()
            ->get();

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // using the Livewire component for this
//    public function store(StorePostRequest $request)
//    {
//        $post = Auth::user()->posts()->create($request->validated());
//
//        return $this->show($post);
//    }

    /**
     * Display the specified resource.
     *
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // TODO: cache the markdown
        $post->loadMissing('user');

//        SEOTools::setTitle($post->title);
//        SEOTools::setDescription($post->description);
//        SEOTools::opengraph()->addProperty('type', 'articles');

        return view('posts.show', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(EditPostRequest $request)
    {
        return view('posts.edit', [
            'post' => $request->postModel,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    // Using the livewire component for this.
//    public function update(UpdatePostRequest $request)
//    {
//        $request->postModel->fill($request->validated());
//
//        $request->postModel->save();
//
//        return $this->show($request->postModel);
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeletePostRequest $request)
    {
        $request->postModel->delete();

        return redirect()->route('posts.index');
    }
}
