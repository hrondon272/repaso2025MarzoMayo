<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use App\Services\CommentNotificationService;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $comment = Comment::create([
            'description' => $request->comment,
        ]);

        CommentNotificationService::sendNotification($comment);

        return response()->json([
            'message' => 'Comment created successfully',
            'data' => $comment
        ], Response::HTTP_OK);
    }
}