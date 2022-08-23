
<html>
	<body>
		<fieldset>
        <form action="{{route('customer.review.submit')}}" method = "post" enctype="multipart/form-data">
        {{csrf_field()}}
				<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
					<tr>
						<td colspan="3" align="center"><h1 style="color:blue"><b>Write Us </b></h1></td>
					</tr>
					<tr>
						<td><input id="Name" name="Name" placeholder="Your name ...." value="" type="text"> <br><span id="err_Name"></span> </td>
						<td><input id="Email" name="Email" type="text" placeholder="Your email ..." value="" type="text"> <br><span id="err_Email"></span></td>
						<td><input id="Subject" name="Subject" type="text" placeholder="Subject" value="" type="text"> <br><span id="err_Subject"></span></td>
					</tr>
					<tr>
						<td colspan="3" align="center"><textarea id="Message" name="Message" placeholder="Message"></textarea>
						<br><span id="err_Message"></span></td>
					</tr>
					
					<tr>
						<td  align="center"><b>Give a Rating: </b></td>
						<td><input id="Rating" name="Rating" type="text" placeholder="......out of 5......" value="" type="text"> <br><span id="err_Rating"></span>
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