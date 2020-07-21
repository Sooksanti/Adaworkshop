<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">โปรแกรมแสดงเดือน</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <div class="form-group">
            <label>ตัวเลข</label>
            <input type="number" class="form-control" placeholder="กรอกตัวเลข" min="0" max="12" id="onbInputmonth">
        </div>
        <div class="form-group">
            <label>ผลลัพธ์</label>
            <input type="text" class="form-control" placeholder="ผลลัพธ์" disabled id="otaResultmonth">
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="button" class="btn btn-primary" id="obtShowResult">แสดงผลลัพธ์</button>
    </div>
</div>

<script>
$("#obtShowResult").click(function() {
    var nInputmonth = $('#onbInputmonth').val();
    if(nInputmonth == 1)
    {
        $('#otaResultmonth').val('January');
    }
    else if(nInputmonth == 2)
    {
        $('#otaResultmonth').val('February');
    }
    else if(nInputmonth == 3)
    {
        $('#otaResultmonth').val('March');
    }
    else if(nInputmonth == 4)
    {
        $('#otaResultmonth').val('April');
    }
    else if(nInputmonth == 5)
    {
        $('#otaResultmonth').val('May');
    }
    else if(nInputmonth == 6)
    {
        $('#otaResultmonth').val('June');
    }
    else if(nInputmonth == 7)
    {
        $('#otaResultmonth').val('July');
    }
    else if(nInputmonth == 8)
    {
        $('#otaResultmonth').val('August');
    }
    else if(nInputmonth == 9)
    {
        $('#otaResultmonth').val('September');
    }
    else if(nInputmonth == 10)
    {
        $('#otaResultmonth').val('October');
    }
    else if(nInputmonth == 11)
    {
        $('#otaResultmonth').val('November');
    }
    else if(nInputmonth == 12)
    {
        $('#otaResultmonth').val('December');
    }
});
</script>