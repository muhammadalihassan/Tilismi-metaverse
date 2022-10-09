/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	// config.toolbarGroups = [
	// 	// { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
	// 	{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
	// 	{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
	// 	{ name: 'links' },
	// 	{ name: 'insert' },
	// 	{ name: 'forms' },
	// 	{ name: 'tools' },
	// 	{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
	// 	{ name: 'others' },
	// 	'/',
	// 	{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
	// 	{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
	// 	{ name: 'styles' },
	// 	{ name: 'colors' },
	// 	{ name: 'about' }
	// ];

	config.toolbarGroups = [
		// { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'tools' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles'] },
		{ name: 'paragraph',   groups: [ 'list',  'align'] },
		{ name: 'styles' },
		{ name: 'colors' }
	];

	
	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	// config.removeButtons = 'Underline,Subscript,Superscript,';
	// config.removeButtons = 'Underline,Subscript,Superscript,Paste,PasteText,PasteFromWord,Source';
	config.removeButtons = 'Subscript,Superscript,Paste,PasteText,PasteFromWord';

	config.removePlugins = 'easyimage, cloudservices';
	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;h4;h5;h6;pre';

	config.protectedSource.push(/<i[^>]*><\/i>/g);
	config.protectedSource.push(/<span[^>]*><\/span>/g);
	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';

    config.allowedContent = true;

    config.extraPlugins = 'justify';
};
