from django.contrib import admin

from .models import *

admin.site.register(Post)
admin.site.register(FrontPage)
admin.site.register(FrontPic)

class PicInline(admin.TabularInline):
    model = ArticleImage
    extra = 1

class ArticleAdmin(admin.ModelAdmin):
    fieldsets = [
        (None, {'fields': ['title','pub_date', 'bannerImage','body_text_1','body_text_2']})
    ]

    inlines = [PicInline]

admin.site.register(Article, ArticleAdmin)
