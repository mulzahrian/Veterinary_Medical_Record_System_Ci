<!DOCTYPE html>
<head>
    <meta chartset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    .line-title{
        border: 0;
        border-style: inset;
        border-top: 2px solid #000;
        }
    </style>
    
</head>
    <body>
<img src="assets/img/logo/siak.png"style= " position: absolute; width: 40px; height: auto;">

<table style="width: 100%;">
    <tr>
        <td align="center">
            <span style="line-height: 1.6; font-weight: bold;"> 
                PEMERINTAH KABUPATEN SIAK
                <br>Dinas Peternakan perikanan dan Kelautan

            </span>
        </td>
    </tr>
</table>
<hr class="line-title">


<table class="table">
    <tr>
                  <th>ID Peternak</label></th>
                  <th> : </th>
                  <th>        </th>
                    <td><?php echo  $detail->id_peternak ?></td>
    </tr>     


     <tr>
                  <th></label></th>
                  <th> </th>
                  <th>        </th>
                    <td></td>
    </tr>   

     <tr>
                  <th>Nama</label></th>
                  <th> : </th>
                  <th>        </th>
                    <td><?php echo  $detail->nama ?></td>
    </tr> 

    <tr>
                  <th></label></th>
                  <th> </th>
                  <th>        </th>
                    <td></td>
    </tr>   

    <tr>
                  <th>Daerah</label></th>
                  <th> : </th>
                  <th>        </th>
                    <td><?php echo  $detail->daerah ?></td>
    </tr>

    <tr>
                  <th></label></th>
                  <th> </th>
                  <th>        </th>
                    <td></td>
    </tr>   

    <tr>
                  <th>Pekerjaan</label></th>
                  <th> : </th>
                  <th>        </th>
                    <td><?php echo  $detail->pekerjaan ?></td>
    </tr>
    <tr>
                  <th></label></th>
                  <th> </th>
                  <th>        </th>
                    <td></td>
    </tr>   

    <tr>
                  <th>Alamat</label></th>
                  <th> : </th>
                  <th>        </th>
                    <td><?php echo  $detail->alamat ?></td>
    </tr>
    <tr>
                  <th></label></th>
                  <th> </th>
                  <th>        </th>
                    <td></td>
    </tr>   

    <tr>
                  <th>ID Hewan</label></th>
                  <th> : </th>
                  <th>        </th>
                    <td><?php echo  $detail->id_hewan ?></td>
    </tr>

    <tr>
                  <th></label></th>
                  <th> </th>
                  <th>        </th>
                    <td></td>
    </tr>   

    <tr>
                  <th>Jenis Hewan</label></th>
                  <th> : </th>
                  <th>        </th>
                    <td><?php echo  $detail->jenis_hewan ?></td>
    </tr>

    <tr>
                  <th></label></th>
                  <th> </th>
                  <th>        </th>
                    <td></td>
    </tr>   

    <tr>
                  <th>Jenis Kelamin</label></th>
                  <th> : </th>
                  <th>        </th>
                    <td><?php echo  $detail->jenis_kelamin ?></td>
    </tr>   

    <tr>
                  <th></label></th>
                  <th> </th>
                  <th>        </th>
                    <td></td>
    </tr>    

    <tr>
                  <th>Umur Hewan</label></th>
                  <th> : </th>
                  <th>        </th>
                    <td><?php echo  $detail->umur ?></td>
    </tr>

    <tr>
                  <th></label></th>
                  <th> </th>
                  <th>        </th>
                    <td></td>
    </tr>   

    <tr>
                  <th>Diagnosa</label></th>
                  <th> : </th>
                  <th>        </th>
                    <td><?php echo  $detail->diagnosa ?></td>
    </tr>

    <tr>
                  <th></label></th>
                  <th> </th>
                  <th>        </th>
                    <td></td>
    </tr>   

    <tr>
                  <th>Vaksin</label></th>
                  <th> : </th>
                  <th>        </th>
                    <td><?php echo  $detail->vaksin ?></td>
    </tr> 

    <tr>
                  <th></label></th>
                  <th> </th>
                  <th>        </th>
                    <td></td>
    </tr>   

    <tr>
                  <th>Tahun</label></th>
                  <th> : </th>
                  <th>        </th>
                    <td><?php echo  $detail->tahun ?></td>
    </tr>  

    
                    

                    <!--b><label>Daerah</label></b>
                    <p class="card-title"><?= $db_rekam_medis['daerah']; ?></p>

                    


                    

                    <b><label>Tanggal</label></b>
                    <p class="card-title"><?= $db_rekam_medis['tanggal']; ?></p>

                    <b><label>Tahun</label></b>
                    <p class="card-title"><?= $db_rekam_medis['tahun']; ?></p-->
                    
</table>
</body>

</html>