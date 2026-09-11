<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->

    <body>
        <table align=center border=1 height=40% width=30.5%>
            <tr>
                <td colspan="3" align="center">
                    <font face="courier"><b>BIODATA</b></font>
                </td>
            </tr>
            <tr>
                <td>Nama: </td>
                <td>{{ $nyamah }}</td>
                <td rowspan="7"><img src="{{ asset($gambar) }}" width="150" height="200"></td>
            </tr>
            <tr>
                <td>Tempat Tanggal Lahir: </td>
                <td>{{ $lahir }}</td>
            </tr>
            <tr>
                <td>NIM: </td>
                <td>{{ $NIM }}</td>
            </tr>
            <tr>
                <td>Program Studi: </td>
                <td>{{ $kelas }}</td>
            </tr>
            <tr>
                <td>Jurusan: </td>
                <td>{{ $jrsn }}</td>
            </tr>
            <tr>
                <td>Alamat: </td>
                <td>{{ $roma }}</td>
            </tr>
            <tr>
                <td>No. Telp: </td>
                <td>{{ $hp }}</td>
            </tr>
        </table>
        <form action="/biodata_ortu" method="GET">
            <input type="submit" value="Lihat Biodata Orang Tua">
        </form>
<br>
        <form action="/Alumni" method="GET">
            <input type="submit" value="Lihat Biodata Alumni">
        </form>
    </body>

</div>
