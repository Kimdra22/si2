<html>
<head>
    <title>Identitas Mahasiswa</title>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="form.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body>
<div class="font" id="wrapper">
            <div id="konten">
            <center>
                <div class="spasi">
                    <form id="myform" action="simpan.php" method="POST">

                    <div class="form-group">
				        <label class="letak" for="nama">Nama</label>
				        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required>
                    </div>
                    
                    <div class="form-group">
				        <label class="letak" for="nim">NIM</label>
				        <input type="number" class="form-control" name="nim" placeholder="Input NIM" required>
			        </div>

			
			        <div class="form-group">
				        <label class="letak" for="notlp">No Telepon </label>
				        <input type="number" class="form-control" name="notlp" placeholder="Input No Telpon Aktif" required>
			        </div>
			
			        <div class="form-group">
				        <label class="letak" for="tgl">tanggal Lahir</label>
				        <input type="number" class="form-control" name="tgl" placeholder="Input Tanggal Lahir" required>
                    </div>
			
			        <div class="form-group">
				        <label class="letak" for="alamat">Alamat</label>
				        <input type="text" class="form-control" name="alamat" placeholder="Input Alamat" required>
                    </div>
                    
                    <div class="input-group">
                        <button type="submit" name="submit" class="form-control">Submit</button>
                    </div>
                    
                </form>
            </center>
                    
                </div>
            </div>
            <center>
            <div class="font" id="content">
                <br>
                <h1><b>LIST Mahasiswa</b></h1>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">No Telpon</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col"><center>Action</center></th>
                        </tr>
                    </thead>
                <tbody id="tabel">

                </tbody>
            </table>


                <br>


            </div>
            </center>
            <br>
            <center>
            <div id="footer">
                <div class="letakft">
                    Copyright Kimdra<br>
                    2018
                </div>
            </div>
            </center>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        loadData();

        $('form').on('submit',function(e){
            e.preventDefault();
            $.ajax({
                type:$(this).attr('method'),
                url:$(this).attr('action'),
                data:$(this).serialize(),
                success:function(data){
                    loadData();
                    resetForm();
                }
            });
        })
    })
    function loadData(){
        $.get('data.php',function(data){
            $('#tabel').html(data)
            $('.hapusData').click(function(e){
                e.preventDefault();
                $.ajax({
                    type:'get',
                    url:$(this).attr('href'),
                    success:function(){
                        loadData();
                    }
                });
            });
            $('.updateData').click(function(e){
                e.preventDefault();
                $('[name=nama]').val($(this).attr('nama'));
                $('[name=nim]').val($(this).attr('nim'));
                $('[name=notlp]').val($(this).attr('notlp'));
                $('[name=tgl]').val($(this).attr('tgl'));
                $('[name=alamt]').val($(this).attr('alamat'));
                $('form').attr('action',$(this).attr('href'));
            });
            
        })    
    }

</script>
</body>
</html>