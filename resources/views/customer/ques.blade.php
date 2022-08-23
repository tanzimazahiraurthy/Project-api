
<html>
	<body>
		<fieldset>
        <form action="{{route('customer.ques.submit')}}" method = "post" enctype="multipart/form-data">
        {{csrf_field()}}
				<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
					<tr>
						<td colspan="3" align="center"><h1 style="color:blue"><b>Ask Question </b></h1></td>
					</tr>
					<tr>
						<td colspan="3" align="center"><input id="userName" name="userName" placeholder="Your name ...." value="" type="text"> <br><span id="err_Name"></span> </td>
					</tr>
					<tr>
						<td colspan="3" align="center"><textarea id="question" name="question" placeholder="Do you have any question?"></textarea>
						<br><span id="err_Message"></span></td>
					</tr>
					
					
					<tr>
						<td colspan="3" align="center"> <input name="Ask_Question" type="Submit" value="Submit">
				    </td>
					</tr>
				</table>
			</form>

		</fieldset>
	</body>
</html>