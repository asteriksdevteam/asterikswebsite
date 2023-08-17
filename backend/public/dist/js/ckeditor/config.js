/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */
 // CKEDITOR.config.allowedContent = true;
// function getCookie(cname) {
//     var name = cname + "=";
//     var decodedCookie = decodeURIComponent(document.cookie);
//     var ca = decodedCookie.split(';');
//     for(var i = 0; i <ca.length; i++) {
//         var c = ca[i];
//         while (c.charAt(0) == ' ') {
//             c = c.substring(1);
//         }
//         if (c.indexOf(name) == 0) {
//             return c.substring(name.length, c.length);
//         }
//     }
//     return "";
// }
CKEDITOR.editorConfig = function( config ) {

	// var cc = getCookie('accid');
	//alert(cc);
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	//config.extraPlugins = 'imageuploader';
	//config.extraPlugins = 'uploadimage';
config.filebrowserBrowseUrl      = '/projects/topdeals/assets/app/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';
config.filebrowserImageBrowseUrl = '/projects/topdeals/assets/app/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images';
config.filebrowserFlashBrowseUrl = '/projects/topdeals/assets/app/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash';
config.filebrowserUploadUrl      = '/projects/topdeals/assets/app/ckeditor/kcfinder/upload.php?opener=ckeditor&type= ';
config.filebrowserImageUploadUrl = '/projects/topdeals/assets/app/ckeditor/kcfinder/upload.php?opener=ckeditor&type=images';
config.filebrowserFlashUploadUrl = '/projects/topdeals/assets/app/ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash';
CKEDITOR.config.allowedContent = true;
CKEDITOR.config.extraPlugins = 'wsc';
// CKEDITOR.config.contentsCss = ['http://www.waterfordmarinahotel.com/assets/dsky/css/bootstrap.css', 'http://www.waterfordmarinahotel.com/assets/dsky/css/custom-style.css'];
};
