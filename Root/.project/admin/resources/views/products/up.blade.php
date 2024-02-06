<script>
    // Dropzone.autoDiscover = false;
    $(".dropzone").dropzone({
        addRemoveLinks: true,
        removedfile: function (file) {
            var name = file.name;
            var _ref;
            return (_ref = file.previewElement) != null
                ? _ref.parentNode.removeChild(file.previewElement)
                : void 0;
        },
    });
</script>

