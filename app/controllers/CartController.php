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


	public function addtocart(){
					
					#get sessions
					// border Id
					$user_dir = Session::get('user_dir');
					// border Id
					$border_id = Session::get('border_id');
					// border File
					$border_file = Session::get('border_file');
					// Orginal File
					$upload = Session::get('upload');
					// Generated image
					$process = Session::get('process');
					// thumbnail
					$thumb = Session::get('thumbnail');
					// Size Id
					$size_id = Session::get('size_id');
					// Category Id
					$cat_id = Session::get('cat_id');

					if(Session::get('cart')){
				 	#Search and compare items
								$cart = Session::get('cart');
								$values = array_values($cart);

								foreach($values as $value)
								{

					#if value found, don't had session value

									if ($value['process']==$process) {	
											
									#add 1 to qyt
									$x = 1;
									$qty = Session::get($process);
									$new = $x + $qty;
									Session::forget($process);
									Session::put($process, $new);
									$total = Session::get($process);
									# Clean Sessions
									Session::forget('border_id');
									Session::forget('border_file');
									Session::forget('process');



									return Redirect::to('/cart');
									}
								}
					}


					#push quantity 
					Session::put($process, '1');

					$qty = Session::get($process);

					#push it to the cart
					$cart = Session::push('cart',[
					'user_dir'=> $user_dir,
					'border_id'=> $border_id,
					'border_file'=> $border_file,
					'process'=> $process,
					'size_id'=> $size_id,
					'cat_id'=> $cat_id,
					'qty'=> $qty
					]);


					#Clean Sessions after adding to the cart array
					Session::forget('border_id');
					Session::forget('border_file');
					Session::forget('process');
					Session::forget('cat_id');
					Session::forget('size_id');


					#add default shipping
					if(!Session::get('shipping')) Session::put('shipping', '2');


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