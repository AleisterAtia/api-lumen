<?php


namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;

class UserController extends Controller
{
    public function index()
    {
        return response()->json([
            'users' => [
                ['id' => 1, 'name' => 'John Doe'],
                ['id' => 2, 'name' => 'Amba'],
                ['id' => 3, 'name' => 'Rudi'],
                ['id' => 4, 'name' => 'Gus Pixmen'],
                ['id' => 5, 'name' => 'Asep'],
            ]
        ]);
    }
}
