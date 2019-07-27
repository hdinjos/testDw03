<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>7</title>
    <style type="text/css">
			body {
				background-color: orange;
			}
			table, th, td {
				border: 1px solid #eeeeee;
			}
			table {
				border-collapse: collapse;
				width: 100%;
			}

			th {
				height: 50px;
				background: #000000;
				color: #ffffff;
			}
			th, td {
				padding: 15px;
				text-align: left;
			}

		</style>
</head>
<body>
    <form>
        <label>Nama Lengkap</label><br>
         <input type="text" name=""><br><br>
        <label>Tempat Lahir</label><br>
         <select name="" id="">
          <option value="">Jakarta</option>
          <option value="">Bandung</option>
         </select><br><br>
        <label>Tanggal Lahir</label><br>
         <input type="date" name="" placeholder="mmmm dd, yyyy"><br><br>
        <label>No. Hp</label><br>
         <input type="text" name=""><br><br>
        <label>Alamat</label><br>
         <textarea name="""></textarea><br><br>
        <label >Pendidikan terakhir</label><br>
        <select name="">
         <option value="">SMA</option>
         <option value="">SMK</option>
        </select><br><br>
        <label>Agama</label><br>
         <input type="radio" name=""><label>Islam</label><br>
         <input type="radio" name=""><label>Kristen</label><br>
         <input type="radio" name=""><label>Khatolik</label><br><br>
        <label for="">Hobi</label><br>
         <input type="checkbox" name=""><label>Renang</label><br>
         <input type="checkbox" name=""><label>Mancing</label><br>
         <input type="checkbox" name=""><label>Game</label><br>
         <input type="checkbox" name=""><label>Gibah</label><br>
         <input type="checkbox" name=""><label>Programming</label><br><br><br>       
         <input type="submit" name="" value="Submit">
    </form>
    <br/>
    <?php
            $host = "localhost";
            $user = "root";
            $pass = "";
            $dbname = "teshd";
            
            $koneksi = mysqli_connect($host,$user,$pass,$dbname);
            
            if (!$koneksi) {
                die("data tidak terkoneksi :". mysqli_connect_error());
            }

            $sql = "SELECT users.*, cities.* FROM users INNER JOIN cities ON users.id=cities.id";
            $result = mysqli_query($koneksi,$sql);
        
			mysqli_close($koneksi);
    ?>
		<table>
			<thead>
			<tr>

				<th>id</th>
				<th>full_name</th>
				<th>date_of_birth</th>
				<th>place_of_birth_id</th>
				<th>phone_number</th>
                <th>last_education</th>
                <th>religion</th>
			</tr>
			</thead>
			<tbody>
				<?php
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						$id = $row['id'];
						$nama = $row['full_name'];
						$dob = $row['date_of_birth'];
						$pob = $row['name'];
                        $hp = $row['phone_number'];
                        $edu = $row['last_education'];
                        $religi = $row['religion'];
						
						echo "<tr>
							 <td>$id</td>
						     <td>$nama</td>
							 <td>$dob</td>
							 <td>$pob</td>
						     <td>$hp</td>
						     <td>$edu</td>
                             <td>$religi</td>
						     <tr>";
					}
				}else {
					echo "<tr><td colspan='7'>result 0</td></tr";
				}
				?>
			</tbody>
		</table>
</body>
</html>