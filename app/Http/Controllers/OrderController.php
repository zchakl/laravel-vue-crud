<?php
   
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;
   
class OrderController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function index()
    {
        $orders = Order::all();
        return Inertia::render('Orders/Index', ['orders' => $orders]);
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create()
    {
        return Inertia::render('Orders/Create');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'partNumber' => ['required'],
            'description' => ['required'],
        ])->validate();
   
        Order::create($request->all());
    
        return redirect()->route('orders.index');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function edit(Order $order)
    {
        return Inertia::render('Orders/Edit', [
            'order' => $order
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        Validator::make($request->all(), [
            'partNumber' => ['required'],
            'description' => ['required'],
        ])->validate();
    
        Order::find($id)->update($request->all());
        return redirect()->route('orders.index');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function destroy($id)
    {
        Order::find($id)->delete();
        return redirect()->route('orders.index');
    }
}
