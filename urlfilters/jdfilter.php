<?php

class jdFilter extends eZURLAliasFilter
{

	function jdFilter()
	{
	}

	function process( $text, &$languageObject, &$caller )
	{
		if ( $caller instanceof eZContentObjectTreeNode )
		{
			$text = strtolower( $text );
			if( $languageObject->attribute('locale') == 'chi-CN')
			{
				if( !preg_match( '/^[-a-z0-9._]+$/i', $text ) )
				{
					$valid = false;
					$object = $caller->attribute('object');
					$available_languages = $object->attribute('available_languages');
					$siteINI = eZINI::instance( 'site.ini' );
					$URLTranslations = $siteINI->variable( 'JDTranslation', 'URLLanguage' );
					foreach( $URLTranslations as $URLTranslation )
					{
						if( in_array( $URLTranslation, $available_languages ) && $valid == false )
						{
							$tsName = $object->name( false, $URLTranslation );
							$tsName = eZURLAliasML::convertToAlias( $tsName );
							$tsName = strtolower( $tsName );
							if( preg_match( '/^[-a-z0-9._]+$/i', $tsName ) )
							{
								$text = $tsName;
								$valid = true;
							}
						}
					}
				}
			}
		}
		return $text;
	}
}

?>
