  <?php
    $items = unserialize($order->items);
    ?>


  @foreach($items as $key => $value)
  <img src="/uploads/{{$value['process']}}" onclick="newWindow = window.open('/uploads/{{$value['process']}}'); newWindow.print();">

  @endforeach


