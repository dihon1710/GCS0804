<!DOCTYPE html>
<html>
<body>
    <h1>Product</h1>
    <?php
        $id = $_REQUEST["id"];
        $name = $_REQUEST["name"];
        $cat = $_REQUEST["cat"];
        $price = $_REQUEST["price"];
        $desc = $_REQUEST["desc"];

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

            $product_query = 'INSERT INTO public."product"(id, product_name, category, descriptions, price) VALUES
            (\''.$id.'\',\''.$name.'\',\''.$cat.'\',\''.$desc.'\','.$price.')';

            if (pg_query($connection, $product_query)) {
                echo '<p>SUCCESS: Record is added successfully. A new product is created</p>';
            }
            else {
                echo '<p>ERROR: Could not execute query</p>';
            }
        }

    ?>
</body>
</html>