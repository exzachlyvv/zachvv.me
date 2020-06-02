<?php

namespace Tests\Feature;

use App\Post;
use function factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function now;
use Tests\TestCase;

class PostTest extends TestCase
{
    public function testPostsDisplayInReverseChronologicalOrder()
    {
        $post1 = factory(Post::class)->create([
            'created_at' => now()->subHours(2)
        ]);
        $post2 = factory(Post::class)->create([
            'created_at' => now()->subHours(1)
        ]);
        $post3 = factory(Post::class)->create([
            'created_at' => now()
        ]);

        $response = $this->get('/posts');

        $response->assertStatus(200);

        $response->assertSeeInOrder([
            $post3->title,
            $post2->title,
            $post1->title,
        ]);
    }

    public function testPostsDetail()
    {
        $post1 = factory(Post::class)->create();

        $response = $this->get("/posts/{$post1->slug}");

        $response->assertStatus(200);

        $response->assertSeeInOrder([
            $post1->title,
            $post1->markdown,
        ]);
    }
}
