<style>
    .table-user{}
    .table-user td{padding: 5px;}
</style>

<table class="table-user">
    <tbody>
    <thread>
        <td>ID</td>
        <td>Name</td>
        <td>Pass</td>
        <td>Control</td>
    </thread>
    <?php
    foreach ($User as $Users) {
        echo'<tr>';
        echo'<td>' . $Users['id'] . '</td>';
        echo'<td>' . $Users['name'] . '</td>';
        echo'<td></td>';
        echo'<td>
                    <form method="POST" action="mng_user_controller/edit">
                    <input type="hidden" value="' . $Users['id'] . '" name="id"/>
<input type="submit" value="Edit" />
| Delete
</form>
</td>';

        echo'</tr>';
    }
    ?>
</tbody>
</table>