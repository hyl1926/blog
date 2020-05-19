<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    use App\News;
    $news = App\News::All();
    echo "<pre>";
    print_r($news);
}
