<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\Admin\AdminApiInterface;
use App\Services\Admin\AdminService;
use Illuminate\Support\Facades\Request;

class AdminController extends Controller implements AdminApiInterface
{

    public function index(): array
    {
        $res = (new AdminService())->index(Request::all());
        return json_response($res);
    }

    public function show()
    {
        // TODO: Implement show() method.
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }
}
