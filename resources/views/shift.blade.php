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
    <form action="/shift" method="GET">
        <label for="bulan">Bulan:</label><br>
        <input type="number" id="bulan" name="bulan" min="1" max="12" value="{{ $bulan }}"
            required><br>
        <label for="tahun">Tahun:</label><br>
        <input type="number" id="tahun" name="tahun" value="{{ $tahun }}" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <table>
        <tr>
            <th rowspan="2">Nama</th>
            <th colspan="{{ $tglahir }}" class="header-top">Tabel Bulan {{ $bulan }}, Tahun
                {{ $tahun }}</th>
        </tr>
        <tr>
            @for ($i = 1; $i <= $tglahir; $i++)
                <th>{{ $i }}</th>
            @endfor
        </tr>
        @foreach ($nama as $item)
            <tr>
                <td>{{ $item }}</td>
                @for ($i = 1; $i <= $tglahir; $i++)
                    <td></td>
                @endfor
            </tr>
        @endforeach

    </table>

    <h3>Hasil:</h3>
    <p>Jumlah hari di bulan {{ $bulan }} tahun {{ $tahun }} adalah: <strong>{{ $tglahir }}
            hari</strong></p>

</body>
<script>
    function cari_shift() {
        var bulan = document.getElementById("bulan").value;
        var tahun = document.getElementById("tahun").value;

        // Redirect to the desired URL with the selected month and year
        location.assign("{{ url('shift') }}?bulan=" + bulan + "&tahun=" + tahun);
    }
</script>

</html>
