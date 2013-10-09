ProcessCodeTester
=================

A ProcessWire admin module to quickly test code without needing to edit templates

Ok, this is really not very fancy, but I think it will come in quite handy - for me at least :)

It provides an admin page where you can test code without the need to edit template files.

It runs from a new page under Setup called "Code Tester"

You are presented with a simple text area. Enter your code, including an opening <?php and click "Run Code".

Page will refresh with the code block still in editor, and with an iframe containing the results of your code below. In some cases the output may not be relevant if your code is manipulating pages etc via the API, rather than outputting content to a page.

Then you can easily make code changes and run again.


###Installation

Install as normal, then move the included file "code_tester.php" to your site's templates folder. 

Depending on your sites template structure, you may want to edit this file. I have set it up using the head.inc and foot.inc approach that is used in PW's default profile. There are detailed instructions in the file to make it easy to modify as needed if you prefer using a single main.inc or other approach.

That's It!


###How it works

* Nothing very high tech - when the module installs it creates a new template: code_tester and a new unpublished page: Code Tester.
* When you click Run Code it creates a file in the assets/files/ID_of_Code_Tester_page/code_tester_code.php and writes your code to the file.
* This file is included from the code_tester.php file and the code is run and the output processed.
* Note that I am using ob_start(); include; $out = ob_get_clean(); so that this will work with a single file templating approach like main.inc

###Forum
