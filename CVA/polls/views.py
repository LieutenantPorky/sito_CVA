from django.shortcuts import render
from django.http import HttpResponse
from .models import *
from django.core.mail import send_mail, mail_admins

from django.shortcuts import render, get_object_or_404
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
        mail_admins('Nuovo messaggio sul sito - ' + sender_email, message )
        return render (request, 'polls/contatti.php', {'debug':'mandato messaggio'})

def info(request):
    return render(request, 'polls/info.php')

def istruttori(request):
    return render(request, 'polls/istruttori.php')


#detail a single post
def post(request, id):
    articles = get_object_or_404(Article, slug=id)
    return render(request, 'polls/post.php', {'article':articles})
