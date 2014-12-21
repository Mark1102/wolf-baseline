# Baseline *for* Wolf

## A Simple 'Responsive' Theme for Wolf CMS

### What is it?

This is a 'theme' (or Layout) for [Wolf CMS][wcms]. It is designed to be a fairly simple drop-in **responsive** theme.

[![Baseline Thumbnail][thu]][png]

**Features**

A minimally tweaked version of [Baseline][bas], a simple boilerplate for the [Skel responsive framework][ske]; MIT licensed. Please consult the full [documentation][doc] for Skel-Baseline to further customize this layout.

Also note:

- main menu in the header;
- 'perpetual' ('rolling') navigation in sidebar/footer: always points up to parent page (if there is one), and down to any child pages (if there are any) from the current page;
- images resize with screen size;
- uses the [Flexbox sticky-footer][flx] system (progressive enhancment).


### Installing

1. In your Wolf admin, go to `Files > themes` and upload the `/baseline` folder (or use FTP to upload the `/baseline` folder to your Wolf installation's `/public/themes` directory).
1. Go the `Snippets` tab, and create new snippet called `baselineExtraNav` (observe the amelCase). Copy/paste the contents of the `baselineExtraNav.php` file into the body of this snippet; make sure filter is set to `--none--`. Save.
1. Go to the `Layouts` tab, and create a new layout called `Baseline`, with the Content-Type of `text/html`. Copy/paste the contents of the `baseline-layout.html` file into the body of this layout. Save.
1. **Optionally,** open go to the `Pages` tab, and open the `Articles` for editing. Replace the `sidebar` code with the contents of the `Articles-sidebar.php` file. (This new code prevents the archive listing from appearing twice on this page in a default Wolf installation.)
1. Go to the `Pages` tab, and open the `Home Page` for editing. Under the `Settings` tab, choose `Baseline` from the Layout drop-down. Save.

**Your site is now using the Baseline Layout!**

Enjoy!

#### Tweaking

**Nota bene!** The path to the CSS files **must** be correctly set in `/baseline/js/init.js` (set on six different lines). If your installation of Wolf is in the root directory of your website, it *ought* to work out-of-the-box. If Wolf is in a subdirectory, the path statements must be adjusted. By default, `init.js` has this path statement:

    href: '/public/themes/baseline/css/...

If Wolf was in the `/wolf/` subdirectory, the statement should read:

    href: '/wolf/public/themes/baseline/css/...

Also, the landing page markup is in `style.css`:

- `#banner` has `background: #E2FBF4;`
- the accent `color:` is `#49bf9d;`

Otherwise, most of the Wolf-specific CSS is in `/baseline/css/wolf-styles.css`.

### Changelog

20141222 - first public release

----

Please use the [Github repo's issue tracker][grit] to log any bugs or enhancement requests. Thank you!

[wcms]: http://www.wolfcms.org/
[thu]: http://i.imgur.com/XMtmT2Z.png "Baseline for Wolf CMS"
[png]: http://i.imgur.com/BYpq01c.png
[bas]: http://getskel.com/downloads/skel-baseline/
[ske]: http://getskel.com/
[doc]: http://getskel.com/docs
[flx]: http://philipwalton.github.io/solved-by-flexbox/demos/sticky-footer/
[grit]: https://github.com/dajare/wolf-baseline/issues
