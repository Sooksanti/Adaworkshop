<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="otbDatatablestest" class="table table-bordered table-striped">
            <thead>
                <tr id="otrTBLTest">
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Extn.</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Extn.</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
    <script>
    $(function() {
        $('#otbDatatablestest').DataTable({
            "ajax": "data.txt",
            "columns": [{
                    "data": "name"
                },
                {
                    "data": "position"
                },
                {
                    "data": "office"
                },
                {
                    "data": "extn"
                },
                {
                    "data": "start_date"
                },
                {
                    "data": "salary"
                }
            ]
        });
    });
    </script>