<?php

class AdminController extends \BaseController {

			public function index(){

				// Get the orders that are pending
				$orders = Status::find(1)->orders()->get();
				$categories = Category::get();
				$users = User::get();
			return View::make('admin.index')
					->with('orders', $orders)
					->with('categories', $categories)
					->with('users', $users);
			}

# Add Role 
			public function changeRole(){
				$input = Input::get();
				$user = User::findOrFail($input['userid']);
				$user->removeRole($input['userrole']);
				$user->assignRole($input['newrole']);

				return Redirect::back();


			}


			public function orderindex()
			{
				$orders = Order::get();
				return View::make('admin.orders.index')
						->with('orders', $orders);
			}

			public function ordershow($id)
			{
				$order = Order::findOrFail($id);
						return View::make('admin.orders.show')
						->with('order', $order);

			}



			public function printorder($id)
			{
				$order = Order::findOrFail($id);
						return View::make('admin.orders.print_order')
						->with('order', $order);

			}

			public function status()
			{
				if(Input::get('new_status')==0) return Redirect::back();
				$input = Input::get();
				$order = Order::findOrFail($input['id']);
				$order->removeStatus($input['status_id']);
				$order->assignStatus($input['new_status']);

				return Redirect::back();



			}

			

}