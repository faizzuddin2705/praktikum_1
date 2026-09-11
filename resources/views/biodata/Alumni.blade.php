<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <table align="center" border="1" width="60%">

        <tr>
            <td colspan="6" align="center">
                <font face="courier">
                    <b>RIWAYAT PENDIDIKAN</b>
                </font>
            </td>
        </tr>

        <tr align="center">
            <th>No</th>
            <th>Jenjang</th>
            <th>Nama Sekolah</th>
            <th>Jurusan</th>
            <th>Tahun Masuk</th>
            <th>Tahun Lulus</th>
        </tr>

        <tr align="center">
            <td>1</td>
            <td>{{ $jnjng }}</td>
            <td>{{ $jng_sekolah }}</td>
            <td>{{ $jrsnsma }}</td>
            <td>{{ $masuk_sma }}</td>
            <td>{{ $lulus_sma }}</td>
        </tr>

        <tr align="center">
            <td>2</td>
            <td>{{ $jnjng2 }}</td>
            <td>{{ $jng_pt }}</td>
            <td>{{ $jrsnpt }}</td>
            <td>{{ $masuk_pt }}</td>
            <td>-</td>
        </tr>
    </table>
    <form action="/biodata" method="GET">
        <input type="submit" value="Lihat Biodata Diri">
    </form>
</div>
