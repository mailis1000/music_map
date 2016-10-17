
<form action="<?php echo BASE;?>search/find" method="POST">
    <table id="bandList">
        <thead>
        <tr>
            <th>Bandname</th>
            <th>Genre</th>
            <th>Country</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($this->msg as $data): ?>
            <tr>
                <td><?php echo $data['bandname'] ?></td>
                <td><?php echo $data['genre'] ?></td>
                <td><?php echo $data['country'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        <tfoot>
        <tr>
            <td><input type="text" name="bandname"/></td>
            <td><input type="text" name="genre"/></td>
            <td><input type="text" name="country"/></td>
        </tr>
        </tfoot>
    </table>
    <button type="submit">Search</button>
</form>

<hr/>
