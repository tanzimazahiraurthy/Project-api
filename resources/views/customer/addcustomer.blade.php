<html>
<head>
	<style>
		
	</style>
</head>
<body>
    <center>
    <h3>Sign up</h3> <br>   
    <form action="{{route('customer.add.submit')}}" method="post" enctype="multipart/form-data"> 
	    <div>
            {{csrf_field()}}	
            <input type="text" name="name" placeholder="Name"><br>
            @error('name')
            <span>{{$message}}</span> <br><br>
            @enderror

            <br>
            <input type="text" name="userName" placeholder="Username"> <br>
            @error('userName')
            <span>{{$message}} </span><br>
            @enderror

            <br>
            <input type="password" name="password" placeholder="Password"> <br><br>
            @error('password')
            <span>{{$message}}</span> <br>
            @enderror

            <input type="password" name="confirm_password" placeholder="Confirm Password"> <br><br>
            @error('confirm_password')
            <span>{{$message}}</span> <br>
            @enderror

            <input type="email" name="email" placeholder="Email"> <br><br>
            @error('email')
            <span>{{$message}} </span><br>
            @enderror

            <input type="text" name="phoneNumber" placeholder="Phone number"> <br><br>
            @error('phoneNumber')
            <span>{{$message}}</span> <br>
            @enderror

            <input type="text" name="nidNo" placeholder="NID"> <br><br>
            @error('nidNo')
            <span>{{$message}}</span> <br>
            @enderror

            <input type="text" name="address" placeholder="Address"> <br><br>
            @error('address')
            <span>{{$message}} </span><br>
            @enderror

            Gender
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Other">Other
            @error('gender')
            <span>{{$message}}</span> <br>
            @enderror
            
            <br><br>
            <input type="text" name="age" placeholder="Age"> <br><br>
            @error('age')
            <span>{{$message}} </span><br>
            @enderror

            Image
            <input type="file" name="image"> <br><br>
        
            <input type="reset" value="Reset">

            <input type="submit" value="Submit">
        </div>
	</form>
</center>
			
</body>
</html>
