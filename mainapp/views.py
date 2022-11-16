from django.shortcuts import render
from django.http import HttpRequest

# Create your views here.
def home(request):
    return render(request, 'index.html')

def inversion(request):
    return render(request, "inversion.html")

def contactanos(request):
    return render(request,'contactanos.html')

def renta(request):
    return render(request, 'renta.html')

def venta(request):
    return render(request, 'venta.html')

def nosotros(request):
    return render(request, 'nosotros.html')