  


  <html>  
    <body>  
    <form method="post"> 
        <input type="number" name="num"> 
        <input type="submit" name="submit" value="Submit">  
    </form>  
    </body>  
    </html> 
    <?php
    if(isset($_POST['submit'])){
        $num = $_POST['num'];
        $i = 0;
        //  while loop that will print number
        while($i <= $num){
            //  here is the condition to check the EVEN number
            if($i%2==0){
                echo $i."<br>";
                }
                // increasing the loope counter by 1
            $i++;
        }
    }
    ///////////////////////////Reem/////////////////////////////
	?>