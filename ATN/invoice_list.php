    
    <?php
        $host = "ec2-54-163-97-228.compute-1.amazonaws.com";
        $database = "de779mnope0f1g";
        $user = "tancbgpktfnncy";
        $port = "5432";
        $password = "0526b0820a9d2ef684c1f86bf895e43be913f5b6933e71b7085d96003a2e9415";

        $connection_string = "host=".$host." dbname=".$database." user=".$user." port=".$port." password=".$password." sslmode=require";
        $connection = pg_connect($connection_string);
        
        $product_query = 'SELECT * FROM public."invoice"';
        $result = pg_query($connection,$product_query);
		?>

		<?php 
		 while ($row = pg_fetch_assoc($result)){
		?>
		<tr>
			<td><?php echo $row["customer_id"];?></td>
			<td><?php echo $row["customer_name"];?></td>
			<td><?php echo $row["invoice_id"];?></td>
			<td><?php echo $row["invoice_date"];?></td>
			<td><?php echo $row["invoice_product_id"];?></td>
            <td><?php echo $row["invoice_quantity"];?></td>
		</tr>
        <?php 
         }
    ?>