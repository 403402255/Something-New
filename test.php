<?php 
 
$pyscript = 'C:\\wamp64\\www\\ASUS.py';
$python = 'D:\\Program Files (x86)\\Anaconda3\\pythonw.exe';
$cmd = "$python $pyscript >test.txt";
$cmd2 = "$pyscript $python";
echo exec("$python", $output);
echo exec("$cmd", $output);
echo exec("$cmd2", $output);
echo $output;
echo shell_exec("$python");
echo shell_exec("$cmd");
echo shell_exec("$cmd2");

system("python ASUS.py",$ret);
$command = escapeshellcmd('python.exe C:\wamp64\www\ASUS.py');
exec('D:\\Program Files (x86)\\Anaconda3\\pythonw.exe C:\\wamp64\\www\\ASUS.py');
system('python.exe C:\wamp64\www\ASUS.py');
exec('python.exe C:\wamp64\www\ASUS.py');
exec('C:\wamp64\www\ASUS.py');
$output = shell_exec($command);
echo $output;


$pyscript = 'C:/wamp64/www/ASUS.py';
$python = 'D:/Program Files (x86)/Anaconda3/pythonw.exe';
$command=escapeshellcmd('C:/wamp64/www/ASUS.py');
$output=shell_exec($command);
echo $output;
?>
