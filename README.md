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
  - Manage layouts, page title, metas, css and js with YAML file for cleaner and lighter controllers.
  - Default configs can be overwritten in controller config.
  - Combine and minify css and js files in production mode for faster page loading.

## Installation
  - Copy all files in the libraries folder to your application libraries folder, including  `carabiner.php`, `cssmin`, `curl`, `jsmin`, `view`, `Yaml.php`, and all files in `Yaml` folder.
  
  - Copy `carabiner.php` in the config folder to your application config folder.
  - Copy `application_helper.php` in the helpers folder to your application helpers folder.
  - Create a folder call `common` in your views folder. Copy `samples/config/common/config.yml` to ``
  
## Setup
  - Set css, js and cache folder( the place to store combined css, js) in `application/config/carabiner.php`. Normally you just need to create these folders in the same directory as your index.php folder.
  - Structure your partials, views and layouts. 
    - Put common partials and default configs in `application/views/common` folder.
    - Map `folder name` to `controller name` and `action name` to `file name`.
    - If you want to overwrite or add extra configs create a `config.yml` in [controller name] folder.
    - Note that title and metas can be add and overwritten but css and js can not be overwrite but only added.
    - You can also overwrite configs in the controller using `$this->view->config();`. More detail please see the `Public Methods` part.
    - Partial name starts with a underscore. It is not necessary but it makes us distinguish between action views and partials easier.
  
<!-- -->

> View files structure example    

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

## YAML Configs

> Set your default configs in `application/views/common/config.yml`

    # set to false if you don't want to use layout for default configs
    has_layout: true

    # default layout name
    layout:
      default

    #layouts
    default:
      title: default title for the entire application

      metas:
        # http metas goes here,
        https:
          content-type: 'text/html; charset=utf-8'
          content-language: 'en-US'

        name:
          keywords: > default, description, about, this, site
          description: default description about this site
          robots: > index, follow

      css:
        # for those css file hosted on cdn you do not want to combine and minify put theme here
        cdn:

        # all the files here will be combined to one css file  
        site:
          - common/reset
          - common/util
          - common/header
          - common/main

      # the usage is the same as css above
      js:
        cdn:
          - 'https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min'    

        site:
          - common/lang
          - common/tabs
          
    # you can add more layout here, just follow the pattern above

> Add more css or js in different controller and action configs in `application/views/[controller name]/config.yml`

    # actions
    # common settings for all actions in this controller
    common:
      has_layout: true
      
      # use different layout for all actions in this controller
      layout: admin

      title: some different title for all actions in this controller

      metas:
        # add as many metas as you wish
        https:

        name:
          keywords: > keywords, for, all, actions, in, this, controller
          description: > description for all actions in this controller

      css:
        cdn:
          - some css on cdn for all actions in this controller
        site:
          - local css for all actions in this controller

      js:
        cdn:
          - some js on cdn for all actions in this controller
        site:
          - local js for all actions in this controller
          
    # configs for each action
    index:
      title:
        some different title for this action

      metas:
        https:

        name:
          keywords: > keywords, for, this, actions, only
          description: > description for this action only

      css:
        cdn:
          - some css on cdn for this action only
        site:
          - local css for this action only

      js:
        cdn:
          - some js on cdn for this action only
        site:
          - local js for this action only
    
    some_other_action:
      # set this to false if you do not want to apply layout for this action
      has_layout: false
      
    # more action configs goes here, just follow the pattern above
    
## IMPORTANT
> If you have 4 js files listed in `application/views/common/config.yml`, 3 js files listed in `common` section and 2 files listed in `[action name]` section in `application/views/[controller name]/config.yml`. You will have 3 files in total in `production mode`. The first file will be used through out the `whole application`, the second file will be used in `all actions in this controller` and the last file will be used in that `specific action` only.

## Layouts
> A real simple layout example

    <?=doctype('xhtml1-trans')?>
      <head>
        <?$this->view->metas()?>
        <?$this->view->title()?>
        <?$this->view->asset('css')?>
        <?=link_tag( base_url().'favicon.png', 'shortcut icon', 'image/ico')?>
      </head>
      <body>
        <div id="wrap">
          <div id="header">
            <h1><?=$title?></h1>
            <p>A real simple layout example</p>
          </div>
          <div id="content">
            <?=$yield?>
          </div>
          <div id="footer">
            Your footer goes here
          </div>
        </div>
        <?$this->view->asset('js')?>
      </body>
    </html>
    xczp
## Public Methods

#### asset($type)
  - description: print out all css or js tag
  - argument data type: string
  - default value: there is no default value
  - possible value: 'css', 'js'
  - sample code

<!---->

> In the layout file inside head tag

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

> In the controller

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

> In the layout file inside head tag

    // this will print out all meta tags
    <?$this->view->metas()?>
    
#### parse($data=null)
  - description: parse action views using codeigniter [Template Parser Class](http://codeigniter.com/user_guide/libraries/parser.html)
  - argument data type: array, string, integer, bool
  - default value: null
  - possible value: any data you want to pass to the action view
  - sample code
  
<!---->

> In the controller

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
    
> In the layout or action view files. ex. about/index.php
    
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

> In the controller

    public function index()
    {
      $data['nav_selected'] = 'about';
      $this->view->render($data);
    }

#### set($prop, $val)
  - description: render partial in action view
  - Arguments:

> $prop

  - description: the property to be set
  - data type: string
  - default value: there is no default value
  - possible value: 'lang', 'controller', 'action', 'layout', 'uni_title'

> $val

  - description: the value of the property to be set
  - data type: string
  - default value: there is no default value
  - possible value: 
    - lang: 
      - 'en', 'tw'....
    - controller: 
      - description: what controller config you want to apply to the current action
      - possible value: 'shops', 'carts' ...
    - action:
      - description: what action config you want to apply to the current action
      - possible value: 'index', 'show' ...
    - 'layout'
      - description: what layout you want to use
      - possible value: 'admin', 'shops' ...
    - 'uni_title'
      - description: generate a unique title using meta description
      - default value: true
      - possible value: true, false
  - sample code

<!---->

> In the controller

    // set 'send' action asset files the same as 'sent' action
    public function send()
    {
      $this->view->set('action', 'sent')->render();
    }

#### title()
  - description: print out the title tag
  - sample code
  
<!---->

> In the layout file inside head tag
  
    // this will print out the title tag
    <?$this->view->title()?>

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