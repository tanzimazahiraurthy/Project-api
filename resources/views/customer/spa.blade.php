<html>
    <body>
	<h1 > Booking can be done on the previous day before or on the current day </h1>
	<form action="{{route('customer.spa.add.submit')}}" method="post">
    {{csrf_field()}}
	{{ print_r(URL('')) }}
	<table>
	
		<tr> 
			<td><h1> Schedules for Spa : </td> 
			<td>
				<h1><input type="checkbox" value= "7am-10am"  name="schedule"> 7:00am - 10:00am <br>
				<h1><input type="checkbox" value= "11am-2pm"  name="schedule"> 11:00am - 2:00pm <br>
				<h1><input type="checkbox" value= "4pm-7pm"   name="schedule"> 4:00pm - 7:00pm  <br>
				<h1><input type="checkbox" value= "7pm-10pm"  name="schedule"> 7:00pm - 10:00pm  <br>
			</td>
		</tr>
	
	
		<tr>
			<td align = "center" colspan="2"> 
				<h1><input align = "Right" type="submit" value="Book"></h1> 
			</td> 
		</tr>
	
		<tr>
			<td></td>
			<td>
				<img width="500px" height="500px" src="{{ URL('images/Spa.jpg') }}">
			</td>
		</tr>
	
	</table>
	</form>
	
	</body>
</html>