<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="obtCTYAddcountry">
    เพิ่มประเทศ
</button>

<!-- Modal -->
<div class="modal fade" id="odvCTYCountry">
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
                    <input type="text" class="form-control" placeholder="รหัสประเทศ" id="oetCTYIdCountry" maxlength="2">
                </div>
                <div class="form-group">
                    <label>ประเทศ</label>
                    <input type="text" class="form-control" placeholder="ประเทศ" id="oetCTYNameCountry">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="oadCTYSavecountry">Save</button>
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
                id="oetCTYSearch">
        </form>
        <table class="table table-bordered mt-3" id="otbCTYCountry">
        </table>
        <button type="button" class="btn btn-success mt-3" id="oadCTYExportexcel" onClick="window.location='<?php echo site_url('common/cExceltest/test')?>';">Export Excel</button>
    </div>
</div>
<!-- /.card-body -->

<script>
function JSxCTYSelectcountry() {
    $.ajax({
        type: 'ajax',
        url: 'masListCountry',
        async: true,
        dataType: 'json',
        success: function(oData) {
            var tItem_data = '';
            tItem_data += '<thead class="thead-light">' +
                '<tr>' +
                '<th scope="col">id</th>' +
                '<th scope="col">ประเทศ</th>' +
                '<th scope="col">Action</th>' +
                '</tr>' +
                '</thead>';
            for (i = 0; i < oData.length; i++) {
                tItem_data += '<tr>' +
                    '<td>' + oData[i].FTCountryCode + '</td>' +
                    '<td>' + oData[i].FTCountryName + '</td>' +
                    '<td>' +
                    '<button type="button" name="edit" data-id="' + oData[i].FTCountryCode +
                    '" class="edit btn btn-success btn-sm mr-3">Edit</button>' +
                    '<button type="button" data-id="' + oData[i].FTCountryCode +
                    '"class="delete btn btn-danger btn-sm">Delete</button>' +
                    '</td>' +
                    '</tr>';
            }
            $('#otbCTYCountry').html(tItem_data);
        }

    });
}
$(document).ready(function() {
    JSxCTYSelectcountry()

    $("#oetCTYSearch").keyup(function() {
        var tCountry = $(this).val();
        $.ajax({
            method: "post",
            url: "<?php echo site_url('common/cInsertUpdateDelete/FSxCCTYSearchcountry')?>",
            data: {
                tCountry:tCountry
            },
            dataType: 'json',
            success: function(oData) {
                var tItem_data = '';
                tItem_data += '<thead class="thead-light">' +
                    '<tr>' +
                    '<th scope="col">id</th>' +
                    '<th scope="col">ประเทศ</th>' +
                    '<th scope="col">Action</th>' +
                    '</tr>' +
                    '</thead>';
                for (i = 0; i < oData.length; i++) {
                    tItem_data += '<tr>' +
                        '<td>' + oData[i].FTCountryCode + '</td>' +
                        '<td>' + oData[i].FTCountryName + '</td>' +
                        '<td>' +
                        '<button type="button" name="edit" data-id="' + oData[i]
                        .FTCountryCode +
                        '" class="edit btn btn-success btn-sm mr-3">Edit</button>' +
                        '<button type="button" data-id="' + oData[i].FTCountryCode +
                        '"class="delete btn btn-danger btn-sm" id="getDeleteId">Delete</button>' +
                        '</td>' +
                        '</tr>';
                }
                $('#otbCTYCountry').html(tItem_data);
            }
        });
    });

    $(document).on('click', '#obtCTYAddcountry', function() {
        $("h5").first().text('เพิ่มประเทศ');
        $("#oadCTYEditdcountry").prop('id', 'oadCTYSavecountry');
        $('#oetCTYIdCountry').val('');
        $('#oetCTYNameCountry').val('');
        $('#odvCTYCountry').modal('show');
    });

    $(document).on('click', '#oadCTYSavecountry', function() {
        var tIdcountry = $('#oetCTYIdCountry').val();
        var tNamecountry = $('#oetCTYNameCountry').val();
        if (tIdcountry != "" || tNamecountry != "") {
            $.ajax({
                url: "<?php echo site_url('common/cInsertUpdateDelete/FSxCCTYInsertcountry')?>",
                type: "POST",
                data: {
                    tIdcountry: tIdcountry,
                    tNamecountry: tNamecountry
                },
                dataType: 'json',
                cache: false,
                success: function(oData) {
                    if (oData.nReturnCode != 1) {
                        alert(oData.tReturnMsg);
                    } else {
                        alert(oData.tReturnMsg);
                        JSxCTYSelectcountry()
                        $('#oetCTYIdCountry').val('');
                        $('#oetCTYNameCountry').val('');
                        $('#odvCTYCountry').modal('hide')
                    }
                }
            });
        } else {
            alert('กรุณากรอกข้อมูล')
        }
    });

    $(document).on('click', '.edit', function() {
        $("h5").first().text('แก้ไขข้อมูล');
        $("#oadCTYSavecountry").prop('id', 'oadCTYEditdcountry');
        $oTr = $(this).closest('tr');
        var aData = $oTr.children("td").map(function() {
            return $(this).text();
        }).get();
        var tId = $(this).data('id');
        $('#oadCTYEditdcountry').attr('data-id', tId);
        $('#oetCTYIdCountry').val(aData[0]);
        $('#oetCTYNameCountry').val(aData[1]);
        $('#odvCTYCountry').modal('show');
    });

    $(document).on('click', '#oadCTYEditdcountry', function() {
        var tId = $(this).data('id');
        var tIdcountry = $('#oetCTYIdCountry').val();
        var tNamecountry = $('#oetCTYNameCountry').val();
        if (tIdcountry != "" || tNamecountry != "") {
            $.ajax({
                type: "post",
                url: "<?php echo site_url('common/cInsertUpdateDelete/FSxCCTYUpdatecountry')?>",
                data: {
                    tId:tId,
                    tIdcountry: tIdcountry,
                    tNamecountry: tNamecountry
                },
                dataType: 'json',
                success: function(oData) {
                    if (oData.nReturnCode != 1) {
                        alert(oData.tReturnMsg);
                    } else {
                        alert(oData.tReturnMsg);
                        JSxCTYSelectcountry()
                        $('#oetCTYIdCountry').val('');
                        $('#oetCTYNameCountry').val('');
                        $('#odvCTYCountry').modal('hide')
                    }
                }
            });
        } else {
            alert('กรุณากรอกข้อมูล')
        }
    });

    $(document).on('click', '.delete', function(){
        $oTr = $(this).closest('tr');
        var aData = $oTr.children("td").map(function(){
            return $(this).text();
        }).get();
        var tIdcountry = $(this).data('id');
        var tNamecountry = aData[1];
        var bConfirm = confirm("คุณต้องการลบ "+tNamecountry+" หรือไม่");
        if (bConfirm == true) {
            $.ajax({
                    method: "post",
                    url: "<?php echo site_url('common/cInsertUpdateDelete/FSxCCTYDeletecountry')?>",
                    data: {
                        tIdcountry: tIdcountry,
                    },
                    success: function(result){
                    alert('ลบ '+tNamecountry+' สำเร็จ')
                    JSxCTYSelectcountry()
                    }            
                });
        }

    });

});
</script>