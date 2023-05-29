<!DOCTYPE html>
<html>
  <head>
    <title>Ibarra's Kan anan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    <style>
      *{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	box-sizing: border-box;
}
/*HEADING TITLE ibarra's kan anan SECTION*/

.vl {
	border-left: 2px solid grey;
	height: 5px;
}

.dashed{
	border-top: 3px dashed aliceblue;
}

h4{
	font-family: sans-serif;
}

.price{
	text-align: center;
	font-size: 25px;
	font-family: 'Lucida Sans',Geneva;
	background-image: url(recipe/bg.jpg);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	opacity: 90%;
}


h1{
	text-align: center;
	font-size: 90px;
	font-family: 'Lucida Sans',Geneva;
	color: wheat;
	padding: 90px;
	background-image: url(recipe/bg.jpg);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	opacity: 90%;
	text-shadow: 3px 3px 3px black;
}
/*NAVIGATION SECTION*/
nav{
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: wheat;
	position: -webkit-sticky;
	position: sticky;
	top: 0;

}
.page{
	display: inline-block;
	padding: 20px;
	text-decoration: none;
	color: #000;
	font-size: 18px;
}
nav ul{
	list-style: none;
}
nav ul a{
	display: inline-block;
	padding: 20px;
	text-decoration: none;
	color: #000;
	transition: 0.2s ease-in;
	font-size: 18px;
}
nav ul a:hover{
	background-color: burlywood;
	color: white;
}

/*FOOD LISTING DESIGN SECTION*/
.items{
	display: grid;
	grid-template-columns: repeat(3, 1fr);
	padding: 30px 20px;
	grid-column-gap: 20px;
	grid-row-gap: 30px;
}
.sudan{
	background-image: url(recipe/bg.jpg);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	padding: 50px 50px;
	padding-top: 20px;
	padding-bottom: 10px;
	width: 100%;
	height: 300px;
	object-fit: cover;
	transition: 0.2s ease;
	box-shadow: 1px 1px 1px 1px#000;
}

.item img{
	width: 100%;
	height: 300px;
	object-fit: cover;
	transition: 0.2s ease;
	box-shadow: 1px 1px 1px 1px#000;
}
.item img:hover{
	transform: scale(1.04);
}
.item h4{
	padding: 5px;
	text-align: center;
	text-shadow: 1px 1px black;
}

p{
	color: aliceblue;
	text-shadow: .5px .5px black;
	font-family: sans-serif;
}

.disabled{
	padding: 5px 30px;
	border: none;
	outline: none;
	background-color: grey;
	color: black;
	border-radius: 4px;
	font-size: 20px;
	display: block;
	margin: 0 auto;
}

.pad{
	padding: 5px 30px;
}


.add{
	size: 10px;
	background-color: burlywood;
	color: white;
	cursor: pointer;
	font-size: 10px;
	transition: 0.2s all;
	padding: 5px 5px;

}
.sub{
	size: 10px;
	background-color: burlywood;
	color: white;
	cursor: pointer;
	font-size: 10px;
	transition: 0.2s all;
	padding: 5px;
	padding-inline: 6.4px;

}
.item_button{
	padding: 5px 30px;
	border: none;
	outline: none;
	background-color: burlywood;
	color: white;
	cursor: pointer;
	border-radius: 4px;
	font-size: 20px;
	display: block;
	margin: 0 auto;
	transition: 0.2s all;
}
.item button:hover{
	transform: scale(1.04);
}

footer{
	text-align: center;
	font-size: 25px;
	font-family: 'Lucida Sans',Geneva;
	color: white;
	padding: 50px;
	background-color: #000;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	opacity: 90%;
}

/*MEDIA SCREENING TO ADJUST IN DIFFERENT SCREEN DISPLAY*/
@media screen and (max-width: 1000px){
	.items{
		grid-template-columns: repeat(2, 1fr);
	}
}

@media screen and (max-width: 768px){
	.items{
		grid-template-columns: repeat(1, 1fr);
	}
}

.popup{
	position: absolute;
	top: 60%;
	left: 13%;
	padding: 5px 10px;
	
	border-radius: 50%;
	background-color: #f44336;
}

.icon{
	position: fixed;
	top: 90%;
	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
}

.icon{
	display: block;
	text-align: center;
	padding: 5px;
	transition: all 0.3s ease;
	color: bisque;
}

.icon:hover{
	opacity: 0.5;
}

.cartpic {
	width: 20%;
	cursor: pointer;
	display: block;
	padding: 20px;
	text-decoration: none;
	color: #000;
	font-size: 18px;
	
}
.cartpic:hover {
	opacity: 0.8;
}

/* Full-width input fields */
input[type=text], input[type=password] {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
  }
  
  /* Set a style for all buttons */
  .l_button {
	background-color: burlywood;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 100%;
  }
  
  .l_button:hover {
	opacity: 0.8;
  }
  
  /* Extra styles for the cancel button */
  .cancelbtn {
	width: auto;
	padding: 10px 18px;
	background-color: #f44336;
  }
  
  /* Center the image and position the close button */
  .imgcontainer {
	text-align: center;
	margin: 24px 0 12px 0;
	position: relative;
  }
  
  img.avatar {
	width: 40%;
	border-radius: 50%;
  }
  
  .container {
	padding: 16px;
  }
  
  span.psw {
	float: right;
	padding-top: 16px;
  }
  
  /* The Modal (background) */
  .modal {
	
	display: none; /* Hidden by default */
	position: fixed; /* Stay in place */
	z-index: 1; /* Sit on top */
	left: 0;
	top: 0;
	width: 100%; /* Full width */
	height: 100%; /* Full height */
	overflow: auto; /* Enable scroll if needed */
	background-color: rgb(0,0,0); /* Fallback color */
	background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	padding-top: 60px;
  }
  
  /* Modal Content/Box */
  .modal-content {
	background-color: #fefefe;
	margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
	border: 1px solid #888;
	width: 30%; /* Could be more or less, depending on screen size */
  }
  
  /* The Close Button (x) */
  .close {
	position: absolute;
	right: 25px;
	top: 0;
	color: #000;
	font-size: 35px;
	font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
	color: red;
	cursor: pointer;
  }
  
  /* Add Zoom Animation */
  .animate {
	-webkit-animation: animatezoom 0.6s;
	animation: animatezoom 0.6s
  }
  
  @-webkit-keyframes animatezoom {
	from {-webkit-transform: scale(0)} 
	to {-webkit-transform: scale(1)}
  }
	
  @keyframes animatezoom {
	from {transform: scale(0)} 
	to {transform: scale(1)}
  }
  
  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
	span.psw {
	   display: block;
	   float: none;
	}
	.cancelbtn {
	   width: 100%;
	}
  }




  /*ADD TO CART CSS*/

  @import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');
*, ::before, ::after { box-sizing: border-box; }
body{
  font-family:'Quicksand', sans-serif;
  text-align:center;
  line-height:1.5em;
	background:#E0E4CC;
 background: #69d2e7;
 background: -moz-linear-gradient(-45deg, #69d2e7 0%, #a7dbd8 25%, #e0e4cc 46%, #e0e4cc 54%, #f38630 75%, #fa6900 100%);
 background: -webkit-linear-gradient(-45deg, #69d2e7 0%,#a7dbd8 25%,#e0e4cc 46%,#e0e4cc 54%,#f38630 75%,#fa6900 100%);
 background: linear-gradient(135deg, #69d2e7 0%,#a7dbd8 25%,#e0e4cc 46%,#e0e4cc 54%,#f38630 75%,#fa6900 100%);
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#69d2e7', endColorstr='#fa6900',GradientType=1 );
  
 }
 hr {
   border:none;
   background:#E0E4CC;
   height:1px;
 /*   width:60%;
   display:block;
   margin-left:0; */
 }
 h1{
	 margin: 12px;
 }
 .container {
   max-width: 800px; 
   margin: 1em auto; 
   background:#FFF; 
   padding:30px;
   border-radius:5px;
 }
 .productcont {
   display: flex; 
 }
 .product {
   padding:1em; 
   border:1px solid #E0E4CC; 
   margin-right:1em; 
   border-radius:5px;
 }
 .cart-container {
   border:1px solid #E0E4CC;
   border-radius:5px;
   margin-top:1em;
   padding:1em;
 }
 .cartbutton, input[type="submit"] { 
	 border:1px solid #FA6900; 
	 color:#fff; 
	 background: #F38630; 
	 padding:0.6em 1em;
	 font-size:1em; 
	 line-height:1; 
	 border-radius: 1.2em;
	 transition: color 0.2s ease-in-out, background 0.2s ease-in-out, border-color 0.2s ease-in-out;
 }


      .box{
        font-family: 'Century Gothic';
        background-color: whitesmoke;
        color: black;
        border: 4px solid whitesmoke;
        margin: 20px;	
        padding: 50px;

        text-align: justify;
        width: 500px;
		  }
      .border{
			border: 2px solid wheat;
		  }
		  table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 2px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

      .button {
        background-color: #1c87c9;
        border: none;
        color: white;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 1px 1px;
        cursor: pointer;
      }

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
/* Style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
}
.column{
	display: flex;
	float: left|right|initial|inherit|none;;
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
      document.getElementById('id1').value = "";
      document.getElementById('id2').value = "";
      document.getElementById('id3').value = "";

 }




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
var items = [
	"Rice",
	"Eggs",
	"Bread",
	"Milk"
];
/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("id1"), items);
	</script>
<div id="id01" class="modal">

<form autocomplete="off" name="form1" id="form1" class="modal-content animate" action="insertutang.php" method="post">

	<div class="imgcontainer">
	<span onclick="document.getElementById('id01').style.display='none'; clearInput()" class="close" title="Close Modal">&times;</span>
		
	</div>

	<div class="container">
		<label class="label-text" for="input-name" onkeypress="return AvoidSpace(event)">Item</label>
		<input id="id1" type="text" onfocus="this.value=''" placeholder="Enter Item Name" name="item" onkeypress="return AvoidSpace(event)" style="text-transform:uppercase" required>
		<form autocomplete="off" action="/action_page.php">
  <div class="autocomplete" style="width:300px;">
    <input id="myInput" type="text" name="myCountry" placeholder="Country">
  </div>
  <input type="submit">
</form>

		<label class="label-text" for="input-phone#">Quantity</label>
		<input id="id2" class="num" onfocus="this.value=''" type="tel" placeholder="Enter Quantity" name="quantity" onkeypress="return onlyNumberKey(event)" required>

		<label class="label-text" for="input-address">Price</label>
		

		<div class="cancel-confirm-btn-container">
		<button type="button" onclick="document.getElementById('id01').style.display='none'; clearInput()" class="cancel-btn">Cancel</button>
			<button class="confirm-btn" type="submit">Confirm</button>
		</div>
	</div>
</form>
</div>


<h1>Nor's Kan anan</h1>
      <nav>
        <ul>
          <a href="Main.html"><li>Home</li></a>
          <a href="About.html"><li>About</li></a>
        </ul>
      </nav>
	<div class="column">
      <div class="box border">
		<img src="recipe/bg.jpg"width="400" height="400">
		
		<div>
          <p name="name">NAME: <?php echo $_REQUEST["bname"];  ?></p>
          <p>#NUMBER: <?php echo $_REQUEST["phone"];  ?></p>
		  <p>Address: <?php echo $_REQUEST["address"];  ?></p>
          <p>DATE STARTED: <?php echo $_REQUEST["credate"];  ?></p>

    	</div>
	  </div>
	  <div class="table">
	  <button class= "button" onclick="document.getElementById('id01').style.display='block'" class='button'>Edit </button> 
	  <p>List of uthangs</p>
		<?php
	  $conn = mysqli_connect("localhost", "root", "", "test_db");
  
  // Check connection
  if($conn === false){
	  die("ERROR: Could not connect. "
		  . mysqli_connect_error());
  }
  $ddate = date('d-m-y H:i:s');
  $name = $_REQUEST["bname"];
  $sql = "SELECT id, item_name, quantity, price, quantity*price AS total, DATE(added_on) AS date FROM $name JOIN items ON $name.item_id=items.item_id;";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
	// output data of each row
	echo "<table id='myTable' border=2>
	<tr><td>Id</td>
	<td>Item</td>
	<td>Quantity</td>
	<td>Price</td>
	<td>Total</td>
	<td>Date</td>
	<td>Action</td></tr>";
	while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["id"]. "</td>
	  <td>" . $row["item_name"]. "</td>
	  <td> " . $row["quantity"].  "</td>
	  <td>₱" . $row["price"] .   "</td>
	  <td>₱" . $row["total"] .   "</td>
	  <td>" . $row["date"] .   "</td>
	  <td><a href=deleterec.php?bid=" .$row["id"]. " class='button'>Pay </a>  
	  <a href='editrec.php? &bid=".$row["id"]." &bname=".$row["item_name"]."&quantity=".$row["quantity"].  "' class='button'>Edit </a>    </td></tr>";
	
	 }
  } else {
	echo "0 results";
	$sql1 = "TRUNCATE TABLE $name";
  	$result = $conn->query($sql1);
  }
  $conn->close();
 
 
 ?>
 </table>
	  </div>
	</div>
	  <!-- <div class="box border">
	  <a href='editrec.php? 
	  &bid=".$row["id"]." 
	  &bname=".$row["name"]."
	  &address=".$row["address"]."
	  &email=".$row["email"]. "
	  &credate=" .$row["created_at"]. "
	  ' class='button'>Edit </a>    </td></tr>";
	  </div> -->
      <footer>
        <div>This website is for project purpose only all image use 
          reserve for te actual owner. </div>
      </footer>

  </body>

  </html>