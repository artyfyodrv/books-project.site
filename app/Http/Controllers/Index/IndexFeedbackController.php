<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackRequest;
use App\Models\FeedbackMessage;

class IndexFeedbackController extends Controller
{
    public function showFormFeedback()
    {
        return view('index/feedback/content');
    }

    public function sendMsgFeedback(FeedbackRequest $request)
    {
        FeedbackMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
    }

}
