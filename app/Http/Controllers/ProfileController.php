<?php

namespace App\Http\Controllers;
use App\User;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profile = new Profile();

        $user_data = User::where('id', Auth::user()->id)->first();

        return view('profiles.index', ['profile'=> $profile,
                                       'user_data'=> $user_data]);
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
    public function store(Request $request)
    {

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
        $profile = Profile::where('user_id', $id)->first();
        if(!isset($profile)){
            $profile = new Profile([
                'image_path'=> '/img/avatar.png'
            ]);
        }

        $user_data = User::where('id', Auth::user()->id)->first();
        return view('profiles.index', ['profile'=> $profile,
                                       'user_data'=> $user_data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
        $data = $request->all();
        if(Auth::user()->id == $id or Auth::user()->role_id == 2){
            $sql = Profile::where('user_id', Auth::user()->id);
            if($sql->get()->isEmpty()){
                dd($request);
            }
            $res = $sql->update([
                'first_name'=> $data['first_name'],
                'last_name'=> $data['last_name'],
                'phone_number'=> $data['phone_number'],
            ]);
            if($res){
                return redirect()->route('profiles.show', $id)
                 ->with('success', 'profile update successfully');
            }
            else{
                return redirect()->route('profiles.show', $id)
                 ->with('error', 'SQL error');
            }
        }
        else{
            return redirect()->route('profiles.show', $id)
                 ->with('error', 'Not Authorized');
        }
    }

    public function upload(Request $request){
        $data = $request->all();
        #dd($data);
        // $fileName = sprintf("%d_%s.jpg", Auth::user()->id, date('H_i_s'));
        // $path = $request->file('files')[0]->storeAs(
        //     'img/',
        //     $fileName);
        return redirect()->route('profiles.show', 1)
                 ->with('success', 'upload update successfully');
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
