<?php

namespace thomasmars\LaravelH5p\Eloquents;

use DB;
use Illuminate\Database\Eloquent\Model;

class H5pEventLog extends Model {

    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'created_at',
        'type',
        'sub_type',
        'content_id',
        'content_title',
        'library_name',
        'library_version'
    ];

}
