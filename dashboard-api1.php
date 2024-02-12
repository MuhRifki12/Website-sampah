<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../datatables/css/jquery.dataTables.css">
    <style>
        label{
        font-family: Montserrat;    
        font-size: 18px;
        display: block;
        color: #262626;
        }
    </style>
</head>
<body>
<h2 style="font-size: 30px; color: #262626;">Data Sampah Update Otomatis</h2>
    <br>
<table id="" class="display" cellspacing="0" width="100%" border="2" >
        <thead>
        <tr>
            <!-- <th>No</th> -->
            <th>Waktu</th>
            <th>Organik</th>
            <th>Non Organik</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $no = 0;
            $query = mysqli_query($conn, "SELECT * FROM api ORDER BY no DESC");
            while($row = mysqli_fetch_assoc($query)){$no++;
        ?>
        <tr align="center">
            <!-- <td><?php echo "$no" ?></td> -->
            <td><?php echo $row['waktu'] ?> WIB</td>
            <td><?php echo $row['organik'] ?> KG</td>
            <td><?php echo $row['nonorganik'] ?> KG</td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
    
    <br>
<table id="example" class="display" cellspacing="0" width="100%" border="0" >
        <thead>
        <tr>
            <th>No</th>
            <th>Waktu</th>
            <th>Organik</th>
            <th>Non Organik</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>No</th>
            <th>Waktu</th>
            <th>Organik</th>
            <th>Non Organik</th>
        </tr>   
        </tfoot>
        <tbody>
        <?php
            $no = 0;
            $query = mysqli_query($conn, "SELECT * FROM sampah_masuk ORDER BY no DESC");
            while($row = mysqli_fetch_assoc($query)){$no++;
        ?>
        <tr align="center">
            <td><?php echo "$no" ?></td>
            <td><?php echo $row['waktu'] ?> WIB</td>
            <td><?php echo $row['organik'] ?> KG</td>
            <td><?php echo $row['nonorganik'] ?> KG</td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
    <br>
    <br>

    <a target="_blank" href="admin.php?page=update">    
    <button><i class="fa fa-plus" aria-hidden="true"></i>Tambah</button>
    </a>

    <a target="_blank" href="../system/function/excel-sampah-dashboard.php">
    <button><i class="fa fa-print" aria-hidden="true"></i>Excel</button>
    </a>

    <a target="_blank" href="../system/function/print-sampah.php">
    <button><i class="fa fa-print" aria-hidden="true"></i>Cetak</button>
    </a>

    <script type="text/javascript" src="../datatables/js/jquery.min.js"></script>
    <script type="text/javascript" src="../datatables/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
           $('#example').DataTable();
        } );
    </script>
    </body>
</html>