<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page </title>
</head>
 
<body>
    <center>
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
        $name =  $_REQUEST["item"];
        $item = 0;
        if ($name === "Rice"){$item = 1;}
        elseif ($name === "Egg"){$item = 2;}
        elseif ($name === "Bread"){$item = 3;}
        elseif ($name === "Milk"){$item = 4;}
        $q = $_REQUEST["quantity"];
        $debtor = $_REQUEST["name"];
        $ddate = date('d-m-y H:i:s');
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO $debtor (item_id, quantity, added_on) VALUES ('$item',
            '$q', '$ddate')";
        $table = "CREATE TABLE $name(id int PRIMARY KEY AUTO_INCREMENT, item_id int, quantity int, added_on datetime);";
        $result = $conn->query($sql);
        $result1 = $conn->query($table);




       
         

        
        // Close connection
        mysqli_close($conn);
       
       
        header("Location: HomePage.php");
        die();
        ?>
    </center>
</body>
</html>