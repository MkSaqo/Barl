<?php include "header.php" ?>

<table data-toggle="table" data-url="../assets/data/bootstrap_table_test2.json" data-mobile-responsive="true" class="table table-hover">
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
        </tr>
    </thead>
    <tbody>
        <?php
        $db = mysqli_connect("localhost", 'root', 'Root.1234', "Filmer");
        $sql = "SELECT `nomer`,`datepicker`,`nazvPlat` FROM `barl` LIMIT 10;";
        $res = mysqli_query($db, $sql);
        $i = 0;
        echo $i;     
        while ($q = mysqli_fetch_assoc($res)) {   
            ?>
            <tr>
                <td><?php echo $i++;?></td>
                <td><?php echo $q['nazvPlat']?></td>
                <td><?php echo $q['nomer']?></td>
                <td><?php echo $q['datepicker']?></td>
            </tr>

        <?php } ?>
    </tbody>
</table>



<?php include "footer.php" ?>