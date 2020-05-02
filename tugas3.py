"""
Buatlah function untuk mencetak gambar seperti dibawah ini,
yang mempunyai sebuah parameter sebagai panjang lebar/tinggi gambar.
Parameter harus merupakan bilangan ganjil:
"""
length = int(input("Enter the side of the square  : "))

for i in range(length):
    for j in range(length):
        if( i == 2 or i == length - 3 or j == 0 or j == length - 1):
            print('*', end = ' ')
        else:
            print('=', end = ' ')
    print()