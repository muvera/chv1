
{{Form::open(['route'=>'updateshipping'])}}

<div class="radio">
  <label>
    @if(Session::get('shipping')==1)
    <input type="radio" name="shipping" id="1" value="1" checked>
    @else
    <input type="radio" name="shipping" id="1" value="1">
    @endif
   $6.50 Regular Mail 3-4 days.
  </label>
</div>
<div class="radio">
  <label>
    @if(Session::get('shipping')==2)
    <input type="radio" name="shipping" id="2" value="2" checked>
    @else
    <input type="radio" name="shipping" id="2" value="2" >
    @endif
  $9.00 Priority Mail 2-3 days.
  </label>
</div>
<div class="radio">
  <label>
    @if(Session::get('shipping')==3)
    <input type="radio" name="shipping" id="3" value="3" checked>
    @else
    <input type="radio" name="shipping" id="3" value="3" >
    @endif
   $24.99 Overnight 1 Day
  </label>
</div>
<button class="btn btn-default btn-sm">Update Shipping</button>
{{Form::close()}}

