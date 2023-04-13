<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=, initial-scale=1.0">
   <title>Latihan 1</title>
</head>
<style>
   tr td {
      padding-top: 1rem;
   }
</style>

<body>
   <center>
      <form action="<?= base_url("home/simpan") ?>" method="post">
         <table>
            <tr>
               <td>Nama Siswa</td>
               <td>:</td>
               <td><input type="text" name="nama"></td>
            </tr>
            <tr>
               <td>Jenis Kelamin</td>
               <td>:</td>
               <td>
                  <input type="radio" id="" name="jenis_kelamin" value="laki-laki">Laki-laki
                  <input type="radio" id="" name="jenis_kelamin" value="perempuan">Perempuan
               </td>
            </tr>
            <tr>
               <td>Nama Ayah</td>
               <td>:</td>
               <td><input type="text" name="nama_ayah"></td>
            </tr>
            <tr>
               <td>Nama Ibu</td>
               <td>:</td>
               <td><input type="text" name="nama_ibu"></td>
            </tr>
            <tr>
               <td>Alamat</td>
               <td>:</td>
               <td>
                  <textarea name="alamat" id="" cols="20" rows="5"></textarea>
               </td>
            </tr>
            <tr>
               <td></td>
               <td></td>
               <td><button type="submit">Kirim</button>
                  <button type="reset">Reset</button>
               </td>
            </tr>
         </table>
      </form>
   </center>
</body>

</html>