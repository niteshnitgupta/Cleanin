<!DOCTYPE html>
<html>
  <head>
    <title>Capture Photo</title>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="cordova.js"></script>
    <script type="text/javascript" charset="utf-8">

    var pictureSource;   // picture source
    var destinationType; // sets the format of returned value

    // Wait for device API libraries to load
    //
    document.addEventListener("deviceready",onDeviceReady,false);

    // device APIs are available
    //
       function onDeviceReady() {
	        pictureSource=navigator.camera.PictureSourceType;
	        destinationType=navigator.camera.DestinationType;
	    }
	
	    // Called when a photo is successfully retrieved
	    //
	    function onPhotoDataSuccess(imageData) {
	      // Uncomment to view the base64-encoded image data
	      // console.log(imageData);
	
	      // Get image handle
	      //
	      var smallImage = document.getElementById('smallImage');
	
	      // Unhide image elements
	      //
	      smallImage.style.display = 'block';
	
	      // Show the captured photo
	      // The in-line CSS rules are used to resize the image
	      //
	      smallImage.src = "data:image/jpeg;base64," + imageData;
	    }
	
	    // Called when a photo is successfully retrieved
	    //
	    function onPhotoURISuccess(imageURI) {
	      // Uncomment to view the image file URI
	      // console.log(imageURI);
	
	      // Get image handle
	      //
	      var largeImage = document.getElementById('largeImage');
	
	      // Unhide image elements
	      //
	      largeImage.style.display = 'block';
	
	      // Show the captured photo
	      // The in-line CSS rules are used to resize the image
	      //
	      largeImage.src = imageURI;
	      uploadPhoto(imageURI);
	    }
	
	    // A button will call this function
	    //
	    function capturePhoto() {
	      // Take picture using device camera and retrieve image as base64-encoded string
	      navigator.camera.getPicture(onPhotoDataSuccess, onFail, { quality: 50,
	        destinationType: destinationType.DATA_URL });
	      
	      alert(destinationType.DATA_URL);
	    }
	
	    // A button will call this function
	    //
	    function capturePhotoEdit() {
	      // Take picture using device camera, allow edit, and retrieve image as base64-encoded string
	      navigator.camera.getPicture(onPhotoDataSuccess, onFail, { quality: 20, allowEdit: true,
	        destinationType: destinationType.DATA_URL });
	    }
	
	    // A button will call this function
	    //
	    function getPhoto(source) {
	      // Retrieve image file location from specified source
	      navigator.camera.getPicture(onPhotoURISuccess, onFail, { quality: 50,
	        destinationType: destinationType.FILE_URI,
	        sourceType: source });
	    }
	
	    // Called if something bad happens.
	    //
	    function onFail(message) {
	      alert('Failed because: ' + message);
	    }
	
		function uploadPhoto(file_data) {
			alert(file_data);
			var form_data = new FormData();                  
		    form_data.append('file', file_data)
		    alert(form_data);                             
		    $.ajax({
		                url: 'http://aditechsolutions.com/Nitesh/Indiaat75/upload.php', // point to server-side PHP script 
		                dataType: 'text',  // what to expect back from the PHP script, if anything
		                cache: false,
		                contentType: false,
		                processData: false,
		                data: form_data,                         
		                type: 'post',
		                success: function(php_script_response){
		                    alert(php_script_response); // display response from the PHP script, if any
		                }
		     });
		}
		function win(r) {
			console.log("Code = " + r.responseCode);
			console.log("Response = " + r.response);
			console.log("Sent = " + r.bytesSent);
			alert(r.response);
		}
		function fail(error) {
			alert("An error has occurred: Code = " = error.code);
		}
    </script>
  </head>
  <body>
    <button onclick="capturePhoto();">Capture Photo</button> <br>
    <button onclick="capturePhotoEdit();">Capture Editable Photo</button> <br>
    <button onclick="getPhoto(pictureSource.PHOTOLIBRARY);">From Photo Library</button><br>
    <button onclick="getPhoto(pictureSource.SAVEDPHOTOALBUM);">From Photo Album</button><br>
    <img style="display:none;width:60px;height:60px;" id="smallImage" src="" />
    <img style="display:none;" id="largeImage" src="" />
  </body>
</html>
