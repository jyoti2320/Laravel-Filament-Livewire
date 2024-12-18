<?php

namespace App\Livewire;

use App\Models\Feature;
use App\Models\Gallery;
use App\Models\Faqs;
use App\Models\Settings;
use App\Models\TeamMember;
use App\Models\Blog;
use App\Models\Category;
use Livewire\Component;

class ShowHome extends Component
{
    public function render()
    {
        $feature = Feature::where('status','1')->get();
        $gallery = Gallery::orderBy('id','ASC')->get();
        $faqs = Faqs::orderBy('id','ASC')->get();
        $settings = Settings::where('id','1')->get();
        $teams = TeamMember::orderBy('id','ASC')->get();
        $category = Category::where('status','1')->get();
        $blogs = Blog::where('status','1')->get();

        return view('livewire.show-home',[
            'feature'=> $feature,
            'gallery'=> $gallery,
            'faqs'=> $faqs,
            'settings'=> $settings,
            'teams'=> $teams,
            'blogs'=> $blogs,
            'category'=> $category
        ]);
    }
}
