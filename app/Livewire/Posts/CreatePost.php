<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class CreatePost extends Component
{
    #[Title('Create Post')]

    #[Rule('required|string|min:6')]
    public $title;
    #[Rule('required|string|min:6')]
    public $description;

    public function render()
    {
        return view('livewire.posts.create-post');
    }

    public function AddPost()
    {
        $post = $this->validate();
        Post::create($post);
        session()->flash('status', 'Post created Successfully');
        $this->reset();
    }
}
