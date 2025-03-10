<?php

namespace App\Services;

use App\Mail\CommentNotification;
use Illuminate\Support\Facades\Mail;

class CommentNotificationService
{
    public static function sendNotification(string $comment)
    {
        Mail::to('admin@example.com')->send(new CommentNotification($comment));
    }
}

?>