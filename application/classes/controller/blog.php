<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog extends Controller_Template {

  public function action_index() {
    $posts = ORM::factory('post')->find_all();
    $this->template->content = View::factory('blog/index')
      ->bind('posts', $posts);
  }

  public function action_new() {
    if ($_POST) {
      try {
        $post = ORM::factory('post');
        $post->author = $_POST['author'];
        $post->body = $_POST['body'];
        $post->save();
        $this->request->redirect('blog/index');
      }
      catch (ORM_Validation_Exception $e) {
        $errors = $e->errors('models');
      }
    }
    $this->template->content = View::factory('blog/new')
      ->bind('errors', $errors)
      ->bind('post', $_POST);
  }
}

