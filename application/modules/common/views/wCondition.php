<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">โปรแกรมแสดงเดือน</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <div class="form-group">
            <label>ตัวเลข</label>
            <input type="number" class="form-control" placeholder="กรอกตัวเลข" min="0" max="12" id="onbCDTInputmonth">
        </div>
        <div class="form-group">
            <label>ผลลัพธ์</label>
            <input type="text" class="form-control" placeholder="ผลลัพธ์" disabled id="otaCDTResultmonth">
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="button" class="btn btn-primary" id="obtShowResult">แสดงผลลัพธ์</button>
    </div>
</div>

<script>
$("#obtShowResult").click(function() {
    var nInputmonth = $('#onbCDTInputmonth').val();
    if(nInputmonth == 1)
    {
        $('#otaCDTResultmonth').val('January');
    }
    else if(nInputmonth == 2)
    {
        $('#otaCDTResultmonth').val('February');
    }
    else if(nInputmonth == 3)
    {
        $('#otaCDTResultmonth').val('March');
    }
    else if(nInputmonth == 4)
    {
        $('#otaCDTResultmonth').val('April');
    }
    else if(nInputmonth == 5)
    {
        $('#otaCDTResultmonth').val('May');
    }
    else if(nInputmonth == 6)
    {
        $('#otaCDTResultmonth').val('June');
    }
    else if(nInputmonth == 7)
    {
        $('#otaCDTResultmonth').val('July');
    }
    else if(nInputmonth == 8)
    {
        $('#otaCDTResultmonth').val('August');
    }
    else if(nInputmonth == 9)
    {
        $('#otaCDTResultmonth').val('September');
    }
    else if(nInputmonth == 10)
    {
        $('#otaCDTResultmonth').val('October');
    }
    else if(nInputmonth == 11)
    {
        $('#otaCDTResultmonth').val('November');
    }
    else if(nInputmonth == 12)
    {
        $('#otaCDTResultmonth').val('December');
    }
});
</script>