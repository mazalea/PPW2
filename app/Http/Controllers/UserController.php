<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login')
                ->withErrors([
                    'email' => 'Please login to access the dashboard.',
                ])->onlyInput('email');
        }

        $users = User::get();

        return view('auth.users')->with('userss', $users);
    }

    public function destroy(User $user){
        // dd($id);
        // dd($user);

        $user->update(['photo' => null]);
        File::delete(public_path() . 'photos/' . $user->photo);

        return redirect()->route('dashboard');
    }

    public function edit(User $user) 
    {
        return view('auth.edit', [
            'users' => $user
        ]);
    }

    public function update(Request $request, User $user){
        $request->validate([
            'name'=>'required|string|max:250',
            'photo' => 'image|nullable|max:1999'
        ]);

        $user->name = $request->input('name');

        if ($request->hasFile('photo')) 
        {
            $photoPath = public_path('photos'. $user->photo);
            if (File::exists($photoPath)) 
            {
                File::delete($photoPath);
            }
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('photo')->storeAs('photos', $filenameSimpan);

            $user->photo = $filenameSimpan;

            $selectedPhotoSize = $request->input('photoSize');

            if (Storage::exists('photos/' . $user->photo)) {
                $originalImagePath = public_path('storage/photos/' . $user->photo);
            
                if ($selectedPhotoSize === 'thumbnail') {
                    $resizedImage = Image::make($originalImagePath);
                    $resizedImage->fit(160, 90);
                    $resizedImage->save(public_path('storage/thumbnails/' . $user->photo));
                } elseif ($selectedPhotoSize === 'square') {
                    $resizedImage = Image::make($originalImagePath);
                    $resizedImage->fit(200, 200);
                    $resizedImage->save(public_path('storage/square/' . $user->photo));
                }
            }
        }

        $user->save();
        return redirect()->route('dashboard')->withSuccess('Update successful!');
    }
}