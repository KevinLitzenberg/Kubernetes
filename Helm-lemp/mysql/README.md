# mysql container

Developed for use with LEMP stack.

Dependencies:
* [zendesk/helm-secrets](https://github.com/zendesk/helm-secrets)
* [mozilla/sopes](https://github.com/mozilla/sops)

## mysql initialize the database upon creation.
./mysql/[environment]/initdb/file.mysql (currently wallfaces3.sql)


## mysql Secrets
```./pgp``` key has been ```.gitignored```
   -Create the folder 
   -Place you private pgp in this directory
   - This key will be used to encrypt/decrypt your password files

```./mysql/developement/.sops.yaml``` 
   -place your public key id in this file. 


## mysql Development features
Includes two persistenVolumes.
* mysql db writes to persistentVolumeClaim writes to /var/lib/mysql
* mysql initalizes a db on start with persistentVolumeInitdbName in /docker-entrypoint-initdb.d


[TO DO DEV]
* open service port 3306 in manifest files.

[TO DO PROD]
* Create persistent elastic volumes in AWS
* Create a path to database.sql so db can initalize upon creation.
* Create encyption keys for secrets.
* Lockdown mysql version dev uses latest.
