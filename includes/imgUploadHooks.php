<?php

use MediaWiki\MediaWikiServices;

class imgUploadHooks {
	public static function editPageShowEditFormInitial( EditPage $editPage, OutputPage $outputPage ) {
		if ( $editPage->contentModel !== CONTENT_MODEL_WIKITEXT ) {
			return;
		}
		//load module
		$outputPage->addModules('ext.imgUpload');
	}
}