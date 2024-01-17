<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;

    #[Title('Posts')]

    public $post_per_page = 3;

    public function render()
    {
        $posts = Post::paginate($this->post_per_page);
        return view('livewire.post.posts', [
            'posts' => $posts
        ]);
    }

    public function loadMore()
    {
        $this->post_per_page += 3;
    }
}
