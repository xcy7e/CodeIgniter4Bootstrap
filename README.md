# :beginner: CodeIgniter4Bootstrap

Blueprint for new PHP Web-Applications bundled with frameworks you use every time anyway! Configured and set up to start coding your actual project right away.

:abacus: `Codeigniter 4` with `Bootstrap v5` & `jQuery v3.6`

###### Bundled with lots of Bootstrap example templates to start with or later change on-the-fly (**login-screen**, **dashboard**, ..) <br>Properly prepared with all files you need to start coding the concept you got in mind and save you time you might otherwise waste on that initial overhead bringing together the frameworks you love.

---------

## Bootstrap-templates

 `Album` `Pricing` `Checkout` `Product` `Cover` `Carousel` `Blog` `Dashboard` `Sign-In` `Sticky-Footer` `Sticky-Footer-Nav` `Jumbotron`

<br><br>

<h1 align="center">How to use</h1>


## 1. Choose template

### BaseController
```c
public $bootstrapTemplate = 'signin';  // set default bootstrap template
```
> or in any controller
```c
$this->bootstrapTemplate = 'dashboard';  // change template on-the-fly
```
<br>

## 2. Folder structure

**PHP files:**
> Template chunks
```lex
app/Views/templates/_TEMPL_/head.php       // <html><head>
app/Views/templates/_TEMPL_/sidebar.php    // optional sidebar <nav>
app/Views/templates/_TEMPL_/nav.php        // optional header <nav>
app/Views/templates/_TEMPL_/main.php       // optional content <main>
app/Views/templates/_TEMPL_/footer.php     // <footer></html>
```

**CSS- & JS files:**
> global scripts
```lex
public/assets/css/style.css   // global CSS-file
public/assets/js/script.js    // global JS-file
```
> template scripts
```lex
public/assets/templates/_TEMPL_/css/style._TEMPL_.css   // template CSS-file
public/assets/templates/_TEMPL_/js/script._TEMPL_.js    // template JS-file
```


<br>

## 3. Individual Navigation
Some templates have their own navigation. You can override the default navigation or change it for a specific view on-the-fly.
### BaseController
```c
public $bootstrapNav = 'top_static';  // set default navigation
```
> or in any controller
```c
$this->bootstrapNav = 'top_static';  // change navigation on-the-fly
```
> this includes the navigation section
```lex
app/Views/sections/navigation/nav_top_static.php   // add nav_NAVNAME.php to add your own individual navigation
```

You can easily add your own individual navigation following this rules.<br>If you add your own nav you can specify if it uses additional CSS or JS:
### BaseController
```c
public $bootstrapNavScripts["NAVNAME"] = ['css','js'];  // your nav uses css and js
```
> these scripts are added automatically in your templates `<head>`
```lex
public/assets/sections/navigation/css/nav_NAVNAME.css   // add this CSS-file if defined in $bootstrapNavScripts
public/assets/sections/navigation/js/nav_NAVNAME.js     // add this JS-file if defined in $bootstrapNavScripts
```

<h1 align="center"> </h1>
