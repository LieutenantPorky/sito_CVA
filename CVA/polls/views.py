from django.shortcuts import render

from django.http import HttpResponse
from .models import Post, FrontPage


def index(request):
    context = {'frontPage' : FrontPage.objects.all()}
    return render(request, 'polls/index.html', context)

def detail(request, post_id):
    return HttpResponse("You're looking at post %s." % post_id)
