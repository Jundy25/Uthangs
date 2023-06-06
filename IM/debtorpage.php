<!DOCTYPE html>
<html>

<head>
    <title>Customer Box Preview</title>
    <link rel="stylesheet" href="style3.css">
    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


function AvoidSpace(event) {
    var k = event ? event.which : window.event.keyCode;
    if (k == 32) return false;
}

function onlyNumberKey(evt) {
             
             // Only ASCII character in that range allowed
             var ASCIICode = (evt.which) ? evt.which : evt.keyCode
             if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                 return false;
             return true;
         }
function clearInput(){
      document.getElementById('myInput').value = "";
      document.getElementById('id2').value = "";
      document.getElementById('id3').value = "";

 }
</script>
<style>
    * {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>
</head>

<body>



    <div id="id01" class="modal" style="display: none;">

        <form autocomplete="off" name="form1" id="form1" class="modal-content animate" action="insertutang.php" method="post">

        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'; clearInput()" class="close" title="Close Modal">&times;</span>
            <label class="label-text" for="input-name">Add Uthang to <input name="bname" value="<?php echo $_REQUEST["bname"];?>" size="4" style="background: transparent; border: none;" readonly></input></label>
            <div style="display:none;">
                <input name="phone" value="<?php echo $_REQUEST["phone"];?>"></input>
                <input name="address" value="<?php echo $_REQUEST["address"];?>"></input>
                <input name="credate" value="<?php echo $_REQUEST["credate"];?>"></input>
                <input name="tbal" value="<?php echo $_REQUEST["tbal"];?>"></input>
            </div>
        </div>

        <div class="container">
            
            <label class="label-text" for="input-name">Item</label><br>
            <div class="autocomplete" style="width:300px;">
                <input id="myInput" type="text" name="item" onfocus="this.value=''" placeholder="Enter Item Name"  onkeypress="return AvoidSpace(event)" required>
                </div><br>
            <!-- <input id="id1" type="text" onfocus="this.value=''" placeholder="Enter Item Name" name="item" onkeypress="return AvoidSpace(event)" style="text-transform:uppercase" required> -->
            

            <label class="label-text" for="input-phone#">Quantity</label>
            <input id="id2" class="num" onfocus="this.value=''" type="tel" placeholder="Enter Quantity" name="quantity" onkeypress="return onlyNumberKey(event)" required>

            <label class="label-text" for="input-address">Price</label>
            <span></span>
            
            <div class='cancel-confirm-btn-container'>
                <button type='button' onclick="document.getElementById('id01').style.display='none'; clearInput()" class='cancel-btn'>Cancel</button>
                <button type="submit" class='confirm-btn'>Confirm</a>
            </div>
        </div>
        </form>
    </div>



    
    <div class="top-bar-container">
    <a href="HomePage.php" style="text-decoration:none"><b class="uthangs">Uthangs</b></a>
        <div style="display: flex;">
            <button class="top-bar-btn" onclick="location.href = 'HomePage.php';">Home</button>
            <button class="top-bar-btn" onclick="location.href = 'About.php';">About</button>
            <button class="top-bar-btn" onclick="location.href = 'logout.php';">Log out</button>
        </div>
    </div>
    <div class="customer-box-preview-container">
        <div style="display:flex; flex-direction: column;">
            <div class="customer-box-preview-left-side-container">
                <img class="profile-logo" src="img\profile-logo.png" alt="Profile Logo">
                <div>
                    <p>Name:<input name="bname" value="<?php echo $_REQUEST["bname"];?>" size="4" style="background: transparent; border: none;" readonly></input></p>
                    <p>Phone#: <?php echo $_REQUEST["phone"];  ?></p>
                    <p>Address: <?php echo $_REQUEST["address"];  ?></p>
                    <p>Last Updated: <?php echo $_REQUEST["credate"];  ?></p>
                    <button onclick="document.getElementById('edituser').style.display='block'">Edit</button>

                    <div id="edituser" class="modal" style="display: none;">

        <form autocomplete="off" name="form1" id="form1" class="modal-content animate" action="edituser.php" method="post">

        <div class="imgcontainer">
            <span onclick="document.getElementById('edituser').style.display='none'; clearInput()" class="close" title="Close Modal">&times;</span>
            <label class="label-text" for="input-name">Edit User </label>
        </div>

        <div class="container">
                <input type="hidden" name="bid" value= "<?php echo $_REQUEST["bid"];  ?>">
                <input type="hidden" name="oldname" value= "<?php echo $_REQUEST["bname"];  ?>">
                <label class="label-text" for="input-name" onkeypress="return AvoidSpace(event)">Name</label>
                <input id="id1" type="text" placeholder="Enter Username" name="bname" onkeypress="return AvoidSpace(event)" value="<?php echo $_REQUEST["bname"];?>" required>

                <label class="label-text" for="input-phone#">Phone Number</label>
                <input id="id2" class="num" type="tel" placeholder="Enter Phone#" name="phone" onkeypress="return onlyNumberKey(event)" value="<?php echo $_REQUEST["phone"];  ?>" required>

                <label class="label-text" for="input-address">Address</label>
                <input id="id3" type="text" placeholder="Enter Address" name="address" value="<?php echo $_REQUEST["address"];  ?>" required>

                <div class="cancel-confirm-btn-container">
                <button type="button" onclick="document.getElementById('edituser').style.display='none'; clearInput()" class="cancel-btn">Cancel</button>
                    <button class="confirm-btn" type="submit">Confirm</button>
                </div>
            </div>
        </div>
        </form>
    </div>




                </div>
            </div>
            <div class="total-balance">
                <b>TOTAL BALANCE:</b>
                <b>₱<?php echo $_REQUEST["tbal"];  ?></b>
            </div>
        </div>

        <div class="customer-box-preview-right-side-container">
            <div class="record-btn-container">
                <b class="customer-box-preview-record">RECORDS</b>
                <div class="customer-box-review-btn-container">
                  
                    <button class="customer-box-review-btn" onclick="document.getElementById('id01').style.display='block'">Edit Record</button>
                    <Form autocomplete="off" name="form1" id="form2" action="payall.php" method="post">
                    <input type="hidden" name="bname" value="<?php echo $_REQUEST["bname"];?>" size="4" style="background: transparent; border: none;" readonly></input>
                    <button onclick="pay()" class="customer-box-review-btn">Pay All</button>
                    </Form>
                </div>
            </div>
           
            <div class="customer-box-preview-table">
                <table>
                    <tr class="table-head">
                        
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    <?php
	  $conn = mysqli_connect("localhost", "root", "", "test_db");
  
  // Check connection
  if($conn === false){
	  die("ERROR: Could not connect. "
		  . mysqli_connect_error());
  }
  $ddate = date("Y/m/d");
  $name = $_REQUEST["bname"];
  $sql = "SELECT id, item_name, quantity, price, quantity*price AS total, date_format((added_on), '%m/%d/%y') AS date FROM $name JOIN items ON $name.item_id=items.item_id;";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	// output data of each row
	echo
                    "<tr class='tb'>
                        <!-- items -->
                        
                        <td>" . $row["item_name"]. "</td>
                        <!-- quantity -->
                        <td>" . $row["quantity"]. "</td>
                        <!-- price -->
                        <td>₱" . $row["price"] . "</input></td>
                        <!-- Total -->
                        <td>₱" . $row["total"] .   "</td>
                        <td>" . $row["date"] .   "</td>
	                    <td><a href='deleterec.php?bid=" .$row["id"]." &bname=".$name. "' class='delbtn' style='text-decoration:none;'>Pay </a>  
	                    <a href='edit.php? &bid=".$row["id"]." &bname=".$row["item_name"]."&quantity=".$row["quantity"].  "' class='editbtn' >Edit </a>    </td></tr>";
  }}else {
	echo "No Record";
	$sql1 = "TRUNCATE TABLE $name";
  	$result = $conn->query($sql1);
  }
  $conn->close();?>
                </table>
            </div>
        </div>
    </div>
    </div>
    <script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["Rice", "Egg", "Bread", "Milk"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);



function pay() {
  let text = "Are you sure you want to pay all debt?";
  if (confirm(text) == true) {
    document.getElementById("form2").submit();
  } else {
    console.log("Cancelled!");
  }
}



</script>

</body>

</html>
