<head>
</head>
<body>
	<fieldset>
	<form action="{{route('customer.room.book.submit')}}" method = "post">
    {{csrf_field()}}
    {{ print_r(URL('')) }}
		<table align="center">
			<tr>
				<td colspan="2" align="center"><h1><b>Room Categories</b></h1></td>
			</tr>
			<tr>
						<td colspan="2"><hr></td>
			</tr>
			<tr>
				<td align="left"><h2><b>Luxury (4 Beds)</b></h2></td>
			</tr>
			<tr>
				<td><img width="400px" heigth="300px" src="{{ URL('images/4 beds.jpg') }}"/></td>
				<td><img width="500px" heigth="500px" src="{{ URL('images/4.PNG') }}"/></td>
			</tr>
			<tr>
				<td align="left"><b>BDT- 30,000</b>/Night</td>
			</tr>
			<tr>
						<td><br></td>
			</tr>
			<tr>
				<td><a href ="{{route('customer.room.book.submit')}}"><input type="button" value="Book Now"> </a></td>
			</tr>
			<tr>
						<td colspan="2"><hr></td>
			</tr>
			<tr>
						<td><br><br><br><br></td>
			</tr>
			<tr>
				<td align="left"><h2><b>Luxury (2 Beds)</b></h2></td>
			</tr>
			<tr>
				<td><img width="400px" heigth="300px" src="{{ URL('images/2 beds.jpg') }}"/></td>
				<td><img width="500px" heigth="500px" src="{{ URL('images/2.PNG') }}"/></td>
			</tr>
			<tr>
				<td align="left"><b>BDT- 17,000</b>/Night</td>
			</tr>
			<tr>
						<td><br></td>
			</tr>
			<tr>
				<td><a href ="{{route('customer.room.book.submit')}}"><input type="button" value="Book Now"> </a></td>
			</tr>
			<tr>
						<td colspan="2"><hr></td>
			</tr>
			<tr>
						<td><br><br><br><br></td>
			</tr>
			<tr>
				<td align="left"><h2><b>Classic</b></h2></td>
			</tr>
			<tr>
				<td><img width="400px" heigth="300px" src="{{ URL('images/Classic.jpg') }}"/></td>
				<td><img width="500px" heigth="500px" src="{{ URL('images/cl.PNG') }}"/></td>
			</tr>
			<tr>
				<td align="left"><b>BDT- 10,000</b>/Night</td>
			</tr>
			<tr>
						<td><br></td>
			</tr>
			<tr>
				<td><a href ="{{route('customer.room.book.submit')}}"><input type="button" value="Book Now"> </a></td>
			</tr>