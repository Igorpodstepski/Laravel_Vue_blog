<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
  
    public function index(Request $request)
    {  
        return response()->json(Comment::with(['user'])->orderBy('id','desc')->get());
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'post_id' => 'required',
            'desc' => 'required',
        ]);
        $post = $request->post_id;
        $desc = $request->desc;
        DB::beginTransaction();
        try {
            $comment = Comment::create([
                'post_id' => $request->post_id, 
                'user_id' => Auth::user()->id,
                'desc' => $request->desc,
            ]);
            DB::commit(); // Commit transaction
            return 'Comment Created';
        } catch (\Throwable $th) {
            DB::rollback(); // In case of errors rollback all changes
            return $th;
        }
    }
}
