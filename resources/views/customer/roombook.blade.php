<html>
    <body>
        <fieldset>
            <form action="{{route('customer.room.book.submit')}}" method = "post" enctype="multipart/form-data">
                {{csrf_field()}}
                <table style="border-color:green; width:40%; height:50%;" align="center" border="4">
                    <tr>
                        <td align="center" colspan="2"><h1 >Room Booking</h1></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><img width="300px" heigth="200px" src="https://www.gannett-cdn.com/-mm-/05b227ad5b8ad4e9dcb53af4f31d7fbdb7fa901b/c=0-64-2119-1259/local/-/media/USATODAY/USATODAY/2014/08/13/1407953244000-177513283.jpg"/></td>
                    </tr>

                    <tr>
                       <td align="left"><b>Room No:</b></td>
                       <td><input type="text" id="RoomNo" name="RoomNo"  value="" >
                       <br><span id="err_RoomNo" class="text-danger"></span>
                       </td>
                    </tr>
                    
                    <tr>
                       <td align="left"><b>Branch:</b></td>
                       <td>
                           <select id="Branch" name="Branch" value="">
                                <option selected disabled>--select--</option>
                                <option>Dhaka</option>
                                <option>Chittagong</option>
                                <option>Barishal</option>
                                <option>Khulna</option>

                            </select>
                       <br><span id="err_Branch">&nbsp; <br></span>
                       </td>
                    </tr>

                    <tr>
                       <td align="left"><b>NID:</b></td>
                        <td><input type="text" id="NID" name="NID" value="" >
                      <br><span id="err_NID">&nbsp; <br></span>
                        </td>        
                    </tr>

                    <tr>
                       <td align="left"><b>Address: </b></td>
                        <td><input type="text" id="Address" name="Address" value="">
                      <br><span id="err_Address">&nbsp; <br></span>
                        </td>        
                    </tr>

                    <tr>
                       <td align="left"><b>Email: </b></td>
                        <td><input id="Email" name="Email" value="" type="email">
                      <br><span id="err_Email">&nbsp; <br></span>
                        </td>        
                    </tr>

                    <tr>
                       <td align="left"><b>Phone no: </b></td>
                        <td><input id="Phone" name="Phone" value="" type="text">
                      <br><span id="err_Phone">&nbsp; <br></span>
                        </td>        
                    </tr>

                    <tr>
                       <td align="left"><b>Check in time: </b><br> (dd-mm-yyyy)</td>
                        <td><input id="CIT" name="CIT" value="" type="text">
                      <br><span id="err_CIT">&nbsp; <br></span>
                        </td>        
                    </tr>


                    <tr>
                       <td align="left"><b>Check out time: </b><br> (dd-mm-yyyy)</td>
                        <td><input id="COT" name="COT" value="" type="text">
                        <br><span id="err_COT">&nbsp; <br></span>
                        </td>    
                    </tr>



                    <tr align="center">
                       <td colspan="2"> <input type="submit" value="Book Now"></td>
                    </tr>
                </table>
            </form>

        </fieldset>
    </body>
</html>

