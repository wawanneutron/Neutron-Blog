<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContentPackageRequest;
use App\ContentPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContentPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = ContentPackage::all();

        return view('pages.admin.content-package.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.content-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContentPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        ContentPackage::create($data);

        return redirect()->route('content-package.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = ContentPackage::findOrFail($id);

        return view('pages.admin.content-package.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContentPackageRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = ContentPackage::findOrFail($id);

        $item->update($data);

        return redirect()->route('content-package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ContentPackage::findOrFail($id);

        $item->delete();

        return redirect()->route('content-package.index');
    }
}
