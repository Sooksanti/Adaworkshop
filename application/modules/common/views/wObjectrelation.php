<button type="button" class="btn btn-success" id="obtOBJShow">Show</button>
<button type="button" class="btn btn-primary" id="obtOBJHide">Hide</button>
<br>
<div class="card card-primary mt-3" id="odvOBJContent">
    <div class="card-header">
        <h3 class="card-title">Content</h3>
    </div>
    <div class="card-body">
        <span id="oapOBJContent"></span>
    </div>
</div>
<div class="form-group mt-3">
    <input type="text" class="form-control" id="obtOBJInputtext">
</div>
<button type="button" class="btn btn-primary mb-3" id="obtOBJSend">Send</button>
<br>

<button type="button" class="btn btn-success" id="obtOBJColorgreen">Change Color green</button>
<button type="button" class="btn btn-danger" id="obtOBJColorred">Change Color red</button>

<script>
$('#obtOBJSend').click(function() {
    var data = $('#obtOBJInputtext').val();
    $('#oapOBJContent').text(data);
    console.log(data);
});

$("#obtOBJHide").click(function() {
    $("#odvOBJContent").hide(300);
});

$("#obtOBJShow").click(function() {
    $("#odvOBJContent").show(300);
});

$('#obtOBJColorgreen').click(function(){
    $('#oapOBJContent').css("color", "green");
});
$('#obtOBJColorred').click(function(){
    $('#oapOBJContent').css("color", "red");
});
</script>