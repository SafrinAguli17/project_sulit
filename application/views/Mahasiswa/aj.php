<div class="right_col" role="main" style="min-height: 4019px;">
    <div class="">
        <div class="page-title">
        <body class="" style="">



<div class="container" style="margin-top:60px">
    <h2>AJAX</h2>
    <h3 style="text-decoration:underline">Students</h3>
    <button class="btn btn-success" onclick="addEstudiante()"><i class="glyphicon glyphicon-plus"></i>Add Student</button>
    <button class="btn btn-default" onclick="reloadTable()"><i class="glyphicon glyphicon-refresh"></i>Reload</button>
    <button id="deleteList" class="btn btn-danger" style="display: none;" onclick="deleteList()"><i class="glyphicon glyphicon-trash"></i>Delete list</button>
    <br>
    <br>
    <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="table_length"><label>Show <select name="table_length" aria-controls="table" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="table"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="table" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="table_info" style="width: 100%;">
        <thead>
            <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 47.0104px;"><input type="checkbox" id="check-all"></th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 89.0104px;">Name</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Lastname: activate to sort column ascending" style="width: 133.01px;">Lastname</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="DNI: activate to sort column ascending" style="width: 93.0104px;">DNI</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="course: activate to sort column ascending" style="width: 197.01px;">course</th><th style="width:150px;" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Action">Action</th></tr>
        </thead>
        <tbody>
        <tr role="row" class="odd"><td><input type="checkbox" class="data-check" value="22" onclick="showBottomDelete()"></td><td>Claudio</td><td>Saraza</td><td>43434343</td><td>Bussinessman</td><td><a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="editEstudiante('22')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="deleteEstudiante('22')"><i class="glyphicon glyphicon-trash"></i> Delete</a></td></tr><tr role="row" class="even"><td><input type="checkbox" class="data-check" value="20" onclick="showBottomDelete()"></td><td>Carlos</td><td>Farias</td><td>123445</td><td>Bussinessman</td><td><a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="editEstudiante('20')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="deleteEstudiante('20')"><i class="glyphicon glyphicon-trash"></i> Delete</a></td></tr><tr role="row" class="odd"><td><input type="checkbox" class="data-check" value="18" onclick="showBottomDelete()"></td><td>Raul</td><td>Rodriguez</td><td>21122394</td><td>Sociology</td><td><a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="editEstudiante('18')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="deleteEstudiante('18')"><i class="glyphicon glyphicon-trash"></i> Delete</a></td></tr><tr role="row" class="even"><td><input type="checkbox" class="data-check" value="17" onclick="showBottomDelete()"></td><td>Silvio</td><td>Bustamante</td><td>23001922</td><td>Accounting</td><td><a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="editEstudiante('17')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="deleteEstudiante('17')"><i class="glyphicon glyphicon-trash"></i> Delete</a></td></tr><tr role="row" class="odd"><td><input type="checkbox" class="data-check" value="16" onclick="showBottomDelete()"></td><td>Carlos</td><td>Martinez</td><td>12399111</td><td>Accounting</td><td><a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="editEstudiante('16')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="deleteEstudiante('16')"><i class="glyphicon glyphicon-trash"></i> Delete</a></td></tr><tr role="row" class="even"><td><input type="checkbox" class="data-check" value="15" onclick="showBottomDelete()"></td><td>Erick</td><td>Perez</td><td>18782999</td><td>Accounting</td><td><a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="editEstudiante('15')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="deleteEstudiante('15')"><i class="glyphicon glyphicon-trash"></i> Delete</a></td></tr><tr role="row" class="odd"><td><input type="checkbox" class="data-check" value="14" onclick="showBottomDelete()"></td><td>Ruben</td><td>Mejias</td><td>20929112</td><td>Sociology</td><td><a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="editEstudiante('14')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="deleteEstudiante('14')"><i class="glyphicon glyphicon-trash"></i> Delete</a></td></tr><tr role="row" class="even"><td><input type="checkbox" class="data-check" value="13" onclick="showBottomDelete()"></td><td>Pedro</td><td>Perez</td><td>15030322</td><td>Sociology</td><td><a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="editEstudiante('13')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="deleteEstudiante('13')"><i class="glyphicon glyphicon-trash"></i> Delete</a></td></tr><tr role="row" class="odd"><td><input type="checkbox" class="data-check" value="12" onclick="showBottomDelete()"></td><td>Cecilio</td><td>Jimenez</td><td>16987234</td><td>System engineering</td><td><a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="editEstudiante('12')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="deleteEstudiante('12')"><i class="glyphicon glyphicon-trash"></i> Delete</a></td></tr><tr role="row" class="even"><td><input type="checkbox" class="data-check" value="10" onclick="showBottomDelete()"></td><td>Carlos</td><td>Ramos</td><td>18292111</td><td>Sociology</td><td><a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="editEstudiante('10')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="deleteEstudiante('10')"><i class="glyphicon glyphicon-trash"></i> Delete</a></td></tr></tbody>
        <tfoot>
            <tr><th rowspan="1" colspan="1"></th><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Lastname</th><th rowspan="1" colspan="1">DNI</th><th rowspan="1" colspan="1">course</th><th rowspan="1" colspan="1">Action</th></tr>
        </tfoot>
    </table><div id="table_processing" class="dataTables_processing" style="display: none;">Processing...</div></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="table_info" role="status" aria-live="polite">Showing 1 to 10 of 13 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="table_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="table_previous"><a href="#" aria-controls="table" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="table" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="table" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button next" id="table_next"><a href="#" aria-controls="table" data-dt-idx="3" tabindex="0">Next</a></li></ul></div></div></div></div>
</div>
<script src="http://localhost/project_sulit/assets/jquery/jquery.js"></script>
<script src="http://localhost/project_sulit/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="http://localhost/project_sulit/assets/datatables/js/jquery.dataTables.min.js"></script>
<script src="http://localhost/project_sulit/assets/datatables/js/dataTables.bootstrap.js"></script>
<script type="text/javascript">

var save_method; //for save method string
var table;

$(document).ready(function() {

//datatables
table = $('#table').DataTable({

    "processing": true, //Feature control the processing indicator.
    "serverSide": true, //Feature control DataTables' server-side processing mode.
    "order": [], //Initial no order.

    // Load data for the table's content from an Ajax source
    "ajax": {
        "url": "index.php/estudiante/ajax_list",
        "type": "POST"
    },

    //Set column definition initialisation properties.
    "columnDefs": [
        {
            "targets": [ 0 ], //first column
            "orderable": false, //set not orderable
        },
        {
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },

    ],


});
//set input/textarea/select event when change value, remove class error and remove text help block
$("input").change(function(){
    $(this).parent().parent().removeClass('has-error');
    $(this).next().empty();
});
$("textarea").change(function(){
    $(this).parent().parent().removeClass('has-error');
    $(this).next().empty();
});
$("select").change(function(){
    $(this).parent().parent().removeClass('has-error');
    $(this).next().empty();
});

//check all
$("#check-all").click(function () {
    $(".data-check").prop('checked', $(this).prop('checked'));
    showBottomDelete();
});



});

function showBottomDelete()
{
var total = 0;

$('.data-check').each(function()
{
 total+= $(this).prop('checked');
});

if (total > 0)
  $('#deleteList').show();
else
  $('#deleteList').hide();
}

function addEstudiante()
{
save_method = 'add';
$('#form')[0].reset(); // reset form on modals
$('.form-group').removeClass('has-error'); // clear error class
$('.help-block').empty(); // clear error string
$('#modal_form').modal('show'); // show bootstrap modal
$('.modal-title').text('Add student'); // Set Title to Bootstrap modal title
}

function editEstudiante(id)
{
save_method = 'update';
$('#form')[0].reset(); // reset form on modals
$('.form-group').removeClass('has-error'); // clear error class
$('.help-block').empty(); // clear error string

//Ajax Load data from ajax
$.ajax({
    url : "index.php/estudiante/ajax_edit/"+id,
    type: "GET",
    dataType: "JSON",
    success: function(data)
    {

        $('[name="estu_id"]').val(data.estu_id);
        $('[name="estu_nombre"]').val(data.estu_nombre);
        $('[name="estu_apellido"]').val(data.estu_apellido);
        $('[name="estu_cedula"]').val(data.estu_cedula);
        $('[name="carr_nombre"]').val(data.carr_id);
        $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
        $('.modal-title').text('Edit'); // Set title to Bootstrap modal title

    },
    error: function (jqXHR, textStatus, errorThrown)
    {
        alert('Error getting data from ajax');
    }
});
}

function reloadTable()
{
table.ajax.reload(null,false); //reload datatable ajax
$('#deleteList').hide();
}

function save()
{
$('#btnSave').text('saving...'); //change button text
$('#btnSave').attr('disabled',true); //set button disable
var url;

if(save_method == 'add') {
    url = "index.php/estudiante/ajax_add";
} else {
    url = "index.php/estudiante/ajax_update";
}

// ajax adding data to database
$.ajax({
    url : url,
    type: "POST",
    data: $('#form').serialize(),
    dataType: "JSON",
    success: function(data)
    {

        if(data.status) //if success close modal and reload ajax table
        {
            $('#modal_form').modal('hide');
            reloadTable();
        }
        else
        {
            for (var i = 0; i < data.inputerror.length; i++)
            {
                $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
            }
        }
        $('#btnSave').text('Save'); //change button text
        $('#btnSave').attr('disabled',false); //set button enable


    },
    error: function (jqXHR, textStatus, errorThrown)
    {
        alert('Error adding / update data');
        $('#btnSave').text('Save'); //change button text
        $('#btnSave').attr('disabled',false); //set button enable

    }
});
}

function deleteEstudiante(id)
{
if(confirm('Are you sure to remove the student?'))
{
    // ajax delete data to database
    $.ajax({
        url : "index.php/estudiante/ajax_delete/"+id,
        type: "POST",
        dataType: "JSON",
        success: function(data)
        {
            //if success reload ajax table
            $('#modal_form').modal('hide');
            reloadTable();
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error deleting data');
        }
    });

}
}

function deleteList()
{
var list_id = [];
$(".data-check:checked").each(function() {
        list_id.push(this.value);
});
if(list_id.length > 0)
{
    if(confirm('Are you sure delete this '+list_id.length+' data?'))
    {
        $.ajax({
            type: "POST",
            data: {id:list_id},
            url: "index.php/estudiante/ajax_list_delete",
            dataType: "JSON",
            success: function(data)
            {
                if(data.status)
                {
                    reloadTable();
                }
                else
                {
                    alert('Failed.');
                }

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
    }
}
else
{
    alert('no data selected');
}
}

</script>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog" style="display: none;">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h3 class="modal-title">Add student</h3>
        </div>
        <div class="modal-body form">
            <form action="#" id="form" class="form-horizontal">
                <input type="hidden" value="" name="id">
                <div class="form-body">
                  <div class="form-group">
                      <div class="col-md-9">
                          <input name="estu_id" class="form-control" type="hidden">
                          <span class="help-block"></span>
                      </div>
                  </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Name</label>
                        <div class="col-md-9">
                            <input name="estu_nombre" placeholder="Student name" class="form-control" type="text">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Lastname</label>
                        <div class="col-md-9">
                            <input name="estu_apellido" placeholder="Student lastname" class="form-control" type="text">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">DNI</label>
                        <div class="col-md-9">
                            <input name="estu_cedula" placeholder="DNI" class="form-control" type="text">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Course</label>
                        <div class="col-md-9">
                            <select name="carr_nombre" class="form-control">
                                <option value="">--Select course--</option>
                                <option value="3">Accounting</option><option value="4">Arquitect</option><option value="8">Bussinessman</option><option value="9">Driver</option><option value="6">Medical Doctor</option><option value="5">Nurse</option><option value="7">Policeman</option><option value="2">Sociology</option><option value="1">System engineering</option>                                </select>
                            <span class="help-block"></span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
</body>
        </div>
    </div>
</div>