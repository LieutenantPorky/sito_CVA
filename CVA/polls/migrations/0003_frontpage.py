# Generated by Django 2.2.4 on 2019-08-14 12:05

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('polls', '0002_auto_20190814_1154'),
    ]

    operations = [
        migrations.CreateModel(
            name='FrontPage',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('title', models.CharField(max_length=100, verbose_name='Titolo')),
                ('body_text', models.CharField(max_length=10000, verbose_name='Testo')),
            ],
        ),
    ]
