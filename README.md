CFlashingMessage a flash class for showing different informative messages.
==================================

How to use

1.Download

The easiest way is to install the module using composer. Add to your composer.json:

    "require": {
    "lova/flashingmessage": "dev-master"
},


And then run composer install.

You can also download the zip file from here.

2.Include it in your project.

To include flashingmessage in your project add the class in your frontcontroller:

    $di->setShared('flash', function() { 
    $flash = new \lova\CFlashingMessage\CFlashingMessage(); 
    return $flash; 
});

Here's an example of how to use add a message:

    $app->flash->message('success', 'This message tells you your action was succesful'); 



License
----------------------------------

This software is free software and carries a MIT license.
