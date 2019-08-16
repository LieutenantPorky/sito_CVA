from django.db import models


class Post(models.Model):
    title = models.CharField('Titolo', max_length = 100)
    body_text = models.TextField('Testo', max_length=10000)
    pub_date = models.DateTimeField('Data di pubblicazione')
    image = models.ImageField('Foto')
    slug = models.SlugField(max_length = 250, null = True, blank = True)

class FrontPage(models.Model):
    title = models.CharField('Titolo', max_length = 100)
    body_text = models.CharField('Testo', max_length = 10000)
    def __str__(self):
        return "Modifica pagina principale"

class FrontPic(models.Model):
    title = models.CharField('Titolo', max_length=100)
    image = models.ImageField('Foto')
    def __str__(self):
        return "Upload foto profilo"


class Article(models.Model):
    '''
    Classe per creare articoli generali con media
    '''
    title = models.CharField('Titolo', max_length=100)
    bannerImage = models.ImageField('Foto banner', blank=True)
    body_text_1 = models.CharField('Descrizione', max_length=10000, blank=True)
    body_text_2 = models.TextField('Testo', max_length=10000, blank=True)
    pub_date = models.DateTimeField('Data di pubblicazione', blank=True)
    slug = models.SlugField(max_length = 250, null = True, blank = True)

    def __str__(self):
        return "Crea un nuovo articolo"

class ArticleImage(models.Model):
    caption = models.CharField('Titolo', max_length=100, blank=True)
    image = models.ImageField('Foto')
    article = models.ForeignKey(Article, on_delete=models.CASCADE)
    def __str__(self):
        return "Foto per articolo"
