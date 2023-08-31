<div class="container-fluid p-5 mt-2">

<div class="col-md-9 mx-auto">
<h1 class="text-center mt-4">View Fruit Stock</h1>
<hr class="border border-1 border-danger w-25 mx-auto">
<table id="tbl" class="display mt-4" style="width:100%">
    <thead>
        <tr>
            <th>F_id</th>
            <th>Fruit_Name</th>
            <th>Qty</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <?php 
         foreach($showall as $row)
         {
        ?>
        <tr>
            <td><?php echo $row["F_id"]; ?></td>
            <td><?php echo $row["Fruit_Name"]; ?></td>
            <td><?php echo $row["Qty"]; ?></td>
            <td><?php echo $row["Price"]; ?></td>
            
                    
            
        </tr>
    
         <?php 
    }
    ?>
    </tbody>

</table>


</div>
</div>
</div>

</div>
<script>
$(document).ready(function () {
$('#tbl').DataTable();
});
</script>



