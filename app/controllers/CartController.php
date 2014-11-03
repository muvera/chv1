<?php
class CartController extends \BaseController {


	public function index(){
		
			// Get The Session
			$cart = Session::get('cart');
			$sum = 0;
			// Get the Shipping
			$x = Session::get('shipping');

			$shipping = Shipping::where('id', '=', $x)->first();

				return View::make('cart.index')
					->with('cart', $cart)
					->with('sum', $sum)
					->with('shipping', $shipping);
						
	}


	public function addtocart( $id, $size_id, $user_dir, $cat_id, $border_id, $image){

		//dd($id . '/' . $user_id . '/' . $cat_id . '/' . $border_id . '/' . $image);

		MariosCart::push($id, $size_id, $user_dir, $cat_id, $border_id, $image);
		return Redirect::to('/cart');
			
	}

	public function deletecart(){

		Session::forget('cart');

		return Redirect::back();
	}

	#Delete Item
		public function deleteitem(){

		$process = Input::get('process');
		$x = Session::get($process);
		Session::forget($process);
		$items = Session::put($process, --$x);
		$x = Session::get($process);
	

		// #Search and compare items
		$cart = Session::get('cart');
		foreach($cart as &$value){
    	if($value['process'] === $process){
        $value['qty'] = $x;
        break; // Stop the loop after we've found the item
    	}
		}
		$zero = Session::get($process);
						if($zero==0){
				 				
				 				#Search and compare items
								$cart = Session::get('cart');
								foreach($cart as $key =>$value)
								{
									if ($value['process']==$process) {	
											
										$image = $key;	
									}

								}

						unset($cart[$image]);
						Session::forget('cart');
						Session::put('cart', $cart);

						return Redirect::back();

						}


		Session::forget('cart');
		Session::put('cart', $cart);

		return Redirect::to('/cart');
						
		
	}




	#Add Item
		public function additem(){
		
		$process = Input::get('process');
		$x = Session::get($process);
		Session::forget($process);
		$items = Session::put($process, ++$x);
		$x = Session::get($process);
	

		// #Search and compare items
		$cart = Session::get('cart');
		foreach($cart as &$value){
    	if($value['process'] === $process){
        $value['qty'] = $x;
        break; // Stop the loop after we've found the item
    	}
		}

		Session::forget('cart');
		Session::put('cart', $cart);

		return Redirect::to('/cart');
	}



		#Update Shipping
		public function updateshipping(){
		
		$input = Input::get('shipping');
		Session::forget('shipping');
		Session::put('shipping', $input);

		return Redirect::back();
	}




}