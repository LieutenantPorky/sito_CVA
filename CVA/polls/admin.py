from django.contrib import admin

from .models import Post, FrontPage

admin.site.register(Post)
admin.site.register(FrontPage)
