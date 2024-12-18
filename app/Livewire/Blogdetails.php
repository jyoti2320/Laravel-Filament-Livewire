<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Category;

class Blogdetails extends Component
{
    public $slug = null;
    public function mount($slug){
        $this->slug = $slug;
    }
    public function render()
    {
        $category = Category::where('status','1')->get();
        $blogs = Blog::where('slug',$this->slug)->get();
       
        return view('livewire.blogdetails',[
            'blogs'=> $blogs,
            'category'=> $category
        ]);
    }
}
