 #!/bin/bash

# create temporary folder
mkdir /tmp/cron_get-file-info/

# set all the variables
pathWorkingDirectory="/tmp/cron_get-file-info"
pathOutFileDirectory="/home/centreon"

workFile_01="${pathWorkingDirectory}/get-folder-right.tmp1"
workFile_02="${pathWorkingDirectory}/get-folder-right.tmp2"
workFile_03="${pathWorkingDirectory}/get-folder-right.tmp3"
workFile_04="${pathWorkingDirectory}/get-folder-right.tmp4"
workFile_05="${pathWorkingDirectory}/get-folder-right.tmp5"
workFile_06="${pathWorkingDirectory}/get-folder-right.tmp6"
workFile_07="${pathWorkingDirectory}/get-folder-right.tmp7"
workFile_08="${pathWorkingDirectory}/get-folder-right.tmp8"
workFile_09="${pathWorkingDirectory}/get-folder-right.tmp9"
workFile_10="${pathWorkingDirectory}/get-folder-right.tmp10"
workFile_11="${pathWorkingDirectory}/get-folder-right.tmp11"
workFile_12="${pathWorkingDirectory}/get-folder-right.tmp12"
workFile_13="${pathWorkingDirectory}/get-folder-right.tmp13"
workFile_14="${pathWorkingDirectory}/get-folder-right.tmp14"
workFile_15="${pathWorkingDirectory}/get-folder-right.tmp15"

tree -pfiN  ${pathOutFileDirectory} > "${pathWorkingDirectory}/permission.tmp"
tree -ugfiR ${pathOutFileDirectory} > "${pathWorkingDirectory}/owner.tmp"

#####################################
## get the permission informations ##
#####################################

listFolder=${pathWorkingDirectory}/permission.tmp

# clean up the tree exit file
sed 's/rwxr\-xr\-x/755/'         ${listFolder} >  ${workFile_02}
sed 's/rwxrwxr\-x/775/'          ${workFile_02} > ${workFile_03}
sed 's/rw\-r\-\-r\-\-/644/'      ${workFile_03} > ${workFile_04}
sed 's/rwxrwx\-\-\-/770/'        ${workFile_04} > ${workFile_05}
sed 's/rwx\-\-\-\-\-\-/700/'     ${workFile_05} > ${workFile_06}
sed 's/rw\-\-\-\-\-\-\-/600/'    ${workFile_06} > ${workFile_07}
sed 's/r\-xr\-x\-\-\-/451/'      ${workFile_07} > ${workFile_08}
sed 's/rwx\-\-x\-\-x/711/'       ${workFile_08} > ${workFile_09}
sed 's/rwxrwx\-\-\-/770/'        ${workFile_09} > ${workFile_10}
sed 's/rwxrwsr\-x/2775/'         ${workFile_10} > ${workFile_11}
sed 's/rwxr\-s\-\-\-/2750/'      ${workFile_11} > ${workFile_12}
sed 's/\[d/chmod /'              ${workFile_12} > ${workFile_13}
sed 's/\]/ /'                    ${workFile_13} > ${workFile_14}
sed '/^chmod/!d'                 ${workFile_14} > ${workFile_15}
sed 's/rwxrwxrwx/777/'           ${workFile_15} > ${pathOutFileDirectory}/set-permission.sh

# changed right to execute the cleaned file
chmod 755 ${pathOutFileDirectory}/set-permission.sh

################################
## get the owner informations ##
################################

listFolder=${pathWorkingDirectory}/owner.tmp
workFile_01="${pathWorkingDirectory}/get-folder-right.tmp1"
workFile_02="${pathWorkingDirectory}/get-folder-right.tmp2"
workFile_03="${pathWorkingDirectory}/get-folder-right.tmp3"
workFile_04="${pathWorkingDirectory}/get-folder-right.tmp4"
workFile_05="${pathWorkingDirectory}/get-folder-right.tmp5"

# clean up the tree exit file
sed -r 's/\s+/:/'   ${listFolder}  > ${workFile_01}
sed 's/ //g'        ${workFile_01} > ${workFile_02}
sed 's/\[/chown /'  ${workFile_02} > ${workFile_03}
sed 's/\]/ /'       ${workFile_03} > ${workFile_04}
sed '/^chown/!d'    ${workFile_04} > ${workFile_05}
sed 's/\.\///'      ${workFile_05} > ${pathOutFileDirectory}/set-owner.sh

# changed right to execute the cleaned file
chmod 755 ${pathOutFileDirectory}/set-owner.sh

# clean up the temporary folder
rm -fr "${pathWorkingDirectory}"
