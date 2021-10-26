How to run project:
Load XAMPP
Start Apache and MySQL
Go to any webbrowser and go to localhost/phpmyadmin/
Create the following database:
	database name: clean_sweep
Create the following tables:
	jobrequest w/ 5 columns
		Job_ID		Int AI Primarykey 	100 length
		Username	Varchar			100 length
		Location_Name	Varchar			100 length
		Time		Timestamp(6)		100 length
		Description 	Varchar			100 length
	
	Location w/ 2 columns
		Location_ID
		Location_Name
Next create the following database:
	database name: multi_login
Create the following table:
	users w/ 4 columns
		ID 		Int AI Primarykay	100 length
		username	varchar			100 length
		user_type	varchar			100 length			
		password	varchar			100 length
		
