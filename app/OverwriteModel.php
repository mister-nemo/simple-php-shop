<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class OverwriteModel extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable($this->getTable());
    }

    /**
     * Raw SQL get one row
     */
    public function byKey($key, $value)
    {
        return DB::select(
            "select * from $this->table where $key=$value"
        );
    }

    /**
     * Raw SQL select all rows
     */
    public function list()
    {
      return DB::select(
        "select * from $this->table"
      );
    }

    /**
     * Raw SQL count rows by special key and group by another
     */
    public function count_and_group($count, $group)
    {
      return DB::select(
        "select $group, COUNT($count) as count from $this->table group by $group"
      );
    }

    /**
     * Raw SQL select rows and group by special key and join values
     */
    public function group_and_join($group, $join, $name = null)
    {
      if(!$name)
        $name = $join;

      return DB::select(
        "select $group, GROUP_CONCAT($join SEPARATOR ',') as $name from $this->table group by $group"
      );
    }
}