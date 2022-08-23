<br><br>
    
<center>   
    <h3>Edit Gym Schedule</h3> 
    <form action="{{route('customer.gym.edit.submit')}}" method="post">
        <div class="col-md-4">
                {{csrf_field()}}
                <input type="hidden" name="id" class="form-control" value="{{$gym->id}}"><br>
             
                <input type="text" id="schedule" name="schedule"  value="{{$gym->schedule}}"><br>
                
                <input type="reset" class="btn btn-primary" value="Reset">&nbsp;&nbsp;
                <input type="submit" value="Update">
        </div>    
    </form>
</center>    