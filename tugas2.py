"""
Sebagai seorang programmer yang handal Zilfanong ditugaskan untuk
membuat function untuk menghitung total elemen pada array, dengan panjang array 5,
hitung 4 isi array angka tersebut kecuali index array pada index yang sedang kamu cek perhitungannya,
kemudian cari Angka total terkecil dan terbesar
"""
def sum_1(arr):
    result = 0
    for x in arr:
        result += x
    return result

# main function
if __name__ == "__main__":
    arr = [4,9,10,13,21]
    jumlah1 = int(arr[1]) + int(arr[2]) + int(arr[3]) + int(arr[4])
    jumlah2 = int(arr[0]) + int(arr[2]) + int(arr[3]) + int(arr[4])
    jumlah3 = int(arr[0]) + int(arr[1]) + int(arr[3]) + int(arr[4])
    jumlah4 = int(arr[0]) + int(arr[1]) + int(arr[2]) + int(arr[4])
    jumlah5 = int(arr[0]) + int(arr[1]) + int(arr[2]) + int(arr[3])
    print ('Input : {}'.format(arr))
    print('Angka {} : {} + {} + {} + {} = {}'.format(arr[0],arr[1],arr[2],arr[3],arr[4],jumlah1))
    print('Angka {} : {} + {} + {} + {} = {}'.format(arr[1], arr[0], arr[2], arr[3], arr[4], jumlah2))
    print('Angka {} : {} + {} + {} + {} = {}'.format(arr[2], arr[0], arr[1], arr[3], arr[4], jumlah3))
    print('Angka {} : {} + {} + {} + {} = {}'.format(arr[3], arr[0], arr[1], arr[2], arr[4], jumlah4))
    print('Angka {} : {} + {} + {} + {} = {}'.format(arr[4], arr[0], arr[1], arr[2], arr[3], jumlah5))



    number = [jumlah1, jumlah2, jumlah3, jumlah4, jumlah5]
    largest_number = max(number);
    smallest_number = min(number);

    print("Angka Terbesar:", largest_number)
    print("Angka Terkecil:", smallest_number)
