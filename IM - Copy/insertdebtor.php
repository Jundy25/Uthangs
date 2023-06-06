
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "test_db");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST["input-name"];
        $num = $_REQUEST["input-phone#"];
        $address =  $_REQUEST["input-address"];
        $ddate = date("Y/m/d");
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO debtors (d_name, phone, address, created_at)   VALUES ('$name',
            '$num', '$address', '$ddate')";
        $result = $conn->query($sql);




       
         

        
        // Close connection
        mysqli_close($conn);
       
       
        header("Location: HomePage.php");
        die();
        ?>