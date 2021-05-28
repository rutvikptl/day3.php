<!DOCTYPE html>
<html>
<head>
     <title>form</title>
</head>
<body>
     <h1>Registration form</h1>
          <form action="task3.php" method="POST" >
          <table>
              <tr>
               <td>Name:</td> 
                  <td><input type="text" id="input" name="txt1"></td>
               </tr>   
          
               <tr>
                    <td>Age:</td>
                   <td><input type="number" name="txt2"></td>
                </tr>   
              <tr>
                    <td>Email-id:</td>
                    <td><input type="Email-id" name="txt3" required></td>
              </tr>
             <tr> 
                  <td>Phone no:</td>
                  <td><input type="number" name="txt4"></td>
             </tr>
              
              <tr>
                  <td>Address:</td>>
                  <td><input type="text" name="txt5"></td>
             </tr>
             <tr>
                 <td><input type="submit" name="submit"></td>
           </tr>
           </table>  
   
     </form>

</body>
</html>