StyleGuide-X
============

StyleGuide-X is the easiest and flexible way to create the CSS Styleguide of your project.
It can be integrated with any PHP project or like an stand alone system.

1 Getting Started
-----------------
1. Get or download the project
2. Install it using Composer

2 Setting up
------------
Open config.php file that is in the root and add the name of the project, Url and styles

```php
// Project Config
$config['name'] = "Name of the Project";
$config['url'] = "http://styleguidesite.com";

// All the CSS Styles needed
$config['cssPath'] = array(
    "http://site.com/css/normalize.css",
    "http://site.com/css/styles.css"
);
```

3 Creating the Styleguide
-------------------------
The content of the Styleguide is completely flexible but I'm following this structure of this gist:
https://gist.github.com/revuls/9813754

Basically something like this

```
html/
|
|– 01-elements/
|   |– 01-grids.html        # Grid layout
|   |– 02-colors.html       # colors
|   |– 03-fonts.html        # Reset/normalize
|   |– 04-texts.html        # Typography rules
|   |– 05-lists.html        # Lists
|   |– 06-images.html       # Images
|   |– 07-forms.html        # Forms
|   |– 08-buttons.html      # Buttons
|   |– 09-tables.html       # Tables
|   |– 10-media.html        # Video and Audio
|   |– 11-links.html        # Links
|   ...                     # Etc…
|
|– 02-groups/
|   |– 01-header-nav.html   # Header navigation navigator
|   |– 02-footer-nav.html   # Footer navigator
|   |– 03-tabs.html         # Tabs
|   |– 04-breadcrumbs.html  # Dropdown
|   |– 05-social.html       # Social Share
|   |– 06-accordion.html    # Accordion
|   ...                     # Etc…
|
|– 03-blocks/
|   |– 01-header.html       # Sass Variables
|   |– 02-footer.html       # Sass Functions
|   |– 03-article.html      # Sass Mixins
|   |– 04-posts.html        # Class &amp; placeholders helpers
|   ...                     # Etc…
|
|– 04-templates/
|   |– 01-homepage.html     # Index page
|   |– 02-contact.html      # Contact page
|   |– 03-blog.html         # Blog page
|   ...                     # Etc…
```

All the content of the Styleguide will be created into 'html' folder.
Every folder into the 'html' folder is a section in the header.

Here there is an example of html file:

```html
<!--
    This is the Text of this section. html markup can be used here
-->
<h1>h1. Bootstrap heading <small>Secondary text</small></h1>
<h2>h2. Bootstrap heading <small>Secondary text</small></h2>
<h3>h3. Bootstrap heading <small>Secondary text</small></h3>
<h4>h4. Bootstrap heading <small>Secondary text</small></h4>
<h5>h5. Bootstrap heading <small>Secondary text</small></h5>
<h6>h6. Bootstrap heading <small>Secondary text</small></h6>
```

- The name of the file will be the header of this block
- The comment will be the comment of the block
- Then will render the markup of the code (to see how it looks)
- And will render the source code

It is important to follow this convention for the names of the files:
01-name.html

The number is the position where that block will be rendered.

