<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeedbackMessage;

class AdminFeedbackController extends Controller
{
    public function showFeedbackList()
    {
        $messages = FeedbackMessage::all();


        return view('admin/feedback/feedback-list', compact('messages'));
    }

}
