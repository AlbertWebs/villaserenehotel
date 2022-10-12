<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFileRequest;
use App\Http\Requests\UpdateFileRequest;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Files = File::all();
         return view('admin.files.index', compact('Files'));
    }


    public function index_list(){
        $Files = File::all();
        return view('admin.files.index-list', compact('Files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('uploads/images'),$imageName);

        $imageUpload = new File();
        $imageUpload->filename = $imageName;
        $imageUpload->room_id = $request->room_id;
        $imageUpload->type = $request->type;
        $imageUpload->save();
        return response()->json(['success'=>$imageName]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit($file)
    {
        $File = File::find($file);
        return view('admin.files.edit', compact('File'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFileRequest  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->hasFile('file')){
            $image = $request->file('file');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploads/images'),$imageName);
        }else{
            $imageName  =$request->image_cheat;
        }



        $update = array(
            'type' => $request->type,
            'room_id' => $request->room_id,
            'filename' => $imageName,
        );
        File::where('id',$id)->update($update);
        return back();
        // return redirect()->route('admin.view.booking');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy($file)
    {
        File::where('id',$file)->delete();
        return redirect()->route('admin.list.file');
    }
}
