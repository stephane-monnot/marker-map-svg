# Marker for Google Map with number inside
http://[BASEURL]/map_pin-[BGCOLOR]-[FONTCOLOR]-[BORDERCOLOR]-[TEXT]-[FONTSIZE].svg

Examples of use :

https://marker.nanoka.fr/map_pin-CC0000-FFF-333-5-40.svg

https://marker.nanoka.fr/map_pin-CC0000-FFF-333-1-40.svg

https://marker.nanoka.fr/map_pin-64C81E-FFF-000-5-40.svg

https://marker.nanoka.fr/map_pin-FFF-000-000-5-40.svg

## For Apache : 
Need ```AllowOverride All``` in the vhost config file.

## For Nginx : 
Add a rewrite rule in your vhost config file:
```
rewrite map_pin-([\w]+)-([\w]+)-([\w]+)-(.+)-([0-9]+).svg$ /index.php?type=marker&backgroundColor=$1&fontColor=$2&borderColor=$3&text=$4&fontSize=$5 break;
```

# Cluster for Google Map
http://[BASEURL]/map_cluster-[BGCOLOR]-[DIAMETER].svg

Examples of use :

https://marker.nanoka.fr/map_cluster-BECE00-60.svg

https://marker.nanoka.fr/map_cluster-FF0000-120.svg

## For Apache : 
Need ```AllowOverride All``` in the vhost config file.

## For Nginx : 
Add a rewrite rule in your vhost config file:
```
rewrite map_cluster-([\w]+)-([0-9]+).svg$ /index.php?type=cluster&backgroundColor=$1&size=$2 break;
```
