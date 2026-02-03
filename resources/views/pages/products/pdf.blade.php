<!DOCTYPE html>
<html>

<head>
   <title>Daftar Produk</title>
   <style>
      body {
         font-family: sans-serif;
         font-size: 12px;
      }

      table {
         width: 100%;
         border-collapse: collapse;
         margin-top: 20px;
      }

      th,
      td {
         border: 1px solid #ddd;
         padding: 8px;
         text-align: left;
      }

      th {
         background-color: #7367F0;
         color: white;
      }

      .header {
         text-align: center;
         margin-bottom: 30px;
      }

      .footer {
         position: fixed;
         bottom: 0;
         width: 100%;
         text-align: right;
         font-size: 10px;
         color: #777;
      }
   </style>
</head>

<body>
   <div class="header">
      <h2>DAFTAR PRODUK</h2>
      <p>Dicetak pada: {{ now()->format('d F Y H:i') }}</p>
   </div>

   <table>
      <thead>
         <tr>
            <th width="5%">No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th width="10%">Stok</th>
            <th width="15%">Status</th>
            <th>Tanggal Input</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($products as $index => $product)
            <tr>
               <td>{{ $index + 1 }}</td>
               <td>
                  <strong>{{ $product->name }}</strong><br>
                  <small>{{ $product->description }}</small>
               </td>
               <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
               <td>{{ $product->quantity }}</td>
               <td>{{ $product->is_active ? 'Aktif' : 'Non-Aktif' }}</td>
               <td>{{ $product->created_at->format('d/m/Y') }}</td>
            </tr>
         @endforeach
      </tbody>
   </table>

   <div class="footer">
      Halaman 1
   </div>
</body>

</html>
