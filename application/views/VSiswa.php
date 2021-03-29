<table border="1px" class="table" style="margin: 50 auto;">
    <tr>
        <td colspan="4">
            <a class="btn btn-success" href="<?php echo site_url('Welcome/VFormAddSiswa'); ?>">Add</a>
        </td>
    </tr>
    <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>No. TLP</th>
        <th>Tools</th>
    </tr>
    <?php
    if(!empty($DataSiswa))
    {
        foreach($DataSiswa as $ReadDS)
        {
    ?>

    <tr>
        <td><?php echo $ReadDS->nis; ?></td>
        <td><?php echo $ReadDS->nama; ?></td>
        <td><?php echo $ReadDS->no_telp; ?></td>
        <td>
            <a class="btn btn-success" href="<?php echo site_url('Welcome/DataSiswa/'.$ReadDS->nis.'/view') ?>">Update</a>
            <a class="btn btn-danger" href="<?php echo site_url('Welcome/DeleteDataSiswa/'.$ReadDS->nis) ?>">Delete</a>
        </td>
    </tr>

    <?php       
        }
    }
    ?>
</table>
