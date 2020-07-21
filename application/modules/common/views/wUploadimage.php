<form method="post" id="ofmUploadimg" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputFile">File image</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="oflImage" id="oflImage">
                <label class="custom-file-label" for="exampleInputFile">Choose
                    file</label>
            </div>
        </div>
    </div>
    <input type="submit"  name="upload" id="upload" value="Upload" class="btn btn-info" />
</form>
<div  align="center" id="odvShowimg">
<p>images show</p>
</div>
<script>
$(document).ready(function() {
    $('#ofmUploadimg').on('submit', function(e) {
        e.preventDefault();
        if ($('#oflImage').val() == '') {
            alert("Please Select the File");
        } else {
            $.ajax({
                url: "masUploadimg",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    $('#odvShowimg').html(data);
                }
            });
        }
    });
});
</script>