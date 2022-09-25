 Dropzone.autoDiscover = false;

   $(document).ready(function () {
        $("#success-msg").html("")
        $("#id_dropzone").dropzone({
            maxFiles: 2000,
            url: "/admin/store-file",
            success: function (file, response) {
                console.log(response);
                // Print Message Here
                $("#success-msg").html("Upload Completed Successfully")
            }
        });
   })
