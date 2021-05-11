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

        $host = "ec2-54-163-97-228.compute-1.amazonaws.com";
        $database = "de779mnope0f1g";
        $user = "tancbgpktfnncy";
        $port = "5432";
        $password = "0526b0820a9d2ef684c1f86bf895e43be913f5b6933e71b7085d96003a2e9415";

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