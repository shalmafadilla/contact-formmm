<?php

$db = mysqli_connect('localhost','root', '', 'form');

// fungsi menambahkan data form
function tambah_form($post)
{
  global $db;

  $name   = strip_tags($post['name']);
  $date   = strip_tags($post['date']);
  $age  = strip_tags($post['age']);
  $gender  = strip_tags($post['jenis_kelamin']);
  $agama   = strip_tags($post['agama']);
  $message = strip_tags($post['pesan']);
  $email  = strip_tags($post['email']);

  // query tambah data
  $query = "INSERT INTO biodata VALUES(null, '$name', '$date', '$age', '$gender', '$agama', '$message', '$email')";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

// check apakah tombol tambah ditekan
if (isset($_POST['submit'])) {
    if (tambah_form($_POST) > 0) {
      echo "<script>
                  alert('data form berhasil ditambahkan ya :D');
                  document.location.href = 'tampil.php';
              </script>";
    } else {
      echo "<script>
                  alert('data form gagal ditambahkan :(');
                  document.location.href = 'tampil.php';
              </script>";
    }
  }