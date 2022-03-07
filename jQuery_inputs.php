<!-- <!DOCTYPE html>
<html>
<head>
	<title>..:Inputs:::..</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>

    
   <form method="POST" id="insert">
   	
		
	<table class="ta_inputs" cellspacing="10px">
				
		<tr>
		
		
			<th>Name</th>
			<th>Email</th>
			<th>Mobile Number</th>
			<th>Action</th>
		</tr>
		<tr>
			<?php
			$conn=mysqli_connect('localhost','root','','input_fields');
			if(isset($_POST['btn'])){
				

                   $name=$_POST['name'];
                   $email=$_POST['email'];
                   $mobile=$_POST['mobile'];
                  foreach ($name as $key => $value) {
                            $query="insert into users(name,email,mobile)VALUES('".$value."','".$email[$key]."','".$mobile[$key]."')"; 
                            $result=mysqli_query($conn,$query);
                           
                              }            
			
             
			}
			?>
		</tr>
	    
		<tr>

		
		<td><input type="text" name="name[]" placeholder="Enter Your Name"></td>
		<td><input type="email" name="email[]" placeholder="Enter Your Email"></td>
		<td><input type="text" name="mobile[]" placeholder="Enter Your Mobile"></td>
		<td><input type="button" name="sub" value="Add" id="add"> </td>
         
		</tr>
	

		
	</table>
     <input type="submit" name="btn" value="Submit" class="btn btn-success">
   </form>

</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
   
	var html='<tr><td><input type="text" name="name[]"  placeholder="Enter Your Name"></td>	<td><input type="email" name="email[]" placeholder="Enter Your Email"></td>	<td><input type="text" name="mobile[]" placeholder="Enter Your Mobile"></td><td> <input type="submit" name="sub" value="Remove" id="remove"></td></tr>';
    $('#add').click(function(){
        $('.ta_inputs').append(html);
    });
    $('.ta_inputs').on('click','#remove',function(){
        $(this).closest('tr').remove();
    });
	});
    


	
</script>
