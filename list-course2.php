<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>List Course</title>   
<meta name="description" content="Data table Bootstrap."> 
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

 <script src="assets/js/bootstrap.min.js"></script>       
<script src="assets/js/jquery.2.1.1.min.js"></script>
<link href="datatable/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="datatable/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="datatable/jquery.dataTables.min.js"></script>

</head>  
<body>  

<table id="myTable" class="table table-striped" >  
        <thead>  
          <tr>  
            <th>ENO</th>  
            <th>EMPName</th>  
            <th>Country</th>  
            <th>Salary</th>  
          </tr>  
        </thead>  
        <tbody>  
          <tr>  
            <td>001</td>  
            <td>Anusha</td>  
            <td>India</td>  
            <td>10000</td>  
          </tr>  
          <tr>  
            <td>002</td>  
            <td>Charles</td>  
            <td>United Kingdom</td>  
            <td>28000</td>  
          </tr>  
          <tr>  
            <td>003</td>  
            <td>Sravani</td>  
            <td>Australia</td>  
            <td>7000</td>  
          </tr>  
		   <tr>  
            <td>004</td>  
            <td>Amar</td>  
            <td>India</td>  
            <td>18000</td>  
          </tr>  
          <tr>  
            <td>005</td>  
            <td>Lakshmi</td>  
            <td>India</td>  
            <td>12000</td>  
          </tr>  
          <tr>  
            <td>006</td>  
            <td>James</td>  
            <td>Canada</td>  
            <td>50000</td>  
          </tr>  
		  
		   <tr>  
            <td>007</td>  
            <td>Ronald</td>  
            <td>US</td>  
            <td>75000</td>  
          </tr>  
          <tr>  
            <td>008</td>  
            <td>Mike</td>  
            <td>Belgium</td>  
            <td>100000</td>  
          </tr>  
          <tr>  
            <td>009</td>  
            <td>Andrew</td>  
            <td>Argentina</td>  
            <td>45000</td>  
          </tr>  
		  
		    <tr>  
            <td>010</td>  
            <td>Stephen</td>  
            <td>Austria</td>  
            <td>30000</td>  
          </tr>  
          <tr>  
            <td>011</td>  
            <td>Sara</td>  
            <td>China</td>  
            <td>750000</td>  
          </tr>  
          <tr>  
            <td>012</td>  
            <td>JonRoot</td>  
            <td>Argentina</td>  
            <td>65000</td>  
          </tr>  
        </tbody>  
      </table>  

</body>  
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html>  
