<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileImageRequest;
use App\Http\Requests\User\UpdateAccountRequest;
use Illuminate\Support\Str;
use App\Traits\UploadTrait;
use App\User;
use Illuminate\Http\Request;

class AcountUserController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('pages.user.editAccount', [
            'user' => $request->user()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileImageRequest $request)
    {
        // Get current user
        $user = User::findOrFail(auth()->user()->id);
        // set user name
        $user->name = $request->input('name');

        // Check if a profile image has been uploaded 
        if ($request->has('profile_image')) {
            // Get image file
            $image = $request->file('profile_image');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('name')) . '_' . time();
            //  Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [folder path + file name + file extension]
            $filePath = $folder . $name . '.' .
                $image->getClientOriginalExtension();
            // upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $user->profile_image = $filePath;
        }
        // persit user record to database
        $user->save();

        // Return user back and show a flash messagae
        return redirect()->back()->with(['status' => 'Profile update is successfully']);
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
    public function edit(Request $request)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAccountRequest $request)
    {
        $request->user()->update(
            $request->all()
        );

        return redirect()->route('edit-account.index')->with(['success-update' => 'Update account is succesfully']);
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
