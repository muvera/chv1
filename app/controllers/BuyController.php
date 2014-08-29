<?php

class BuyController extends \BaseController {


    public function index(){
        dd('ok');

            // Get The Session
            $cart = Session::get('cart');
            $sum = 0;
            
            // Get the Shipping
            $x = Session::get('shipping');
            $shipping = Shipping::where('id', '=', $x)->first();
            // Loop the borders
            foreach($cart as $key => $value){
                // get the price
                $size = Size::where('id', '=', $value['size_id'])->first();
                // Sum Qty array values from the cart.
                $total = $sum += $value['qty'];
            }
            

    //     if(!Session::get('cart')) return Redirect::to('/'. Auth::user()->username);
    //         # Get stuff from cart
    //         $items = Session::get('cart');
    //         foreach($items as $key => $value)
    //         {
    //             $product = Product::where('id', $value['product'])->first();
    //             $total = $product->price * count($items);
    //             $value=$total; 
    //             $bad_symbols = array(",", "."); 
    //             $value = str_replace($bad_symbols, "", $value);

    //         }
    // // Cart ends

    // # Shipping Starts
    // $method = Session::get('shipping');
    // $shipping = Shipping::findOrFail($method);
    // // Shipping Ends

    return View::make('include.buy')
              ->with('title', 'Buy')
              ->with('total', $total * $size->base_price)
              ->with('shipping', $shipping);

 }


# From POST
    public function buy(){

    $billing = App::make('cakehollywood\Billing\BillingInterface');

    try


            {

            # Get stuff from cart
            $cart = Session::get('cart');
            $sum = 0;
            
            // Get the Shipping
            $x = Session::get('shipping');
            $shipping = Shipping::where('id', '=', $x)->first();

            // Loop the borders
            foreach($cart as $key => $value){
                // get the price
                $size = Size::where('id', '=', $value['size_id'])->first();
                // Sum Qty array values from the cart.
                $qty = $sum += $value['qty'];

                $cost = $size->base_price * $qty;
                $dollars = str_replace('$', '', $cost);
                $cents = bcmul($dollars, 100);
                $total = $cents;

                //dd($total);

                    }

            // $items = Session::get('cart');
            // foreach($items as $key => $value)
            // {

            //     $product = Product::where('id', $value['product'])->first();
            //     $total = $product->price * count($items);
            //     $input = $total;
            //     $dollars = str_replace('$', '', $input);
            //     $cents = bcmul($dollars, 100);
            //     $value = $cents;

            // }
            // Cart ends

            # Get Shipping 
            // from database please
                $method = Session::get('shipping');
                $shipping = Shipping::findOrFail($method);
                $input = $shipping->user_cost;
                $dollars = str_replace('$', '', $input);
                $cents = bcmul($dollars, 100);
                $output = $cents;

            // Shipping ends

            
        $customerId = $billing->charge([
        'id'=> Auth::user()->id,
        'total'=>$total,
        'shipping'=>$output,
        'email'=>Input::get('email'),
        'token'=>Input::get('stripe-token')
                                            ]);
           $id =  Auth::user()->id;
           $user = User::findOrFail($id);
           $user->billing_id = $customerId;
           $user->save(); 


            }

        catch(Exception $e)
        {   
        $e->getMessage();
        return Redirect::refresh()->withFlashMessage($e->getMessage());
        //return Redirect::refresh()->withFlashMessage($e->getMessage());
        }

            # Get stuff from cart
            $cart = Session::get('cart');
            $sum = 0;
            
            // Get the Shipping
            $x = Session::get('shipping');
            $shipping = Shipping::where('id', '=', $x)->first();

            // Loop the borders
            foreach($cart as $key => $value){
                // get the price
                $size = Size::where('id', '=', $value['size_id'])->first();
                // Sum Qty array values from the cart.
                $qty = $sum += $value['qty'];

                $cost = $size->base_price * $qty;
                $dollars = str_replace('$', '', $cost);
                $cents = bcmul($dollars, 100);
                $total = $cents;

                //dd($total);

                    }
            // $items = Session::get('cart');
            // foreach($items as $key => $value)
            // {
            //     $product = Product::where('id', $value['product'])->first();
            //     $total = $product->price * count($items);
            //     $value=$total; 
            //     $bad_symbols = array(",", "."); 
            //     $value = str_replace($bad_symbols, "", $value);

            // }
            // Cart ends

            # Get Shipping 
            // from database please
                $method = Session::get('shipping');
                $shipping = Shipping::findOrFail($method);
            // Shipping ends

    $profile = User::with('profile')->findOrfail($user->id);   

    # New Order Starts
    $order = new Order;
    $order->user_id = $user->id;
    $order->bill_to = $profile->address->company .'<br>'.$profile->address->name;
    $order->ship_to = $profile->address->company .'<br>'.$profile->address->name;
    $order->b_address = $profile->address->address;
    $order->b_address2 = $profile->address->apt;
    $order->b_city = $profile->address->city;
    $order->b_state = $profile->address->state;
    $order->b_zip = $profile->address->zip;
    $order->b_country = $profile->address->country;

    $order->s_address = $profile->address->address;
    $order->s_address2 = $profile->address->apt;
    $order->s_city = $profile->address->city;
    $order->s_state = $profile->address->state;
    $order->s_zip = $profile->address->zip;
    $order->s_country = $profile->address->country;
    
    $order->amount = $cost;
    $order->shipping = $shipping->user_cost;
    $order->items = serialize($cart);
    $order->status = 'Processing';
    $order->save();
    $id = $order->id;
    // New Order Ends

    # Clear Sessions
     Session::forget('cart');
     Session::forget('imagedata');
     Session::forget('thumb');
     Session::forget('price');
     
     Session::forget('thumbdata');
     Session::forget('filename');
     Session::forget('shape');
    // Clear Ends


    return Redirect::route('orders.show', $id);
 }



}