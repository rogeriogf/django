#!/usr/bin/scl enable python27 -- /home/CONTA/.virtualenv/bin/python
 
import os, sys
 
from flup.server.fcgi import WSGIServer
from django.core.wsgi import get_wsgi_application
 
sys.path.insert(0, "/home/Django/mysite")
os.environ['DJANGO_SETTINGS_MODULE'] = "mysite.settings"
 
WSGIServer(get_wsgi_application()).run()