<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

//PLEASE IF YOU WANT TO RENAME THIS FILE TYPE ITS NAME IN THE
//VARIABLE BELOW
$FNAME = 'terminalDark.php';

///////////////////////
//Close Button Config//
/**/$closeBTN = './';//
///////////////////////

///////////////////////
//Dir location Config//
/**/$centralDIR = '';//
///////////////////////

//users and security

//add users like this , copy and edit the line below without "//"
//$username = 'password';

$root = 'toor';


    session_start();
    $wd = $_SESSION['dir'];
    $wd = trim ($wd, " \n\0");
    if ($wd == ''){$_SESSION['dir'] = $centralDIR;}
    //echo $wd;
    
    chdir ($wd);
    

function say($var,$color,$size){
    echo '<font color="'.$color.'" size="'.$size.'">'.$var.'</font>';
}

function IsThereAnyEasterEggsHere(){
    echo "<font color='red'>w</font><font color='orange'>h</font><font color='yellow'>o </font><font color='lime'>k</font><font color='cyan'>n</font><font color='blue'>o</font><font color='teal'>w</font><font color='purple'>s</font><font color='magenta'> ?</font>";
}

function www(){
	echo '<font color="teal">Useless , i know , you had to type a space , that makes a good way to make a secret message';
}

function randomFun(){

function fun($identifier){
	if ($identifier == '0'){bridge('cowsay -f daemon target set , booting up haha_spear_go_brrr.exe');}
	if ($identifier == '1'){bridge('cowsay -f dragon steve is that you ?');}
	if ($identifier == '2'){bridge('cowsay -f ghostbusters who you gonna call ?');}
	if ($identifier == '3'){bridge('cowsay -f tux "This Server Is Linux Based ,It\'s Debian"');}
	if ($identifier == '4'){bridge('cowsay -f calvin what are you looking at ?');}
	if ($identifier == '5'){bridge('cowsay -f stegosaurus "time to go to the party , oops forgot my pants"');}
	if ($identifier == '6'){bridge('cowsay -f milk you do be looking kinda THICC !');}
	if ($identifier == '7'){bridge('cowsay -f bud-frogs ribbit ooOOOOa ribbit');}
	if ($identifier == '8'){bridge('cowsay -f duck sike thats the wrong argument');}
	if ($identifier == '9'){bridge('cowsay -f turtle I am gonna pee here');}
	if ($identifier == '10'){bridge('figlet You Are Amazing');}
}
$token = mt_rand(0, 10);
if ($token == '0'){fun('0');}
if ($token == '1'){fun('1');}
if ($token == '2'){fun('2');}
if ($token == '3'){fun('3');}
if ($token == '4'){fun('4');}
if ($token == '5'){fun('5');}
if ($token == '6'){fun('6');}
if ($token == '7'){fun('7');}
if ($token == '8'){fun('8');}
if ($token == '9'){fun('9');}
if ($token == '10'){fun('10');}
}

function cls(){
    echo " ";
}

function redir($url){
    header("LOCATION:$url");
}

function cat($catfile){
    echo file_get_contents($catfile);
}

function vdir(){
    session_start();
    echo $_SESSION['dir'];
}

function logout(){
	session_start();
	$_SESSION['authToken'] = '';
	echo "<font color='orange'>Logged out</font><br>please use <font color='magenta'>pass </font><font color='purple'>UN PWD </font>to login";
}

function bridge($tty){
	echo "<pre>";
	system ($tty);
	echo "</pre>";
}

function kurt(){
	echo "<pre>";
	system ('fortune -s');
	echo "</pre>";
}

function network(){
	echo "<pre>";
	system ('ip addr');
	echo "</pre>";
}

function cp($file,$newfile){
    if (!copy($file, $newfile)) {
        echo "<font color='red'>failed to copy ".$file."</font>";
    }else{
    	echo "<font color='lime'>copied ".$file." successfully !</font>";
    }
}

function version(){
	echo "<pre>";
	system ('figlet CFHS terminal');
	echo "<br>";
	system ('figlet v2.5 c');
	echo "</pre>";
}

function ls($heb){
    $ls = '';
    $dircont = scandir($heb."./");
    foreach ($dircont as $entry){
        if (is_dir($entry)){$entry = $entry.'/';}
        $ls = $ls . $entry . "<br>";
    }
    echo $ls;
}

function mv($mvif,$mvof){
    if (copy($mvif, $mvof)) {
        unlink ($mvif);
        echo "<font color='lime'>Operation completed successfully</font>";
    }else{
        echo "<font color='red'>Failed at phase 1 'copy' , maybe check your perms or check if file exists</font>";
    }
}

function wget($if,$of){
    if(!@copy($if,'./'.$of))
    {
        $errors= error_get_last();
        echo "<font color='red'>COPY ERROR: ".$errors['type'];
        echo "<br />\n".$errors['message']."</font>";
    } else {
        echo "<font color='lime'>File copied from remote!</font>";
    }
}

function rrmdir($dir) {
  $dir = $dir;
  if (is_dir($dir)) {
    $files = scandir($dir);
    foreach ($files as $file)
    if ($file != "." && $file != "..") rrmdir("$dir/$file");
    rmdir($dir);
  }
  else if (file_exists($dir)) unlink($dir);
  echo '<font color="orange">Operation Completed</font>';
}

function rm($goneForever){
    if (is_dir($goneForever)) {
    	rrmdir($goneForever);
    }else{
    	if(unlink($goneForever)){
    	    echo '<font color="lime">File '.$goneForever.' has been deleted successfully</font>';
    	}else{
    	    echo '<font color="red">remove failed , check permisions ?</font>';
    	}
    }
}

function rcopy($src, $dst) {
  $src = $src;
  $dst = $dst;
  if (file_exists($dst)) rrmdir($dst);
  if (is_dir($src)) {
    mkdir($dst);
    $files = scandir($src);
    foreach ($files as $file)
    if ($file != "." && $file != "..") rcopy("$src/$file", "$dst/$file");
  }
  else if (file_exists($src)) copy($src, $dst);
}

function cd($abc){
    if ($abc == ''){
        echo 'Dir not specified resolving to ~ (the sandbox folder)';
        session_start();
        unset ($_SESSION['dir']);
        $_SESSION['dir'] = $centralDIR;
    }elseif ($abc == '~'){
        echo 'Dir changed to ~';
        session_start();
        unset ($_SESSION['dir']);
        $_SESSION['dir'] = $centralDIR;
    }else{
        if (substr($abc, -1) !== "/"){$abc = $abc."/";}
        echo "changed dir to ".$abc;
        trim ($abc, " \n\0");
        session_start();
        $tbt = $_SESSION['dir'];
        $abc = $tbt.$abc;
        unset ($_SESSION['dir']);
        $_SESSION['dir'] = $abc;
    }
}

function zap($I,$O,$A){
    //$I is input
    //$O is output
    //$A is args
    /**
    *
    *============================
    *|code by Sm2c              |
    *|SuperMarioMC98@outlook.com|
    *============================
    *
    *args are
    *1 -> normal , if exists halt
    *2 -> normal , if exists overwrite (delete then write)
    */
    if ($I == ''){echo "<font color='red'>insufficient args , please check man('createFile')";}
    elseif ($O == ''){echo "<font color='red'>insufficient args , please check man('createFile')";}
    elseif ($A == ''){echo "<font color='red'>insufficient args , please check man('createFile')";}
    else
        if ($A == '1'){
        if (!file_exists($I)){

       	$file = fopen($O, 'x');
        fwrite($file, $I);
        fclose($file);
        echo "<font color='lime'>File created successfully";
        }elseif (file_exists($I)){
        echo "<font color='red'>File Exists";
        }else{echo "<font color='red'>Something went wrong , maybe check file perms?";}
    }
    elseif ($A == '2'){
        if (!file_exists($I)){

       	$file = fopen($O, 'x');
        fwrite($file, $I);
        fclose($file);
        echo "<font color='lime'>File created successfully";
        }elseif (file_exists($I)){
        unlink ($O);
        $file = fopen($O, 'x');
        fwrite($file, $I);
        fclose($file);
        echo "<font color='green'>File Rewritten";
        }else{echo "<font color='red'>Something went wrong , maybe check file perms?";}
    }//this is kinda looking like how yandere dev would code XD
    elseif ($A == '7'){echo "IsThEreAnYeAsTeRgGsHeRe?";}
    else echo "<font color='red'>false args , please check man('createFile')";
}

function about(){
    echo'
    <pre>PHP terminal<br><br>
    this app was created by SuperMarioMC98 (lilBigDev)<br>
    some of the commands use the system command<br>
    so you would have to run it on linux for all the<br>
    commands to work correctly<br><br>
    if you are running debian , run:<br>    <font color=\'magenta\'>sudo apt install <font color=\'red\'>cowsay <font color=\'orange\'>fortune <font color=\'lime\'>figlet</font></font></font></font><br><br>
    or try to find a substance<br><br>
    affected commands:<br>    <font color=\'magenta\'>kurt pose version network</font>(if you arent running linux)<br><br>
    to add commands to the terminal just create<br>    a addonCOM.php file in the same directory<br>    or open the terminal file in a code editor<br>    and search for "if (file_exists($addonFile))"<br>    above it you will find a $addonFile variable<br>    change it to the path you desire<br>
    <br>    the contents of the addonCOM.php file<br>    are either functions or including<br>    another php file with functions<br><br>
    you may notice that you dont have<br>    to type in "for example" rm(\'theFile\')<br>    instead just "rm theFile" thats achieved<br>    by changing the input if its<br>    equal to a specific value<br>    so when you add a command create a<br>    addonOAC.php file and yes its same as addonCOM.php<br>    if you wanna change its location<br>    search for "if (file_exists($oacFile))"<br>    and you will find a variable $oacFile<br>    you can change it<br>    *examples are provided<br><br>
    you may have to change security on this app<br>
    have fun!</pre>
    ';
}

function help(){
	echo '<pre>
     say
	
	a echo like command
	use syntax "say SOMETHING COLOR FONTSIZE"
	color could be any color type (rgba , rgb , # , white ...)
	fontsize is an integer (1 , 2 , 3 ...)
	
	
	
     pose
	
	different poses (REQUIRES LINUX AND COWSAY AND FIGLET)
	use command pose , no arguments
	
	
	
     cls
	
	a clear command no arguments
	
	
	
     redir
	
	redirect to another url
	use syntax "redir URL"
	could be used with get requests
	
	
	
     cat
	
	retrieves contents of a file 
	(make sure its not a php/html file)
	very similar to the UNIX command cat
	use syntax "cat FILE"
	
	
     vdir
	
	views current directory if output is none
	then its the root dir
	takes no arguments
	
	
     logout
	
	logs you out
	no arguments
	
	
     bridge
	
	sends a command directly to your OS shell
	BEWARE ,THIS IS SO DANGEROUS IN WINDOWS
	use syntax "bridge command arguments etc etc"
	there is no limit to the arguments as that is
	decided by the program you are contacting
	
	
	
     kurt
	
	Makes your day bright :)
	(REQUIRES LINUX WITH FORTUNE)
	take no arguments
	
	
     network
	
	(REQURES LINUX)
	takes no arguments
	shows up the ip addr command
	
	
     cp
	
	standard copy command
	use syntax "cp OGfile DESTwithfilenameandext"
	
	
     version
	
	views the version
	takes no arguments
	
	
     ls
	
	lists items in current directory
	either takes no args or uses this syntax
	"ls DIR"
	
	
     mv
	
	standard move command
	use syntax "mv SRCfile DESTfilenameandext"
	
	
     wget
	
	same as the UNIX command wget
	downloads a file from a url to the current work dir
	use syntax "wget URL FILENAMEEXT"
	
	
     rm
	
	intelegent remove command
	works on anything
	use syntax "rm OBJECT"
	
	
     rcopy
	
	advanced copy
	copies anything
	use syntax "rcopy SRCobj DESTobjnameandext"
	
	
     cd
	
	change dir
	same as UNIX command cd
	either uses no args or
	"cd ~" or "cd ANYDIRUWANTBUTNOT /"
	typing cd or "cd ~" will bring you back to
	the root dir , which can be changed by changing
	the centralDIR variable in the begining of the
	terminal file
	
	
     zap
	
	creates a file
	use syntax "zap INPUT OUTPUTWITHEXT OperationType"
	the OperationType argument is an integer either 1 or 2
	1 will check if file exists and if true it will halt
	2 will ignore if file exists and will overWright it
	
	
     about
	
	a small about page recommended to read
	takes no arguments
	</pre>';
}

function pass($u,$p){
$base = 'global $'.$u.'; if ($'.$u.' == "'.$p.'"){
$_SESSION[\'authToken\'] = \'priv\';
echo "<font color=\'lime\'>Logged in";
}else{
echo "<font color=\'red\'>Login Failed";}';
eval(' ' . $base);
}


//custom 3rd party command addons
$addonFile = 'addonCOM.php';
if (file_exists($addonFile)){include $addonFile;}
?>

<html>
<title>CFHS terminal</title>
<style>
.out::-webkit-scrollbar {
    background-color: rgba(0,0,0,0);
    width: 3px;
}
            
.out::-webkit-scrollbar-thumb {
    background: rgb(160,160,160);
    width: 3px;
    height: 3px;
}
body{
margin: 0 auto;
background-color: #333;
overflow-y: hidden;
}
.dev{
background-color: #333;
width: 70%;
height: 70%;
border: none;
border-radius: 16px;
position: relative;
box-shadow: inset -8px -8px 10px #222,inset 10px 10px 10px -5px rgba(80,80,80,.6),
-10px -10px 16px 2px rgba(80,80,80,.6),10px 10px 16px 4px #222;
}
.screen{
background-color: #33dd3;
height: 88%;
scrollbar-color: rgb(160,160,160) rgba(0,0,0,0);
scrollbar-width: thin !important;
width: 96%;
position: absolute;
bottom: 4%;
right: 2%;
}
.red{
display: block;
height: 16px;
box-shadow:inset 2px 2px 5px #434343,inset -2px -2px 3px rgba(130,130,130,.6);
width: 16px;
border-radius: 30px;
background-color: red;
position: absolute;
top: 2.5%;
left: 8px;
transition: 0.2s;
}
.red:hover{
display: block;
height: 16px;
width: 16px;
border-radius: 30px;
background-color: #bb0000;
position: absolute;
top: 2.5%;
left: 8px;
}
.text{
position: absolute;
bottom: 3px;
left: 3px;
background-color: transparent;
border: none;
color: white;
width: 70%;
border-top-right-radius: 30px;
border-bottom-right-radius: 30px;
border-top-left-radius: 12px;
border-bottom-left-radius: 12px;
transition: 0.4s;
box-shadow: inset 6px 6px 10px -2px black,inset -10px -10px 10px -5px rgba(120,120,120,.3);
}
.text:hover{
position: absolute;
bottom: 3px;
left: 30px;
background-color: transparent;
width: 70%;
border-radius: 30px;
}
.sub{
position: absolute;
bottom: 3px;
right: 3px;
background-color: transparent;
border: none;
color: white;
border-top-left-radius: 30px;
box-shadow: inset -8px -8px 10px -8px black,inset 6px 6px 8px -5px rgba(120,120,120,.4),
-6px -6px 8px -4px rgba(120,120,120,.4),7px 4.5px 10px -3px black;
border-bottom-left-radius: 30px;
transition: 0.2s;
}
.sub:hover{
position: absolute;
bottom: 3px;
right: 10px;
background-color: transparent;
border-radius: 30px;
}
.sub:active{
box-shadow: inset 6px 6px 10px -2px black,inset -10px -10px 10px -5px rgba(120,120,120,.3);
}
.out{
border: none;
border-radius: 4px;
position: absolute;
top: 4px;
left: 3px;
width: 85.5%;
height: 85%;
overflow-y: scroll;
scrollbar-color: rgb(160,160,160) rgba(0,0,0,0);
scrollbar-width: thin !important;
text-align: left;
box-shadow: inset 8px 8px 10px -4px black,inset -8px -8px 10px -5px rgba(120,120,120,.3);
word-wrap: break-word;
}
.ast{
position: absolute;
height: 94%;
width: 94%;
top: 3%;
left: 3%;
}
.out2{
border: none;
border-radius: 4px;
position: absolute;
top: 4px;
right: 3px;
width: 12%;
height: 85%;
word-wrap: break-word;
box-shadow: inset 8px 8px 10px -4px black,inset -8px -8px 10px -5px rgba(120,120,120,.3);
}
.yellow{
display: block;
box-shadow:inset 2px 2px 5px #434343,inset -2px -2px 3px rgba(130,130,130,.6);
height: 16px;
width: 16px;
border-radius: 30px;
background-color: orange;
position: absolute;
top: 2.5%;
left: 30px;
transition: 0.2s;
}
.yellow:hover{
display: block;
height: 16px;
width: 16px;
border-radius: 30px;
background-color: brown;
position: absolute;
top: 2.5%;
left: 30px;
}
.green{
display: block;
height: 16px;
width: 16px;
box-shadow: inset 2px 2px 5px #434343,inset -2px -2px 3px rgba(130,130,130,.6);
border-radius: 30px;
background-color: lime;
position: absolute;
top: 2.5%;
left: 53px;
transition: 0.2s;
}
.green:hover{
display: block;
height: 16px;
width: 16px;
border-radius: 30px;
background-color: green;
position: absolute;
top: 2.5%;
left: 53px;
}
.info{
position: absolute;
bottom: 0px;
right: 0px;
color: black;
background-color: orange;
padding: 5px;
border-top-left-radius: 10px;
}
</style>
<script>
function max(){
document.getElementById("dev").style.transition = "0.4s";
document.getElementById('dev').style.width = '100%';
document.getElementById('dev').style.height = '100%';
document.getElementById('dev').style.borderRadius = '0px';
document.getElementById('max').onclick = min;
var div = document.getElementById('upper');
if (div.style.display !== 'none') {
div.style.display = 'none';
}
else {
div.style.display = 'block';
}
var divs = document.getElementById('info');
if (divs.style.display !== 'none') {
divs.style.display = 'none';
}
else {
divs.style.display = 'block';
}
}

function min(){
document.getElementById("dev").style.transition = "0.4s";
document.getElementById('dev').style.width = '70%';
document.getElementById('dev').style.height = '70%';
document.getElementById('dev').style.borderRadius = '16px';
document.getElementById('max').onclick = max;
var div = document.getElementById('upper');
if (div.style.display !== 'none') {
div.style.display = 'none';
}
else {
div.style.display = 'block';
}
var divs = document.getElementById('info');
if (divs.style.display !== 'none') {
divs.style.display = 'none';
}
else {
divs.style.display = 'block';
}
}

function circ(){
document.getElementById("dev").style.transition = "0.7s";
document.getElementById('min').style.left = '30px';
document.getElementById('dev').style.width = '70%';
document.getElementById('exi').style.top = '2px';
document.getElementById('min').style.top = '2px';
document.getElementById('dev').style.height = '70%';
document.getElementById('dev').style.borderRadius = '16px';
document.getElementById('max').onclick = max;
var dive = document.getElementById('upper');
dive.style.display = 'block';
var divs = document.getElementById('info');
divs.style.display = 'block';
document.getElementById('dev').style.width = '55px';
document.getElementById('dev').style.height = '22px';
document.getElementById('min').onclick = norm;
var div = document.getElementById('screen');
if (div.style.display !== 'none') {
div.style.display = 'none';
}
else {
div.style.display = 'block';
}
var divc = document.getElementById('max');
if (divc.style.display !== 'none') {
divc.style.display = 'none';
}
else {
divc.style.display = 'block';
}
}

function norm(){
document.getElementById("dev").style.transition = "0.7s";
document.getElementById('min').style.left = '53px';
document.getElementById('exi').style.top = '2.5%';
document.getElementById('min').style.top = '2.5%';
document.getElementById('dev').style.width = '70%';
document.getElementById('dev').style.height = '70%';
document.getElementById('dev').style.borderRadius = '16px';
document.getElementById('min').onclick = circ;
var div = document.getElementById('screen');
if (div.style.display !== 'none') {
div.style.display = 'none';
}
else {
div.style.display = 'block';
}
var divc = document.getElementById('max');
if (divc.style.display !== 'none') {
divc.style.display = 'none';
}
else {
divc.style.display = 'block';
}
}

</script>
<center><div id='upper'><br><br><br><br></div>
<div class='dev' id='dev'>
&nbsp; <a class='red' id='exi' href='<?php echo $closeBTN; ?>'></a>
&nbsp; <a class='yellow' id='max' onclick = "max();"></a>
&nbsp; <a class='green' id='min' onclick = "circ();"></a>
<div class='screen' id='screen'>
<div class="out2"><font color="white" size="2">
<?php echo $adinfo; ?>
<!--
<br>
key:<br>
DJ75SJ8<br>
59HFJ69<br>
9832R9W<br>
<br>
for<br>
use<br>
on<br>
OBBS<br>
servers<br>
only !
-->
</div>
<form method='POST' action='<?php echo $FNAME; ?>'>
<input type='text' name='com0' class='text'><input type='submit' class='sub' name='scsi' value='Inject'>
<div class="out"><div class='ast'><font color="white" size="2">
<?php
if (isset($_POST['scsi'])){
$com = $_POST['com0'];
session_start();
$AT = $_SESSION['authToken'];
if ($AT !== 'priv'){
if (strpos($com, " ") == true){
$p1 = explode(' ',$com);
$p2 = $p1[0];
if ($p2 !== 'pass'){
echo '<font color=\'red\'>ACCESS DENIED !</font>';
die();
}else{
$p3 = 'pass("'.$p1[1].'","'.$p1[2].'");';
eval(' ' . $p3);
}
}else{
echo '<font color=\'red\'>ACCESS DENIED !</font>';die();
}
}


//if single module
//if ($com == ""){$com = $com."()";}
if ($com == "ls"){$com = $com."('')";}
if ($com == "help"){$com = $com."()";}
if ($com == "kurt"){$com = $com."()";}
if ($com == "about"){$com = $com."()";}
if ($com == "logout"){$com = $com."()";}
if ($com == "network"){$com = $com."()";}
if ($com == "cls"){$com = $com."()";}
if ($com == "vdir"){$com = $com."()";}
if ($com == "cd"){$com = $com."('~')";}
if ($com == "rrmdir"){$com = $com."()";}
if ($com == "version"){$com = $com."()";}
if ($com == "pose"){$com = "randomFun()";}
if ($com == "refreshDB"){$com = $com."()";}
if ($com == "reengineer"){$com = $com."()";}

//if multi module
if (strpos($com, " ") == true){
$LC = explode(' ',$com);
$LA = $LC[0];

//if ($LA == 'TEST'){$com = 'TEST("'.$LC[1].'")';}
if ($LA == 'cd'){$com = 'cd("'.$LC[1].'")';}
if ($LA == 'ls'){$com = 'ls("'.$LC[1].'")';}
if ($LA == 'rm'){$com = 'rm("'.$LC[1].'")';}
if ($LA == 'cat'){$com = 'cat("'.$LC[1].'")';}
if ($LA == 'redir'){$com = 'redir("'.$LC[1].'")';}
if ($LA == 'mv'){$com = 'mv("'.$LC[1].'","'.$LC[2].'")';}
if ($LA == 'cp'){$com = 'cp("'.$LC[1].'","'.$LC[2].'")';}
if ($LA == 'www'){$com = 'www("'.$LC[1].'","'.$LC[2].'")';}
if ($LA == 'wget'){$com = 'wget("'.$LC[1].'","'.$LC[2].'")';}
if ($LA == 'rcopy'){$com = 'rcopy("'.$LC[1].'","'.$LC[2].'")';}
if ($LA == 'zap'){$com = 'zap("'.$LC[1].'","'.$LC[2].'","'.$LC[3].'")';}
if ($LA == 'say'){$com = 'say("'.$LC[1].'","'.$LC[2].'","'.$LC[3].'")';}
if ($LA == 'bridge'){
$LO = '';
foreach ($LC as $key => $mod){
if ($key > 0){
$LO = $LO . $mod . ' ';
}
}
$com = 'bridge("'.$LO.'")';
}
}

//custom 3rd party OneAccessCommands config
$oacFile = 'addonOAC.php';
if (file_exists($oacFile)){include $oacFile;}
	
session_start();
header("Access-Control-Allow-Origin: *");
ob_start();
eval(" ".$com.";");
$output = ob_get_contents();
ob_end_clean();

echo $output;

}
?>
</div></div>
</div></div></center>
</html>
