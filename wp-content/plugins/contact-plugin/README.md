# Contact Plugin

## Architecture explained

- `index.php` file is created for the perpose when user visited there wordpress website admin > plugin > current plugin section, what to show there?
  - The html present at that page is served by index.php page
  - It also help to secure other files and stop unwanted user's to accessing/vieweing them
- `contact-plugin` is the file which is named same as the folder name which serves the logic of the plugin
  - At start it's necessary to have a comment that specify plugin detail's so that wordpress adds that plugin in it's plugin section.
