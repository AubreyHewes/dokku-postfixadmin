# dokku-postfixadmin

A simple [dokku](http://dokku.viewdocs.io/dokku/) wrapper for the [postfixadmin docker image](https://hub.docker.com/_/postfixadmin)

## Configuration

You must link the dokku app to a database

i.e.

````bash
dokku mariadb:create postfixadmin
dokku mariadb:link postfixadmin postfixadmin
````

Where `postfixadmin` is the name of your app

### Environment variables

|Key|Description|Required|Default|
|---|---|---|---|
|`POSTFIXADMIN_SETUP_PASSWORD`|The initial setup password|Yes||
|`POSTFIXADMIN_SMTP_SERVER`|The SMTP server host for sending mails|||
|`POSTFIXADMIN_SMTP_PORT`|The SMTP server port for sending mails|||

## Setup

Go to your deployed app's URL and change the path to `/setup.php` and setup an initial administration user.

### Postfix/Dovecot/etc
> This is out of the scope of this, but I will give a few pointers ;-)

See the [postfixadmin documentation](http://postfixadmin.sourceforge.net/)

> NOTE you will have to use the env vars from the previously created database
>
> For example
>
> * vanilla docker postfix/dovecot/etc then link your container to the `dokku.mariadb.postfixadmin` container.
> * dokku postfix/dovecot/etc then link the db to the app via the dokku commands
>
