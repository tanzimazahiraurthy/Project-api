
<html>
	<body>
		<fieldset>
			<form action="{{ route("manager.panel.addnotice") }}" method = "post" onsubmit= "return (validate());">
				{{csrf_field()}} 
				<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
					<tr>
						<td align="center" colspan="2" style="color:blue"><h1><b>Add Notice</b></h1></td>
					</tr>
					<tr>
					   
						<td align="center"><textarea id="notice" name="notice"></textarea>
					  <br><span id="err_notice">&nbsp; <br></span>
						</td>		
					</tr>
					
					
					<tr>
						<td align="center" colspan="2"><input name="Add_notice" type="submit" value="Submit"></td>
				   
						
					</tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>
				