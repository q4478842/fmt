// cropper init
$.fn.cropper;

var image = $("#image-cropper");
var options = {
    aspectRatio: 1,
    preview: ".img-preview"
};
var URL = window.URL || window.webkitURL;
var inputImage = $('#avatar-file');
var fileupload = $('#fileupload');
var bar = $('#upload-progress .progress-bar');
var formdata;
var file;


image.cropper(options);



fileupload.ajaxForm({
    beforeSend: function() {
        $('#upload-progress-label').html("Uploading...");
        $('#upload-progress').show();
        var percentVal = "0";
        bar.attr("aria-valuenow", percentVal);
        bar.css("width", percentVal);
        formdata = new FormData();
        file = image.cropper('getCroppedCanvas', {maxWidth:200, maxHeight:200})
        formdata.append('avatar-file', file);
        formdata.append('cropBoxData', image.cropper('getCropBoxData'));
        formdata.append('canvasData', image.cropper('getCanvasData'));
        formdata.append('imageData', image.cropper('getImageData'));
        formdata.append('data', image.cropper('getData'));
    },
    data: formdata,
    uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = percentComplete + '%';
        bar.attr("aria-valuenow", percentComplete);
        bar.css("width", percentVal);
        bar.html(percentVal);
    },
    complete: function(xhr) {
        $('#upload-progress-label').html("Succeed");
        $('#upload-progress').fadeOut(3000);
    },
    success: function(data){
        document.write(data);
    },
    error: function(jqXHR, textStatus, errorThrown){
        //console.log(jqXHR.responseText);
        //console.log(jqXHR);
        //document.write(jqXHR.responseText);
    }
});

inputImage.change(function() {
    var uploadedImageURL;
    file = inputImage[0].files[0];
    if (/^image\/\w+/.test(file.type)) {
        var uploadedImageType = file.type;
        var uploadedImageName = file.name;
        uploadedImageURL = URL.createObjectURL(file);
        image.cropper('destroy').attr('src', uploadedImageURL).cropper(options);
    } else {
        window.alert('Please choose an image file.');
    }
});

// $('#btn-image-save').submit(function(){

// });
