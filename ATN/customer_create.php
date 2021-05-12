<!DOCTYPE html>
<html>
<body>
    <h1>Customer</h1>
    <?php
        $cusid = $_REQUEST["id"];
        $cusname = $_REQUEST["name"];
        $dob = $_REQUEST["dob"];
        $add = $_REQUEST["add"];
        $number = $_REQUEST["number"];
        $email = $_REQUEST["email"];

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
            echo "SUCCESS: Connection to Heroku Postgres has been established  ";

            $product_query = 'INSERT INTO public."customer"(id, customer_name, date_of_birth, address, telephone_number, email) VALUES
            (\''.$cusid.'\',\''.$cusname.'\',\''.$dob.'\',\''.$add.'\',\''.$number.'\',\''.$email.'\')';

            if (pg_query($connection, $product_query)) {
                echo '<p>SUCCESS: Record is added successfully. A new customer is added</p>';
            }
            else {
                echo '<p>ERROR: Could not execute query</p>';
            }
        }

    ?>
</body>
</html>