
<html>
	<body>
		<fieldset>
        <form action="{{route('customer.event.submit')}}" method = "post" enctype="multipart/form-data">
        {{csrf_field()}}
				<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
					<tr>
						<td colspan="3" align="center"><h1 style="color:red"><b>Add Events </b></h1></td>
					</tr>
					<tr>
                        <td align="right"><b>Name:</b></td>
						<td><input id="name" name="name" placeholder="" value="" type="text"> <br><span id="err_Name"></span> </td>
                    </tr>
                    <tr>
                        <td align="right"><b>Description:</b></td>
                            	<td><textarea id="description" name="description" placeholder=""></textarea>
                                    <br><span id="err_Message"></span></td>
                    </tr>
                    <tr>
                        <td align="right"><b>Time:</b></td>
                                         <td><input id="time" name="time" type="text" placeholder="" value="" type="text"> <br><span id="err_Email"></span></td>
                    </tr>
                    <tr>
                        <td align="right"><b>Available for: </b></td>
                        <td><input id="avl" name="avl" type="text" placeholder="" value="" type="text"> <br><span id="err_Subject"></span></td>
						
					</tr>
					
	
					
					<tr>
						<td colspan="3" align="center"> <input name="Add_Review" type="Submit" value="Submit">
				    </td>
					</tr>
				</table>
			</form>

		</fieldset>
	</body>
</html>