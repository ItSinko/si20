
<html>
    <head>		
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<?php include ('./views/header.php'); ?>

	  
	
	
		<!-- jPList start -->
		<script>
		$('document').ready(function(){
		
			$('document').ready(function () {

                //jplist plugin call
                $('#demo').jplist({

                    itemsBox: '.demo-tbl'
                    ,itemPath: '.tbl-item'
                    ,panelPath: '.jplist-panel'

                  
                });

                //alternate up / down buttons on header click
                $('.demo-tbl .header').on('click', function () {
                    $(this).next('.sort-btns').find('[data-path]:not(.jplist-selected):first').trigger('click');
                });
		  });
		});
		</script>
        
        <!-- example of additional styles for this page -->
        <style>
            .header,
            .sort-btns {
                display: inline-block;
                float: left;
                cursor: pointer;
            }

            .sort-btns {
                width: 10px;
                margin: 0 0 0 10px;
            }

            .sort-btns .fa {
                display: block;
                font-size: 20px;
                line-height: 12px;
                cursor: pointer;
            }

            @media (max-width: 600px) {

                #demo table {
                    border: 0;
                }

                #demo td {
                    display: block;
                    width: 94%;
                    float: left;
                    border: 0;
                    padding: 5px 3% 0 3%;
                }
            }
			
			
			
			
				
[class^="cus-"],
[class*=" cus-"] {
  display: inline-block;
  width: 17px;
  height: 16px;
  *margin-right: .3em;
  line-height: 14px;
  vertical-align: text-top;
  background-image: url("spritesheet.png");
  background-position: 14px 14px;
  background-repeat: no-repeat;
}
[class^="cus-"]:last-child,
[class*=" cus-"]:last-child {
  *margin-left: 0;
}

	.cus-date_add {
    width: 16px;
    height: 16px;
    background-position: -395px -265px;
	}


	.cus-date_edit {
    width: 16px;
    height: 16px;
    background-position: -447px -265px;
	}




    .cus-cross {
    width: 16px;
    height: 16px;
    background-position: -369px -239px;
	}

    .cus-application_form_edit {
    width: 16px;
    height: 16px;
    background-position: -343px -5px;
	}



	.horizon { 
	width: 1400px;
	height: auto; }
  
	.cus-accept {
    width: 16px;
    height: 16px;
    background-position: -5px -5px;
	}

	.cus-error {
    width: 16px;
    height: 16px;
    background-position: -421px -317px;
	}

	.cus-cancel {
    width: 16px;
    height: 16px;
    background-position: -577px -135px;
	}


	.cus-arrow_right {
    width: 16px;
    height: 16px;
    background-position: -551px -31px;
	}
	
	
	
	
	
	table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: px solid #ddd;
	font-family:'Lucida Fax','Calibri',sans-serif;
	font-size:12px;
	

	}

table th {
	
  padding: 0;
  border-left:1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  text-align: center; 
 background: #ededed;

 }
	table td {
 text-align: center; 
}


th, td {
    text-align: center;
    padding: 0;
  vertical-align: middle;
  height:45px;
	}
 
tr:nth-child(even){background-color: #f2f2f2}


 td:hover { background: #666; color: #FFF; }  
/* Hover cell effect! */



hover {opacity: 1}

th, td {
    text-align: left;
    padding: 8px;
}

	

    </style>	
    </head>
    <body>
	<?php


if( isset( $_REQUEST['aksi'] )){
		$aksi = $_REQUEST['aksi'];
		switch($aksi){
			case 'more':
				include 'noserion/more.php';
				break;
				
		}
	} else {	
	
?>
	<div id="demo" class="horizon" style="margin: 20px 0 50px 0">
	<p class="h5"> Nomer Seri (Online)</p>
	<hr class="my-2">

					<div class="jplist-panel box panel-top">						
								
						<!-- reset button -->
                        <button 
                            type="button" 
                            class="jplist-reset-btn"
                            data-control-type="reset" 
                            data-control-name="reset" 
                            data-control-action="reset">
                            Refresh &nbsp;<i class="fa fa-share"></i>
                        </button>

						<div class="text-filter-box">

						   <i class="fa fa-pencil jplist-icon"></i>
						   
						   <!--[if lt IE 10]>
						   <div class="jplist-label">Search any text in the element:</div>
						   <![endif]-->
						   
						   <input 
							  data-path="*" 
							  type="text" 
							  value="" 
							  placeholder="Pencarian" 
							  data-control-type="textbox" 
							  data-control-name="title-filter" 
							  data-control-action="filter"
						   />
						</div>	
                    
                       
						

						    <!-- items per page dropdown -->
                        <div 
                            class="jplist-drop-down" 
                            data-control-type="items-per-page-drop-down" 
                            data-control-name="paging" 
                            data-control-action="paging">

                            <ul>
                                <li><span data-number="10" data-default="true"> 10 per Hal </span></li>
                                <li><span data-number="30"> 30 per Hal </span></li>
                                <li><span data-number="50" > 50 per Hal </span></li>
                                <li><span data-number="all">Tampilkan Semua</span></li>
                            </ul>
                        </div>


                        <!-- pagination results -->
                        <div 
                            class="jplist-label" 
                            data-type="Page {current} of {pages}" 
                            data-control-type="pagination-info" 
                            data-control-name="paging" 
                            data-control-action="paging">
                        </div>
			
			
                        <!-- pagination -->
                        <div 
                            class="jplist-pagination" 
                            data-control-type="pagination" 
                            data-control-name="paging" 
                            data-control-action="paging">
                        </div>
						</div>		

	


 <!-- data -->
 
                    <div class="horizon_disable">
                        <table class="demo-tbl">

						
                            <!-- one more panel section -->
                            <thead class="jplist-panel">

                                <tr data-control-type="sort-buttons-group"
                                    data-control-name="header-sort-buttons"
                                    data-control-action="sort"
                                    data-mode="single"
                                    data-datetime-format="{month}/{day}/{year}">

								    <th width="2%">No</th>
									  <th width="2%">Status Pengisian No. Seri</th>
									  <th width="12%">No SJ</th>
									  <th width="5%">
                                        <span class="header">No LKPP</span>
                                        <span class="sort-btns">
                                            <i class="fa fa-caret-up" data-path=".nolkpp" data-type="number" data-order="asc" title="Sort by Title Asc"></i>
                                            <i class="fa fa-caret-down" data-path=".nolkpp" data-type="number" data-order="desc" title="Sort by Title Desc"></i>
                                        </span>
                                    </th>
									
									<th width="12%">Nama Produk</th>
									<th width="2%">Jumlah</th>
									<th width="12%">Distributor</th>
									
									
									
									
									  <th width="10%">
                                        No PO</th>
									
    
									<th width="10%">
                                        <span class="header">Tgl PO</span>
                                        <span class="sort-btns">
                                            <i class="fa fa-caret-up" data-path=".tglpo" data-type="datetime" data-order="asc" title="Sort by Date Asc"></i>
                                            <i class="fa fa-caret-down" data-path=".tglpo" data-type="datetime" data-order="desc" title="Sort by Date Desc"></i>
                                        </span>
                                    </th>
									
									 <th width="10%">No DO</th>
									
									 <th width="10%">
                                        <span class="header">Tgl DO</span>
                                        <span class="sort-btns">
                                            <i class="fa fa-caret-up" data-path=".tgldo" data-type="datetime" data-order="asc" title="Sort by Date Asc"></i>
                                            <i class="fa fa-caret-down" data-path=".tgldo" data-type="datetime" data-order="desc" title="Sort by Date Desc"></i>
                                        </span>
                                    </th>
		   
                                </tr>
                            </thead>

				
							<?php 
$a= 1;
$result=mysqli_query($con,"SELECT *, if(isnull(noseri_on),'0', '1')as status_seri 
							FROM admjual_on INNER JOIN spa_on ON spa_on.nolkpp_on = admjual_on.nolkppadm_on
							INNER JOIN distributor ON distributor.iddsb= admjual_on.pabrikadm_on
							INNER JOIN produk_master ON produk_master.id_prod= admjual_on.idprodadm_on
						    LEFT JOIN  seri_on ON admjual_on.nolkppadm_on = seri_on.lkppfk_on
						    LEFT JOIN  gudang_on ON admjual_on.nolkppadm_on = gudang_on.nolkppgdg_on
							GROUP BY nolkppadm_on
							ORDER BY nolkppadm_on + 0 DESC");		
		
		 while($row = mysqli_fetch_array($result)){
	 			
		echo'                 
                            <tbody>                      
                                <tr class=tbl-item>
								    <td >'.$a++.'</td>		
								    ';
									if(	$row['status_seri'] == 0) 
									{echo'<td><i class="cus-error" title="Nomer Seri Belum Terisi"></i><br>Belum Terisi</td>'; }
									
									else 
									{ echo'<td><i class="cus-accept" title="Nomer Seri Sudah Terisi"></i><br>Sudah Terisi</td>';  }
									
		
								    echo'
									<td  >'.$row['nosj_on'].'</td>	
									<td class=nolkpp >'.$row['nolkppadm_on'].'</td>	
									<td class=nmprd>'.$row['nam_prod'].'</td>	
									<td >'.$row['jumlah_on'].' '.$row['satuan_prod'].' <br> <a href="?hlm=noserion&aksi=more&nolkppadm_on='.$row["nolkppadm_on"].'" class="cus-arrow_right"></a></td>	
									<td class=dsb >'.$row['pabrik'].'</td>	
									<td class=nopo>'.$row['nopo_on'].'</td>
                                    <td class=tglpo>'.$row['tglpo_on'].'</td>	
									<td class=nodo>'.$row['nodo_on'].'</td>
									<td class=tgldo>'.$row['tgldo_on'].'</td>';
									
									?>
							

                                  
								   </td>					
								</tr>
								<?php
								}										
								?>            
                    </tbody>
                    </table>
                    </div>
					
					
                    <div class="box jplist-no-results text-shadow align-center">
                        <p>Maaf, hasil yang anda cari tidak ditemukan :(</p>
                    </div>
                    
                    <!-- ios button: show/hide panel -->
                    <div class="jplist-ios-button">
                        <i class="fa fa-sort"></i>
                        jPList Actions
                    </div>
					
                    <!-- panel -->
                    <div class="jplist-panel box panel-bottom">						

          
					
                        <!-- pagination results -->
                        <div 
                            class="jplist-label" 
                            data-type="{start} - {end} of {all}"
                            data-control-type="pagination-info" 
                            data-control-name="paging" 
                            data-control-action="paging">
                        </div>
						
						
						
						
						
						

                        <!-- pagination -->
                        <div 
                            class="jplist-pagination" 
                            data-control-type="pagination" 
                            data-control-name="paging" 
                            data-control-action="paging"
                            data-control-animate-to-top="true">
                        </div>

                    </div>
				</div>

	<?php
	}
				?>
	
    </body>
</html>