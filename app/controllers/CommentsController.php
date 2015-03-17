<?php
use cmsNico\Managers\CommentsManager;
use cmsNico\Repositories\CommentsRepo;

class CommentsController extends BaseController {

    public function save()
    {
        $comentario = new Comments;
        $data = Input::all();

        $comentario->user_id = $data['user_id'];
        $comentario->component_name = $data['component_name'];
        $comentario->component_item_id = $data['component_item_id'];
        $comentario->title = $data['title'];
        $comentario->comment = $data['comment'];
        $comentario->rate = $data['rate'];

        $comentario->save();

        return Redirect::back();
    }
}