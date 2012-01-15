<?php defined('SYSPATH') or die('No direct script access.');

class Model_Post extends ORM {
  protected $_table_name = 'kohana_posts';
  public function rules() {
    return array(
      'author' => array(
        array('not_empty')
      ),
      'body' => array(
        array('not_empty')
      )
    );
  }

  public function filters() {
    return array(
      'author' => array(
        array('trim')
      )
    );
  }
}
