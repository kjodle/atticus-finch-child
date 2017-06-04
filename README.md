# Atticus Finch Child Theme

You can use this child theme to automatically create a child theme of Atticus Finch. It already includes many of the features you are most likely going to want to change.

## Version

This is version 1.2 of this child theme. The version number in the `style.css` document will always be version 1.0. If you make changes to your child theme, be sure to increment the version number of your child theme. This will allow your child theme to bust cache.

## Instructions:

Most of the instructions that you need are contained in the child theme's `functions.php` file.

### Enqueuing Parent Theme 

There is a code block in the `functions.php` file that enqueues the parent theme and child theme style sheets. Do NOT edit this block. 

```
	/* Enqueue the parent theme script. Do NOT remove the below function or you child theme will not load properly */
	wp_enqueue_style( 'atticus-finch-style', get_template_directory_uri() . '/style.css' );
	
	/* Now we will load the child theme's style sheet: */
	wp_enqueue_style( 'atticus-finch-child-style', get_stylesheet_directory_uri() . '/style.css', 'atticus-finch-style', wp_get_theme() -> get( 'Version' ) );
```

### Enqueuing Additional Child Theme Style Sheets

By default, the child theme's style sheet affects only desktop devices. If you want to make changes to the mobile appearance, uncomment that function and make your changes to the child theme's `styles/mobile.css` file.

To make changes to the way the theme prints (either on paper or to a pdf file), uncomment that function and make your changes to the child theme's `styles/print.css` file.

### Adding Google Webfonts

To add a Google Webfont, uncomment out the first function. In other words, make this

```
/* Add a Google Webfont by uncommenting the following functions and changing the 'family' attribute below. */
/*
function af_childtheme_add_google_fonts() {
	wp_enqueue_style( 'af-google-fonts', 'http://fonts.googleapis.com/css?family=Asul', false ); 
	}
add_action( 'wp_enqueue_scripts', 'af_childtheme_add_google_fonts' );
*/
```

look like this:

```
/* Add a Google Webfont by uncommenting the following functions and changing the 'family' attribute below. */

function af_childtheme_add_google_fonts() {
	wp_enqueue_style( 'af-google-fonts', 'http://fonts.googleapis.com/css?family=Asul', false ); 
	}
add_action( 'wp_enqueue_scripts', 'af_childtheme_add_google_fonts' );

```

If your font's name consists of more than one word, separate the words with a plus sign:


```
	wp_enqueue_style( 'af-google-fonts', 'http://fonts.googleapis.com/css?family=IM+Fell+English', false ); 
	}
```

To enqueue more than one font, separate the font names with a pipe character:

```
	wp_enqueue_style( 'af-google-fonts', 'http://fonts.googleapis.com/css?family=Asul|IM+Fell+English', false ); 
	}
```

