; <?php return 1; ?>
[global]
authmodule="CoreAuthModSQLite"
authorisationmodule="CoreAuthorisationModSQLite"
dateformat="Y-m-d H:i:s"
file_group="apache"
file_mode="660"
language_detection="user,session,browser,config"
language="en_US"
refreshtime=60
sesscookiedomain="auto-detect"
sesscookiepath="/"
sesscookieduration="86400"
startmodule="Overview"
startaction="view"

[paths]
base="/usr/local/nagvis/"
htmlbase="/nagvis"
htmlcgi="/centreon"

[defaults]
backend="centreonbroker"
backgroundcolor="#ffffff"
contextmenu=1
contexttemplate="default"
event_on_load=0
event_repeat_interval=0
event_repeat_duration=-1
eventbackground=0
eventhighlight=1
eventhighlightduration=30000
eventhighlightinterval=500
eventlog=0
eventloghidden="1"
eventscroll=1
headermenu="1"
headertemplate="default"
headerfade=1
hovermenu=1
hovertemplate="default"
hoverdelay=0
hoverchildsshow=1
hoverchildslimit="10"
hoverchildsorder="asc"
hoverchildssort="s"
icons="std_medium"
onlyhardstates=0
recognizeservices=1
showinlists=1
showinmultisite=1
urltarget="_parent"
hosturl="[htmlcgi]/main.php?p=20201&o=svc&host_search=[host_name]&search=&poller=&hostgroup=&output_search="
hostgroupurl=
serviceurl="[htmlcgi]/main.php?p=20201&o=svcd&host_name=[host_name]&service_description=[service_description]&poller=&hostgroup=&output_search="
servicegroupurl=
mapurl="[htmlcgi]/main.php?p=403&map=[map_name]"
view_template="default"
label_show=1

[index]
backgroundcolor=#ffffff
headermenu="1"
headertemplate="default"
showmaps=1
showrotations=1
showmapthumbs=0

[automap]

[wui]
maplocktime=5
grid_show=0
grid_color="#D5DCEF"
grid_steps=32

[worker]
interval=10
requestmaxparams=0
requestmaxlength=1900
updateobjectstates=30

[backend_centreonbroker]
backendtype="centreonbroker"
statushost=""
dbhost="localhost"
dbport=3306
dbname="centreon_storage"
dbuser="centreon"
dbpass="7vUrg5a7ad"
dbinstancename="default"
htmlcgi="/centreon"

[states]
