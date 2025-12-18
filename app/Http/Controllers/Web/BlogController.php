<?php


namespace App\Http\Controllers\Web;

use App\Models\Blog;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create(){
          $blogs = Blog::orderBy('id', 'ASC')->paginate(8);
          $categories = Category::orderBy('id', 'ASC')->get();
        //    return $blogs;
        return view('pages.blogs.index',compact('blogs','categories'));
    }
 
    public function show(Blog $blog, $slug)
    {   
        $blog = Blog::where(['slug' => $slug, 'is_published' => 1])->firstOrFail();
        $category = Category::where('id', $blog->category_id)->first();
        $categories = Category::all();
        $blogs = Blog::with('user')->where(['is_published'=>1])->orderBy('created_at', 'DESC')->paginate(8);
     

        return view('pages.blogs.show', compact('blog', 'blogs', 'category', 'categories'));
    }
    
    public function category($slug)
    {
        // dd($slug);
        
        $category = Category::where('slug', $slug)->first();
        $categories = Category::all();
        $blogs = Blog::where('category_id', $category->id)->get();

        return view('pages.blogs.category',compact('blogs', 'categories', 'category'));
    }
    
    public function search(Request $request)
    {
        $query = $request->input('search');
        
        $categories = Category::all();
    
        $blogs = Blog::where('title', 'LIKE', "%{$query}%")->paginate(9);
    
        return view('pages.blogs.index', compact('blogs', 'query', 'categories'));
    }
    
   
}
