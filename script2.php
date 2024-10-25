<?php
// This script displays environment variables to test for potential vulnerabilities

header('Content-Type: text/plain'); // Set content type to plain text

echo "Testing Environment Variables\n\n";

// List of environment variables to display
$env_vars = [
    'ALLUSERSPROFILE',
    'APPDATA',
    'CommonProgramFiles',
    'CommonProgramFiles(x86)',
    'CommonProgramW6432',
    'COMPUTERNAME',
    'HOMEDRIVE',
    'HOMEPATH',
    'LOCALAPPDATA',
    'LOGONSERVER',
    'NUMBER_OF_PROCESSORS',
    'OS',
    'Path',
    'PATHEXT',
    'PROCESSOR_ARCHITECTURE',
    'PROCESSOR_IDENTIFIER',
    'PROCESSOR_LEVEL',
    'PROCESSOR_REVISION',
    'ProgramData',
    'ProgramFiles',
    'ProgramFiles(x86)',
    'ProgramW6432',
    'USERDOMAIN',
    'USERNAME',
    'USERPROFILE',
    'TEMP',
    'TMP',
    'SystemDrive',
    'SystemRoot',
    'windir'
];

// Display environment variables
foreach ($env_vars as $var) {
    $value = getenv($var);
    echo "$var: $value\n";
}
?>
