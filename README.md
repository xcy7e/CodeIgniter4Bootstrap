# Codeigniter4Bootstrap

Blueprint for new PHP Web-Applications bundled with frameworks you use every time anyway! Configured and set up to start coding your actual project right away.

:abacus: `Codeigniter 4` with `Bootstrap v5` & `jQuery v3.6`

###### Bundled with lots of Bootstrap example templates to start with or later change on-the-fly (**login-screen**, **dashboard**, ..) <br>Properly prepared with all files you need to start coding the concept you got in mind and save you time you might otherwise waste on that initial overhead bringing together the frameworks you love.

---------

### Bootstrap-templates

 `Album` `Pricing` `Checkout` `Product` `Cover` `Carousel` `Blog` `Dashboard` `Sign-In` `Sticky-Footer` `Sticky-Footer-Nav` `Jumbotron`

<br><br>

<h1 align="center">How to use</h1>


### 1. Choose template

### :memo: BaseController
```php
public $bootstrapTemplate = 'signin';  // set default bootstrap template
```
> or in any controller
```php
$this->bootstrapTemplate = 'dashboard';  // change template on-the-fly
```
<br>

### 2. Folder structure

:memo: PHP files:
> Template chunks
```lex
app/Views/templates/_TEMPL_/head.php       // <html><head>
app/Views/templates/_TEMPL_/sidebar.php    // optional sidebar <nav>
app/Views/templates/_TEMPL_/nav.php        // optional header <nav>
app/Views/templates/_TEMPL_/main.php       // optional content <main>
app/Views/templates/_TEMPL_/footer.php     // <footer></html>
```

:memo: CSS- and JS-files:
> global scripts
```vb
public/assets/css/style.css   // global CSS-file
public/assets/js/script.js    // global JS-file
```
> template scripts
```vb
public/assets/templates/_TEMPL_/css/style._TEMPL_.css   // template CSS-file
public/assets/templates/_TEMPL_/js/script._TEMPL_.js    // template JS-file
```


