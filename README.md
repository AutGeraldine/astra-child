# child-theme-astra

### Description :

add a child from an orignal theme coming from wordpress's themes named astra

### Installation :

create a folder  <parent's theme>-child.
create two files functions.php and style.css.
this two files will overide parent original theme css and functions.

Second step, in myfunctions.php add this lignes:

```
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
} 
```

in style.css, add:
```/*
Theme Name: astra-child
Description: Theme enfant de <author name>
Author: author name
Author URI: https://www.<your site>.fr
Template: astra //!important parent theme
Version: 0.1.0
*/
```
good pratice:

add your child-theme in your dashboard by adding a screenshot 

```
wamp64/www/<project-name-wordpress>/wp-content/themes/<child-theme>
```


### Utilisation :

Now in your dashboard, you can change or add functions and style

```
dasboard apparence/editeur
```


### Ressources :

##### for this project, we use:

graphic chart:

<https://company-45185.frontify.com/d/fVRpz7xGUu30/blog-trotter-style-guide>

wordpress tips:

<https://developer.wordpress.org/themes/advanced-topics/child-themes/#2-create-a-stylesheet-style-css>

<https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/>

<https://www.gregoirenoyelle.com/creer-couleurs-sur-mesure-editeur-moderne-wordpress-gutenberg/>
