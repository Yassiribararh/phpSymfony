# phpSymfony
Basics of Symfony 


<strong>I - Creating the first symfony project using the composer commands:</strong>

1- create-project(create new projects from packages into a given directory):
 - composer create-project symfony/framework-standard-edition first_app
- (1st argument: composer command)
- (2nd argument: name of the package)
- (3rd argument: application name)

2- Specify the Database details such as the host, the root, the user and the password


<strong>II- Creating the firt page:</strong>

Creating a new page - whether it’s an HTML page or a JSON endpoint - is a two-step process:

- Create a route: A route is the URL (e.g. /about) to our page and points to a controller;

- Create a controller: A controller is the PHP function we write that builds the page. We take the incoming request information and use it to 
                     create a Symfony Response object, which can hold HTML content, a JSON string or even a binary file like an image or PDF.


1- Started by removing the cach from the var folder<br>
2- Removed the app bundle [From : app/AppKernel, src/Appbundle,  app/config/services.yml] that is the demo bundle that comes with the installation of symfony (To start from the scratch)<br>
3- Back to the composer to execute "php bin/console"<br>
4- Running the commande "php bin/console generate:bundle" and follow the instructions of the Symfony bundle generator<br>
5- The bundle folder is now created in the src folder and contains the Controller and Resources<br>
6 - The resources folder contains the template of how the response is going to be displayed<br>
7- routing.yml contains the route of the application<br>
8- The page is complete and is supposed to display a welcome headline<br>