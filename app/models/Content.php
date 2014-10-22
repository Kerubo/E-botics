<?php
/**
* Model
*/
class Content extends Eloquent
{
  protected $fillable = ['subj', 'text', 'slug'];

 
  public function Content()
  {
    return $this->belongsTo('User', 'user_id');
  }

  public static function slugify($string)
  {
    return str_replace(' ', '-', strtolower($string));
  }
}