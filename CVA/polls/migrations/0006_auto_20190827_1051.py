# Generated by Django 2.2.4 on 2019-08-27 10:51

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('polls', '0005_auto_20190823_1500'),
    ]

    operations = [
        migrations.CreateModel(
            name='Istruttori',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('title', models.CharField(max_length=100, verbose_name='Nome')),
                ('image', models.ImageField(blank=True, upload_to='', verbose_name='Foto')),
                ('desc', models.TextField(blank=True, max_length=10000, verbose_name='Descrizione')),
                ('slug', models.SlugField(blank=True, max_length=250, null=True, unique=True)),
            ],
        ),
        migrations.AlterModelOptions(
            name='article',
            options={'ordering': ['-pub_date']},
        ),
    ]
