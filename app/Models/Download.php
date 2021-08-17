<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use App\Models\User;

class Download extends Model {

    use HasFactory;

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article(): \Illuminate\Database\Eloquent\Relations\BelongsTo {
        return $this->belongsTo(Article::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo {
        return $this->belongsTo(User::class);
    }

    public static function add(Article $article) {
        $new = new Download();
        $new->user_id = (\Auth()->user()) ? \Auth()->user()->id : "";
        $new->article_id = $article->id;
        $new->link = $article->file;
        $new->ip = $_SERVER['REMOTE_ADDR'];
        $new->address = "";
        $new->save();
    }

}
