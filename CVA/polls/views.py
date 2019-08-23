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
    context = {'articles' : articles}

    return render(request, 'polls/blog.php', context)

def contatti(request):
    try:
        sender_email = request.POST['email']
        message = request.POST['body']
    except (KeyError):
        return render (request, 'polls/contatti.php', {'debug':'mandato messaggio'})

    else:
        print(sender_email)
        return render (request, 'polls/contatti.php', {'debug':'mandato messaggio'})

def info(request):
    return render(request, 'polls/info.php')

def istruttori(request):
    return render(request, 'polls/istruttori.php')


#detail a single post
def post(request, id):
    return None
