<html>
<head>
</head>
<body>
<br>

<h1 style="color:green" align="center">Welcome {{ session()->get('logged_name') }} </h1><br>
<table style="border-color:blue; width:40%; height:70%;" align="center" border="4">

<tr>
<td colspan="3" align="center"><h1>Manager Panel</h1></td>
</tr>

<tr>
<td align="center"> Add Category</td>
<td align="center"><a href ="{{ route('manager.panel.addcategory') }}"><input type="button" value="Add"> </a></td>
</tr>
<tr>
<td align="center">All Categories</td>
<td align="center"><a href ="{{ route('manager.panel.categorylist') }}"><input type="button" value="Show"> </a></td>
</tr>
<!-- <tr>
<td align="center"> All Customers</td>
<td align="center"><a href =""><input type="button" value="Show"> </a></td>
</tr> --> 
<tr>
<td align="center"> Add Event</td>
<td align="center"><a href ="{{ route('manager.panel.addevent') }}"><input type="button" value="Add"> </a></td>
</tr>
<!--<tr>
<td align="center"> All Events</td>
<td align="center"><a href =""><input type="button" value="Add"> </a></td>
</tr> -->

<tr>
<td align="center"> Add Rooms</td>
<td align="center"><a href ="{{ route('manager.panel.addrooms') }}"><input type="button" value="Add"> </a></td>
</tr>

<tr>
<td align="center"> All Rooms</td>
<td align="center"><a href ="{{ route('manager.panel.roomslist') }}"><input type="button" value="Show"> </a></td>
</tr>

<!--<tr>
<td align="center"> All Booked Rooms</td>
<td align="center"><a href =""><input type="button" value="Approve"> </a></td>
</tr> 
<tr>
<td align="center"> All Approved Rooms</td>
<td align="center"><a href =""><input type="button" value="Show"> </a></td>
</tr>
<tr>
<td align="center"> All Available Rooms</td>
<td align="center"><a href =""><input type="button" value="Show"> </a></td>
</tr> -->

<tr>
<td align="center">Add Notice</td>
<td align="center"><a href ="{{ route('manager.panel.addnotice') }}"><input type="button" value="Add"> </a></td>
</tr>
<!--<tr>
<td align="center"> All Booked Gym Schedules</td>
<td align="center"><a href =""><input type="button" value="Show"> </a></td>
</tr> 

<tr>
<td align="center"> All Booked Spa Schedules</td>
<td align="center"><a href =""><input type="button" value="Show"> </a></td>
</tr> -->
</table>
<br /> <br />
<center><a href="{{ route("manager.logout") }}"><button>Log Out</button></a></center>
</body>
</html>