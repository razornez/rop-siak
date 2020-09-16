<!-- Include your PHP file here -->
<style type="text/css">
  .btn_opsi{
    padding: 2px;
    background: #2196F3;
    color: white;
    border-radius: 5px;
    width: 100px;
  }
</style>
<div class="row wrapper border-bottom white-bg page-heading" style="margin-left: 0px;">
  <div class="col-lg-10">
    <h2>Barang</h2>
    <ol class="breadcrumb">
      <li>
        <a href="index.html">Home</a>
      </li>
      <li>
        <a>Master Data</a>
      </li>
      <li class="active">
        <strong>Barang</strong>
      </li>
    </ol>
  </div>

  <!-- Content Now -->
  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
      <div class="col-lg-12">
        <div class="ibox float-e-margins" style="width: 95%;">
          <div class="ibox-content text-center p-md">
            <div class="content-panel">
              <div align="left">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <a href="index.php?r=barang/create" class="btn btn-primary">Tambah Barang</a>
                  </div>
                </div>
              </div>
              <h4>Hasil pencarian dengan nama atau kode barang <i style="background:yellow"><?php echo $name ?></i></h4>
              <div id="barang-grid" class="grid-view">
               <div class="summary"><?php echo $count ?> results.</div>
               <table class="items">
                  <thead>
                     <tr style="background: #46a6f7;color: white;">
                        <th class="col-md-2">Kode Barang</th>
                        <th class="col-md-2">Nama Barang</th>
                        <th class="col-md-2">Stok Akhir</th>
                        <th class="col-md-2">Harga</th>
                        <th class="col-md-2">Safety Stok</th>
                        <th class="col-md-2">No Rak</th>
                        <th class="col-md-2" id="barang-grid_c9">&nbsp;</th>
                     </tr>  
                  </thead>
                  <tbody>
                    <?php foreach ($s_barang as $barang) { ?>
                     <tr class="odd">
                        <td class="col-md-2"><?php echo $barang['kode_barang'] ?></td>
                        <td class="col-md-2"><?php echo $barang['nama_barang'] ?></td>
                        <td class="col-md-2"><?php echo $barang['stok_akhir'] ?></td>
                        <td class="col-md-2"><?php echo $barang['harga'] ?></td>
                        <td class="col-md-2"><?php echo $barang['safety_stok'] ?></td>
                        <td class="col-md-2"><?php echo $barang['no_rak'] ?></td>
                        <td class="col-md-2"><a title="Beli Barang" class="btn btn-primary" href="index.php?r=barangMasuk/create&amp;name=<?php echo $barang['kode_barang'] ?>"><i class="fa fa-plus"></i>&nbsp;Beli</a><a title="Jual Barang" class="btn btn-primary" href="index.php?r=barangKeluar/create&amp;name=<?php echo $barang['kode_barang'] ?>"><i class="fa fa-minus">&nbsp;Jual</a></td>
                     </tr>
                     <?php } ?>
                  </tbody>
               </table>
               <div class="keys" style="display:none" title="/rop_siak/index.php?r=Barang/manage"><span>AT0002</span><span>AT0003</span><span>AT0004</span><span>Z000001</span></div>
            </div>
              </div><!-- /content-panel -->
            </div><!-- /col-md-12 -->
          </div><!-- /row -->
        </div></div></div>

        <!-- end content -->
      </div>
