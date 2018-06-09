/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* Change les bouton danger, en bouton info, lors d'un click
 $(".btn-danger").click(function() {
 $(this).attr('class', 'btn btn-info')   
 });
 */

$(".jsDeleteButton").click(function ()
{
    event.preventDefault(); /* Annule le Submit, pour éviter une suppréssion, au cas ou l'utilisateur appuis sur annulé */

    var id = $(this).attr('id'); /* Création d'une variable id de this, car this.id non utilisable dans le callback */

    bootbox.confirm(
            {

                message: "Êtes vous sur de vouloir supprimer " + $("#td" + id).html() + " ?",
                buttons:
                        {
                            confirm:
                                    {
                                        label: 'Oui',
                                        className: 'btn-success'
                                    },

                            cancel:
                                    {
                                        label: 'Non',
                                        className: 'btn-danger'
                                    }
                        },

                callback: function (result)
                {
                    if (result === true)
                    {
                        $("#form" + id).submit();
                    }
                }
            });
});


$(document).ready(function () {
    $('.thumbnail').click(function () {
        $('.modal-body').empty();
        var title = $(this).parent('a').attr("title");
        $('.modal-title').html(title);
        $($(this).parents('div').html()).appendTo('.modal-body');
        $('#myModal').modal({show: true});
    });
});

(function() {
    Dropzone.options.bookImage = {
        paramName           :       "image", // The name that will be used to transfer the file
        maxFilesize         :       2, // MB
        dictDefaultMessage  :       "deposer l'image ici",
        thumbnailWidth      :       "300",
        thumbnailHeight     :       "300",
        accept              :       function(file, done) { done() },
        success             :       uploadSuccess,
        complete            :       uploadCompleted
    };

    function uploadSuccess(data, file) {
        var messageContainer    =   $('.dz-success-mark'),
            message             =   $('<p></p>', {
                'text' : 'Image Uploaded Successfully! Image Path is: '
            }),
            imagePath           =   $('<a></a>', {
                'href'  :   JSON.parse(file).original_path,
                'text'  :   JSON.parse(file).original_path,
                'target':   '_blank'
            })

        imagePath.appendTo(message);
        message.appendTo(messageContainer);
        messageContainer.addClass('show');
    }

    function uploadCompleted(data) {
        if(data.status != "success")
        {
            var error_message   =   $('.dz-error-mark'),
                message         =   $('<p></p>', {
                    'text' : 'Image Upload Failed'
                });

            message.appendTo(error_message);
            error_message.addClass('show');
            return;
        }
    }
})();

$(document).ready(function(e){
	demoUpload();
});
function dataURItoBlob(dataURI) {
	var split = dataURI.split(','),
		dataTYPE = split[0].match(/:(.*?);/)[1],
		binary = atob(split[1]),
		array = []
	for(var i = 0; i < binary.length; i++) array.push(binary.charCodeAt(i))
	return new Blob([new Uint8Array(array)], {
			type: dataTYPE
	})
}
function demoUpload() {
	var $uploadCrop;
	function readFile(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			
			reader.onload = function (e) {
				$uploadCrop.croppie('bind', {
					url: e.target.result
				});
				$('.upload-msg').hide();
				$('#upload-demo').show();
				$("#croppie-controls").show();
			}
			reader.readAsDataURL(input.files[0]);
		}
		else {
			swal("Sorry - you're browser doesn't support the FileReader API");
		}
	}
	$uploadCrop = $('#upload-demo').croppie({
		viewport: {
			width: 200,
			height: 200,
			type: 'circle'
		},
		boundary: {
			width: 300,
			height: 300
		},
		exif: true
	});
	$('#uploadcroppie').on('change', function () { readFile(this); });
	$('.upload-result').on('click', function (ev) {
		ev.preventDefault();
		$uploadCrop.croppie('result', {
			type: 'canvas',
			size: 'viewport'
		}).then(function (resp) {
			$('#profile-picture').removeClass("profile-pic-text").addClass("profile-pic-img-bg").html("");
			$('#profile-picture').css('background-image', 'url(' + resp + ')');
			$('#profile-picture-data').val(resp);
			$("#imageupload").modal("hide");
		});
	});
	$("#imageupload-cancel").on('click', function (e) {
		$("#imageupload").modal("hide");
	});
}
