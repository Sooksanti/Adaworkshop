<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Date Picker</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="form-group">
            <label>Select Date:</label>
            <input class="form-control" type="text" id="tbDate" />
        </div>
        <div class="form-group">
            <label>Choose a Format:</label>
            <select class="form-control" id="dateOptions" name="date">
                <option value=""></option>
                <option value="'Found the lost documents on' d 'of' MM 'in the year' yy">'Found
                    the lost
                    documents on' d 'of' MM 'in the year' yy</option>
                <option value="dd/mm/yy">dd/mm/yy</option>
                <option value="dd-mm-yy">dd-mm-yy</option>
                <option value="mm/dd/yy">mm/dd/yy</option>
                <option value="d M, y">Short Date: d M, y</option>
                <option value="d MM, y">Medium Date: d MM, y</option>
                <option value="DD, d MM, yy">Full Date: DD, d MM, yy</option>
            </select>
        </div>
    </div>
</div>
    <script>
    $(document).ready(function() {
        $('input[id$=tbDate]').datepicker({});
        $("#dateOptions").change(function() {
            $("#tbDate").datepicker("option", "dateFormat", $(this).val());
        });
    });
    </script>