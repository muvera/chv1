<h1>Shipping Address</h1>

<!-- Check for address -->
@if($user->address==null)
<p><a href="{{route('addresses.create', $user->username)}}" class="btn btn-primary btn-lg btn-block" role="button">Shipping Address</a></p>
@else
<address>
  @if($user->address->company==true)
  <strong>{{$user->address->company}}</strong><br>
  @endif
  <strong>{{$user->address->name}} {{$user->address->last}} </strong><br>
  {{$user->address->address}} {{$user->address->apt}}<br>
  {{$user->address->city}}, {{$user->address->state}} {{$user->address->zip}}<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>

<address>
  <strong>Contact email</strong><br>
  <a href="mailto:{{$user->email}}">{{$user->email}}</a>
</address>
@endif