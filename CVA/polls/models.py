from django.db import models


class Post(models.Model):
    title = models.CharField('Titolo', max_length = 100)
    body_text = models.CharField('Testo', max_length=10000)
    pub_date = models.DateTimeField('Data di pubblicazione')

class FrontPage(models.Model):
    title = models.CharField('Titolo', max_length = 100)
    body_text = models.CharField('Testo', max_length = 10000)

    def __str__(self):
        return "Pagina principale"
