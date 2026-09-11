<!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
<html>

<head>
    <title>tugas table biodata</title>
</head>

<body>
    <table align=center border=1 height=20% width=28.5%>
        <tr>
            <td colspan="3" align="center">
                <font face="courier"><b>BIODATA AYAH</b></font>
            </td>
        </tr>
        <tr>
            <td>Nama: </td>
            <td>{{ $nyamah_bapak }}</td>
        </tr>
        <tr>
            <td>Tempat Tanggal Lahir: </td>
            <td>{{ $lahir }}</td>
        </tr>
        <tr>
            <td>Pekerjaan: </td>
            <td>{{ $pekerjaan }}</td>
        </tr>
        <tr>
            <td>Alamat: </td>
            <td>{{ $alamat }}</td>
        </tr>
        <tr>
            <td>No. Telp: </td>
            <td>{{ $no_telp }}</td>
        </tr>
    </table>
</body>

</html>
</div>
</div>

<div>
     <br><br>
        <html>

        <head>
            <title>tugas table biodata</title>
        </head>

        <body>
            <table align=center border=1 height=20% width=28.5%>
                <tr>
                    <td colspan="3" align="center">
                        <font face="courier"><b>BIODATA IBU</b></font>
                    </td>
                </tr>
                <tr>
                    <td>Nama: </td>
                    <td>{{ $nyamah_ibu }}</td>
                </tr>
                <tr>
                    <td>Tempat Tanggal Lahir: </td>
                    <td>{{ $lahir_ibu }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan: </td>
                    <td>{{ $pekerjaan_ibu }}</td>
                </tr>
                <tr>
                    <td>Alamat: </td>
                    <td>{{ $alamat_ibu }}</td>
                </tr>
                <tr>
                    <td>No. Telp: </td>
                    <td>{{ $no_telp_ibu }}</td>
                </tr>
            </table>
            <form action="/biodata" method="GET">
                <input type="submit" value="Lihat Biodata Diri">
            </form>
        </body>

        </html>
