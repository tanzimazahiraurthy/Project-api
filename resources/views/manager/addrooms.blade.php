
<html>
<body>
<h1 style="color:blue" align ="center">Welcome Admin</h1>
<form action="{{ route('manager.panel.addrooms') }}"  method="post">
{{ csrf_field() }} 
<h2 style="color:red" align ="center">ADD ROOMS</h2>
<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
<tr><td align="right"><b>Room No:</b></td>
<td>&nbsp;<input type="number" id = "room_no" name = "room_no"> 
	<span id="err_room_no">
			@error('room_no')
				<span >{{$message}}</span><br>
			@enderror
	</span> </td></tr>
<tr><td align="right"><b>Category:</b></td></span>
<td>&nbsp;
	<input type="text" id = "c_id" name = "c_id"> 

	<span id = "err_c_id">
		@error('c_id')
            <span >{{$message}}</span><br>
        @enderror
	</span> </td><tr>

<td></td><td>&nbsp;<input type="submit" value="Add Room" > </td>
</table>
</body>
</html>
