# WordPress Plugin Development

## Contact Plugin

### Architecture explained

- `index.php` file is created for the perpose when user visited there wordpress website admin > plugin > current plugin section, what to show there?
  - The html present at that page is served by index.php page
  - It also help to secure other files and stop unwanted user's to accessing/vieweing them
- `contact-plugin` is the file which is named same as the folder name which serves the logic of the plugin
  - At start it's necessary to have a comment that specify plugin detail's so that wordpress adds that plugin in it's plugin section.
- `carbon-fields-plugin` is a plugin that we are using as a dependency inside our plugin, which will be allow us to easily create new plugin dashboard (i.e. page's that are linked with right side dashboard in wordpress )
  - To install this plugin in our plugin so that we can use it type -> `composer require htmlburger/carbon-fields-plugin` _(Composer must be installed in your system. [Download from here](https://getcomposer.org/download/))_
