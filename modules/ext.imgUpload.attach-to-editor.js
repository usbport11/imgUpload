//insert scripts to wikieditor textarea
//important to wait the DOM, otherwise can be problems
$(document).ready(function() {
	var editorId = "wpTextbox1";
	inlineAttachment.editors.input.attachToInput(document.getElementById(editorId));
});
