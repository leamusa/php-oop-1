# php-oop-1

# description

This afternoon review the first class concepts, variables and instance methods we saw this morning and

1. create an index.php file in which a Production class is defined
2. Within the class you will have to manage a
   a)title, b) language c) grade (on a scale of 1 to 10).
3. The class must have its instance variables, the constructor and the methods.Then instantiate at least two Production objects and print their values on the screen.

# Idea

making 2 file 1. index.php

# BONUS 1

Create a complete layout to print a list of productions on the screen. We pay attention to the organization of the code, dividing it into special files and folders. We can for example organize the code:
creating a data file (like object arrays) that we could call db.php
putting each class in its own file and maybe group all the classes in a dedicated folder that we can call Models
organizing the layout dividing the structure and contents into dedicated files and partial.

# BONUS 2

Create a Genre class (attributes could be name and description) and have the Production class accept a genre in the constructor. Update screen printed information with gender.
Confirm reading as usual and have fun :baby-Yoda: :php:
:baby-Yoda:
24

# classMovie:

This is a class that represents a movie. It has four public properties: $director, $title, $genre, and $img.
__construct($\_director, $_title, $_genre): This is a constructor method that gets called when a new Movie object is created. It sets the $director, $title, and $genre properties of the movie.
setImg($\_img): This method sets the $img property of the movie. It's used to assign an image to the movie object.
