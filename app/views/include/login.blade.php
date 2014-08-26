<h1>Log In</h1>
{{Form::Open(['route'=>'sessions.store', 'role'=>'form'])}}

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    {{ $errors->first('email',  '<span class="error">:message</span>')}}
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    {{ $errors->first('password',  '<span class="error">:message</span>')}}
  </div>


 <button type="submit" class="btn btn-default btn-lg">Login</button>  

@if (Session::has('flash_message'))
  <div class="form-group">
<p>{{Session::get('flash_message')}}</p>
  </div>


@endif


{{Form::close()}}