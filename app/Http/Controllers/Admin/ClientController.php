<?php

namespace App\Http\Controllers\Admin;
use Brian2694\Toastr\Facades\Toastr;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Files;
use App\Models\UserMeta;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ClientsArr = User::with(['fn_user_meta'=>function ($q){
            $q->where('role',2);
        }])->where('id','!=',1)->get();
        return view('admin.clients.index',compact('ClientsArr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientArr = User::with(['fn_user_meta' => function($q){
            $q->with('fn_files');
        }])->find($id);
        return view('admin.clients.edit',compact('clientArr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientArr = User::with(['fn_user_meta' => function($q){
            $q->with('fn_files');
        }])->find($id);
        return view('admin.clients.edit',compact('clientArr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // $this->validate(request(), [
        //     'title' => 'required|regex:/^[a-zA-Z 0-9]*$/|max:40',
        //     'description' => 'required',
        //     'featured_image' => 'nullable|mimes:jpg,png,jpeg|max:2000000',
        //     'meta_title' => 'nullable|regex:/^[a-zA-Z 0-9]*$/|max:50',
        //     'meta_keywords' => 'nullable|regex:/^[a-zA-Z 0-9]*$/|max:50',
        //     'meta_description' => 'nullable|regex:/^[a-zA-Z 0-9]*$/|max:100'
        // ]);

        $requestData = $request->all();
        $userId = auth()->user()->id;
        $userObj =new User();        
        $updateUser = $userObj->where('id',$userId)->update(['name'=>$requestData['name']]);
        if($updateUser){
            
            $usermetaobj = $userObj->where('id',$userId)->with('fn_user_meta','fn_profile')->first();
            
            ## If request has product single image then upload image
            if(isset($requestData['profile_image'])){

                $requestData['file_name'] = store_file('uploads/profile', $requestData['profile_image']);                 
                
                $profileObj = Files::updateOrCreate(['user_id' => $userId,'type'=>'Profile'],
                    [
                        'user_id'=>$userId,
                        'type'=>'Profile',
                        'file_name'=>$requestData['file_name'],
                        'status'=>0,
                    ]);  

                if($profileObj->id != 0)
                    $requestData['profile'] = $profileObj->id ;
            }  
            
            unset($requestData['_token']);
            unset($requestData['_method']);
            unset($requestData['name']);
            unset($requestData['profile_image']);
            unset($requestData['file_name']);

            $userMeta = UserMeta::where('user_id',$userId)->update($requestData);
        }
        if($userMeta){
            Toastr::success('Company Profile update successully.!','Success');
            return redirect()->back();
        }
    

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
