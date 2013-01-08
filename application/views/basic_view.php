
<!DOCTYPE HTML>
<html lang="en-UK">
<head>

	
       <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<meta charset="UTF-8">


	<link rel="stylesheet" type="text/css" href="/codeigniter/css/css.css" media="screen" />
</head>

<style>

	</style>
	

<body>

<center>
	

<table class="table search">


        
  


<form class="form-horizontal" form action="searchEmployee" method="GET" >

<div class="hero-unit">
	
	
	      <h3><a href="/codeigniter/index.php/login">login</a></h3>

	 <legend>Search</legend>



		  	<label >First name</label>
	  	
		 <input type= "text" name="firstname">	


	  	<label >Last name</label>
	  	
		 <input type= "text" name="last_name">	

<br />
	  	
		

		
		

	  


<div class="control-group">
	  	<div class="controls"> 
  <button type="submit"  class="btn btn-inverse" >Search</button>
</div></div>


	
</form>
</div>

	

                <tbody>
                	<?php if (isset($query) && (count($query) > 0)) : ?>
                	<?php foreach($query as $employee): ?>

                    <tr>
                    	<td> <?php echo($employee->emp_no); ?></td>

                        <td> <?php echo($employee->first_name); ?></td>
                        <td> <?php echo($employee->last_name); ?></td>
                        <td> <?php echo($employee->gender); ?></td>
                        <td> <?php echo($employee->hire_date); ?></td>
                        <td> <?php echo($employee->dept_no); ?></td>
                        <td> <?php echo($employee->title); ?></td>

                        
                        
                    </tr>   
					<?php endforeach; ?>
					<?php endif;?>
                </tbody>
                
                </table>
</center>

                
 <br/>     
                
</body>
</html>

