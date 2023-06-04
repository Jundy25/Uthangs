
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
         
        // Taking all values from the form data(input)
        $name =  $_REQUEST["item"];
        $item = 0;
        if ($name === "Rice"){$item = 1;}
        elseif ($name === "Egg"){$item = 2;}
        elseif ($name === "Bread"){$item = 3;}
        elseif ($name === "Milk"){$item = 4;}
        $q = $_REQUEST["quantity"];
        $debtor = $_REQUEST['bname'];
        $ddate = date("Y/m/d");
        // Performing insert query execution
        $sql = "INSERT INTO $debtor (item_id, quantity, added_on) VALUES ('$item',
            '$q', '$ddate')";
        $result = $conn->query($sql);
       




       
         

        
        // Close connection
        mysqli_close($conn);
       
       
        header("Location: HomePage.php");
        die();
        ?>