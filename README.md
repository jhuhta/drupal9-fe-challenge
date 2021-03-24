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
* You might need to use at least following commands to make all this work:
  * `composer install`
  * `lando start`
  * `lando drush cim -y`
* The data consumed by your app is provided in the `drupalSettings` variable.
* See My App module and My Theme custom theme for details.
* Twig debug is already on, and the "Embedded app" paragraph type has a template for you to edit.

**Good luck with the task!**

## Credits

This simple Drupal 9 site and the assignment itself are based on the work by Sami Kolari
(https://github.com/samipe/lean-ux-code-challenge) and Jari Nousiainen
(https://github.com/jnous/drupal9-base). I just combined them and made some initial Drupal
customizations required for the task.
