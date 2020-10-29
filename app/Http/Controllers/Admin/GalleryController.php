<?php

namespace App\Http\Controllers\Admin;

use App\ContentPackage;
use App\Gallery;
use App\Http\Requests\Admin\GalleryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Gallery::with(['content_package'])->get()->sortDesc();

        return view('pages.admin.gallery.index', [
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
        $content_packages = ContentPackage::all();

        return view('pages.admin.gallery.create', [
            'content_packages' => $content_packages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $data = $request->all();

        $data['image'] = $request->file('image')->store('assets/gallery', 'public');

        Gallery::create($data);

        return redirect()->route('gallery.index')->with(['success-add' => 'Add image content is successfully']);
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
        $item = Gallery::findOrFail($id);

        $content_packages = ContentPackage::all();

        return view('pages.admin.gallery.edit', [
            'item' => $item,
            'content_packages' => $content_packages
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, $id)
    {
        $data = $request->all();

        $data['image'] = $request->file('image')->store('assets/gallery', 'public');

        $item = Gallery::findOrFail($id);

        $item->update($data);

        return redirect()->route('gallery.index')->with(['success-update' => 'Update image is successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Gallery::findOrFail($id);

        $item->delete();

        return redirect()->route('gallery.index')->with(['success-delete' => 'Delete image is succesfully']);
    }
}
