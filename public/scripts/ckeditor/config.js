/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';
    // config.uiColor = '#AADC6E';
    // config.uiColor = '#AADC6E';
    // config.uiColor = '#AADC6E';
    // config.uiColor = '#AADC6E';
    // config.uiColor = '#AADC6E';

    var duong_dan = '/public/scripts/';
    // var duong_dan = <?php echo $content->link?>;
    // var ahihi = duong_dan + 'ckfinder/ckfinder.html';
    config.filebrowserBrowseUrl = duong_dan + 'ckfinder/ckfinder.html';
    config.filebrowserImageBrowseUrl = duong_dan + 'ckfinder/ckfinder.html?type=Images';
    config.filebrowserFlashBrowseUrl = duong_dan + 'ckfinder/ckfinder.html?type=Flash';
    config.filebrowserUploadUrl = duong_dan + 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
    config.filebrowserImageUploadUrl = duong_dan + 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
    config.filebrowserFlashUploadUrl = duong_dan + '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
    // console.log(ahihi);
};

