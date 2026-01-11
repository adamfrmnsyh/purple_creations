<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Product</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#FFF5FA] min-h-screen flex items-center justify-center py-10">

    <div class="max-w-5xl w-full grid grid-cols-1 md:grid-cols-2 gap-8">

        <!-- LEFT: PRODUCT SUMMARY -->
        <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col">
            <h2 class="text-xl font-bold text-[#E26EE5] mb-4">Product Summary</h2>

            <img src="{{ asset('storage/' . $produk->gambar) }}"
                class="w-full aspect-square object-cover rounded-xl mb-4">

            <h3 class="text-lg font-semibold text-gray-900">
                {{ $produk->nama_produk }}
            </h3>

            <p class="text-sm text-gray-500">
                {{ $produk->jenis }}
            </p>

            <div class="text-2xl font-bold text-gray-900 mt-auto">
                Rp {{ number_format($produk->harga, 0, ',', '.') }}
            </div>
        </div>

        <!-- RIGHT: ORDER FORM -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h2 class="text-xl font-bold text-[#E26EE5] mb-6">Customer Details</h2>

            <form action="{{ route('checkout') }}" method="POST" class="space-y-4">
                @csrf

                <!-- 🔴 WAJIB ADA (INI YANG KEMARIN HILANG) -->
                <input type="hidden" name="nama_produk" value="{{ $produk->nama_produk }}">
                <input type="hidden" name="jenis" value="{{ $produk->jenis }}">
                <input type="hidden" name="harga" value="{{ $produk->harga }}">
                <input type="hidden" name="id_katalog" value="{{ $produk->id_katalog }}">
                <input type="hidden" name="gambar" value="{{ $produk->gambar }}">

                <div>
                    <label class="text-sm font-semibold text-gray-600">Customer Name</label>
                    <input type="text" name="nama" required
                        class="w-full mt-1 border rounded-lg px-3 py-2">
                </div>

                <div>
                    <label class="text-sm font-semibold text-gray-600">Email</label>
                    <input type="email" name="email" required
                        class="w-full mt-1 border rounded-lg px-3 py-2">
                </div>

                <div>
                    <label class="text-sm font-semibold text-gray-600">Phone Number</label>
                    <input type="text" name="no_telp" required
                        class="w-full mt-1 border rounded-lg px-3 py-2">
                </div>

                <div>
                    <label class="text-sm font-semibold text-gray-600">Address</label>
                    <textarea name="alamat" rows="3" required
                        class="w-full mt-1 border rounded-lg px-3 py-2"></textarea>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-sm font-semibold text-gray-600">Delivery Date</label>
                        <input type="date" name="tgl_kirim" required
                            class="w-full mt-1 border rounded-lg px-3 py-2">
                    </div>

                    <div>
                        <label class="text-sm font-semibold text-gray-600">Purchase Type</label>
                        <select name="tipe_pembelian" required
                            class="w-full mt-1 border rounded-lg px-3 py-2">
                            <option value="">Select</option>
                            <option value="Antar">Delivery</option>
                            <option value="Ambil Sendiri">Pick Up</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="text-sm font-semibold text-gray-600">Note</label>
                    <textarea name="catatan" rows="2"
                        class="w-full mt-1 border rounded-lg px-3 py-2"></textarea>
                </div>

                <div class="flex justify-between items-center pt-4">
                    <a href="{{ route('katalog.index') }}"
                        class="text-sm text-gray-500 hover:text-[#E26EE5]">
                        ← Back
                    </a>

                    <button type="submit"
                        class="bg-[#E26EE5] hover:bg-pink-600 text-white px-6 py-2 rounded-lg font-semibold">
                        Pay Now
                    </button>
                </div>

            </form>
        </div>

    </div>



    <script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>

    @if (session('snapToken'))
    <script>
        window.onload = function() {
            snap.pay("{{ session('snapToken') }}", {
                onSuccess: function(result) {
                    alert('Pembayaran berhasil!');
                    console.log(result);
                    // window.location.href = "/payment/success";
                },
                onPending: function(result) {
                    alert('Menunggu pembayaran');
                    console.log(result);
                },
                onError: function(result) {
                    alert('Pembayaran gagal');
                    console.log(result);
                },
                onClose: function() {
                    alert('Popup ditutup');
                }
            });
        };
    </script>
    @endif


</body>

</html>