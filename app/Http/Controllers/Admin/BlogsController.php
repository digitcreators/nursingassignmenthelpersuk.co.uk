<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Http\Resources\BlogsResource;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
           
            $model = Blog::select('image_path','title','slug','canonical','is_published');
    
            $totalData = $model->count();
            $totalFiltered = $totalData;
            $limit = ($request->length) ? $request->length  : 10;
            $start = ($request->start)  ? $request->start   : 0;
    
            $model = $model->offset($start)->limit($limit)->get();

            return DataTables::of($model)
                ->addIndexColumn()
                ->setOffset($start)
                ->addColumn('image', function($row){
                    $html  = '<img  src="'.url(config('app.storage_path') . $row->image_path) .'" alt="thumbnail" height="80" />';
                    return $html;
                })
                ->addColumn('action', function($row){
                    $html = '<div class="btn-group" role="group">';
                    $html .= '    <a href="'. route('blogs.show', $row->slug) .'" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>';
                    $html .= '    <a href="'. route('admin.blogs.edit', $row->slug) .'" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>';
                    $html .= '    <a href="'. route('admin.blogs.destroy', $row->slug) .'" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>';
                    $html .= '</div>';
                    return $html;
                })
                ->editColumn('is_published', function($data) {
                    return $data->is_published ? '<span class="badge badge-success"> Publish </span>' : '<span class="badge badge-warning"> Draft </span>';
                })
                ->rawColumns(['action', 'image', 'is_published'])
                ->with(['recordsTotal'=>$totalData, "recordsFiltered" => $totalFiltered,'start' => $start])
                ->make(true);
        }

        return view('admin.blogs.index');
    }

    public function getBlogs()
    {
        return BlogsResource::collection( Blog::all() )->response();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags =Tag::all();

        return view('admin.blogs.create', compact('tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
        if ($request->hasfile('image')) {
            $fileName = time(). '.' .$request->image->extension();
            $path = $request->image->storeAs('blogs', $fileName, 'public');
            $request->merge(['image_path' => $path]);
        }

        $request->is_published == "on" ? $request->merge(['is_published' => true]) : $request->merge(['is_published' => false]);
        $request->merge(['user_id' => Auth::user()->id]);

        DB::beginTransaction();
        $blog = Blog::create($request->all());
        // $blog->tags()->sync( $request->tags, []);
        DB::commit();

        return redirect()->route('admin.blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return redirect()->route('blogs.show', $blog->slug);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        
        $categories = Category::all();
        $tags =Tag::all();
        // $blog->load('tags');

        return view('admin.blogs.edit', compact('blog', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        // return $request->all();

        if ($request->hasfile('image')) {
            $fileName = time().'.'.$request->image->extension();
            $path = $request->image->storeAs('blogs', $fileName, 'public');
            $request->merge(['image_path' => $path]);
        }

        $request->is_published == "on" ? $request->merge(['is_published' => true]) : $request->merge(['is_published' => false]);

        DB::beginTransaction();
            $blog->update($request->all());
            // $blog->tags()->sync($request->input('tags', []));
        DB::commit();

        return redirect()->route('admin.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        return $blog;
        
        $blog->delete();

        return redirect()->route('admin.blogs.index')->withSuccess($blog->title . ' Deleted.');
    }

}
