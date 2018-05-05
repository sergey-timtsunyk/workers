<?php if($employees) { ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>position</td>
                <td>salary</td>
                <td>instruments</td>
                <td></td>
            </tr>
        </thead>
    <?php foreach ($employees as $key => $item) { ?>
            <tr>
                <td><?=$item['id']?></td>
                <td><?=$item['name']?></td>
                <td><?=$item['position']?></td>
                <td><?=$item['salary']?></td>
                <td>
                    <?php 
                    foreach ($item['instruments'] as $instrument) {
                        echo "$instrument<br>";
                    }
                    ?>
                </td>
                <td>
                    <a class="delete_item" data-id="<?=$item['id']?>" data-type="employee">
                        <i class="fa fa-remove"></i>
                    </a>
                </td>
            <tr>
    <?php }?>
    
    </table>
<?php } ?>