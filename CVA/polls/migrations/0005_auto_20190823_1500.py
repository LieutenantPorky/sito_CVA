# Generated by Django 2.2.4 on 2019-08-23 15:00

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('polls', '0004_auto_20190822_1625'),
    ]

    operations = [
        migrations.AlterField(
            model_name='article',
            name='slug',
            field=models.SlugField(blank=True, max_length=250, null=True, unique=True),
        ),
    ]
