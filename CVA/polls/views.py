from django.shortcuts import render
from django.http import HttpResponse
from .models import *
import random
from django.shortcuts import render
from django.views.generic import View


def index(request):
    context = {'frontPage' : FrontPage.objects.all(), 'images' : list(FrontPic.objects.all())}
    return render(request, 'polls/index.php', context)

def articles(request):
    articles = Article.objects.all()
    context = {'article' : article,}

    return render(request, 'polls/blog.php', context)

def contatti(request):
    return render (request, 'polls/contatti.php')

def info(request):
    return render(request, 'polls/info.php')

def contatti(request):
    return render(request, 'polls/contatti.php')

def istruttori(request):
    return render(request, 'polls/istruttori.php')

def conttti(request):
    if request.method == 'POST':
        form = Contatti(request.POST)
        if form.is_valid():
            # send email code goes here
            return HttpResponse('Thanks for contacting us!')
    else:
        form = Contatti()

    return render(request, 'polls/contatti.php', {'form': form})
