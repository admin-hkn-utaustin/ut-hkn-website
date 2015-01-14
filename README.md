# HKN Psi Chapter Website

Newly redesigned in Spring 2015.

## Architecture

In order to keep from duplicating header and footer data,
the website has been refactored into a set `.haml` documents
and fragments of pages are stored in `.html` documents.
The header and footer are stored in `__header.html` and `__footer.html`
respectively. Each page is broken up into a content page ending in `.html`
and a `.haml` script which is used to pre-process the pages so they can be
served statically from the website.

## Static pages

For convenience, this repository also contains the most recent pre-processed `.html` documents.
Any `.html` document without a leading underscore is intended to be served from the website.

## Build

In order to build the static pages from the source fragments you will need to use the `haml` utility
which is a Ruby gem.

Install Ruby if you have not already (Windows: [RubyInstaller](http://rubyinstaller.org/)).

Now from a console:

```
gem install haml
haml --version
```

The last line will check that `haml` was properly installed and available on the path.

In order to build the static web pages from sources, run `build.bat` which depends on the `haml`
utility being on the path. If you are on Windows, because `haml` is implemented as a batch script,
you may need to ensure you are on a vanilla command line pointed to the project directory,
and not a Cygwin or Git-bash command line, which will be incompatible with the script.

## Development

Please edit the `_*.html` fragments and run the pre-processor script `build.bat` in order
to update the website. There's a slightly longer edit-check loop this way, but it makes
editing the website, especially the header and footer, much less error-prone.

Of course, since the `.html` pages are already pre-processed it is possible for you to edit them
directly if you need to make a change in a pinch or are unable to build the pages from their source
fragments.

