    
    <?php
        $host = "ec2-18-206-20-102.compute-1.amazonaws.com";
        $database = "d1g7t5dsn08m8f";
        $user = "eecafgmeuqpslr";
        $port = "5432";
        $password = "1b6ce985fe008d544128e13087c08243ed52e9ec5e66e9dc6785c94f66d8cbfa";

        $connection_string = "host=".$host." dbname=".$database." user=".$user." port=".$port." password=".$password." sslmode=require";
        $connection = pg_connect($connection_string);
        
        $product_query = 'SELECT * FROM public."product"';
        $result = pg_query($connection,$product_query);
		?>

		<?php 
		 while ($row = pg_fetch_assoc($result)){
		?>
		<tr>
			<td><?php echo $row["id"];?></td>
			<td><?php echo $row["product_name"];?></td>
			<td><?php echo $row["category"];?></td>
			<td><?php echo $row["descriptions"];?></td>
			<td><?php echo $row["price"];?></td>
		</tr>
        <?php 
         }
    ?>