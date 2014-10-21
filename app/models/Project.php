<?php
/**
 * Created by PhpStorm.
 * User: Isaiah
 * Date: 8/19/14
 * Time: 3:36 PM
 */

class Project extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table ='perntel_project';

    protected  $guarded = array('$id');


}