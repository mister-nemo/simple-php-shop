<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
	protected $table = "categories";

    /**
     * Raw SQL
     */
    public function list()
    {
        return DB::select("select * from $this->table");
    }
}