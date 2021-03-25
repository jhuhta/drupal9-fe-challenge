# Drupal front end Code Challenge

The given task is to build an app and present it running on a simple Drupal 9 site running on
your own computer in a virtual development environment.

## How to return the project

In an interview, you will be tasked to briefly demonstrate your deliverables.
You also need to have the code, exported configuration and composer files committed to a
git repository, which you can share with us to be able to check the results.

## The task itself

* Set up a Drupal 9 virtual environment using this repo, which you'll fork. You need to meet
  the Lando & Docker requirements to be able to do that, and to install composer.
* Create a simple app depicted by the [video](Lean_UX_recruitment_task_demo.mov).
  * Don't set the ambitions level too high. It doesn't need to be pixel perfect, and not perfect
    in other ways either. "MVP level" is totally fine.
  * You can omit the "VIEW DEAL" button from the video, and the view you get to after
    pressing the button.
* Choose any stack you like. There is Vue.js library included as an example, but use whatever
  you like. Just be ready to justify your choice.
* Create a way to compile your css, if you use SASS/PostCSS/whatnot.
  You might need to edit your `.lando.yml` and do a `lando rebuild` in the process.
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
* After that, run `lando drush site:install --existing-config -y` to initialize the site.
* To log in, use the credentials provided by the output of previous command, or,
  use `lando drush user:login`.
* The data consumed by your app is provided in the `drupalSettings` variable.
* See My App module and My Theme custom theme for details.
* Twig debug is turned on in web/sites/development.services.yml, and the "Embedded app"
  paragraph type has a twig template for you to edit.

**Good luck with the task!**

## Credits

This simple Drupal 9 site and the assignment itself are based on the work by Sami Kolari
(https://github.com/samipe/lean-ux-code-challenge) and Jari Nousiainen
(https://github.com/jnous/drupal9-base). I just combined them and made some initial Drupal
customizations required for the task.
