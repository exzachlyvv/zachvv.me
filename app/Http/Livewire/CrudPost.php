<?php

namespace App\Http\Livewire;

use App\Post;
use Auth;
use Illuminate\Auth\Access\AuthorizationException;
use Livewire\Component;
use function redirect;

class CrudPost extends Component
{
    public $postId;
    public $title;
    public $description;
    public $markdown;

    /**
     * Can't store a eloquent model in a public property without significant side effects. That is why we are deconstrucing.
     * Side effects include:
     * 1. Mainly: 404 error on requests when this class is updated on livewire requests.
     * 2. Poor performance when editing. The post gets hydrated from the database with each update.
     */
    public function mount(?Post $post)
    {
        $post = $post ?? new Post();

        $this->postId = $post->id;
        $this->title = $post->title;
        $this->description = $post->description;
        $this->markdown = $post->markdown;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.crud-post');
    }

    /**
     * Are we updating an existing post?
     *
     * @return bool
     */
    public function getIsUpdatingProperty()
    {
        return $this->postId > 0;
    }

    /**
     * Are we creating a new post?
     *
     * @return bool
     */
    public function getIsCreatingProperty()
    {
        return ! $this->isUpdating;
    }

    public function getComputedPostProperty()
    {
        $post = new Post([
            'id' => $this->postId,
            'title' => $this->title,
            'description' => $this->description,
            'markdown' => $this->markdown,
        ]);

        $post->setRelation('user', Auth::user());

        return $post;
    }

    /**
     * The create or update form is submitted.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function submit()
    {
        $this->validate([
            'title' => 'required|min:5',
            'description' => 'required',
            'markdown' => 'required',
        ]);

        $post = $this->postId ? Post::findOrFail($this->postId) : new Post();

        if ($this->isUpdating && Auth::id() !== $post->user_id) {
            throw new AuthorizationException();
        }

        $post->fill([
            'title' => $this->title,
            'description' => $this->description,
            'markdown' => $this->markdown,
            'user_id' => Auth::id(),
        ]);

        $post->save();

        return redirect()->route('posts.show', [
            'post' => $post,
        ]);
    }
}
