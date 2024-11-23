<?php

namespace App\Http\Controllers;

use App\DataTables\UserOrdersDataTable;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UserOrdersDataTable $dataTable)
    {
        return $dataTable->render('orders.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        $data = $request->safe()->all();
        $data['user_id'] = Auth::id();
        Order::create($data);
        return redirect()->route('index')->with('success', 'the borrowing operation succeeded');
    }

}
