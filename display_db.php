<?php
include 'db.php';

$sql = "SELECT * FROM `user`";
$result = mysqli_query($con, $sql);
$num_row = mysqli_num_rows($result);
if ($num_row) {
    echo "<table border=1 class='table table-info' class='display_data'>";
    echo "<thead><tr><th>id</th><th>Name</th><th>Email</th><th>Action</th></tr><thead>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tbody><tr><td>", $row['id'], "</td>";
        echo "<td>", $row['name'], "</td>";
        echo "<td>", $row['email'], "</td>";
        $id = $row['id'];
?>

        <!--Delete button-->
        <td>
            <button class="btn btn-primary btn-sm" onclick="update_data(<?php echo $id ?>);">update</button><br>
            <input type="submit" name="delete" value="Delete" class='btn btn-danger btn-sm' onclick="delete_data(<?php echo $id ?>)" />
        </td>
        </tr>
        </tbody>
<?php
    }
    echo "</table>";
}
?>