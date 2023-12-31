<?php $show_in_filter = $this->mcrud_build->showInFilter();
$show_in_add = $this->mcrud_build->showInAdd();
?>
<!-- Zero configuration table -->
<section id="basic-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">{php_open_tag_echo}ucwords($title_module){php_close_tag}</h4>
          <div class="pull-right">
            <?php if (count($show_in_add) > 0) : ?>
              <a href="{php_open_tag_echo}url("<?= strtolower($controller) ?>/add"){php_close_tag}" class="btn btn-success btn-flat"><i class="fa fa-file btn-icon-prepend"></i> Add</a>
            <?php endif; ?>
            <?php if (count($show_in_filter) > 0) : ?>
              <button type="button" id="filter-show" class="btn btn-primary btn-flat"><i class="mdi mdi-backup-restore btn-icon-prepend"></i> Filter</button>
            <?php endif; ?>
          </div>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <form autocomplete="off" class="content-filter">
              <div class="row">
                <?php foreach ($show_in_filter as $field) : ?>
                  <div class="form-group col-md-6">
                    <?php if (formType($field) == "datetime" or formType($field) == "timestamp") : ?>
                      <input type="datetime-local" id="<?= $field ?>" class="form-control form-control-sm" placeholder="<?= label($field) ?>" />
                    <?php elseif (formType($field) == "date") : ?>
                      <input type="date" id="<?= $field ?>" class="form-control form-control-sm" placeholder="<?= label($field) ?>" />
                    <?php elseif (formType($field) == "time") : ?>
                      <input type="time" id="<?= $field ?>" class="form-control form-control-sm" placeholder="<?= label($field) ?>" />
                    <?php elseif (formType($field) == "select") : ?>
                      <select class="form-control form-control-sm select2" data-placeholder=" -- Select <?= label($field) ?> -- " name="<?= $field ?>" id="<?= $field ?>">
                        <option value=""></option>
                        <?php
                        $fieldOption = optionValue($field);
                        for ($x = 0; $x < count($fieldOption); $x++) {
                        ?>
                          <option value="<?= $fieldOption[$x]['value'] ?>"><?= $fieldOption[$x]['label'] ?></option>
                        <?php  } ?>
                      </select>
                    <?php elseif (formType($field) == "option") : ?>
                      <label class="mb-0"><?= label($field) ?></label>
                      <?php
                      $fieldOption = optionValue($field);
                      for ($x = 0; $x < count($fieldOption); $x++) {
                      ?>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="<?= $field ?>" name="<?= $field ?>" value="<?= $fieldOption[$x]['value'] ?>">
                            <?= $fieldOption[$x]['label'] ?>
                            <i class="input-helper"></i>
                          </label>
                        </div>
                      <?php  } ?>
                    <?php elseif (formType($field) == "option_relation") : ?>
                      <label class="mb-0"><?= label($field) ?></label>
                      <!--
                          app_helper.php - methode is_radio
                          is_radio("table", "attribute`id & name`", "value", "label", "entry_value`optional`");
                        --->
                      {php_open_tag_echo}is_radio_filter("<?= optionRelation($field, "relation_table") ?>","<?= $field ?>","<?= optionRelation($field, "relation_value") ?>","<?= optionRelation($field, "relation_label") ?>");{php_close_tag}
                    <?php elseif (formType($field) == "select_relation") : ?>
                      <!--
                          app_helper.php - methode is_select
                          is_select("table", "attribute`id & name`", "value", "label", "entry_value`optional`");
                        --->
                      {php_open_tag_echo}is_select_filter("<?= optionRelation($field, "relation_table") ?>","<?= $field ?>","<?= optionRelation($field, "relation_value") ?>","<?= optionRelation($field, "relation_label") ?>","<?= label($field) ?>");{php_close_tag}
                    <?php else : ?>
                      <input type="text" id="<?= $field ?>" class="form-control form-control-sm" placeholder="<?= label($field) ?>" />
                    <?php endif; ?>
                  </div>

                <?php endforeach; ?>
              </div>
              <div class="pull-right">
                <button type='button' class='btn btn-default btn-sm' id="filter-cancel">{php_open_tag_echo}cclang("cancel"){php_close_tag}</button>
                <button type="button" class="btn btn-primary btn-sm" id="filter">Filter</button>
              </div>
            </form>
            <div class="table-responsive">
              <table class="table display" name="table" id="table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                  <tr><?php $show_in_table = $this->mcrud_build->showInTable(true);
                      foreach ($show_in_table as $field) {
                        echo "\n\t\t\t\t\t\t\t<th>" . $field . "</th>";
                      }
                      ?>

                    <th>#</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<script type="text/javascript">
  $(document).ready(function() {
    var table;
    //datatables
    table = $('#table').DataTable({

      "processing": true, //Feature control the processing indicator.
      "serverSide": true, //Feature control DataTables' server-side processing mode.
      "order": [], //Initial no order.
      "ordering": true,
      "searching": false,
      "info": true,
      "bLengthChange": false,
      oLanguage: {
        sProcessing: '<i class="fa fa-spinner fa-spin fa-fw"></i> Loading...'
      },

      // Load data for the table's content from an Ajax source
      "ajax": {
        "url": "{php_open_tag_echo} url("<?= strtolower($controller) ?>/json"){php_close_tag}",
        "type": "POST",
        <?php if (count($show_in_filter) > 0) : ?> "data": function(data) {
            <?php foreach ($show_in_filter as $field) : ?>
              <?php if (formType($field) == "option" or formType($field) == "option_relation") : ?>
                data.<?= $field ?> = $("#<?= $field ?>:checked").val();
              <?php else : ?>
                data.<?= $field ?> = $("#<?= $field ?>").val();
              <?php endif; ?>
            <?php endforeach; ?>
          }
        <?php endif; ?>
      },

      //Set column definition initialisation properties.
      "columnDefs": [
        <?php
        for ($i = 0; $i < count($show_in_table); $i++) {
          echo "\n\t\t\t\t\t{
            \"targets\": $i,
            \"orderable\": false
          },\n";
        }
        ?>

        {
          "className": "text-center",
          "orderable": false,
          "targets": <?= $i++ ?>

        },
      ],
    });

    $("#reload").click(function() {
      <?php if (count($show_in_filter) > 0) : ?>
        <?php foreach ($show_in_filter as $field) { ?>
          $("#<?= $field ?>").val("");
        <?php } ?>
      <?php endif; ?>
      table.ajax.reload();
    });

    <?php if (count($show_in_filter) > 0) : ?>
      $(document).on("click", "#filter-show", function(e) {
        e.preventDefault();
        $(".content-filter").slideDown();
      });

      $(document).on("click", "#filter", function(e) {
        e.preventDefault();
        $("#table").DataTable().ajax.reload();
      })

      $(document).on("click", "#filter-cancel", function(e) {
        e.preventDefault();
        $(".content-filter").slideUp();
      });
    <?php endif; ?>

    $(document).on("click", "#delete", function(e) {
      e.preventDefault();
      $('.modal-dialog').addClass('modal-sm');
      $("#modalTitle").text('{php_open_tag_echo}cclang("confirm"){php_close_tag}');
      $('#modalContent').html(`<p class="mb-4">{php_open_tag_echo}cclang("delete_description"){php_close_tag}</p>
                              <div class="pull-right">
  														<button type='button' class='btn btn-default btn-sm' data-dismiss='modal'>{php_open_tag_echo}cclang("cancel"){php_close_tag}</button>
  	                          <button type='button' class='btn btn-primary btn-sm' id='ya-hapus' data-id=` + $(this).attr('alt') + `  data-url=` + $(this).attr('href') + `>{php_open_tag_echo}cclang("delete_action"){php_close_tag}</button>
  														</div>`);
      $("#modalGue").modal('show');
    });


    $(document).on('click', '#ya-hapus', function(e) {
      $(this).prop('disabled', true)
        .text('Processing...');
      $.ajax({
        url: $(this).data('url'),
        type: 'POST',
        cache: false,
        dataType: 'json',
        success: function(json) {
          $('#modalGue').modal('hide');
          swal(json.msg, {
            icon: json.type_msg
          });
          $('#table').DataTable().ajax.reload();
        }
      });
    });


  });
</script>