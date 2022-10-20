<?php
use App\Models\mahasiswa;
use App\Models\vmhs_term_test3;
?>
@extends('layouts.app')

@section('title','Mahasiswa')

@section('content')
<h1>Index Mahasiswa</h1>
        <p>Nama : Mahes Yaputra</p>
        <p>Student ID : 03081200047</p>
        <p>Term : 1212</p>
        <style>
            table tr{
                padding: 10px;
            }
        </style>
        <table style="padding: 10px;">
            <tr>
                <td>Kode Mata Kuliah</td>
                <td>Nama Mata Kuliah</td>
                <td>SKS</td>
                
            </tr>
            <?php
            $mahasiswas = vmhs_term_test3::get();
 
            foreach ($mahasiswas as $vmhs_term_test3) {
                echo "<tr>";
                echo "<td>".$vmhs_term_test3->kode_matakuliah."</td>";
                echo "<td>".$vmhs_term_test3->nama_matakuliah."</td>";
                echo "<td>".$vmhs_term_test3->sks."</td>";
                echo "</tr>";
            }
            ?>
        </table>
@endsection


</html>