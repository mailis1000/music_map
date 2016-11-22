<form action="<?php echo BASE;?>search/view" method="POST">
    <table id="bandList">
        <thead>
        <tr>
            <th>Bandname</th>
            <th>Genre</th>
            <th>Country</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($this->msg as $item): ?>
            <tr>
                <td><?php echo $item['bandname'] ?></td>
                <td><?php echo $item['genre'] ?></td>
                <td><?php echo $item['country'] ?></td>
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
</form>

<hr/>

<!--<li><a href="<?php echo BASE; ?>search/find">Search</a></li>-->
