from django.shortcuts import render

from django.http import HttpResponse
from .models import *
import random


def index(request):
    context = {'frontPage' : FrontPage.objects.all(), 'images' : FrontPic.objects.all()[random.randint(0,len(FrontPic.objects.all()) - 1)]}
    return render(request, 'polls/index.php', context)

def articles(request):
    article = Article.objects.all()[random.randint(0, len(Article.objects.all()) - 1)]
    images = article.articleimage_set.all()
    context = {'article' : article, 'images' : images}

    return render(request, 'polls/article.html', context)
