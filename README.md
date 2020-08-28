# PHP terminal
	
the php terminal is a project i dared my self to create
its not secure by any means (well actually it is maybe it really is secure)
its just a proof of concept

it is made to work on linux (it uses the system command)
additional commands are needed to be installed
if you are using debian use
```bash
sudo apt install cowsay fortune figlet
```

i dared my self to create it as a single php file , if that makes it useful
its based off a neumorphic design

when you first copy it to the htdocs folder (or the /var/www/html/)
you will have to give it correct owner ship (sudo chown -R www-data:www-data terminal.php)
and give it a chmod 777 or 755 (really no one could use it without the password so its ok i think)

when you load up the page type "pass root toor" which root is the username and toor is the password
the username and password are only used for login

it is advised to type in help and read it

it is also advised to change the default settings
just edit the file and you should see at the beggining the configs
you could add users and change the root password
and you can change where the close button sends you (defaults to whatever index is in the current dir)
you could also change the default work dir

if you wanna rename it you must also change the FNAME variable


you can also add your own commands by creating a file called addonCOM.php and addonOAC.php (more info if you type about in the terminal)

example for addonCOM.php

 ```php
<?php
function test($arg,$argtwo){
echo "this is arg 1 :<br>".$arg>"<br>this is arg 2:<br>".$argtwo;
}
?>
 ```

example for addonOAC.php

 ```php
<?php
if ($LA == 'test'){$com = 'test("'.$LC[1].'","'.$LC[2].'")';}
?>
 ```

addonCOM.php is fairly easy to understand , its just functions or you could include other php files with functions
but for addonOAC.php i will explain

we are taking the user input and checking if :
1 it has no spaces and is equal to a value we choose (ie ls or cat)
2 it has spaces and a fixed amount of arguments
3 YOU SHOULDNT WORRY ABOUT THIS , but for any person wondering yes there is a mode where there is spaces and infinite args (bridge)

for a command that is like case 1 use this
 ```php
if ($com == "test"){$com = $com."()";}
 ```
dont forget to change test to whatever command you created

for a command that is like case 2 use this

1 arg
 ```php
if ($LA == 'test'){$com = 'test("'.$LC[1].'")';}
 ```
there are 2 tests you have to change here

2 args
 ```php
if ($LA == 'test'){$com = 'test("'.$LC[1].'","'.$LC[2].'")';}
 ```

3 args
 ```php
if ($LA == 'zap'){$com = 'zap("'.$LC[1].'","'.$LC[2].'","'.$LC[3].'")';}
 ```
and so on

infinite args

(you have to create that yourself but here is the example used in bridge)
 ```php
if ($LA == 'bridge'){
$LO = '';
foreach ($LC as $key => $mod){
if ($key > 0){	
$LO = $LO . $mod . ' ';
}
}
$com = 'bridge("'.$LO.'")';
}
 ```

that should be enough docs
hope you like this project
