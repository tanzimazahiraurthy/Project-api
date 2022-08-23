<br><br>
    
<center>   
    <h3>Edit profile</h3> 
    <form action="{{route('customer.room.book.edit.submit')}}" method="post">
        <div class="col-md-4">
                {{csrf_field()}}
                <input type="hidden" name="id" class="form-control" value="{{$room->id}}"><br>
             
                <input type="text" id="RoomNo" name="RoomNo"  value="{{$room->RoomNo}}"><br>
                
                <select id="Branch" name="Branch" value="{{$room->Branch}}"><br>
                    <option>Dhaka</option>
                    <option>Chittagong</option>
                    <option>Barishal</option>
                    <option>Khulna</option>
                </select>
                <br>
               
                <input type="text" id="NID" name="NID" value="{{$room->NID}}"><br>
              
                <input type="text" id="Address" name="Address" value="{{$room->Address}}"><br>
               
                <input id="Email" name="Email" value="{{$room->Email}}" type="email"><br>
                
                <input id="Phone" name="Phone" value="{{$room->Phone}}" type="text"><br>
            
                <input id="CIT" name="CIT" value="{{$room->CIT}}" type="text"><br>
                
                <input id="COT" name="COT" value="{{$room->COT}}" type="text"><br>
                
                <input type="reset" class="btn btn-primary" value="Reset">&nbsp;&nbsp;
                <input type="submit" value="Update">
        </div>    
    </form>
</center>    