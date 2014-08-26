			{{Form::open(['route'=>'additem'])}}
			{{Form::hidden('border_id', $value['border_id'])}}
			{{Form::hidden('border_file', $value['border_file'])}}
			{{Form::hidden('cat_id', $value['cat_id'])}}
			{{Form::hidden('size_id', $value['size_id'])}}
			{{Form::hidden('process', $value['process'])}}
			<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></button>
			{{Form::close()}}

			{{Form::open(['route'=>'deleteitem'])}}
			{{Form::hidden('border_id', $value['border_id'])}}
			{{Form::hidden('border_file', $value['border_file'])}}
			{{Form::hidden('cat_id', $value['cat_id'])}}
			{{Form::hidden('size_id', $value['size_id'])}}
			{{Form::hidden('process', $value['process'])}}
			<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>
			{{Form::close()}}