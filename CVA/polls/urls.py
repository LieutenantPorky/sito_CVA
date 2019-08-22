from django.urls import path
from django.conf.urls.static import static
from django.conf import settings

from . import views

urlpatterns = [

    path('', views.index, name='index'),
    path('blog', views.articles, name='article'),
    path('info', views.info, name='info'),
    path('contatti',views.contatti, name='contatti'),
    path('istruttori', views.istruttori, name='istruttori')
] + static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)
