<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /**
     * Raw SQL
     */
    public function single()
    {
        return DB::select("select * from $this->table where id=$id");
    }

    /**
     * Raw SQL
     */
    public function list()
    {
        return DB::select("select * from $this->table");
    }
}