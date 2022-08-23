<br><br>
    
<center>   
    <h3>Edit profile</h3> 
    <form action="{{route('customer.profile.edit.submit')}}" method="post">
        <div class="col-md-4">
                {{csrf_field()}}
                <input type="hidden" name="id" class="form-control" value="{{$customer->id}}"><br>
             Name:
                <input type="text" id="name" name="name"  value="{{$customer->name}}"><br>
                
                
            Username:
                <input type="text" id="userName" name="userName" value="{{$customer->userName}}"><br>
            Email:   
                <input id="email" name="email" value="{{$customer->email}}" type="email"><br>
            Phone Number:   
                <input id="phoneNumber" name="phoneNumber" value="{{$customer->phoneNumber}}" type="text"><br>
            NID:
                <input id="nidNO" name="nidNO" value="{{$customer->nidNo}}" type="text"><br>
            Address:  
                <input id="address" name="address" value="{{$customer->address}}" type="text"><br>
            Age:
                <input id="age" name="age" value="{{$customer->age}}" type="text"><br>
                
                <input type="reset" class="btn btn-primary" value="Reset">&nbsp;&nbsp;
                <input type="submit" value="Update">
        </div>    
    </form>
</center>    