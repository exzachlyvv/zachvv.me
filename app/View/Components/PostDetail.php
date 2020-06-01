<?php

namespace App\View\Components;

use App\Post;
use Illuminate\Mail\Markdown;
use Illuminate\View\Component;

class PostDetail extends Component
{
    /**
     * @var Post
     */
    public $post;

    /**
     * Create a new component instance.
     *
     * @param Post $post
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
        return view('components.post-detail');
    }

    public function parsedMarkdown()
    {
        return Markdown::parse($this->post->markdown);
    }
}
