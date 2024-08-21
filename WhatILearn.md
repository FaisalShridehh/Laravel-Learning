# Laravel Learning Process

## What I Learned from Day 1 to Day 3

- Learn about how to deal with blade templates.
- Learn about components in Laravel.
- Learn about passing data to components and blades.
- Learn about how to use props in components.
- Learn about how to use slots in components.
- Learn how to use directives.
- Learn about how to use routes.
- Learn about models.
- Learn about data encapsulation.
- Learn about data behavior.
- Learn how to handle errors with an error 404 page.

I don't know if I forgot anything until now.

## What I Learned from Day 4 to Day 6

- learn how to interact more with models.
- learn how to use Eloquent.
- learn how to use migrations.
- learn how to use tinker for debugging.

## What I Learned from Day 7 to Day 9

- learn how to deal with factories.
- learn about eloquent relationships.
- learn about pivot tables , which is used for many to many relationships in Eloquent.
- learn about n+1 problem in queries which it refers to database queries executed within a loop,rather than making a single query that loads all the relevant data.
- learn about lazy loading and eager loading which i still don't know when to use each of them.
- learn about pagination ,simple pagination and cursor pagination.
- learn about rendering pagination links, and how to deal with the view or configuring the default view by `php artisan vendor:publish --tag=laravel-pagination` and the config file `app\Providers\AppServiceProvider.php`.
- take an overview of database seeders.
- --> `where seeders are classes that can trigger one or more factories or database calls`.
- --> `where factories are classes that can create database records for test purposes`.
- goes over csrf (cross site request forgery) and how to prevent it. but still need more explanations on it.

> csrf is a security mechanism that prevents unauthorized access to a web application.

- dealing with forms
- access request attributes
- fillable and guarded but still don't when to use each of them

## What I Learned from Day 9 to Day 11

- learn about form validation.
- learn more about CRUD operations in laravel.
- learn about `@method()` directive.
- learn about Route Model Binding
- learn how to controllers to make routes more readable and reusable ..etc .
- learn about `Route::View()`.
- learn how to Group routes.
- learn about route resource `Route::resource()`.
- learn about starter-kits like breeze.
- learn about middleware that breeze provides.

## What I Learned from Day 12 to Day 14

- learn about authentication.
- learn about Gate.
- learn about ```$model->can()``` method which is determines if a user can perform an action on a model.
- learn about policies but its still confusing.
- ```based on google search and stackoverflow on the usage cases of using gates or policies, the answers i found that it depends on the project and what i want to do , in case the project is simple they recommend to use gates, but in case the project is complex you should use policies.``` <-- i don't know if this is true or not.   
- learn about sending email using mailable classes but still need more practice on them.
- learn about queues in laravel but still need more practice on them.

### Questions

- when to use 'fillable' and 'guarded' in model?
- when to use Gates and Policies and what is better to use?
