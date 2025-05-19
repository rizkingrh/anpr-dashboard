<!DOCTYPE html>
<html>

<head>
    <title>Absen Dinamis</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: yellow;
        }

        .header-top {
            background-color: yellow;
        }
    </style>
</head>

<body>
    <h2>REKAP SHIFT</h2>
    <form method="POST" action="/shift">
        @csrf
        <label for="bulan">Bulan:</label><br>
        <input type="number" id="bulan" name="bulan" min="1" max="12" required><br>
        <label for="tahun">Tahun:</label><br>
        <input type="number" id="tahun" name="tahun" required><br><br>
        <input type="submit" value="Submit">
    </form>

    @isset($jumlahHari)
        <table>
            <tr>
                <th rowspan="2">Nama</th>
                <th colspan="{{ $jumlahHari }}" class="header-top">Tabel Bulan {{ $bulan }}, Tahun {{ $tahun }}</th>
            </tr>
            <tr>
                @for ($i = 1; $i <= $jumlahHari; $i++)
                    <th>{{ $i }}</th>
                @endfor
            </tr>
            @foreach ($nama as $item)
                <tr>
                    <td>{{ $item }}</td>
                    @for ($i = 1; $i <= $jumlahHari; $i++)
                        <td></td>
                    @endfor
                </tr>
            @endforeach

        </table>

        <h3>Hasil:</h3>
        <p>Jumlah hari di bulan {{ $bulan }} tahun {{ $tahun }} adalah: <strong>{{ $jumlahHari }}
                hari</strong></p>
    @endisset
</body>

</html>
