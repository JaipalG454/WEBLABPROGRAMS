<?php 
    if(isset($_POST['result'])){
     $result = $_POST['display'];
	 $result = eval('return '.$result.';');
    }
   ?> 


<html>
<head>
<title> Simple Calculator Using PHP 8a</title>
<style>
input {
    background-color: cyan; 
    border: none;
    color: red;
    width: 100%;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
}
</style>

</head>
   <body>
<center>
<h2> Calculator Using PHP</h2>
      <form name="cal"  method="post">
         <table>
            <tr>
               <td colspan="4">
                  <input type="text" name="display" value="<?php if(isset($result)){ echo $result;}?>"  >
               </td>
            </tr>
            <tr>
               <td><input type="button"  value="1" onclick="cal.display.value += '1'"></td>
               <td><input type="button"  value="2" onclick="cal.display.value += '2'"></td>
               <td><input type="button"  value="3" onclick="cal.display.value += '3'"></td>
               <td><input type="button"  value="+" onclick="cal.display.value += '+'"></td>
            </tr>
            <tr>
               <td><input type="button" value="4" onclick="cal.display.value += '4'"></td>
               <td><input type="button" value="5" onclick="cal.display.value += '5'"></td>
               <td><input type="button" value="6" onclick="cal.display.value += '6'"></td>
               <td><input type="button" value="-" onclick="cal.display.value += '-'"></td>
            </tr>
            <tr>
               <td><input type="button" value="7" onclick="cal.display.value += '7'"></td>
               <td><input type="button" value="8" onclick="cal.display.value += '8'"></td>
               <td><input type="button" value="9" onclick="cal.display.value += '9'"></td>
               <td><input type="button" value="*" onclick="cal.display.value += '*'"></td>
            </tr>
            <tr>
               <td><input type="button" value="c" onclick="cal.display.value = ''"></td>
               <td><input type="button" value="0" onclick="cal.display.value += '0'"></td>
               <td><input type="submit" value="=" name="result"></td>
               <td><input type="button" value="/" onclick="cal.display.value += '/'"></td>
            </tr>
         </table>
		 
      </form>
</center>
   </body>
   
</html>