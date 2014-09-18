
{{Form::open(['route'=>'process', 'files'=> true])}}
		<!-- Thumbnail -->
<div class="form-group">
		{{ Form::label('image', 'Image:') }}

    <input  type="file" 
            style="visibility:hidden; width: 1px;" 
            id='image' name='image'  
            onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> <!-- Chrome security returns 'C:\fakepath\'  -->
    <input class="btn btn-primary" type="button" value="Upload File.." onclick="$(this).parent().find('input[type=file]').click();"/> <!-- on button click fire the file click event -->
    &nbsp;
    <span  class="badge badge-important" ></span>



		{{ Form::hidden('border_id', $border->id)}}
		{{ Form::hidden('border_file', $border->file)}}
		{{ Form::hidden('size_id', $border->size_id)}}
		{{ Form::hidden('cat_id', $border->cat_id)}}
		
</div>

<button class="btn btn-primary" type="submit">Submit</button>
{{Form::close()}}