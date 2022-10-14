<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public function pageList($where, $limit, $page, $columns = '*'): array
    {
        $page = self::query()->where($where)->paginate($limit, $columns, 'page', $page);

        return [
            'page' => $page->currentPage(),
            'data' => $page->items(),
            'total' => $page->total(),
        ];
    }
}
