<!DOCTYPE html>
<html>
<body>
    <h1>Invoice</h1>
    <?php
        $cusid = $_REQUEST["customer_id"];
        $cusname = $_REQUEST["customer_name"];

        $invoice_id = $_REQUEST["invoice_id"];
        $invoice_date = $_REQUEST["invoice_date"];

        $invoice_product_id = $_REQUEST["invoice_productid"];
        $invoice_quantity = $_REQUEST["invoice_product_quantity"];

        $id_pro = "";
        for ($i = 0; $i <count($invoice_product_id); $i++)
        {
            $id_pro = $id_pro.','.'"'.$invoice_product_id[$i].'"';        
        }
        $id_pro = substr($id_pro, 1);

        $id_quan = "";
        for ($i = 0; $i <count($invoice_quantity); $i++)
        {
            $id_quan = $id_quan.','.'"'.$invoice_quantity[$i].'"';        
        }
        $id_quan = substr($id_quan, 1);

        $host = "ec2-18-206-20-102.compute-1.amazonaws.com";
        $database = "d1g7t5dsn08m8f";
        $user = "eecafgmeuqpslr";
        $port = "5432";
        $password = "1b6ce985fe008d544128e13087c08243ed52e9ec5e66e9dc6785c94f66d8cbfa";

        $connection_string = "host=".$host." dbname=".$database." user=".$user." port=".$port." password=".$password." sslmode=require";
        $connection = pg_connect($connection_string);

        if ($connection === false) {
            die ("ERROR: Could not connect to database");
        } 
        else {
            echo "SUCCESS: Connection to Heroku Postgres has been established";

            $product_query = 'INSERT INTO public."invoice"(customer_id, customer_name, invoice_id, invoice_date, invoice_product_id, invoice_quantity) VALUES
            (\''.$cusid.'\',\''.$cusname.'\',\''.$invoice_id.'\',\''.$invoice_date.'\',\''.$id_pro.'\', \''.$id_quan.'\')';

            echo $product_query;

            if (pg_query($connection, $product_query)) {
                echo '<p>SUCCESS: Record is added successfully. A new invoice is created</p>';
            }
            else {
                echo '<p>ERROR: Could not execute query</p>';
            }
        }
    ?>
</body>
</html>