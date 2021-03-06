<?php

namespace App\View\Components;

use App\Post;
use Illuminate\View\Component;

class PostPreview extends Component
{
    /**
     * @var Post
     */
    public $post;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.post-preview');
    }
}
