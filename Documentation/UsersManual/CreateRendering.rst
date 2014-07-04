..  Editor configuration
    ...................................................
    * utf-8 with BOM as encoding
    * tab indent with 4 characters for code snippet.
    * optional: soft carriage return preferred.


.. include:: /Includes/MainInclude.txt

================================
Create Rendering
================================

You will need to write conditonal statements in your TYPO3 constants and in TypoScript to be triggered by your profiles.

General Example
================================

On this example, all profiles get a class on the body tag of "normal" and a header of "My Header" except for the phone profile which a class on the body tag of "phone" and a header of "My Phone Header."

This is a simple example, but realize everything on a page can can be rendered differently by TypoScript depending depending on the profile.

::

    // Base rendering
    page.bodyTagAdd = class="normal"

    header = TEXT
    header.value = My Header

    // Adjusted rendering for Phone profile
    [userFunc = user_hasProfile(Phone)]

    page.bodyTagAdd = class="phone"

    header >
    header = TEXT
    header.value = My Phone Header

    [GLOBAL]


An example from the TemplaVoila Framework
================================


In this case all profiles get the first rendering and on the phone profile:

-   The utility menu local menu are moved to right after the section nav
-   The body tag is given a class of phone

::

    // Base rendering
    page {
        headTag = <head><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        config {
            doctype = html5
            htmlTag_setParams = lang="en-us"
        }
        bodyTagAdd = class="normal"
    }

    plugin.tx_templavoilaframework {
        preCodeHeader = TEXT
        preCodeHeader.value = <div id="page-wrap">

        header = COA
        header {
            wrap = <header id="header-page"><h3 id="identity"><a href="/">{$siteTitle}</a></h3>|</header><!-- end header-page -->

            10 < siteConfig.utilityNav

            20 = COA
            20 {
                wrap = <div id="top-menu-wrap">|</div><!-- end #menu-wrap -->
                10 = HMENU
                10 {
                    entryLevel = 0
                    1 = TMENU
                    1 {
                        wrap = <nav id="global-nav"><ul>|</ul></nav><!-- end global-nav -->
                        noBlur = 1
                        NO.allWrap = <li>|</li>
                        ACT = 1
                        ACT.allWrap = <li class="active">|</li>
                    }
                }
                20 < .10
                20 {
                    entryLevel = 1
                    1.wrap = <nav id="section-nav"><ul>|</ul></nav><!-- end section-nav -->
                }
            }
        }
    }

    // Changes for phone rendering
    [userFunc = user_hasProfile(Phone)]

    page {
        bodyTagAdd = class="phone-horizontal"
        includeCSS.tf_skin = {$plugin.tx_templavoilaframework.skinPath}Resources/Public/StyleSheets/ScreenPhone.css
    }

    plugin.tx_templavoilaframework.header {
        10 >
        15 = TEXT
        15.value = <a href="#" id="menu-trigger">Menu</a>
        20.30 < localMenu
        20.30.wrap = <nav id="local-nav-upper">|</nav><!-- end #local-menu-uppper  -->
        20.40 < siteConfig.utilityNav
    }

    [GLOBAL]

