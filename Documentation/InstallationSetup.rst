..  Editor configuration
    ...................................................
    * utf-8 with BOM as encoding
    * tab indent with 4 characters for code snippet.
    * optional: soft carriage return preferred.


.. include:: /Includes/MainInclude.txt


================================
Installation & Setup
================================

-   Make sure you are running on TYPO3 6.1 or above
-   Install the Adaptive Profiles extension (bn_adaptiveprofiles). The extension will be availble in the TER at a later date. You can get a copy now at `github.com/busynoggin <http://github.com/busynoggin>`_. A manual is located at `www.busynoggin.com/extensions/bn_adaptiveprofiles/ <http://www.busynoggin.com/extensions/bn_adaptiveprofiles/>`_
-	In the extension manager, click the configuration icon for Adaptive Profiles. Set the basic Default Screen Width. This almost always should be 1024. Also, indicate whether you want content elements to be filtered by Adaptive Profiles.

.. figure:: Images/ConfigurationGear.png
	:alt: Configuration Icon
	:align: left

.. figure:: Images/EMOptions.png
	:alt: Extension Manger Options
	:align: left

- 	In your main TypoScript template enter:

	page.config.tx_bnadaptiveprofiles.enable = 1
