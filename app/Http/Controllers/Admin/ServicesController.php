<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Http\Resources\ServicesResource;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $model = Service::select('id', 'name', 'title', 'slug', 'canonical','is_published');

            $totalData = $model->count();
            $totalFiltered = $totalData;
            $limit = ($request->length) ? $request->length  : 10;
            $start = ($request->start)  ? $request->start   : 0;
    
            $model = $model->offset($start)->limit($limit)->orderBy('name', 'asc')->get();

            return DataTables::of($model)
                ->addIndexColumn()
                ->setOffset($start)
                ->addColumn('action', function($row){
                    $html = '<div class="btn-group" role="group">';
                    $html .= '    <a href="'. route('services.show', $row->slug) .'" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>';
                    $html .= '    <a href="'. route('admin.services.edit', $row->slug) .'" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>';
                    $html .= '</div>';

                    return $html;
                })
                ->editColumn('is_published', function($data) {
                    return $data->is_published ? '<span class="badge badge-success"> Publish </span>' : '<span class="badge badge-warning"> Draft </span>';
                })
                ->rawColumns(['action','is_published'])
                ->with(['recordsTotal'=>$totalData, "recordsFiltered" => $totalFiltered,'start' => $start])
                ->make(true);
        }

        return view('admin.services.index');
    }

    public function getServices()
    {
        return ServicesResource::collection( Service::all() )->response();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {
        $request->is_published == "on" ? $request->merge(['is_published' => true]) : $request->merge(['is_published' => false]);

        $request->merge(['user_id' => Auth::user()->id]);

        Service::create($request->all());

        return redirect()->route('admin.services.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {   
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->is_published == "on" ? $request->merge(['is_published' => true]) : $request->merge(['is_published' => false]);

        $service->update($request->all());

        return redirect()->route('admin.services.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
