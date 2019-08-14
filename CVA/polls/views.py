from django.shortcuts import render

from django.http import HttpResponse
from .models import *
import random


def index(request):
    context = {'frontPage' : FrontPage.objects.all(), 'images' : FrontPic.objects.all()[random.randint(0,len(FrontPic.objects.all()) - 1)]}
    return render(request, 'polls/index.html', context)

def detail(request, post_id):
    return HttpResponse("You're looking at post %s." % post_id)
