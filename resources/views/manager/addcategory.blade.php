
<html>
<body>
<form action="{{ route("manager.panel.addcategory") }}" method="post">
{{ csrf_field() }}
<h2 style="color:red" align ="center">ADD Category</h2>
<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
<tr><td align="right"><b>Name:</b></td>
<td>&nbsp;<input type="text" id = "name" name = "name"> 
	<span id = "err_name">
		@error('name')
            <span >{{$message}}</span><br>
        @enderror
	</span> 
</td></tr>
<tr><td align="right"><b>Price:</b></td>
<td>&nbsp;<input type="number" id = "price" name = "price"> <span id = "err_price">
	@error('price')
		<span >{{$message}}</span><br>
	@enderror
</span></td></tr>

<tr><td align="right"><b>Number of Beds:</b></td>
<td>&nbsp;<input type="number" id = "qty" name = "qty"><span id = "err_qty">
	@error('qty')
		<span >{{$message}}</span><br>
	@enderror
</span> </td></tr>
<tr><td align="right"><b>Description:</b></td>
<td>&nbsp;<input type="text" id = "description" name = "description"><span id = "err_description">
	@error('description')
		<span >{{$message}}</span><br>
	@enderror
</span> </td></tr>
<tr><td></td>
<td>&nbsp;<input type="submit" name ="add_pro" value="Add" ></td></tr>
</table>
</body>
</html>
