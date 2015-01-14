<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 1/8/15
 * Time: 3:25 AM
 */

class Category extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'maxhus_category';

    protected  $guarded = array('$id');



}

