from django.urls import URLPattern, path
from . import views

urlpatterns = [
    path("<str:name>",views.index,name="index")
]