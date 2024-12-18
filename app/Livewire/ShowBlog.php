<?php

namespace App\Livewire;
use App\Models\Blog;
use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Url;

class ShowBlog extends Component
{
    #[Url]
    public $categoryValue = null;
    public function render()
    {
        // echo $this->categoryValue;
        $category = Category::all();

        if(!empty($this->categoryValue)){
            $category2 = Category::where('slug',$this->categoryValue)->first();
            if(empty($category2)){
                abort(404);
            }
            $blogs = Blog::where('status','1')
                    ->where('category',$category2->id)->paginate(2);

        }else{
            $blogs = Blog::where('status','1')->paginate(2);

        }

        return view('livewire.show-blog',[
            'blogs'=> $blogs,
            'category'=> $category
        ]);
    }
}
