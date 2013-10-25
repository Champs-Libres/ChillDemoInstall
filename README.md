An app which provide tools for helping social assistant (which help people) :-)

Installation
============

1. Clone the project  ´´´git clone <git of the project> ´´´
2. Clone the submodules ´´´git submodule init && git submodule update ´´´
3. Install composer.phar
4. Install php dependancies (Symfony Framework and bundles): ´´´php composer.phar install´´´

For development
---------------

5. Install assets: ´´´php app/console assets:install --symlink´´´
6. Test: http://<path_to_your_installation>/web/app_dev.php/hello

If you want to develop style:

7. Install Ruby 
8. Install SASS and compass dependancies: ´´´sudo gem install sass compass modular-scale´´´

SCSS are in the MainBundle, a ´config.rb´ file is ready for the configuration of compilation into Resource/public/css. Compile manually to see your changes.