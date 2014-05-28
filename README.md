JDFilter
=====

SUMMARY
----------

URL Alias Filter for multilingual eZ Publish websites with a Chinese siteaccess. Will create URLs for Chinese translation of an object using (by default) the English
name of the object, if an English translation exists.
See http://share.ez.no/forums/developer/multilingual-japanese-url-alias

RESTRICTIONS
--------------

Only works with Simplified Chinese (Chi-CN) but could be modified/extended.

USAGE
------

Install and activate the extension in the usual way.

CONFIGURATION
----------------

If you want to use languages other than British English, create your own `[JDTranslation]` block in site.ini.append.php in the override folder, eg:

    [JDTranslation]
    URLLanguage[]
    URLLanguage[]=eng-GB
    URLLanguage[]=fre-FR

