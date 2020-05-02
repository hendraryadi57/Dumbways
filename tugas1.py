"""
Buatlah function untuk menghitung jumlah jabat tangan yang terjadi dalam pertemuan yang dihadiri oleh beberapa orang. Jika setiap orang berjabat tangan dengan semua yang hadir dan hanya sekali berjabat tangan dengan orang yang sama!
Notice, Gunakan perulangan dan dilarang menggunakan rumus matematika
 n x (n-1)/2  atau  ½.n.(n-1) ataupun yang lainnya!
"""
count_handshake = 0
n = int(input("Ada berapa Orang : "))
for i in range(1, n, 1):
    count_handshake += i
print("Result : ", count_handshake)