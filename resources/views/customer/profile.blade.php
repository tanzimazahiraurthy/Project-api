<html>
    <body>
        <fieldset>
                <table style="border-color:green; width:40%; height:50%;" align="center" border="4">
                    <tr>
                        <td align="center" colspan="2"><h1>Profile</h1></td>
                    </tr>
   
                        <td align="center"><b>Name:</b></td>
                        <td align="center">
                            {{$customer->name}}
                            <br><span id="err_RoomNo" class="text-danger"></span>
                       </td>
                    </tr>

                    <tr>
                        <td align="center"><b>Username:</b></td>
                        <td align="center">
                            {{$customer->userName}}
                            <br><span id="err_uname" class="text-danger"></span>
                        </td>
                    </tr>

                    <tr>
                        <td align="center"><b>Email: </b></td>
                        <td align="center">
                            {{$customer->email}}
                            <br><span id="err_Email">&nbsp; <br></span>
                        </td>        
                    </tr>


                    <tr>
                        <td align="center"><b>Phone Number:</b></td>
                        <td align="center">
                            {{$customer->phoneNumber}}
                            <br><span id="err_NID">&nbsp; <br></span>
                        </td>        
                    </tr>

                    <tr>
                        <td align="center"><b>NID:</b></td>
                        <td align="center">
                            {{$customer->nidNo}}
                            <br><span id="err_NID">&nbsp; <br></span>
                        </td>        
                    </tr>

                    <tr>
                        <td align="center"><b>Address: </b></td>
                        <td align="center">
                            {{$customer->address}}
                            <br><span id="err_Address">&nbsp; <br></span>
                        </td>        
                    </tr>

                    <tr>
                        <td align="center"><b>Gender: </b></td>
                        <td align="center">
                            {{$customer->gender}}
                            <br><span id="err_Phone">&nbsp; <br></span>
                        </td>        
                    </tr>

                    <tr>
                        <td align="center"><b>Age: </b></td>
                        <td align="center">
                            {{$customer->age}}
                            <br><span id="err_Phone">&nbsp; <br></span>
                        </td>        
                    </tr>
                    <tr>
                        <td>
                            <a class="btn btn-primary" href="{{route('customer.profile.edit', ['id'=>$customer->id])}}">Edit Profile</a>
                        </td>
                    <tr>
                </table>
        </fieldset>
    </body>
</html>

