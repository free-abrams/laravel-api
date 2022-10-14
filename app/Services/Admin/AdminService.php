<?php

namespace App\Services\Admin;

use App\Models\Admin;

class AdminService
{
    public function index($param): array
    {
        $where = [];
        if (!empty($param['search_name'])) {
            $where[] = ['nickname', '=', $param['search_name']];
        }

        return (new Admin())->pageList($where, $param['limit'], $param['page']);
    }
}
