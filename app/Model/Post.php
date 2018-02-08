<?php
/**
 * Created by PhpStorm.
 * User: q2qltd
 * Date: 06/02/2018
 * Time: 12:25
 */

class Post extends AppModel {
    public $validate = array(
        'title' => array(
            'rule' => 'notBlank'
        ),
        'body' => array(
            'rule' => 'notBlank'
        )
    );


public function isOwnedBy($post, $user) {
    return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
}

}