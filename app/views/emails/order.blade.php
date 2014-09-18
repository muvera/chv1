


<?php
    $user = Auth::user();
    // Get the last order
    $order = Order::orderBy('created_at', 'desc')->where('user_id', '=', $user->id)->first();

?>


<table cellspacing="0" cellpadding="0" border="0" width="650">
<tr>

<td width="650">
  

<table cellspacing="0" cellpadding="0" border="0" width="650">
<tr>
<td width="300">

  <h2>Cake Hollywood</h2>
  5507 Santa Monica Blvb, Suite 205<br>
  Hollywood, CA 90038<br>
  P: (818) 310-3652<br>
  cakehollywood.com<br>
  cakehollywoodstore@gmail.com
  <br>
  <br>
  <strong>Bill To:</strong></br>
  
  {{$order->bill_to}}

  <br>
  {{$order->b_address}}
  {{$order->b_apt}}
  <br>
  {{$order->b_city}}
  {{$order->b_state}} , 
  {{$order->b_zip}}
  <br>
  {{$order->b_country}}

</td>
<td width="200">
 <h3>Customer Receipt</h3>
Date: {{$order->created_at}}<br>
Order #:         {{$order->id}}</br>
Customer #: {{$order->user_id}}<br>
Status: {{$order->status->first()->name}}


<br>
<br> 
  <strong>Ship To:</strong></br>
  
  {{$order->ship_to}}

  <br>
  {{$order->s_address}}
  {{$order->s_apt}}
  <br>
  {{$order->s_city}}
  {{$order->s_state}} , 
  {{$order->s_zip}}
  <br>
  {{$order->b_country}}


</td>
</tr>
</table>

<hr>
<table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Qty</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>

<?php
$items = unserialize($order->items);
?>



@foreach($items as $key => $value)
<?php

$shape = Size::findOrFail($value['size_id']);

?>


          <tr>
            <td>{{$value['border_id']}}</td>
            
            <td><img src="http://cakehollywood.com/uploads/{{$value['user_dir']}}/{{$value['process']}}" class="thumbnail" width="100"></td>
            <td>{{$shape->name}}</td>
            <td>{{$shape->description}}</td>
            <td>{{$value['qty']}}</td>
            <td>{{$shape->base_price}}</td>
          </tr>

@endforeach

        </tbody>
      </table>


  
   <strong>Items:   </strong>{{$value['qty']}} </br>
  <strong>Subtotal: </strong> ${{$order->amount}} </br>  
  <strong>Shipping: </strong> ${{$order->shipping}}</br>
  <hr>
  <strong>Total:    {{$order->amount + $order->shipping}}</strong> 

</td>
</tr>
</table>
<center>Thank you for ordering from Cake Hollywood. Your images will be processed and shipped if you order before 11-12 PM M-F PT(California Time). 
<strong>TRACKING:</strong> A secondary email will be sent containing your tracking number or you may check the status of your order at http://cakehollywood.com/ and log in with your email & password</center>

<br>
<br>
If you receive this email and you did not purchase nothing from our site, please don't panic and send us an email to cakehollwoodstore@gmail.com.


