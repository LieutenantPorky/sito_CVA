from django.db import models
from django import forms

class Contatti(forms.Form):
    name = forms.CharField(max_length=100)
    email = forms.EmailField()
    message = forms.CharField(widget=forms.Textarea)

class FrontPage(models.Model):
    class Meta:
        verbose_name = 'Pagina principale'
        verbose_name_plural = 'Pagina principale'

    title = models.CharField('Titolo', max_length = 100)
    body_text = models.CharField('Testo', max_length = 10000)
    def __str__(self):
        return "Modifica pagina principale"

class FrontPic(models.Model):
    class Meta:
        verbose_name = 'Foto slideshow'
        verbose_name_plural = 'Foto slideshow'

    title = models.CharField('Titolo', max_length=100)
    image = models.ImageField('Foto')
    def __str__(self):
        return "Upload foto profilo"

#Articles
class Article(models.Model):
    class Meta:
        verbose_name = 'Articolo'
        verbose_name_plural = 'Articoli'
    '''
    Classe per creare articoli generali con media
    '''
    title = models.CharField('Titolo', max_length=100)
    bannerImage = models.ImageField('Foto banner', blank=True)
    body_text_1 = models.CharField('Descrizione', max_length=10000, blank=True)
    body_text_2 = models.TextField('Testo', max_length=10000, blank=True)
    pub_date = models.DateTimeField('Data di pubblicazione', blank=True)
    slug = models.SlugField(max_length = 250, null = True, blank = True, unique=True)

    class Meta: #ordinare i post secondo la data
        ordering = ['-pub_date',]

    def __str__(self):
        return "Crea un nuovo articolo"


#img
class ArticleImage(models.Model):
    caption = models.CharField('Titolo', max_length=100, blank=True)
    image = models.ImageField('Foto')
    article = models.ForeignKey(Article, on_delete=models.CASCADE)
    def __str__(self):
        return "Foto per articolo"

class Instructor(models.Model):
    class Meta:
        verbose_name = 'Istruttore'
        verbose_name_plural = 'Istruttori'

    name = models.CharField('Nome', max_length=100)
    image = models.ImageField('Foto',null=True)
    description = models.TextField('Bio', max_length=1000)
