<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirmMsg(Request $request)
    {
        return json_encode(['success' => 1, 'message' => 'Message Sent Successfully']);
    }

    public function sendMessageToHostess(Request $request)
    {
        // dd($request->all());
        $auth_id = \Auth::user()->id;
        $messageDetails = [];
        if($request)
        {

            $request->only([
                'sender_id',
                'receiver_id',
                'message',
                'alreadyPurchased',
                'userCredit',
                'hostessCredit',
            ]);

            $messageDetails['sender_id'] = $request->sender_id;
            $messageDetails['receiver_id'] = $request->receiver_id;
            $messageDetails['message'] = $request->message;

            $message = Message::create($messageDetails);
            
            if($request->alreadyPurchased == 1)
            {
                return json_encode(['success' => 1, 'message' => 'Message Sent Successfully']);
            }
            else
            {

                // minus from user update user table
                $userRemainingcredits = $request->userCredit - $request->hostessCredit;
                User::where('id', $auth_id)->where('user_type', 'user')->update(['credit' => $userRemainingcredits]);

                // add credits to hostess field user table
                $hostess       = User::where('id', $request->receiver_id)->first();
                $earnedCredits = $hostess->hostess_credit + $request->hostessCredit;
                User::where('id', $request->receiver_id)->update(['hostess_credit' => $earnedCredits]);

                return json_encode(['success' => 1, 'message' => 'Message Sent Successfully']);
            }
        }
    }

    public function sendFreeMessageToHostess(Request $request)
    {
        // dd($request->all());
        $messageDetails = [];
        if($request)
        {
            $auth_id = \Auth::user()->id;
            $request->only([
                'sender_id',
                'receiver_id',
                'message',
            ]);

            $messageDetails['sender_id'] = $auth_id;
            $messageDetails['receiver_id'] = (int)$request->receiver_id;
            $messageDetails['message'] = $request->message;
            $messageDetails['free_message'] = 1;

            $message = Message::create($messageDetails);
            return json_encode(['success' => 1, 'message' => 'Your Free Message Sent Successfully']);

            // return redirect()->back();
        }
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
