<!DOCTYPE html>
<html lang="en">

<body>
    <?php include 'header.php'; ?>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #04AA6D;
            color: white;

        }

        .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button1 {
            background-color: #4CAF50;
        }

        /* Green */
        .button2 {
            background-color: #008CBA;
        }

        /* Blue */
    </style>
    <section class="page-section about-heading">
        <div class="container">
            <!-- <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/about.jpg" alt="..." /> -->
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2>Laporan Harian MPP Kabupaten Lebong</h2><br>
                            <h4 style="text-align: justify;">Assalamualaikum Wr. Wb.
                                Demi terwujudnya Mal Pelayanan Publik yang Prima, Transparan dan Akuntabel, dimohon Kerjasamanya pada seluruh petugas pelayanan yang berada dalam MPP Kabupaten Lebong untuk mengisi jumlah data pelayanan harian masing-masing OPD pada link berikut: </h4><br>
                            <table id="customers">
                                <tr>
                                    <th style="width: 10px;">No</th>
                                    <th>Nama OPD / Instansi</th>
                                    <th>Link Laporan Harian</th>
                                    <th>Jumlah Data Pelayanan</th>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">1</td>
                                    <td>Pengadilan Negeri</td>
                                    <td>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTahZTRpHP_z3jsFfDlv2NnJIUNT5G3PegUk0bypFj0vi30A/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">2</td>
                                    <td>DPMPTSP Kabupaten Lebong
                                    </td>
                                    <td>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSd79HpvzcjHiGT2JEu3rvt3pfRX40WyU9HVo28A_7taKMXUXQ/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">3</td>
                                    <td> PDAM Tirta Tebo Emas
                                    </td>
                                    <td>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSd6xtH7qRmHkOeOYAfTKHStwFGAlxl1ijJG9Srxp1rGqRcKnw/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">4</td>
                                    <td> Dinas Kependudukan dan Pencatatan Sipil
                                    </td>
                                    <td>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSe5e82aAVXPo1GLxbSmV0DHSBQmJqc4BOIH31Bz3CPezgBwag/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">5</td>
                                    <td> Badan Keuangan Daerah
                                    </td>
                                    <td>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScPibzix9gv1kk11R5b73xgYOT0jVb3i6ZReszBpbqvtE8msQ/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">6</td>
                                    <td> Dinas Ketenagakerjaan dan Transmigrasi
                                    </td>
                                    <td>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfmQuXCwjdRe-ijCHquSVKZvmRofSea6DyKM8HL51h_vG59ZA/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">7</td>
                                    <td> Dinas Kesehatan
                                    </td>
                                    <td>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSf3mJ2D5Skw-sKu7InZe6-81bKDEHYNYSbs2dXykfrlwkeWmg/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">8</td>
                                    <td> Perpustakaan dan Arsip Daerah
                                    </td>
                                    <td>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSepNIhyouyefAxFHuPBOHSl0PE5Sm7RGOjMkNj5twpPrnFKZQ/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">9</td>
                                    <td> DPMPTSP Provinsi Bengkulu
                                    </td>
                                    <td>
                                        <a href="                            https://docs.google.com/forms/d/e/1FAIpQLSdzTA3-PQnIy_jarzmsHj_84sjFFlNPhzaThawQILoOVXTR4Q/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">10</td>
                                    <td>KPP Pratama Curup
                                    </td>
                                    <td>
                                        <a href=" https://docs.google.com/forms/d/e/1FAIpQLScs2hDYHxiplPRRCDTkwNFmSiR7UQE1Tf1LnW7acI35RoW82g/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">11</td>
                                    <td>BPJS Ketenagakerjaan
                                    </td>
                                    <td>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdzcoXAHITGz1vBr2GQ5ZVoSVGvNRZoIBQ9Hh-cRkWRCuma7A/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">12</td>
                                    <td>PT. Taspen Persero
                                    </td>
                                    <td>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSduutXiFgYvygoBymWB9Rc7tDC3B_UNl7Vg8xTNkFL50c4A-w/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">13</td>
                                    <td>Badan Pusat Statistik
                                    </td>
                                    <td>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSch_MMwJ0mjO2S54DeLQQAwDqD0xH9v36GHuUYsO3BKV8zOJA/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">14</td>
                                    <td>BPJS Kesehatan
                                    </td>
                                    <td>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeL1hM643c8DIVVxerwn1gCZBT_pSJe4hUxkWxDmKmMWRBjUA/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">15</td>
                                    <td>BPPOM
                                    </td>
                                    <td>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeCsvB68T2gUvBmxX9bl3BV7fYftt6Ryl9mxgpAnYaQkzX4Hg/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">16</td>
                                    <td>Kejaksaan Negeri
                                    </td>
                                    <td>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeYBYP5rIfQv_aMn22XmXqwqgXQshmYlVS6xIseCY08gXSOaQ/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">17</td>
                                    <td>Pengadilan Negeri
                                    </td>
                                    <td>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTahZTRpHP_z3jsFfDlv2NnJIUNT5G3PegUk0bypFj0vi30A/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">18</td>
                                    <td>POLRES
                                    </td>
                                    <td>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSemQ90rqSV3beQsqh1RHsSHTPQfuTltn0dN2DyOmzGwBMUXwA/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">19</td>
                                    <td>Kementerian Agama
                                    </td>
                                    <td>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScnc_o9nPYSb9kDSMpvTw34inZVNXjD_3vVWGW-EYRiRgyYdw/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">20</td>
                                    <td>Pengadilan Agama
                                    </td>
                                    <td>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfCxFb_mTuooR9B3HoBS95otD6QoWbW8FwSA1hiIC6zM3L_7w/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 10px;">21</td>
                                    <td>Kantor Pertanahan
                                    </td>
                                    <td>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfi-bvhd2LuQZSsPvGCLmDJuBcItG3ZXYRF1h5pmpB5XfA2HQ/viewform?usp=sf_link">
                                            <button class="button button1">Submit</button>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                            </table><br>
                            <h4 style="text-align: justify;">
                                Atas Perhatian dan Kerjasamanya, kami ucapkan terima kasih.
                            </h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>

</html>