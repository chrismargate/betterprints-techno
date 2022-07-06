from django.urls import URLPattern, path
from . import views

urlpatterns = [
    path("<int:id>",views.index,name="index"),
    path("",views.home,name="home")
]