<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <script src="<?= BASEURL; ?>/js/bootstrap.bundle.js"></script>
    <title>Halaman <?= $data['judul'] ?> </title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .struk {
            width: 500px;
            margin: 0 auto;
            border: 1px solid #ddd;
            padding: 10px;
        }

        .header {

            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 50px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
          
            padding: 8px;
            text-align: left;
        }

        tfoot
        {
            font-weight: bold;
        }
        .footer
        {
            text-align: center;
            font-size: 18px;
            margin-top: 50px;
        }
        .kode_struk
        {
            margin: 10px;
        }
        .pegawai
        {
            margin: 10px;
        }
    </style>
</head>

<body>