<?php
class MariosCart {


	static public function make(){

	#New Cart Item
		$user_dir = Session::get('user_dir');
		$cat_id = Session::get('cat_id');
		$border_id = Session::get('border_id');
		$new_name = Session::get('new_name');
		$size_id = Session::get('size_id');

		$image = $size_id .'/' . $user_dir . '/' . $cat_id  . '/' . $border_id  . '/' . $new_name;

		return $image;

	}



	static public function push($id, $size_id, $user_dir, $cat_id, $border_id, $image){

			//dd($id . '/' . $user_id . '/' . $cat_id . '/' . $border_id . '/' . $image);

			$big = $user_dir . '/' . $cat_id . '/' . $border_id . '/' . $image;
			$thumb = $user_dir . '/' . $cat_id . '/' . $border_id . '/mini_' . $image;


					#push quantity 
					$process = $big;
					Session::put($process, '1');

					$qty = Session::get($process);

					#push multiple array
					$cart = Session::push('cart',[
					'user_dir'=> $user_dir,
					'border_id'=> $border_id,
					'border_file'=> 'whatever.jpg',
					'process'=> $process,
					'size_id'=> $size_id,
					'cat_id'=> $cat_id,
					'qty'=> $qty
					]);

					if(!Session::get('shipping')) Session::put('shipping', '2');



	}


	static public function add(){

		
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
}