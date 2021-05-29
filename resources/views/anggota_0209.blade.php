<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>
    1461900133
  </title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}" />
</head>
<body>

  <div class="bg-white rounded-lg shadow-lg py-6">
    <div class="block overflow-x-auto mx-6">
      <h1>Select</h1>
      <table class="w-full text-left rounded-lg">
        <thead>
          <tr class="text-gray-800 border border-b-0">
            <th class="px-4 py-3">#</th>
            <th class="px-4 py-3">Name</th>
            <th class="px-4 py-3">Alamat</th>
            <th class="px-4 py-3">Jenis Kelamin</th>
            <th class="px-4 py-3">Telepon</th>
            <th class="px-4 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($anggota as $member)
          <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
            <td class="px-4 py-4">{{ $member->anggota_id }}</td>
            <td class="px-4 py-4">{{ $member->anggota_nama }}</td>
            <td class="px-4 py-4">{{ $member->anggota_alamat }}</td>
            <td class="px-4 py-4">{{ $member->anggota_jk }}</td>
            <td class="px-4 py-4">{{ $member->anggota_telp }}</td>
            <td class="text-center py-4">
              <a href="#"><span class="fill-current text-green-500 material-icons">Edit</span></a> !
              <a href="#"><span class="fill-current text-red-500 material-icons">Hapus</span></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <br>
      <h1>Select Like "Ade"</h1>
      <table class="w-full text-left rounded-lg">
        <thead>
          <tr class="text-gray-800 border border-b-0">
            <th class="px-4 py-3">#</th>
            <th class="px-4 py-3">Name</th>
            <th class="px-4 py-3">Alamat</th>
            <th class="px-4 py-3">Jenis Kelamin</th>
            <th class="px-4 py-3">Telepon</th>
            <th class="px-4 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($like as $like)
          <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
            <td class="px-4 py-4">{{ $like->anggota_id }}</td>
            <td class="px-4 py-4">{{ $like->anggota_nama }}</td>
            <td class="px-4 py-4">{{ $like->anggota_alamat }}</td>
            <td class="px-4 py-4">{{ $like->anggota_jk }}</td>
            <td class="px-4 py-4">{{ $like->anggota_telp }}</td>
            <td class="text-center py-4">
              <a href="#"><span class="fill-current text-green-500 material-icons">Edit</span></a> !
              <a href="#"><span class="fill-current text-red-500 material-icons">Hapus</span></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <br>
      <h1>Select Join Buku dengan Kategori</h1>
      <table class="w-full text-left rounded-lg">
        <thead>
          <tr class="text-gray-800 border border-b-0">
           <th class="px-4 py-3">#</th>
            <th class="px-4 py-3">Judul Buku</th>
            <th class="px-4 py-3">Kategori</th>
            <th class="px-4 py-3">Deskripsi</th>
            <th class="px-4 py-3">Jumlah</th>
            <th class="px-4 py-3">Cover</th>
            <th class="px-4 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($book as $buku)
          <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
            <td class="px-4 py-4">{{ $buku->buku_id }}</td>
            <td class="px-4 py-4">{{ $buku->buku_judul }}</td>
            <td class="px-4 py-4">{{ $buku->kategori_nama }}</td>
            <td class="px-4 py-4">{{ $buku->buku_deskripsi }}</td>
            <td class="px-4 py-4">{{ $buku->buku_jumlah }}</td>
            <td class="px-4 py-4">{{ $buku->buku_cover }}</td>
            <td class="text-center py-4">
              <a href="#"><span class="fill-current text-green-500 material-icons">Edit</span></a> !
              <a href="#"><span class="fill-current text-red-500 material-icons">Hapus</span></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <br>
      <h1>Select Join Buku dengan like judul buku HTML&CSS</h1>
      <table class="w-full text-left rounded-lg">
        <thead>
          <tr class="text-gray-800 border border-b-0">
           <th class="px-4 py-3">#</th>
            <th class="px-4 py-3">Judul Buku</th>
            <th class="px-4 py-3">Nama anggota</th>
            <th class="px-4 py-3">Tgl Pinjam</th>
            <th class="px-4 py-3">Tgl jatuh tempo</th>
            <th class="px-4 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($joinlike as $pinjam)
          <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
            <td class="px-4 py-4">{{ $pinjam->pinjam_id }}</td>
            <td class="px-4 py-4">{{ $pinjam->buku_judul }}</td>
            <td class="px-4 py-4">{{ $pinjam->anggota_nama }}</td>
            <td class="px-4 py-4">{{ $pinjam->tgl_pinjam }}</td>
            <td class="px-4 py-4">{{ $pinjam->tgl_jatuh_tempo }}</td>
            <td class="text-center py-4">
              <a href="#"><span class="fill-current text-green-500 material-icons">Edit</span></a> !
              <a href="#"><span class="fill-current text-red-500 material-icons">Hapus</span></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>

    </div>
  </div>
</body>
</html>