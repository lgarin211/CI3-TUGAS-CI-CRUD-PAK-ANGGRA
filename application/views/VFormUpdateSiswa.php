<form action="<?php echo site_url('Welcome/UpdateDataSiswa'); ?>" method="post">
<table>
    <tr>
        <td>Nama</td>
        <td>: <br></td>
        <td><input class="form-control" type="hidden" name="txt_nis" value="<?php echo $detail['nis']; ?>">
            <input class="form-control" type="text" name="txt_nama" value="<?php echo $detail['nama']; ?>">
        </td>
    </tr>
    <tr>
        <td>No. TLP</td>
        <td>: <br></td>
        <td>
            <input class="form-control" type="text" name="txt_no_tlp" value="<?php echo $detail['no_telp']; ?>">
        </td>
    </tr>
    <tr>
        <td colspan="3" align="right">
            <input class="btn btn-warning" class="btn btn-warning" type="submit" name="btn_simpan" value="Simpan">
        </td>
    </tr>
</table>
</form>