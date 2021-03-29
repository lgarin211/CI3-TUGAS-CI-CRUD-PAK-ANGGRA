<html>
    <head>
        <title>Backend System</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <table class="" width="800px" height="600px" border="1px" align="center">
            <tr height="100px">
                <td>
                    <a class="btn btn-primary" href="<?php echo site_url('Welcome/DataSiswa'); ?>">Data Siswa</a>
                    <a class="btn btn-primary" href="<?php echo site_url('Welcome/Logout'); ?>">Logout</a>
                </td>
            </tr>
            <tr height="500px" class="text-center card">
                <td>
                    <?php $this->load->view($content); ?>
                </td>
            </tr>
        </table>

        
    </body>
</html> 