<html>
<head>
<title>welcome</title>
<body>
<?php    
function display($number) 
{    
        if($number<=100)
        {    
           echo "$number <br/>";    
           display($number+1);    
        }  
}    
        
display(1);    
?>  
</body>
</head>
</html>  