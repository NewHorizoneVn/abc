<style>
    .table-user{}
    .table-user td{padding: 5px;}
</style>
<form method="post" action="saveChangeEdit">
    <table class="table-user">
        <tbody>
            <tr>
                <td>ID</td>
                <td><input type='textbox' value="<?php echo $User['id']; ?>" name="id" readonly="readonly"/></td>
            </tr>

            <tr>
                <td>Name</td>
                <td><input type='textbox' value="<?php echo $User['name']; ?>" name="name"/></td>
            </tr>
        </tbody>
    </table>
    <input type="submit" value="Save"/>
</form>
