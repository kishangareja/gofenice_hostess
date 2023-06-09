<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\UserService;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\ManageCredit;
use Auth, DB, Session;
class HostessController extends Controller
{
    public function home()
    {
        $manageCredit = ManageCredit::first();
        return view('home', compact('manageCredit'));
    }
    public function updateProfile()
    {
        $getUser = User::where('id', Auth::id())->get();
        $gallery = Gallery::where('userId', Auth::id())->orderBy('order', 'asc')->get();
        $manageCredit = ManageCredit::first();
        return view('hostess_profile', compact('gallery', 'manageCredit'));
    }

    public function storeProfilePic(Request $request)
    {
        if ($request->file('profilepic') != null) 
        {
            $file      = $request->file('profilepic');
            $fileName = rand(11111, 99999) . time() . '.' . $file->extension();
            $name = $file->move(base_path('public/upload/user/profile/'), $fileName);

            $userDetails['profilepic'] = $fileName;
            $userDetails['status'] = 'Pending';

            $user = User::where('id', $request->userId)->update($userDetails);
            
            if($user)
                Session::flash('success', 'Profile updated successfully'); 
            return redirect()->back();
        }
    }

    public function profileUpdate(Request $request)
    {
        // if($request->file('file'))
        // {
        //     $image      = $request->file('file');
        //     $imageName  = time().'.'.$image->extension();
        //     $image->move(public_path('images'),$imageName);
        //     $galleryDetail['userId']  = Auth::id();
        //     $galleryDetail['image']   = $imageName;
        //     $galleryDetail['status']  = 'Public';
            
        //     $getLastOrder = Gallery::select('order')->orderBy('order', 'desc')->first();
        //     if($getLastOrder != null || $getLastOrder != 0)
        //     $galleryDetail['order'] = $getLastOrder->order + 1;
        //     else 
        //     $galleryDetail['order'] = 1;
            
        //     $gallery = Gallery::create($galleryDetail);  
            
        //     // if($gallery)
        //     // {
        //     //     return redirect()->back();
        //     // }
        //     // return redirect()->back();
        //     return response()->json(['success'=>$imageName]);
        //     //return redirect()->route('login');
        // }

        if($request->file('file'))
        {
            $image = $request->file('file');
            $avatarName = $image->getClientOriginalName();
            $image->move(public_path('images'),$avatarName);
            
            $imageUpload = new Gallery();
            $imageUpload->image     = $avatarName;
            $imageUpload->userId    = Auth::id();
            $getLastOrder = Gallery::select('order')->orderBy('created_at', 'desc')->first();
            if($getLastOrder != null || $getLastOrder != 0)
                $imageUpload->order = $getLastOrder->order + 1;
            else 
                $imageUpload->order = 1;
            $imageUpload->status    = 'Public';
            $imageUpload->save();
            return json_encode(['success' => 1, 'message' => 'Image has been uploaded successfully']);
        }
        $projectDetails = [];
        if($request->form == 1)
        {
            $request->only([
                'height',
                'size',
                'shoesize',
                'languages',
                'city',
                'nationality',
                'hairColor',
                'description',
            ]);

            $projectDetails['height']       =  $request->height;
            $projectDetails['size']         =  $request->size;
            $projectDetails['shoesize']     =  $request->shoesize;
            if($request->languages != null || $request->languages != '')
                $projectDetails['languages']    =  implode(',',$request->languages);
            $projectDetails['city']         =  $request->city;
            $projectDetails['nationality']  =  $request->nationality;
            $projectDetails['hairColor']    =  $request->hairColor;
            $projectDetails['description']  =  $request->description;
        }
        elseif($request->form == 2)
        {
            $request->only([
                'services',
                'profileVisibility',
                'smsNotification',
                'privacyProfile',
            ]);

            $comma_separated_services = '';
            if($request->services != null || $request->services != '')
            {
                $comma_separated_services   = implode(",", $request->services);
                $projectDetails['services'] =  $comma_separated_services;
            }
            

            if($request->smsNotification == 'on')
                $projectDetails['smsNotification'] =  1;
            else
                $projectDetails['smsNotification'] =  0;

            if($request->privacyProfile == 'on')
                $projectDetails['privacyProfile']  =  1;
            else
                $projectDetails['privacyProfile'] =  0;

        }

        if($request->profileVisibility != null || $request->profileVisibility != '')
            $projectDetails['profileVisibility'] =  $request->profileVisibility;

        $user = User::where('id', Auth::id())->update($projectDetails);
        return back()->with('success',trans('messages.Saved successfully'));
    }

    public function destroy(Request $request)
    {
        $gallery = Gallery::find($request->id);
        $gallery->delete();
        return json_encode(['success' => 1, 'message' => 'Image has been deleted successfully']);
    }

    public function updateGallery(Request $request)
    {
        $count = 1;
        DB::connection()->enableQueryLog();
        $gallaryIdarry = $request->galleryId;
        foreach($request->values as $key=>$value)
        {
            $gallaryId = $gallaryIdarry[$key];
            Gallery::where('id', $gallaryId)->update(['order' => $count]);
            $count++;
        }
    }

    public function change_gallery_status(Request $request)
    {
        if($request)
        {
            $gallery = Gallery::find($request->id);
            if($gallery->status == 'Private')
                $gallery = Gallery::where('id', $request->id)->update(['status' => 'Public']);
            else if($gallery->status == 'Public')
                $gallery = Gallery::where('id', $request->id)->update(['status' => 'Private']);
            return json_encode(['success' => 1, 'message' => 'Gallery status updated successfully']);
        }
    }

    public function showHostess($lang, $id = null)
    {
        $images = '';
        $manageCredit = ManageCredit::first();
        if(Auth::id() != null || Auth::id() != '')
        {
            $auth_id = Auth::user()->id;
            $user = UserService::getUserById($id);
            $conversion = Message::where('sender_id', $auth_id)->where('receiver_id', $id)->get();
            $is_chat_option = false;
            if (count($conversion)) {
                $is_chat_option = true;
            }
            $is_freeMessage_sent =  Message::where('sender_id', $auth_id)->where('receiver_id', $id)->where('free_message',1)->get();
            $count_free_message_sent = $is_freeMessage_sent->count();
            if($user)
                $images = Gallery::where('userId', $user->id)->get();
            return view('hostess_profile_new', compact('user', 'id', 'images', 'is_chat_option', 'manageCredit', 'count_free_message_sent'));
        }
        else
        {
            $user = UserService::getUserById($id);
            if($user)
                $images = Gallery::where('userId', $user->id)->get();
            return view('hostess_profile_new', compact('user', 'id', 'manageCredit'));
        }
    }

    public function hostessSearchResult()
    {
        $manageCredit = ManageCredit::first();
        return view('hostess_search_result', compact('manageCredit'));
    }

    public function howDoesItWork() 
    {
        return view('how_does_it_work');
    }
    
}
