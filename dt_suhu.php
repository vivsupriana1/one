<thead>
                            <tr>
                                <td>No</td>
                                <!-- <td>Id</td> -->
                                <td width="1000px">Tanggal</td width="1000px">
                                <td>Suhu</td>
                            </tr>
                        </thead>
                        <?php 
                            //jika tanggal dari dan tanggal ke ada maka
                            if(isset($_GET['dari']) && isset($_GET['ke'])){
                                // tampilkan data yang sesuai dengan range tanggal yang dicari 
                                $data = mysqli_query($konek, "SELECT * FROM suhu1 WHERE date BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."'");
                            }else{
                                //jika tidak ada tanggal dari dan tanggal ke maka tampilkan seluruh data
                                $data = mysqli_query($konek, "select * from suhu1");		
                            }
                            // $no digunakan sebagai penomoran 
                            $no = 1;
                            // while digunakan sebagai perulangan data 
                            while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <!-- <td><?php echo $d['id']; ?></td> -->
                            <td><?php echo $d['tanggal']; ?></td>
                            <td><?php echo $d['suhu']; ?></td>
                        </tr>
                        <?php } ?>

