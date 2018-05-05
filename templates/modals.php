<!-- modals -->
<div class="modal fade" id="employee_create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Создать работника</h4>
      </div>
      <div class="modal-body">
            <form id="employee_form" name="employee_form" enctype="multipart/form-data">
                <input type="hidden" name="itemtype" value="employee">
                <div class="form-group">
                    <label for="employee_name">Имя</label>
                    <input type="text" class="form-control" id="employee_name" name="name">
                </div>
                
                <div class="form-group">
                    <label for="employee_position">Должность</label>
                    <input type="text" class="form-control" id="employee_position" name="position">
                </div>

                <div class="form-group">
                    <label for="employee_salary">Зарплата</label>
                    <input type="text" class="form-control" id="employee_salary" name="salary">
                </div>

                <div class="form-group">
                    <label for="employee_instruments">Список инструментов (через запятую)</label>
                    <input type="text" class="form-control" id="employee_instruments" name="instruments">
                </div>
                
                <button id="employee_submit" type="button" class="btn btn-primary">Создать</button>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="brigadier_create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Создать бригадира</h4>
      </div>
      <div class="modal-body">
            <form id="brigadier_form" name="brigadier_form" enctype="multipart/form-data" onsubmit="return false;">
                <input type="hidden" name="itemtype" value="brigadier">
                <div class="form-group">
                    <label for="brigadier_name">Имя</label>
                    <input type="text" class="form-control" id="brigadier_name" name="name">
                </div>
                
                <div class="form-group">
                    <label for="brigadier_position">Должность</label>
                    <input type="text" class="form-control" id="brigadier_position" name="position">
                </div>

                <div class="form-group">
                    <label for="brigadier_salary">Зарплата</label>
                    <input type="text" class="form-control" id="brigadier_salary" name="salary">
                </div>

                <div class="form-group">
                    <label for="brigadier_employees">Список работников</label>
                    <select multiple="multiple" name="employees[]" id="brigadier_employees" class="form-control">
                        <?php if($employees) { ?>
                            <?php 
                                    foreach ($employees as $employee) { ?>
                                        <option value="<?=$employee['name']?>"><?=$employee['name']?></option>
                            <?php } ?>
                            ?>
                        <?php }?>
                    </select>
                </div>

                <button id="brigadier_submit" class="btn btn-sm btn-primary">Создать</button>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>