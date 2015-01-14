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
If adding additional pages, remember to create a `*.php` and a `_.html` page
and set up the include dependencies.
