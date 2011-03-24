# Codeigniter View Library

Advanced and flexible Codeigniter View library.

## Description

[Codeigniter](http://codeigniter.com/) is my favorite PHP framework. However the 'view' part of this framework seems a little weak. One feature that I miss about [Symfony](http://bit.ly/16GFg) is its flexible layout, and assets management using yaml file.

Therefore I wrote this view library for codeigniter, you will find this really useful when you have a big project with complex views, multiple css and js files.

## Requires
  - [Codeigniter](http://codeigniter.com/) 2.0.0+
  - [Symfony YAML library](http://components.symfony-project.org/yaml/)
  - [Codeigniter Carabiner library](https://github.com/dreamerslab/Carabiner)

## Features
  - Manage layouts, page title, metas, css and js with YAML file
  - Default configs can be overwritten in controller config
  - Combine and minify css and js files in production mode

## Installation
  - Copy all files in the libraries folder to your application libraries folder, including  `carabiner.php`, `cssmin`, `curl`, `jsmin`, `view`, `Yaml.php`, and all files in `Yaml` folder.
  
  - Copy `carabiner.php` in the config folder to your application config folder.
  - Copy `application_helper.php` in the helpers folder to your application helpers folder.
  
## Setup
  - Set css, js and cache folder( the place to store combined css, js) in `application/config/carabiner.php`. Normally you just need to create these folders in the same directory as your index.php folder.
  - Structure your partials, views and layouts
  
<!-- -->

> view files structure example    

    - [views]
      - [common] // common partials
        - _nav.php // partial name starts with a underscore
        - _sub_nav.php
        - config.yml // view common configs
        
      - [layouts] // put all your layout files here
        - default.php
        - admin.php
        
      - [stores] // map folder names to controller names
        - edit.php // map file names to action names
        - index.php 
        - new.php
        - show.php
        - _sidebar.php // partial for this controller only
        - config.yml // you can add extra css, js or overwrite page title and metas 
        
> It is not necessary to name your partial with a underscore, we do so just to make ourself distinguish between action views and partials easier.

## Public Methods

#### asset($type)
  - description: print out all css or js tag
  - argument data type: string
  - default value: there is no default value
  - possible value: 'css', 'js'
  - sample code

<!---->

> in the layout file inside head tag

    // this will print out all css link tag
    <?$this->view->asset('css')?>
    
    // this will print out all js script tag
    // you can also put this line before the 
    // closing body tag(</body>) for faster page loading
    <?$this->view->asset('js')?>

#### config($configs)
  - description: modify or add config in controllers
  - argument data type: array
  - default value: there is no default value
  - possible value: 'css', 'js'
  - sample code

<!---->

> in the controller

    public function index()
    {
      $this->view->config(array(
        'js' => array(
          'cdn' => array(
            'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min'
          ),
          'site' => array('some_util_js','another_util_js')
        ),
        'css' => array(
          'site' => array('some_util_js','another_util_js')
        )
      ));
    }


#### metas()
  - description: print out all meta tags
  - sample code

<!---->

> in the layout file inside head tag

    // this will print out all meta tags
    <?$this->view->metas()?>
    
#### parse($data=null)
  - description: parse action views using codeigniter [Template Parser Class](http://codeigniter.com/user_guide/libraries/parser.html)
  - argument data type: array, string, integer, bool
  - default value: null
  - possible value: any data you want to pass to the action view
  - sample code
  
<!---->

> in the controller

    public function index()
    {
      $data['nav_selected'] = 'about';
      $this->view->parse($data);
    }

#### partial($partial_path, $data=null)
  - description: render partial in action view
  - Arguments:

> $partial_path

  - description: the path of the partial
  - data type: string
  - default value: there is no default value
  - possible value: 'common/_nav', 'about/_lang' ...

> $data

  - description: data you want to pass to the partial
  - data type: array, string, integer, bool
  - default value: null
  - possible value: any data you want to pass to the partial
  - sample code
  
<!---->
    
> in the layout or action view files. ex. about/index.php
    
    // render partial 'common/_sub_nav.php' in 'about/index.php'
    <?
      $this->view->partial('common/_sub_nav', array(
        'sub_nav' => array(
          array('title' => lang('works.apps'), 'href' => 'apps'),
          array('title' => lang('works.open_source'), 'href' => 'open-source')
      )));
    ?>

#### render($data=null)
  - description: render action views
  - argument data type: array, string, integer, bool
  - default value: null
  - possible value: any data you want to pass to the action view
  - sample code
  
<!---->

> in the controller

    public function index()
    {
      $data['nav_selected'] = 'about';
      $this->view->render($data);
    }

#### set($prop, $val)
  - description: 
  - argument data type: 
  - default value: 
  - possible value: 
  - sample code
  
<!---->


## Development
  - Set `$config['dev'] = TRUE;` in `application/config/carabiner.php` (around line 63)
  - In development mode all css and js file will not be minified nor combined

## Production
  - Set `$config['dev'] = FALSE;` in `application/config/carabiner.php` (around line 63)
  - In production mode all css and js file will be minified and combined
  - *Make sure your assets/cache folder is writable

## License

The library is licensed under the MIT License (LICENSE.txt).

Copyright (c) 2011 [Ben Lin](http://dreamerslab.com)