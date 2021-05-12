<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ATN Company</title>
    <link rel="stylesheet" href="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="jquery.mobile-1.4.5/jquery-1.11.1.min.js"></script>
	<script src="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    <!-- Home page -->
    <div data-role="page" id="listing">
    <div data-role="header" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a href="#listing" data-role="button">Listing</a></li>
                <li><a href="#addproduct" data-role="button">Add product</a></li>
                <li><a href="#addcustomer" data-role="button">Add customer</a></li>
                <li><a href="#invoice" data-role="button">Invoice</a></li>
            </ul>
        </div>  
    </div>

    <div data-role="header">
        <h2>LISTING</h2>
    </div>
    <div>
    <h3>Product Listing</h3>
    <table data-role="table" class="ui-responsive" style="border: 2px solid black">
    <thead>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Descriptions</th>
            <th>Price</th>
        </tr>
    </thead>   
    <tbody>
    <?php
    require_once('product_list.php');
    ?>
    </tbody>
    </table>
    </div>

    <div>
    <h3>Customer Listing</h3>
    <table data-role="table" class="ui-responsive" style="border: 2px solid black">
    <thead>
        <tr>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Date Of Birth</th>
            <th>Address</th>
            <th>Telephone Number</th>
            <th>Email</th>
        </tr>
    </thead>   
    <tbody>
    <?php
    require_once('customer_list.php');
    ?>
    </tbody>
    </table>
    </div>

    <div>
    <h3>Invoice Listing</h3>
    <table data-role="table" class="ui-responsive" style="border: 2px solid black">
    <thead>
        <tr>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Invoice ID</th>
            <th>Invoice Date</th>
            <th>Invoice Product ID</th>
            <th>Invoice Product Quantity</th>
        </tr>
    </thead>   
    <tbody>
    <?php
    require_once('invoice_list.php');
    ?>
    </tbody>
    </table>
    </div>
    </div>

    <!-- Add product page -->
    <div data-role="page" id="addproduct">
    <div data-role="header" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a href="#listing" data-role="button">Listing</a></li>
                <li><a href="#addproduct" data-role="button">Add product</a></li>
                <li><a href="#addcustomer" data-role="button">Add customer</a></li>
                <li><a href="#invoice" data-role="button">Invoice</a></li>
            </ul>
        </div>  
    </div>
    <div data-role="header">
        <h2>PRODUCT</h2>
        <p>Please input a new product here</p>
    </div>
    <div data-role="main" class="ui-content">
    <form action="product_create.php" method="post">
        <p>
            <label for="productid">Product ID<sup>*</sup></label>
            <input type="text" name="id" id="productid">
        </p>
        <p>
            <label for="productname">Product Name<sup>*</sup></label>
            <input type="text" name="name" id="productname">
        </p>
        <p>
            <label for="productcat">Category</label>
            <input type="text" name="cat" id="productcat">
        </p>
        <p>
            <label for="date">Price<sup>*</sup></label>
            <input type="text" name="price" id="price">
        </p>
        <p>
            <label for="description">Descriptions</label>
            <textarea name="desc" id="description" rows="5" cols="30"></textarea>
        </p>
        <input class="ui-btn ui-btn-inline" type="submit" value="Submit">
        <input class="ui-btn ui-btn-inline" type="reset" value="Reset">
    </form>
</div>
</div>

    <!-- Add customer page -->
    <div data-role="page" id="addcustomer">
    <div data-role="header" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a href="#listing" data-role="button">Listing</a></li>
                <li><a href="#addproduct" data-role="button">Add product</a></li>
                <li><a href="#addcustomer" data-role="button">Add customer</a></li>
                <li><a href="#invoice" data-role="button">Invoice</a></li>
            </ul>
        </div>  
    </div>
    <div data-role="header">
        <h2>CUSTOMER</h2>
        <p>Please input customer information</p>
    </div>
    <div data-role="main" class="ui-content">
    <form action="customer_create.php" method="post">
        <p>
            <label for="customertid">Customer ID<sup>*</sup></label>
            <input type="text" name="id" id="cusid">
        </p>
        <p>
            <label for="customername">Customer Name<sup>*</sup></label>
            <input type="text" name="name" id="cusname">
        </p>
		<p>
            <label for="dateofbirth">Date Of Birth<sup>*</sup></label>
            <input type="date" name="dob" id="dob">
        </p>
        <p>
            <label for="address">Address</label>
            <input type="text" name="add" id="add"></input>
        </p>
        <p>
            <label for="number">Telephone Number</label>
            <input type="text" name="number" id="number"></input>
        </p>
        <p>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </p>
        <input class="ui-btn ui-btn-inline" type="submit" value="Submit">
        <input class="ui-btn ui-btn-inline" type="reset" value="Reset">
    </form>
    </div>
</div>

    <!-- Invoice page -->
    <div data-role="page" id="invoice">
    <div data-role="header" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a href="#listing" data-role="button">Listing</a></li>
                <li><a href="#addproduct" data-role="button">Add product</a></li>
                <li><a href="#addcustomer" data-role="button">Add customer</a></li>
                <li><a href="#invoice" data-role="button">Invoice</a></li>
            </ul>
        </div>  
    </div>
	<div data-role="header">
		<h2>INVOICE</h2>
		<p>Please input invoice here</p>
	</div>
		<div data-role="main" class="ui-content">
			<form action="invoice_create.php" method="post">
				<!--Customer Information-->
				<h3>Customer Information</h3>

				<p>
					<label for="customerid">Customer ID<sup>*</sup></label>
					<input type="text" name="customer_id" id="customer_id">
				</p>
				<p>
					<label for="customername">Customer Name<sup>*</sup></label>
					<input type="text" name="customer_name" id="customer_name">
				</p>
				<!--Invoice Information-->
				<h3>Invoice Information</h3>

				<p>
					<label for="invoiceid">Invoice ID<sup>*</sup></label>
					<input type="text" name="invoice_id" id="invoice_id">
				</p>
				
				<p>
					<label for="invoicedate">Invoice Date</label>
					<input type="date" name="invoice_date" id="invoice_date">
				</p>

				<h3>Invoice Details</h3>

				<div data-role="collapsible" data-collapsed="false">
					<h4>This is invoice details</h4>
					<ul class="content-list" data-role="listview">
						<!--Product Items go here, using Jquery Javascript-->
					</ul>
				</div>
				<button type="button" id="btnAddProduct" class="ui-btn ui-btn-inline" onclick=addProductItem()>Add a Product</button>
				<input type="submit" value="Submit">
				<input type="reset" value="Reset">
			</form>
        </div>
    </div> 
    <script>
        function addProductItem() {	
			var newli = '<li>Product ID: <input style="display:inline-block;" name="invoice_productid[]" type="text" onfocusout="updateProductName(this.value)"> <label style="display:inline-block;"></label> Quantity: <input style="display:inline-block;" name=invoice_product_quantity[] type="text"> </li>';
			$("ul.content-list").append(newli);
			$("ul.content-list").listview("refresh");
		};
    </script>
</body>
</html>