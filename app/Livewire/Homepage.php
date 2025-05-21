<?php

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Post;

#[Layout('layouts.app')]
class Homepage extends Component
{
    public function render()
    {
        return view('livewire.homepage', [
            'posts' => Post::latest()->take(3)->get(),
        ]);
    }
}
