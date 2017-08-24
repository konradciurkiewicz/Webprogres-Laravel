<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Categories;
use App\PageType;
use App\Regions;

class page extends Model
{
    protected $fillable= [
        'title', 'content'
    ];
    public function pageAuthor()
    {
        return $this->belongsTo('App\User');
    }
    public function pageCategory()
    {
        return $this->belongsTo('App\Categories');
    }
    public function pagePageType()
    {
        return $this->belongsTo('App\PageType');
    }
    public function pageRegion()
    {
        return $this->belongsTo('App\Regions');
    }
    static public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
    public function normalizeTitle($title){
        if(strlen($title)<20){
            return $title.' | Reklama strony na WebProgres.pl';
        }
        else{
            return $title;
        }

    }
}
