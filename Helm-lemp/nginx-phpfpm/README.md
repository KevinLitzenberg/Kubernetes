# Kubernetes Helm LEMP Chart : app: facingsf

###Deploy nginx-phpfpm/dev Dev Environment Minikube

1. Test nginx-phpfpm chart
> helm template ./nginx-phpfpm/dev

2. Ensure that helm is ignoring html/images files.
./nginx-phpfpm/dev/.helmignore

3. Install nginx-phpfpm chart
> helm namespace -n helm-lemp install nginx-phpfpm ./nginx-phpfpm/dev/






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

B. ./nginx-phpfpm/dev/files/public/index.html
This file is a place holder for defaulting nginx.  If it is not there and adjuments are made the container will continue to fail starting.  If this file is here at least the container will start and troubleshooting can begin. 




[ TO DO ]
* configMap {{ template "fullname" . }}-conf contains two lines that read from .Values therefore the configMap must contain the config.  Otherwise, when using .Files.Get to pull the config the .Values are not honored.

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

