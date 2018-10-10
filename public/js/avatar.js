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

var previewLeft = 0;
var previewTop = 0;
var cropBoxWidth = 0;
var cropBoxHeight = 0;

image.cropper(options);


// fileupload.ajaxForm({
//     beforeSend: function(jqXHR, settings) {
//         $('#upload-progress-label').html("Uploading...");
//         $('#upload-progress').show();
//         var percentVal = "0";
//         bar.attr("aria-valuenow", percentVal);
//         bar.css("width", percentVal);
//         jqXHR.data = {'left': previewLeft.toString(),
//            'top': previewTop.toString(),
//            'cropBoxWidth': cropBoxWidth.toString(),
//            'cropBoxHeight': cropBoxHeight.toString()};
//     },
//     uploadProgress: function(event, position, total, percentComplete) {
//         var percentVal = percentComplete + '%';
//         bar.attr("aria-valuenow", percentComplete);
//         bar.css("width", percentVal);
//         bar.html(percentVal);
//     },
//     complete: function(xhr) {
//         $('#upload-progress-label').html("Succeed");
//         $('#upload-progress').fadeOut(3000);
//     },
//     success: function(data){
//         document.write(data);
//     },
//     error: function(jqXHR, textStatus, errorThrown){
//         //console.log(jqXHR.responseText);
//         //console.log(jqXHR);
//         //document.write(jqXHR.responseText);
//     }
// });


$('#btn-image-save').click(function(){
    var imageData = image.cropper('getImageData');
    var canvasData = image.cropper('getCanvasData');
    var cropBoxData = image.cropper('getCropBoxData');
    var width = imageData.width,
        height = imageData.height;
    previewLeft = cropBoxData.left - canvasData.left - imageData.left;
    previewTop = cropBoxData.top - canvasData.top - imageData.top;
    cropBoxWidth = cropBoxData.width;
    cropBoxHeight = cropBoxData.height;
    var originalWidth = 200;
    var originalHeight = 200; 
    var newWidth = originalWidth;
    var newHeight = originalHeight;
    var ratio = 1;

    if (cropBoxWidth) {
      ratio = originalWidth / cropBoxWidth;
      newHeight = cropBoxHeight * ratio;
    }

    if (cropBoxHeight && newHeight > originalHeight) {
      ratio = originalHeight / cropBoxHeight;
      newWidth = cropBoxWidth * ratio;
      newHeight = originalHeight;
    }

    width = width * ratio;
    height = height * ratio;
    var translateX = -previewLeft * ratio;
    var translateY = -previewTop * ratio;
    $('#upload-progress-label').html("Uploading...");
    $('#upload-progress').show();
    bar.attr("aria-valuenow", 0);
    bar.css("width", '0%');
    var formdata = new FormData();
    formdata.append('cropBoxWidth', cropBoxWidth.toString());
    formdata.append('cropBoxHeight', cropBoxHeight.toString());
    formdata.append('previewLeft', previewLeft.toString());
    formdata.append('previewTop', previewTop.toString());
    formdata.append('file', $('#avatar-file')[0].files[0]);
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        xhr: function() {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener("progress", function(evt) {
                if (evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total;
                    percentComplete = parseInt(percentComplete * 100);
                    bar.attr("aria-valuenow", percentComplete);
                    bar.css("width", percentComplete + '%');
                }
            }, false);
            return xhr;
        },

        url: "http://homestead.test:9000/profiles/upload",
        type: "POST",
        processData: false,
        contentType: false,
        data: formdata,
        success: function(result) {
            $('#upload-progress-label').html("Succeed");
            $('#upload-progress').fadeOut(3000);
        }
    })
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