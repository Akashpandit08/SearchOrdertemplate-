<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Custumers;
use App\Models\Orders;

class HomeController extends Controller
{
    // public function search(){
    //     return view('frontend.search');
    // }
    public function search(Request $request)
{
    $query = Orders::query();

    // Apply conditions based on the search criteria provided in the request
    if ($request->has('order_id')) {
        $order_id = $request->input('data'); // Corrected input key
        $query->where('orders.custumer_id', $order_id);
    }

    if ($request->has('name')) {
        $name = $request->input('data'); // Corrected input key
        $query->where('custumers.name', $name);
    }

    if ($request->has('email')) {
        $email = $request->input('data'); // Corrected input key
        $query->where('custumers.email', $email);
    }

    if ($request->has('phone')) {
        $phone = $request->input('data');
        $query->where('custumers.phone', $phone);
    }

    // Join the 'customers' table with the 'orders' table based on the 'customer_id'
    $query->join('custumers', 'orders.custumer_id', '=', 'custumers.id');

    // Retrieve specific columns from both tables
    $query->select('orders.*', 'custumers.name', 'custumers.email', 'custumers.phone','custumers.state','custumers.discount',
    'custumers.delivery_charge','custumers.address');

    // Execute the query and retrieve the results
    $results = $query->get();
    // dd($results);
    
    // Pass the query parameters along with the results to the view
    return view('frontend.search', compact('results'))->with($request->query());
}

}
