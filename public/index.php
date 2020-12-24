<?php include "../template/header.php" ?>

<table id="showTable" data-toggle="table" data-mobile-responsive="true" class="table table-hover">
    <thead>
        <tr>
            <th>
                <div class="th-inner ">Id</div>
                <div class="fht-cell"></div>
            </th>
            <th>
                <div class="th-inner ">Имя</div>
                <div class="fht-cell"></div>
            </th>
            <th>
                <div class="th-inner ">Номер</div>
                <div class="fht-cell"></div>
            </th>
            <th>
                <div class="th-inner ">Время создания</div>
                <div class="fht-cell"></div>
            </th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $db = mysqli_connect("localhost", 'root', 'Root.1234', "Filmer");
        $sql = "SELECT `id`,`nomer`,`datepicker`,`nazvPlat` FROM `barl` LIMIT 10;";
        $res = mysqli_query($db, $sql);
        while ($q = mysqli_fetch_assoc($res)) {
        ?>
            <tr value=<?php echo $q['id'] ?>>
                <td><?php echo $q['id']; ?></td>
                <td><?php echo $q['nazvPlat'] ?></td>
                <td><?php echo $q['nomer'] ?></td>
                <td><?php echo $q['datepicker'] ?></td>
                <td class="float-right">
                    <a href="edit.php?id=<?php echo $q['id'] ?>"><button type="submit"  class="btn btn-success mr-3">Изменить</button></a>
                    <i value="<?php echo $q['id'] ?>" class='fa fa-lg fa-trash' onclick="remIdShow(<?php echo $q['id'] ?>)" aria-hidden='true'></i>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>



<?php include "../template/footer.php" ?>