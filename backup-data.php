<?php
    // Dapatkan nama database dari form
    $name_db = $_POST['name_db'];
    // Default waktu untuk nama file
    date_default_timezone_set("Asia/Makassar");
    $waktu = time();
    // Set nama file
    $file= $name_db.'-'.date('d-m-y H-i-s', $waktu).'.sql';
    // Pemanggilan function untuk membuat file .spl
    backup_tables("localhost","root","",$name_db,$file);

    // Setelah berhasil dibackup maka akan kembali ke halaman utama/index
    echo '<script language="javascript"> window.location.href = "index.php" </script>';

    // Function membuat .sql
    function backup_tables($host,$user,$pass,$name,$nama_file,$tables ='*') {
    $link = mysqli_connect($host,$user,$pass);
    $link2 = mysqli_connect($host,$user,$pass,$name);
    mysqli_select_db($link,$name);
    if($tables == '*'){
        $tables = array();
        $result = mysqli_query($link2, 'SELECT table_name FROM information_schema.tables
                                   WHERE table_schema = "'.$name.'"');
        while($row = mysqli_fetch_row($result)){
            $tables[] = $row[0];
        }
    }
    else{
        $tables = is_array($tables) ? $tables : explode(',',$tables);
    }
    $return = "CREATE DATABASE `".$name."`".";"."\n";
    $return .= "USE `".$name."`".";"."\n\n";
    foreach($tables as $table){
        $result = mysqli_query($link2, 'SELECT * FROM '.$table);
        $num_fields = mysqli_num_fields($result);
        $return.= 'DROP TABLE '.$table.';';
        $row2 = mysqli_fetch_row(mysqli_query($link2, 'SHOW CREATE TABLE '.$table));
        $return.= "\n\n".$row2[1].";\n\n";
            for ($i = 0; $i < $num_fields; $i++) {
                while($row = mysqli_fetch_row($result)){
                $return.= 'INSERT INTO '.$table.' VALUES(';
                for($j=0; $j < $num_fields; $j++) {
                    $row[$j] = addslashes($row[$j]);
                    $row[$j] = preg_replace("/\n/", "/\n/", $row[$j]);
                    if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                    if ($j < ($num_fields-1)) { $return.= ','; }
                }
                $return.= ");\n";
                }
            }
            $return.="\n\n\n";
        }  
        // return $return;                          
        $nama_file;
        $handle = fopen('hasil-backup/'.$nama_file,'w+');
        $content = fwrite($handle,$return);
        fclose($handle);
    }
?>