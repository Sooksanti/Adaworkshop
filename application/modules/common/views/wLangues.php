<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="dropdown mb-3">
    <button class="btn btn-success dropdown-toggle" type="button" id="obtLangues" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Langues
    </button>
    <div class="dropdown-menu" aria-labelledby="obtLangues">
        <a class="dropdown-item" onclick="JSxLAGchangeLangues('th')">TH</a>
        <a class="dropdown-item" onclick="JSxLAGchangeLangues('en')">EN</a>
    </div>
</div>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title"><?php echo language('common/main/main','tLang')?></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form">
        <div class="card-body">
            <div class="form-group">
                <label id="olaLAGTest"><?php echo language('common/main/main','tEmail')?></label>
                <input type="email" class="form-control" placeholder="Enter email" id="oemLAGTest">
                <input type="number" class="form-control"  id="onbLAGTest">
            </div>
            <div class="form-group">
                <label><?php echo language('common/main/main','tPass')?></label>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" id="ocbLAGTest" class="form-check-input">
                <label class="form-check-label">Check me out</label>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary" id="osmLAGTest">Submit</button>
            <button type="button" class="btn btn-success" id="osmLAGColorgreen">Change Color green</button>
            <button type="button" class="btn btn-danger" id="osmLAGColorred">Change Color red</button>
        </div>
    </form>
    <div id="odvLAGTest">
    <img src="https://miro.medium.com/max/600/1*PiHoomzwh9Plr9_GA26JcA.png" id="oimLAGTest">
    </div>
</div>

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

    <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
</div>
<select class="form-control" id="ocmLAGTest">
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
<script>
function JSxLAGchangeLangues(lang) {
    $.ajax({
        type: 'post',
        url: 'common/cLangues/FSxCLAGchangeLangues/' + lang,
        async: true,
        success: function(data) {
            $('#odvMNUContent').html(data);
        }

    });
}

$('#osmLAGColorgreen').click(function(){
    ($('#osmLAGTest').removeClass('btn-primary btn-danger'))
          $('#osmLAGTest').addClass('btn-success');
});

$('#osmLAGColorred').click(function(){
    ($('#osmLAGTest').removeClass('btn-primary'))
          $('#osmLAGTest').addClass('btn-danger');
});

    $(function() {
        $('#otbDatatablestest').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
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