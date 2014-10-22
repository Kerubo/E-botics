<?php
class Content extends Eloquent
{
  protected $fillable = ['username', 'password', 'slug'];

 
  public function author()
  {
    return $this->belongsTo('User', 'user_id');
  }

  public static function slugify($string)
  {
    return str_replace(' ', '-', strtolower($string));
  }
}