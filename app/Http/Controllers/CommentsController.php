<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;
use App\Models\User;

class CommentsController extends Controller
{
    public function store($serie_url, CommentsRequest $request) {//: RedirectResponse {
        //$data = $request->validated();
        $comment = new Comment();
        $comment->serie_id = $serie_url->id;
        $comment->author_id = Users::where('name',request(name))->first()->id;
        $comment->content = request('content');
        $comment->save();

   // $comment = new Comment;
   // $comment->body = $request->comment_body;
   // $comment->Serie()->associate($request->Serie());
   // $serie = Serie::find($request->serie_id);
   // $serie->comments()->save($comment);
        return back();
   }

   public function destroy(Comment $comment ) : RedirectResponse {
      $comment->delete();
      return back();
   }
}
