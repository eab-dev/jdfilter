JDFilter
=====

SUMMARY
----------

URL Alias Filter for Bilingual websites with a Chinese siteaccess. Will create URLs for Chinese translation of an object based on (by default) the English
translation of the object, if it exists.

RESTRICTIONS
--------------

Only works with Simplified Chinese (Chi-CN) but could be modified/extended.

USAGE
------

Install and activate the extension in the usual way.

CONFIGURATION
----------------

If you want to use languages other than British English, create your own [JDTranslation] block in site.ini.append.php in the override folder, eg:

[JDTranslation]
URLLanguage[]
URLLanguage[]=eng-GB
URLLanguage[]=fre-FR


