<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 1/1/15
 * Time: 10:15 PM
 */

class Object extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'maxhus_objects';

    protected  $guarded = array('$id');


}

