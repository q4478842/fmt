<div id="error-message" style="display:none" class="alert alert-danger">Error</div>
<div><img class="mw-100" id="image-cropper" src="{{ $profile->image_path }}"></div>
<div>
    <form id="fileupload" action="{{ route('profiles.upload') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div id="btn-image-upload">
            <label type="button" for="avatar-file" class="btn btn-light mw-100">
                Upload picture from your computer
                <input type="file" id="avatar-file" name="files[]" style="opacity: 0" accept="image/*">
            </label>
            <span>
                <i>(Allowed formats: JPG, PNG, GIF. Maximum size: 2MB. Minimum dimensions: 280x280 px.)</i>
            </span>
        </div>
        <div class="p-2">
            <button type="button" id="btn-image-save" class="btn btn-block btn-success btn-image-save">
                <span>Set as Profile Picture</span>
            </button>
        </div>
    </form>
    <div class="text-center" id="upload-progress" style="display: none;">
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="text-info" id="upload-progress-label">Uploading...</span>
    </div>
</div>
<script src="/js/avatar.js"></script>
