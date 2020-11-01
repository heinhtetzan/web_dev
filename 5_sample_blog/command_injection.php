<?php

shell_exec("mkdir hacker_folder");
shell_exec("touch hacker_folder/hacker.txt");
echo shell_exec("ls -la");