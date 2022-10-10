<?php

namespace App\Http\Traits;


trait UtilTrait
{
    public function valida($reque){
        $reque->validate([
            'name'=> 'required|max:10',
            'description'=> 'required|min:10',
            'categoria'=> 'required'

        ]);

        return $reque;
    }
  
}