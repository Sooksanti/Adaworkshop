<form method="post" id="ofmIMGUpload" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputFile">File image</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="oflIMGUpload" id="oflIMGUpload">
                <label class="custom-file-label">Choose
                    file</label>
            </div>
        </div>
    </div>
    <input type="submit"  name="upload" id="upload" value="Upload" class="btn btn-info" />
</form>
<div  align="center" id="odvIMGShowimg">
<p>images show</p>
</div>
<script>
$(document).ready(function() {
    $('#ofmIMGUpload').on('submit', function(e) {
        e.preventDefault();
        if ($('#oflIMGUpload').val() == '') {
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
                    $('#odvIMGShowimg').html(data);
                }
            });
        }
    });
});
</script>