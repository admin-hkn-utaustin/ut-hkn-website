# HKN Psi Chapter Website

Newly redesigned in Spring 2015.

## Architecture

In order to keep from duplicating header and footer data,
the website has been refactored into a set `.php` and `.html` documents.
The header and footer are stored in `__header.php` and `__footer.php`
respectively. Each page is broken up into an `.html` content page prefixed with `_`
and a main `.php` document which is used to serve the pages.

## Development

Please edit the `_*.html` fragments to update content.
If adding additional pages, remember to create a `*.php` and a `_*.html` page
and set up the include dependencies. Also add the page to the navigation bar in 
'__header.php' and the footer in '__footer.php'. To otherwise edit a page, simply
edit the '_*.html' page.  

## Announcements

Announcements are stored in the 'Announcements/' directory. The latest 2 
announcements are automatically served on the home page, and all the announcements
are served on the Announcements page. To add an announcement, create a *.html file
and an appropriate json entry in 'Announcements/index.json'.