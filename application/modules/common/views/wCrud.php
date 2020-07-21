<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="obtAddcountry">
    เพิ่มประเทศ
</button>

<!-- Modal -->
<div class="modal fade" id="odvCountry">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">เพิ่มประเทศ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>รหัสประเทศ</label>
                    <input type="text" class="form-control" placeholder="รหัสประเทศ" id="oetIdCountry" maxlength="2">
                </div>
                <div class="form-group">
                    <label>ประเทศ</label>
                    <input type="text" class="form-control" placeholder="ประเทศ" id="oetNameCountry">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="oadSavecountry">Save</button>
            </div>
        </div>
    </div>
</div>

<div class="card mt-3">
    <div class="card-header">
        <h3 class="card-title">ประเทศ</h3>
    </div>
    <!-- /.card-header -->

    <div class="card-body">

        <form class="form-inline float-right mb-3">
            <input class="form-control float-right" type="search" placeholder="Search" aria-label="Search"
                id="oetSearch">
        </form>
        <table class="table table-bordered mt-3" id="otbCountry">
        </table>
    </div>
</div>
<!-- /.card-body -->

<script>
function JSxCTselectcountry() {
    $.ajax({
        type: 'ajax',
        url: 'masListCountry',
        async: true,
        dataType: 'json',
        success: function(data) {
            var item_data = '';
            item_data += '<thead class="thead-light">' +
                '<tr>' +
                '<th scope="col">id</th>' +
                '<th scope="col">ประเทศ</th>' +
                '<th scope="col">Action</th>' +
                '</tr>' +
                '</thead>';
            for (i = 0; i < data.length; i++) {
                item_data += '<tr>' +
                    '<td>' + data[i].FTCountryCode + '</td>' +
                    '<td>' + data[i].FTCountryName + '</td>' +
                    '<td>' +
                    '<button type="button" name="edit" data-id="' + data[i].FTCountryCode +
                    '" class="edit btn btn-success btn-sm mr-3">Edit</button>' +
                    '<button type="button" data-id="' + data[i].FTCountryCode +
                    '"class="delete btn btn-danger btn-sm" id="getDeleteId">Delete</button>' +
                    '</td>' +
                    '</tr>';
            }
            $('#otbCountry').html(item_data);
        }

    });
}
$(document).ready(function(data) {
    JSxCTselectcountry()

    $("#oetSearch").keyup(function() {
        var country = $(this).val();
        $.ajax({
            method: "post",
            url: "<?php echo site_url('common/cCrud/FSxCCTsearchcountry')?>",
            data: {
                country,
                country
            },
            dataType: 'json',
            success: function(data) {
                var item_data = '';
                item_data += '<thead class="thead-light">' +
                    '<tr>' +
                    '<th scope="col">id</th>' +
                    '<th scope="col">ประเทศ</th>' +
                    '<th scope="col">Action</th>' +
                    '</tr>' +
                    '</thead>';
                for (i = 0; i < data.length; i++) {
                    no = i + 1;
                    item_data += '<tr>' +
                        '<td>' + data[i].FTCountryCode + '</td>' +
                        '<td>' + data[i].FTCountryName + '</td>' +
                        '<td>' +
                        '<button type="button" name="edit" data-id="' + data[i]
                        .FTCountryCode +
                        '" class="edit btn btn-success btn-sm mr-3">Edit</button>' +
                        '<button type="button" data-id="' + data[i].FTCountryCode +
                        '"class="delete btn btn-danger btn-sm" id="getDeleteId">Delete</button>' +
                        '</td>' +
                        '</tr>';
                }
                $('#otbCountry').html(item_data);
            }
        });
    });

    $(document).on('click', '#obtAddcountry', function() {
        $("h5").first().text('เพิ่มประเทศ');
        $("#oadEditdcountry").prop('id', 'oadSavecountry');
        $('#oetIdCountry').val('');
        $('#oetNameCountry').val('');
        $('#odvCountry').modal('show');
    });

    $(document).on('click', '#oadSavecountry', function() {
        var idcountry = $('#oetIdCountry').val();
        var namecountry = $('#oetNameCountry').val();
        if (idcountry != "" || namecountry != "") {
            $.ajax({
                url: "<?php echo site_url('common/cCrud/FSxCCTinsertcountry')?>",
                type: "POST",
                data: {
                    idcountry: idcountry,
                    namecountry: namecountry
                },
                cache: false,
                success: function(data) {
                    if (data != "true") {
                        alert(data);
                    } else {
                        alert("เพิ่มข้อมูลสำเร็จ");
                        JSxCTselectcountry()
                        $('#oetIdCountry').val('');
                        $('#oetNameCountry').val('');
                        $('#odvCountry').modal('hide')
                    }
                }
            });
        } else {
            alert('กรุณากรอกข้อมูล')
        }
    });

    $(document).on('click', '.edit', function() {
        $("h5").first().text('แก้ไขข้อมูล');
        $("#oadSavecountry").prop('id', 'oadEditdcountry');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();
        var id = $(this).data('id');
        $('#oadEditdcountry').attr('data-id', id);
        $('#oetIdCountry').val(data[0]);
        $('#oetNameCountry').val(data[1]);
        $('#odvCountry').modal('show');
    });

    $(document).on('click', '#oadEditdcountry', function() {
        var id = $(this).data('id');
        var idcountry = $('#oetIdCountry').val();
        var namecountry = $('#oetNameCountry').val();
        if (idcountry != "" || namecountry != "") {
            $.ajax({
                type: "post",
                url: "<?php echo site_url('common/cCrud/FSxCCTupdatecountry')?>",
                data: {
                    id:id,
                    idcountry: idcountry,
                    namecountry: namecountry
                },
                success: function(data) {
                    if (data != "true") {
                        alert(data);
                    } else {
                        alert("แก้ไขมูลสำเร็จ");
                        JSxCTselectcountry()
                        $('#oetIdCountry').val('');
                        $('#oetNameCountry').val('');
                        $('#odvCountry').modal('hide')
                    }
                }
            });
        } else {
            alert('กรุณากรอกข้อมูล')
        }
    });

    $(document).on('click', '.delete', function(){
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();
        var idcountry = $(this).data('id');
        var namecountry = data[1];
        var r = confirm("คุณต้องการลบ"+namecountry+" หรือไม่");
        if (r == true) {
            $.ajax({
                    method: "post",
                    url: "<?php echo site_url('common/cCrud/FSxCCTdeletecountry')?>",
                    data: {
                        idcountry: idcountry,
                    },
                    success: function(result){
                    alert('ลบ '+namecountry+' สำเร็จ')
                    JSxCTselectcountry()
                    }            
                });
        }

    });

});
</script>