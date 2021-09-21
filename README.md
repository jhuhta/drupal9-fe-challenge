# Drupal front end Code Challenge
The task is to build an app and present it on a simple Drupal 9 site running on
your own computer in a virtual development environment.

## How to return the project
In an interview, you will be tasked to briefly demonstrate your deliverables.
You also need to have the code, exported configuration and composer files committed to a
git repository, which you can share with us to be able to check the results.

## Prerequisites
* Fork & clone this repository
* Install Lando [according to the instructions](https://docs.lando.dev/basics/installation.html).
  * Depending on your OS, you might have to install Docker first.
* Set up Drupal 9 virtual environment (check below for further information)

## The task itself
* Create a simple app depicted by the [video](Lean_UX_recruitment_task_demo.mov).
  * Don't set the ambitions level too high. It doesn't need to be pixel perfect, and not perfect
    in other ways either. "MVP level" is totally fine.
  * You can omit the "VIEW DEAL" button from the video, and the view you get to after
    pressing the button.
* Choose any stack you like. There is Vue.js library included as an example with
  a sample JS file (the `my_app` module), and also a React starting kit with
  simple hello world implementation (the `my_react_app` module).
* Create a way to compile your css, if you use SASS/PostCSS/whatnot.
  You might need to edit your `.lando.yml` and do a `lando rebuild` in the process.
* Use of CSS-in-JS approach with React is also ok.
* Create a dummy node of type Basic page, where you embed this app you made.

## Evaluation criteria

* The solution itself
  * The requirements are met
  * Your implementation makes sense
  * Accessibility
  * Semantic HTML
  * Responsiveness
* Clean code, Drupal coding standards & other best practices are adhered to

## Some help for you
* Once you have everything in place, you'll get started by `lando start`.
  * After the first start, you should commit `composer.lock` into your own repo.
* After that, run `lando drush site:install --existing-config -y` to initialize the site.
* The site will be at https://drupal9-fe-challenge.lndo.site/.
* To log in, use the credentials provided by the output of previous command, or,
  use `lando drush user:login`.
* Use `lando drush cr` to clear the Drupal render cache.
* The data consumed by your app is provided in the global `drupalSettings` variable.
* See My App and My React App modules and My Theme custom theme for details.
  * Instructions for running Webpack for My React App are in module README.
  * When running `npm` commands (such as `lando npm install`), remember to
    change to the directory that contains the relevant `package.json` file,
    e.g. `web/modules/custom/my_react_app`.
* The React app embedding is similar to what has been outlined in https://www.mediacurrent.com/blog/recipe-embedded-react-component-drupal/
* Twig debug is turned on in web/sites/development.services.yml, and the "Embedded app"
  paragraph type has a twig template for you to edit.
* For guidance on how to handle JS or CSS libraries in Drupal, you can get started by checking out
  * [Attaching a library via Twig template](https://www.drupal.org/docs/theming-drupal/adding-stylesheets-css-and-javascript-js-to-a-drupal-theme#attach-library-specific-twig)
  * [Twig in Drupal](https://www.drupal.org/docs/theming-drupal/twig-in-drupal)
  * For overall Drupal understanding, just for reference: [Understanding Drupal](https://www.drupal.org/docs/understanding-drupal)

**Good luck with the task!**

## Credits

This simple Drupal 9 site and the assignment itself are based on the work by Sami Kolari
(https://github.com/samipe/lean-ux-code-challenge) and Jari Nousiainen
(https://github.com/jnous/drupal9-base). I just combined them and made some initial Drupal
customizations required for the task. And thanks to Sami Hellsten for comments and fixes.
