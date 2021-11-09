<!DOCTYPE html>
<html lang="en">

<head>
	<title>GFG- Store Data</title>
    <link href='https://fonts.googleapis.com/css?family=Gafata' rel='stylesheet'>    <style> 
        body
            {
                background-color: #9494ac;
                font-family: 'Gafata';
  
            }
        div
            {
               background-color: #3d3846; 
               width: 500px;
               border-radius: 10px;
               margin-top: 3%;
               box-shadow: 5px 5px 4px rgba(0, 0, 0, 0.473);
            }
        table
            {
                padding: 20px 10px 50px 20px;
                font-size: 18px;
                letter-spacing: 2px;
                color:#f8dde693;
            }
        th
            {
                color: #fcc6d1;
                text-align: center;
                font-size: 30px;
                letter-spacing: 10px;
                padding:10px 5px 20px 5px;
                font-weight: 1000;
            }
        
        input[type=text], input[type=number_format], input[type=date]

            {
                width:350px;
                padding:10px;
                font-family: 'Gafata';
                font-size: 15px;

            }
        

        .linespace
            {
                padding-top: 15px;   
            }
        .button
            {
                width:186px;
                padding: 7px;
                float:left;
                background-color: #f5d8ded0;
                border:none;
                cursor: pointer;
                font-family: 'Gafata';
                font-size: 18px;
                color: rgb(48, 38, 44);
            }
        .button:hover
            {
                background-color: #ada9aad0;
                color: #fce4e8;

  
            }
        .buttoncenter
            {
                text-align: center;
                padding-top: 30px;
            }

    </style>
</head>

<body>
	<center> 
        <div>
            <form action="insert.php" method="post"></form>
                <table>
                    <tr>
                        <th colspan="2">STUDENT PROFILE</th>
                    </tr>

                    <tr>
                        <td class="linespace"><label class="for="studentId">Student Id: </label></td>
                    </tr>

                    <tr>
                        <td colspan="2"><input type="number_format" name="studentID" id="studentId"></td>
                    </tr>
                    
                    <tr>
                        <td class="linespace"><label for="fullName">Fullname :</label></td>
                    </tr>

                    <tr>
                        <td colspan="2"><input type="text" name="fullName" id="fullName"></td>
                    </tr>
                
                    <tr>
                        <td class="linespace"><label for="birthday">Birthday:</label></td>
                    </tr>

                    <tr>
                        <td colspan="2"><input type="date" name="birthday" id="birthday"></td>
                    </tr>

                    <tr>
                        <td class="linespace"><label for="course">Course:</label></td>
                    </tr>
                
                    <tr>
                        <td colspan="2"><input type="text" name="course" id="course"></td>
                    </tr>
                
                    <tr>
                        <td class="linespace"><label for="emailAddress">Email Address:</label></td>
                    </tr>
                
                    <tr>
                        <td><input type="text" name="email" id="emailAddress"></td>
                    </tr>
                
                    <tr>
                        <td colspan="2" class= "buttoncenter">
                            
                            <input type="submit" value="Add record" class="button">
                            <input type="reset" value="Clear" class="button">
                        </td>
                    </tr>
                
            
                </table>
            </form>
        </div>    
	</center>
</body>
</html>
