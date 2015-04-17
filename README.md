#ES Project : EERC, IIIT-Hyderabad.

This repository contains code for the portal being developed as part of the ES project. 
####Coding guide for Javascript Integration has been added!

##Coding conventions


###For forms

Create separate file for each form, with the name [form-x].php

Here is an example format for the form file: 

```
<form action="form-x-backend.php">

<input type="text" name="username" placeholder="Enter your full name" />

.
.
.

</form>
```

Note: Do not put `<html>` or other header tags in the form files. Just the form element. 

Earlier, it was mentioned that `All form files should be created in root directory (with the js and css folders)`.
However, now the directory structure has been changed due to new information that was brought to attention.

Forms have several sub components, each of which can be put in a separate folder. 
So, here's what the final structure looks like:
```
|-js (directory)
|-css (directory)
|- <all other files>
|-form1_mudhouse (directory)
    |-1st_subComponent (directory)
        |-page1.php (the form file)
        |-page2.php
    |-2nd_subComponent  (directory)
    
... Similarly for all forms
```
Please let me know if there are questions.

###For Javascript

There are several functions that help you achieve basic tasks you require for integration:

`load_form(form_number)` is used to load the form on which the user clicks. 

`doajax(page_url, element)` is used to load the contents of the page given by that url into the container specified by the element.

`addtab(number)` creates a new, empty tab in the UI for you to add content to.

`openTab(number)` is used by the button that takes you to the next tab, unless this page is the last one for that form.

`clearAllTabs()` is used to empty the tabs area. Done initially, and before loading a new form.


Every form can be easily loaded by repeating the same function call structure:
```
if (page_loaded!="1_1") {                               //Checks if the tab being loaded is the same as the one open right now.

        clearAllTabs();                                 //Clears the tabs area.
        
        base = "./form1_stone/1Life_Structural/";       //The base URL for the form. This remains the same for a single form.
        
        doajax(base+"page1.php", "#tab_1");             //clearAllTabs automatically adds the first tab, 
                                                        //so you just call this to load the contents of page1.php into the first tab element.
        
        // CODE REPITITION BEGINS FOR AS MANY PAGES THIS FORM HAS
        
        addtab(2);                                      //This adds a second tab.
        doajax(base+"page2.php", "#tab_2");             //This loads page2.php into the second tab we just created.
        
        // CODE REPITITION ENDS
        
        page_loaded = "1_1";                            //This is to keep track of which tab is loaded right now. 
        
      } 
```

And... That's it. Nice and easy. 

###For PHP
Create one single php file that handles all form submits. 
To find out which form was the one which sent a request, use `$_POST["submit"]`'s value attribute in the PHP and modify that in the form. 

For example, in all the forms, do this: 
```
<form action="backend.php" method="POST" ...>
.
.
.
<input type="submit" name="submit" value="form_1_23" />
</form>
```
The `value` attribute of the submit input should be sent to the PHP and it will tell you which form was just submitted. 

In the PHP, you can read this by using something like:
```
<?php
if (isset($_POST['submit']) && $_POST['submit'] == "form_1_23") {
    echo "This came from form 1 part 23";       // I can now make database calls according to this form here. 
    }
?>
```
