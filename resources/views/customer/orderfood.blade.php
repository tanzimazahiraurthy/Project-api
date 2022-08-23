
</head>
<body>
	<fieldset>
	<form action="{{route('customer.room.book.submit')}}" method = "post">
    {{csrf_field()}}
    {{ print_r(URL('')) }}
		<table align="center">
			<tr>
				<td colspan="2" align="center" style="color:green"><h1><b>Food Menu</b></h1></td>
			</tr>
			<tr>
						<td colspan="2"><hr></td>
			</tr>
            <tr>
				<td><img width="500px" heigth="300px" src="{{ URL('images/menu1.jpg') }}"/></td>
				
			</tr>
            <tr>
                <td><img width="500px" heigth="500px" src="{{ URL('images/menu2.jpg') }}"/></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
				<td colspan="2" align="center" style="color:red"><h1><b>Hotline Number: 02466789!!!</b></h1></td>
			</tr>