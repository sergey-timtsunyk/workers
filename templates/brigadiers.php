<?php if($brigadiers) { ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>position</td>
                <td>salary</td>
                <td>employees</td>
                <td></td>
            </tr>
        </thead>
    <?php foreach ($brigadiers as $item) { ?>
            <tr>
                <td><?=$item['id']?></td>
                <td><?=$item['name']?></td>
                <td><?=$item['position']?></td>
                <td><?=$item['salary']?></td>
                <td>
                    <?php 
                    foreach ($item['employees'] as $employee) {
                        echo "$employee<br>";
                    }
                    ?>
                </td>
                <td>
                    <a class="delete_item" data-id="<?=$item['id']?>" data-type="brigadier">
                        <i class="fa fa-remove"></i>
                    </a>
                </td>
            <tr>
    <?php }?>
    
    </table>
<?php } ?>