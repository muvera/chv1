
<div class="table-responsive">
	<table class="table small">
      <thead>
        <tr>
          <th>Alias:</th>
          <th>SKU:</th>
          <th>UPC:</th>
          <th>Brand:</th>
          <th>Weight:</th>
          <th>Sheet:</th>
          <th>cdt:</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$border->alias_name}}</td>
          <td>{{$border->sku}}</td>
          <td>{{$border->upc}}</td>
          <td>{{$border->brand}}</td>
          <td>{{$border->weight}}</td>
          <td>{{$border->width}}'' {{$border->height}}''</td>
          <td>{{$border->condition}}</td>
        </tr>

        <tr>
        	<td colspan="7"><span itemprop="description">Description: {{$border->description}}	</span></td>
        
        </tr>

        <tr>
          <td colspan="7">Ingredients: {{$border->ingredients}} </td>
        </tr>

      </tbody>
    </table>

</div>



