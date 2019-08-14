# Generated by Django 2.2.4 on 2019-08-14 11:54

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('polls', '0001_initial'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='post',
            name='question_text',
        ),
        migrations.AddField(
            model_name='post',
            name='body_text',
            field=models.CharField(default='test2', max_length=10000, verbose_name='Testo'),
            preserve_default=False,
        ),
        migrations.AddField(
            model_name='post',
            name='title',
            field=models.CharField(default='testtit', max_length=100, verbose_name='Titolo'),
            preserve_default=False,
        ),
        migrations.AlterField(
            model_name='post',
            name='pub_date',
            field=models.DateTimeField(verbose_name='Data di pubblicazione'),
        ),
    ]
