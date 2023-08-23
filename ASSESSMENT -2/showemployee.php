<div class="container-fluid p-5 mt-2">

<div class="col-md-9 mx-auto">
<h1 class="text-center mt-4">View Employee</h1>
<hr class="border border-1 border-danger w-25 mx-auto">
<table id="tbl" class="display mt-4" style="width:100%">
    <thead>
        <tr>
            <th>FirtName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php 
         foreach($showall as $row)
         {
        ?>
        <tr>
            <td><?php echo $row["Firstname"]; ?></td>
            <td><?php echo $row["Lastname"]; ?></td>
            <td><?php echo $row["Email"]; ?></td>
            <td><?php echo $row["Mobile"]; ?></td>
            <td><?php echo $row["Address"]; ?></td>
            <td><?php echo $row["Gender"]; ?></td>
                    
            <td><a href="editemployee?edit=<?php echo $row["Employee_id"]; ?>" class="btn btn-sm btn-info"><span class="bi bi-pencil"></span></a></td>
            <td><a href="viewemployee?delete=<?php echo $row["Employee_id"];?>"  class="btn btn-sm btn-danger"><span class="bi bi-trash"></span></a></td>
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



