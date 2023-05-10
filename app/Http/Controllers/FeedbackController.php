<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Models\FeedbackMessage;

class FeedbackController extends Controller
{
    public function showForm()
    {
        return view('index/feedback/content');
    }

    public function sendMessage(FeedbackRequest $request)
    {
        FeedbackMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
    }

    public function showList()
    {
        $messages = FeedbackMessage::all();

        return view('admin/feedback/feedback-list', compact('messages'));
    }

    public function showMessage($id)
    {
        $message = FeedbackMessage::findOrFail($id);

        return view('admin/feedback/feedback-message', compact('message'));
    }

}
