# Kubernetes Helm LEMP Chart : app: facingsf

Dependencies:
* Database is a seperate helm chart, so that different dbs can be dropped into LEMP.
  **This requires maintaining two sercets.yaml files for each chart**
* Helm [secrets plugin] (https://github.com/zendesk/helm-secrets) / Mozzilla [SOPS](https://github.com/mozilla/sops#test-with-the-dev-pgp-key)
* Helm [namespace plugin](https://github.com/thomastaylor312/helm-namespace)

## mysql Secrets
```./pgp``` key has been ```.gitignored```
   -Create the folder
   -Place you private pgp in this directory
   - This key will be used to encrypt/decrypt your password files

```./mysql/developement/.sops.yaml```
   -place your public key id in this file.



### Deploy nginx-phpfpm/dev Dev Environment Minikube

1. Test nginx-phpfpm chart
> helm template ./nginx-phpfpm/dev

2. Deploy the database first as it also deploys the secrets to be used as env vars in phpfpm.
> helm namespace secrets install -f nginx-phpfpm/dev/secrets.yaml nginx-phpfpm ./nginx-phpfpm/dev/ -n helm-lemp

3. Ensure that helm is ignoring html/images files.
./nginx-phpfpm/dev/.helmignore

4. Install nginx-phpfpm chart
> helm namespace -n helm-lemp install nginx-phpfpm ./nginx-phpfpm/dev/

4.1. Install with secrets plugin.
>  helm namespace -n helm-lemp secrets upgrade -f nginx-phpfpm/dev/secrets.yaml nginx-phpfpm ./nginx-phpfpm/dev

5. Update deployment/releases
> helm namespace -n helm-lemp upgrade nginx-phpfpm ./nginx-phpfpm/dev/


[ Notes ]
A. ConfigMap uses sha256sum to determine if changes have been made to configMap and triggers deply if it has.
```
apiVersion: apps/v1
kind: Deployment
metadata:
  name: {{ template "fullname" . }}-nginx
  annotations:
    checksum/config: {{ include (print $.Template.BasePath "/configMap.yaml") . | sha256sum }}
```

B. [nginx] ./nginx-phpfpm/dev/files/public/index.html
This file is a place holder for defaulting nginx.  If it is not there and adjuments are made the container will continue to fail starting.  If this file is here at least the container will start and troubleshooting can begin. 

C. [nginx] The following files are provided to test php.
 getcreds_mysql.php : gets secrets and prints them to terminal
 getenv_var.php : gets a single env var and prints it to terminal
 getphp_connection.php : performs a connection to mysqldb, queries the db, and returns the values to render in browser.

** Test in the following fashion: **
* From nginx pod install curl.
``` apk --no-cache add curl vim```
* Test from nginx container. 
``` curl http://localhost:8080/getcreds_mysql.php ``` 

D. [php] ./Helm-lemp/nginx-phpfpm/dev/file/www.conf.example is the base config for phpfpm.  It is not used at all in the helm chart but is left here for referance.  Update any values from this file to z-overrides.conf to modify the behaviour of phpfpm.


[ TO DO ]
* [nginx & phpfpm] get base64enc working for templates/secrets.yaml

* [nginx] index.php and DisplayPhotoGallery01.html.php are using the service name to query sql pod in mysqli_connect.  This service name need to be dynamic in the sense that it should write an env variable to phpfpm when the service is create.
Example:
```$connection = mysqli_connect("nginx-phpfpm02-mysql"```

* [nginx] is using a secrets volume.  Pod should not need this since the request is now reading the env vars from the phpfpm pod.

* [phpfpm] logging into mysql by updating to 'Please use caching_sha2_password instead'.
Warning: [Warning] [MY-013360] [Server] Plugin sha256_password reported: ''sha256_password' is deprecated and will be removed in a future release. Please use caching_sha2_password instead'

* Push logs from /opt/bitnami/php/logs to stdout using z-overrides configMap

* Suppressing the message with php
 // Suppress mysql8.0 MY-013360
 error_reporting(E_ALL ^ E_DEPRECATED);


* [nginx] configMap {{ template "fullname" . }}-conf contains two lines that read from .Values therefore the configMap must contain the config.  Otherwise, when using .Files.Get to pull the config the .Values are not honored.

For Example:

[ inline version ] 
```
apiVersion: v1
kind: ConfigMap
...
...
...
data:
  nginx.conf: |-
    server {
      listen 0.0.0.0:{{ .Values.nginxService.internalPort }};
...
...
...```

[ config file version ] 
```
apiVersion: v1
kind: ConfigMap
...
...
...
data:
  index.php: |-
{{ .Files.Get "files/public/index.php" | indent 4 }}
...
...
...```

