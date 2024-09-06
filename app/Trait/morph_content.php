<?php
namespace App\Trait;

use App\Models\content;

trait morph_content
{
    public function content(){
        return $this->morphMany(content::class,"contentable");
    }


    public function content_site(){
        return $this->content()->where('state','1') ->orderByRaw("`order` ASC,`id` DESC")->get();
    }
}
