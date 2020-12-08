# phpSymfony
Basics of Symfony 


I - Creating the first symfony project using the composer commands:

1- create-project(create new projects from packages into a given directory):
 - composer create-project symfony/framework-standard-edition first_app
- (1st argument: composer command)
- (2nd argument: name of the package)
- (3rd argument: application name)

2- Specify the Database details such as the host, the root, the user and the password


II- Creating the firt page:

Creating a new page - whether it’s an HTML page or a JSON endpoint - is a two-step process:

- Create a route: A route is the URL (e.g. /about) to our page and points to a controller;

- Create a controller: A controller is the PHP function we write that builds the page. We take the incoming request information and use it to 
                     create a Symfony Response object, which can hold HTML content, a JSON string or even a binary file like an image or PDF.
