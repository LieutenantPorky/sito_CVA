from django.contrib import admin

from .models import *

admin.site.register(Post)
admin.site.register(FrontPage)


class FrontPicAdmin(admin.ModelAdmin):
    fieldsets = [
        (None, {'fields':['title','image']})
    ]
    list_display = ['title']

admin.site.register(FrontPic, FrontPicAdmin)

class PicInline(admin.TabularInline):
    model = ArticleImage
    extra = 1

class ArticleAdmin(admin.ModelAdmin):
    fieldsets = [
        (None, {'fields': ['title','pub_date', 'bannerImage','body_text_1','body_text_2', 'slug' ]})
    ]

    list_display = ('title', 'pub_date')
    list_filter = ['pub_date']
    search_fields = ['title', 'body_text_1']
    inlines = [PicInline]
    prepopulated_fields = {'slug': ['title'],}

admin.site.register(Article, ArticleAdmin)
