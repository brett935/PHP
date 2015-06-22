This script is used to upload multiple files to a server.


Here are some things that you might want to change in the php.ini file:

	max_file_uploads = 20 ;this is the max amount of files you can upload at once
	upload_max_filesize = 64M ;this is the maximum filesize you can upload at once
	upload_tmp_dir = "c:/wamp/tmp" ;this is where files will download to until transfer is complete and php moves them somewhere else