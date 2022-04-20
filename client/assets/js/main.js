$(document).ready(function() {

    $('[name=loginButton]').click(function() {
        $(window).attr('location', 'dashboard');
    });

    FilePond.registerPlugin(FilePondPluginFileEncode, FilePondPluginFileValidateType, FilePondPluginImageExifOrientation, FilePondPluginImagePreview, FilePondPluginImageCrop, FilePondPluginImageResize, FilePondPluginImageTransform),
        FilePond.create(document.querySelector('input[name="filepond"]'), {
            labelIdle: 'Arrastra y suelta la foto o <span class="filepond--label-action">búscalo aquí</span>',
            imagePreviewHeight: 170,
            imageCropAspectRatio: "1:1",
            imageResizeTargetWidth: 200,
            imageResizeTargetHeight: 200,
            stylePanelLayout: "compact circle",
            styleLoadIndicatorPosition: "center bottom",
            styleButtonRemoveItemPosition: "center bottom",
        }),
        $(".filepond").change(function(e) {
            e.preventDefault();
            files = $("[name=filepond]").prop("files")[0];
            var a = new FileReader(),
                i = files.type;
            if (!["image/jpeg", "image/png", "image/jpg", "image/gif"].includes(i)) return triggerSwalAlert("Error", "Selecciona un formato valido de los  siguientes: JPEG - JPG - PNG - GIF", "error"), $("#foto").val(""), !1;
            (a.onload = function(e) {
                $("#logoPreview").attr("src", e.target.result);
            }),
            a.readAsDataURL(files);
        });
});