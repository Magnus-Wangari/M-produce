To be able to send an email through Xampp configure the following:

- Open C:\xampp\php\php.ini

Find extension=php_openssl.dll and remove the semicolon from the beginning of that line

- In php.ini file, find [mail function] and change:

	SMTP=smtp.gmail.com
	smtp_port=587
	sendmail_from = my-gmail-id@gmail.com
	sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"

Open C:\xampp\sendmail\sendmail.ini

Change the code in sendmail.ini with the following code:

	[sendmail]

	smtp_server=smtp.gmail.com
	smtp_port=587
	error_logfile=error.log
	debug_logfile=debug.log
	auth_username = mproduceproject@gmail.com
	auth_password = M-produceproject
	force_sender = mproduceproject@gmail.com

Example of user:
Names:  Jaden Njeru
Password: 1234
Email: jadennjeru68@gmail.com
Phone:0713456789