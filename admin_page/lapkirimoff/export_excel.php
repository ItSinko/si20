<html>
<head>
<title>
Laporan Penjualan (SPB)
</title>
</head>

<style>


</style>
<?php
 header("Content-Type: application/force-download");
 header("Cache-Control: no-cache, must-revalidate");
 header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 
 header("content-disposition: attachment;filename=Laporan_Pengiriman_(SPA_Offline).xls");
 
?>
<body>
		
<br>

	<div class="horizon">
	<h3>Laporan Pengiriman (SPA Offline) - PT. SINKO PRIMA ALLOY</h3>
      <table class="tes" id="tabelExport" border="1">
        <thead>
		 <tr> 
          <th colspan="6" style="width:  15.33%;   font-size:20px;"  class="align-middle" >Info Pesanan</th>
          <th colspan="4" style="width:  15.33%;   font-size:20px;"  class="align-middle" >Adm Penjualan</th>
          <th colspan="2" style="width:  15.33%;   font-size:20px;"  class="align-middle" >Gudang</th>
          <th colspan="3" style="width:  15.33%;   font-size:20px;"  class="align-middle" >Ekspedisi / Pengiriman</th>
         
          </tr>
							
                                <tr data-control-type="sort-buttons-group"
                                    data-control-name="header-sort-buttons"
                                    data-control-action="sort"
                                    data-mode="single"
                                    data-datetime-format="{month}/{day}/{year}">
						
										<th width=1% class="text-center" bgcolor="#ffe0ad">No</th>		
									<th width=1% class="text-center" bgcolor="#ffe0ad">ID Order</th>												
									<th width=3% bgcolor="#ffe0ad">
									 <span class="header">Distributor</span>
                                        <span class="sort-btns">
                                            <i class="fa fa-caret-up" data-path=".dsb" data-type="text" data-order="asc" title="Sort by Title Asc"></i>
                                            <i class="fa fa-caret-down" data-path=".dsb" data-type="text" data-order="desc" title="Sort by Title Desc"></i>
                                        </span>
									</th>
								
									<th width=2% bgcolor="#ffe0ad">
									 <span class="header">Type</span>
                                        <span class="sort-btns">
                                            <i class="fa fa-caret-up" data-path=".type" data-type="text" data-order="asc" title="Sort by Title Asc"></i>
                                            <i class="fa fa-caret-down" data-path=".type" data-type="text" data-order="desc" title="Sort by Title Desc"></i>
                                        </span>
										</th>
									<th width=4% bgcolor="#ffe0ad"> <span class="header">Nama Produk</span>
                                        <span class="sort-btns">
                                            <i class="fa fa-caret-up" data-path=".nmprd" data-type="text" data-order="asc" title="Sort by Title Asc"></i>
                                            <i class="fa fa-caret-down" data-path=".nmprd" data-type="text" data-order="desc" title="Sort by Title Desc"></i>
                                        </span></th>
									<th width=1% bgcolor="#ffe0ad">Jumlah</th>
									
									<!-- Pembatas -->
									<th width=2% bgcolor="#f3ffe5">No PO</th>
									<th width=2% bgcolor="#f3ffe5">Tgl PO
									</th>
									<th width=2% bgcolor="#f3ffe5">No DO</th>
									<th width=2% bgcolor="#f3ffe5">Tgl DO</th>
									
									<!-- Pembatas -->
									<th width=1% bgcolor="#34f937">No SJ</th>
									<th width=1% bgcolor="#34f937">Tgl SJ</th>
									
									<!-- Pembatas -->
									<th width=1% bgcolor="##7c7bc4"> <span class="header">Ekspedisi</span>
                                        <span class="sort-btns">
                                            <i class="fa fa-caret-up" data-path=".eks" data-type="text" data-order="asc" title="Sort by Title Asc"></i>
                                            <i class="fa fa-caret-down" data-path=".eks" data-type="text" data-order="desc" title="Sort by Title Desc"></i>
                                        </span></th>
									<th width=2% bgcolor="##7c7bc4">No Resi</th>
									<th width=1% bgcolor="##7c7bc4">Tgl Kirim</th>
								
                                </tr>
         </thead>
		<tbody>


<?php 
						//$con=mysqli_connect("localhost","root","","kontrol_db");
						$a= 1;
						$result=mysqli_query($con,"
																	 SELECT *,  harga_off * jumlah_off as total   
																		 FROM spa_off LEFT JOIN admjual_off ON spa_off.idorder_off = admjual_off.idorderadm_off
																		 LEFT JOIN qc_off ON qc_off.idorderqc_off = admjual_off.idorderadm_off
																		 LEFT JOIN gudang_off ON gudang_off.idordergdg_off = admjual_off.idorderadm_off
																		 LEFT JOIN ekspedisi_off ON gudang_off.idordergdg_off = ekspedisi_off.idordereks_off
																		 
																		 JOIN distributor ON distributor.iddsb = spa_off.pabrik_off
																		 JOIN produk_master ON produk_master.id_prod = spa_off.idprod_off
															 			
																		 LEFT JOIN ekspedisi2_off ON ekspedisi2_off.idordereks_fk = ekspedisi_off.idordereks_off
																		 LEFT JOIN jasaeks ON jasaeks.id_eks = ekspedisi2_off.jasafk_off
																		 
																		 WHERE noresi_off IS NOT NULL 
																		 
																		 GROUP BY noresi_off
																		
																		   UNION ALL
																		 
																		 SELECT *,  harga_off * jumlah_off as total   
																		 FROM spa_off LEFT JOIN admjual_off ON spa_off.idorder_off = admjual_off.idorderadm_off
																		 LEFT JOIN qc_off ON qc_off.idorderqc_off = admjual_off.idorderadm_off
																		 LEFT JOIN gudang_off ON gudang_off.idordergdg_off = admjual_off.idorderadm_off
																		 LEFT JOIN ekspedisi_off ON gudang_off.idordergdg_off = ekspedisi_off.idordereks_off
																		 
																		 JOIN distributor ON distributor.iddsb = spa_off.pabrik_off
																		 JOIN produk_master ON produk_master.id_prod = spa_off.idprod_off
															 			
																		 LEFT JOIN ekspedisi2_off ON ekspedisi2_off.idordereks_fk = ekspedisi_off.idordereks_off
																		 LEFT JOIN jasaeks ON jasaeks.id_eks = ekspedisi2_off.jasafk_off
																					 
																					 WHERE noresi_off IS NULL 										
											");	
						while($row = mysqli_fetch_array($result)){
						echo'
                            <tbody>
                             
                                <tr class=tbl-item>
								
							        <td >'.$a++.'</td>
									<td >'.$row['idorder_off'].'</td>									
									<td class=dsb>'.$row['pabrik'].'</td>	
									
									
									<td class=type>'.$row['sing_prod'].'</td>
                                    <td class=nmprd>'.$row['nam_prod'].'</td>				
									<td >'.$row['jumlah_off'].'</td> ';
									
									
									$nodo = $row["nodo_off"];
									$tgldo = $row["tgldo_off"];
									$nopo = $row["nopo_off"];
									$tglpo = $row["tglpo_off"];
									$nosj = $row["nosj_off"];
									$tglsj = $row["tglsj_off"];
									$eks = $row["nama_eks"];
									$noresi = $row["noresi_off"];

								if (empty($nopo))  { 
									echo '<td class=nopo>(blank)</td>';
	
												}

								else {
									
									echo '<td class=nopo >'.$row['nopo_off'].'</td>';
												}
												
												
												
										if (empty($tglpo))  { 
									echo '<td class=tglpo>(blank)</td>';
	
												}

								else {
									
									echo '<td class=tglpo >'.$row['tglpo_off'].'</td>';
												}		
												
												
												
												
												
											if (empty($nodo))  { 
									echo '<td class=nodo>(blank)</td>';
	
												}

								else {
									
									echo '<td class=nodo >'.$row['nodo_off'].'</td>';
												}		
												
												
									
								if (empty($tgldo))  { 
									echo '<td class=tgldo>(blank)</td>';
	
												}

								else {
									
									echo '<td class=tgldo >'.$row['tgldo_off'].'</td>';
												}		
												
									
									
									
									
									
									
									if (empty($nosj))  { 
									echo '<td class=nosj>(blank)</td>';
	
												}

								else {
									
									echo '<td class=nosj >'.$row['nosj_off'].'</td>';
												}			
												
									
									
									
									if (empty($nosj))  { 
									echo '<td class=tglsj>(blank)</td>';
	
												}

								else {
									
									echo '<td class=tglsj >'.$row['tglsj_off'].'</td>';
												}	



							if (empty($eks))  { 
									echo '<td class=eks>(blank)</td>';
	
												}

								else {
									
									echo '<td class=eks >'.$row['nama_eks'].'</td>';
												}													
												
									
									
									if (empty($noresi))  { 
									echo '<td class=noresi>(blank)</td>';
	
												}

								else {
									
									echo '<td class=noresi >'.$row['noresi_off'].'</td>';
												}		
									
									


									
                                 
									if (empty($nosj))  { 
									echo '<td >(blank)</td>';
	
												}

								else {
									
									echo '<td  >'.$row['tglkirim_off'].'</td>';
												}					
									
									
									
									
									echo'
									</tr>
									';  					
								}		

								?>
   </table>
    </div>
  

<script>
(function () {
  var
       filters = {
      
       noseri: null,
	   nmprd: null,
	   noaks: null,
	   dsb: null,
	   nopo: null,
	
	   status: null,
  };
	
  function updateFilters() {
    $('.task-list-row').hide().filter(function () {
      var
        self = $(this),
        result = true; // not guilty until proven guilty

      Object.keys(filters).forEach(function (filter) {
        if (filters[filter] && (filters[filter] != 'Semua') && (filters[filter] != 'Semua')) {
          result = result && filters[filter] === self.data(filter);
        }
      });

      return result;
    }).show();
  }

  function bindDropdownFilters() {
    Object.keys(filters).forEach(function (filterName) {
      $('#' + filterName + '-filter').on('change', function () {
        filters[filterName] = this.value;
        updateFilters();
      });
    });
  }

  bindDropdownFilters();
})();
</script>

<script>
!function(a){function b(a,b,c){if(8==g){var d=j.width(),e=f.debounce(function(){var a=j.width();d!=a&&(d=a,c())},a);j.on(b,e)}else j.on(b,f.debounce(c,a))}function c(a){window.console&&window.console&&window.console.log&&window.console.log(a)}function d(){var b=a('<div style="width:50px;height:50px;overflow-y:scroll;position:absolute;top:-200px;left:-200px;"><div style="height:100px;width:100%"></div>');a("body").append(b);var c=b.innerWidth(),d=a("div",b).innerWidth();return b.remove(),c-d}function e(a){if(a.dataTableSettings)for(var b=0;b<a.dataTableSettings.length;b++){var c=a.dataTableSettings[b].nTable;if(a[0]==c)return!0}return!1}a.floatThead=a.floatThead||{},a.floatThead.defaults={cellTag:null,headerCellSelector:"tr:first>th:visible",zIndex:1001,debounceResizeMs:10,useAbsolutePositioning:!0,scrollingTop:0,scrollingBottom:0,scrollContainer:function(){return a([])},getSizingRow:function(a){return a.find("tbody tr:visible:first>*")},floatTableClass:"floatThead-table",floatWrapperClass:"floatThead-wrapper",floatContainerClass:"floatThead-container",copyTableClass:!0,debug:!1};var f=window._,g=function(){for(var a=3,b=document.createElement("b"),c=b.all||[];a=1+a,b.innerHTML="<!--[if gt IE "+a+"]><i><![endif]-->",c[0];);return a>4?a:document.documentMode}(),h=null,i=function(){if(g)return!1;var b=a("<table><colgroup><col></colgroup><tbody><tr><td style='width:10px'></td></tbody></table>");a("body").append(b);var c=b.find("col").width();return b.remove(),0==c},j=a(window),k=0;a.fn.floatThead=function(l){if(l=l||{},!f&&(f=window._||a.floatThead._,!f))throw new Error("jquery.floatThead-slim.js requires underscore. You should use the non-lite version since you do not have underscore.");if(8>g)return this;if(null==h&&(h=i(),h&&(document.createElement("fthtr"),document.createElement("fthtd"),document.createElement("fthfoot"))),f.isString(l)){var m=l,n=this;return this.filter("table").each(function(){var b=a(this).data("floatThead-attached");if(b&&f.isFunction(b[m])){var c=b[m]();"undefined"!=typeof c&&(n=c)}}),n}var o=a.extend({},a.floatThead.defaults||{},l);return a.each(l,function(b){b in a.floatThead.defaults||!o.debug||c("jQuery.floatThead: used ["+b+"] key to init plugin, but that param is not an option for the plugin. Valid options are: "+f.keys(a.floatThead.defaults).join(", "))}),this.filter(":not(."+o.floatTableClass+")").each(function(){function c(a){return a+".fth-"+y+".floatTHead"}function i(){var b=0;A.find("tr:visible").each(function(){b+=a(this).outerHeight(!0)}),Z.outerHeight(b),$.outerHeight(b)}function l(){var a=z.outerWidth(),b=I.width()||a;if(X.width(b-F.vertical),O){var c=100*a/(b-F.vertical);S.css("width",c+"%")}else S.outerWidth(a)}function m(){C=(f.isFunction(o.scrollingTop)?o.scrollingTop(z):o.scrollingTop)||0,D=(f.isFunction(o.scrollingBottom)?o.scrollingBottom(z):o.scrollingBottom)||0}function n(){var b,c;if(V)b=U.find("col").length;else{var d;d=null==o.cellTag&&o.headerCellSelector?o.headerCellSelector:"tr:first>"+o.cellTag,c=A.find(d),b=0,c.each(function(){b+=parseInt(a(this).attr("colspan")||1,10)})}if(b!=H){H=b;for(var e=[],f=[],g=[],i=0;b>i;i++)e.push('<th class="floatThead-col"/>'),f.push("<col/>"),g.push("<fthtd style='display:table-cell;height:0;width:auto;'/>");f=f.join(""),e=e.join(""),h&&(g=g.join(""),W.html(g),bb=W.find("fthtd")),Z.html(e),$=Z.find("th"),V||U.html(f),_=U.find("col"),T.html(f),ab=T.find("col")}return b}function p(){if(!E){if(E=!0,J){var a=z.width(),b=Q.width();a>b&&z.css("minWidth",a)}z.css(db),S.css(db),S.append(A),B.before(Y),i()}}function q(){E&&(E=!1,J&&z.width(fb),Y.detach(),z.prepend(A),z.css(eb),S.css(eb))}function r(a){J!=a&&(J=a,X.css({position:J?"absolute":"fixed"}))}function s(a,b,c,d){return h?c:d?o.getSizingRow(a,b,c):b}function t(){var a,b=n();return function(){var c=s(z,_,bb,g);if(c.length==b&&b>0){if(!V)for(a=0;b>a;a++)_.eq(a).css("width","");q();var d=[];for(a=0;b>a;a++)d[a]=c.get(a).offsetWidth;for(a=0;b>a;a++)ab.eq(a).width(d[a]),_.eq(a).width(d[a]);p()}else S.append(A),z.css(eb),S.css(eb),i()}}function u(a){var b=I.css("border-"+a+"-width"),c=0;return b&&~b.indexOf("px")&&(c=parseInt(b,10)),c}function v(){var a,b=I.scrollTop(),c=0,d=L?K.outerHeight(!0):0,e=M?d:-d,f=X.height(),g=z.offset(),i=0;if(O){var k=I.offset();c=g.top-k.top+b,L&&M&&(c+=d),c-=u("top"),i=u("left")}else a=g.top-C-f+D+F.horizontal;var l=j.scrollTop(),m=j.scrollLeft(),n=I.scrollLeft();return b=I.scrollTop(),function(k){if("windowScroll"==k?(l=j.scrollTop(),m=j.scrollLeft()):"containerScroll"==k?(b=I.scrollTop(),n=I.scrollLeft()):"init"!=k&&(l=j.scrollTop(),m=j.scrollLeft(),b=I.scrollTop(),n=I.scrollLeft()),!h||!(0>l||0>m)){if(R)r("windowScrollDone"==k?!0:!1);else if("windowScrollDone"==k)return null;g=z.offset(),L&&M&&(g.top+=d);var o,s,t=z.outerHeight();if(O&&J){if(c>=b){var u=c-b;o=u>0?u:0}else o=P?0:b;s=i}else!O&&J?(l>a+t+e?o=t-f+e:g.top>l+C?(o=0,q()):(o=C+l-g.top+c+(M?d:0),p()),s=0):O&&!J?(c>b||b-c>t?(o=g.top-l,q()):(o=g.top+b-l-c,p()),s=g.left+n-m):O||J||(l>a+t+e?o=t+C-l+a+e:g.top>l+C?(o=g.top-l,p()):o=C,s=g.left-m);return{top:o,left:s}}}}function w(){var a=null,b=null,c=null;return function(d,e,f){null==d||a==d.top&&b==d.left||(X.css({top:d.top,left:d.left}),a=d.top,b=d.left),e&&l(),f&&i();var g=I.scrollLeft();J&&c==g||(X.scrollLeft(g),c=g)}}function x(){if(I.length){var a=I.width(),b=I.height(),c=z.height(),d=z.width(),e=d>a?G:0,f=c>b?G:0;F.horizontal=d>a-f?G:0,F.vertical=c>b-e?G:0}}var y=k,z=a(this);if(z.data("floatThead-attached"))return!0;if(!z.is("table"))throw new Error('jQuery.floatThead must be run on a table element. ex: $("table").floatThead();');var A=z.find("thead:first"),B=z.find("tbody:first");if(0==A.length)throw new Error("jQuery.floatThead must be run on a table that contains a <thead> element");var C,D,E=!1,F={vertical:0,horizontal:0},G=d(),H=0,I=o.scrollContainer(z)||a([]),J=o.useAbsolutePositioning;null==J&&(J=o.scrollContainer(z).length);var K=z.find("caption"),L=1==K.length;if(L)var M="top"===(K.css("caption-side")||K.attr("align")||"top");var N=a('<fthfoot style="display:table-footer-group;"/>'),O=I.length>0,P=!1,Q=a([]),R=9>=g&&!O&&J,S=a("<table/>"),T=a("<colgroup/>"),U=z.find("colgroup:first"),V=!0;0==U.length&&(U=a("<colgroup/>"),V=!1);var W=a('<fthrow style="display:table-row;height:0;"/>'),X=a('<div style="overflow: hidden;"></div>'),Y=a("<thead/>"),Z=a('<tr class="size-row"/>'),$=a([]),_=a([]),ab=a([]),bb=a([]);if(Y.append(Z),z.prepend(U),h&&(N.append(W),z.append(N)),S.append(T),X.append(S),o.copyTableClass&&S.attr("class",z.attr("class")),S.attr({cellpadding:z.attr("cellpadding"),cellspacing:z.attr("cellspacing"),border:z.attr("border")}),S.css({borderCollapse:z.css("borderCollapse"),border:z.css("border")}),S.addClass(o.floatTableClass).css("margin",0),J){var cb=function(a,b){var c=a.css("position"),d="relative"==c||"absolute"==c;if(!d||b){var e={paddingLeft:a.css("paddingLeft"),paddingRight:a.css("paddingRight")};X.css(e),a=a.wrap("<div class='"+o.floatWrapperClass+"' style='position: relative; clear:both;'></div>").parent(),P=!0}return a};O?(Q=cb(I,!0),Q.append(X)):(Q=cb(z),z.after(X))}else z.after(X);X.css({position:J?"absolute":"fixed",marginTop:0,top:J?0:"auto",zIndex:o.zIndex}),X.addClass(o.floatContainerClass),m();var db={"table-layout":"fixed"},eb={"table-layout":z.css("tableLayout")||"auto"},fb=z[0].style.width||"";x();var gb,hb=function(){(gb=t())()};hb();var ib=v(),jb=w();jb(ib("init"),!0);var kb=f.debounce(function(){jb(ib("windowScrollDone"),!1)},300),lb=function(){jb(ib("windowScroll"),!1),kb()},mb=function(){jb(ib("containerScroll"),!1)},nb=function(){m(),x(),hb(),ib=v(),(jb=w())(ib("resize"),!0,!0)},ob=f.debounce(function(){x(),m(),hb(),ib=v(),jb(ib("reflow"),!0)},1);O?J?I.on(c("scroll"),mb):(I.on(c("scroll"),mb),j.on(c("scroll"),lb)):j.on(c("scroll"),lb),j.on(c("load"),ob),b(o.debounceResizeMs,c("resize"),nb),z.on("reflow",ob),e(z)&&z.on("filter",ob).on("sort",ob).on("page",ob),z.data("floatThead-attached",{destroy:function(){var a=".fth-"+y;q(),z.css(eb),U.remove(),h&&N.remove(),Y.parent().length&&Y.replaceWith(A),z.off("reflow"),I.off(a),P&&(I.length?I.unwrap():z.unwrap()),J&&z.css("minWidth",""),X.remove(),z.data("floatThead-attached",!1),j.off(a)},reflow:function(){ob()},setHeaderHeight:function(){i()},getFloatContainer:function(){return X},getRowGroups:function(){return E?X.find("thead").add(z.find("tbody,tfoot")):z.find("thead,tbody,tfoot")}}),k++}),this}}(jQuery),function(a){a.floatThead=a.floatThead||{},a.floatThead._=window._||function(){var b={},c=Object.prototype.hasOwnProperty,d=["Arguments","Function","String","Number","Date","RegExp"];return b.has=function(a,b){return c.call(a,b)},b.keys=function(a){if(a!==Object(a))throw new TypeError("Invalid object");var c=[];for(var d in a)b.has(a,d)&&c.push(d);return c},a.each(d,function(){var a=this;b["is"+a]=function(b){return Object.prototype.toString.call(b)=="[object "+a+"]"}}),b.debounce=function(a,b,c){var d,e,f,g,h;return function(){f=this,e=arguments,g=new Date;var i=function(){var j=new Date-g;b>j?d=setTimeout(i,b-j):(d=null,c||(h=a.apply(f,e)))},j=c&&!d;return d||(d=setTimeout(i,b)),j&&(h=a.apply(f,e)),h}},b}()}(jQuery);

$(document).ready(function(){

$(".tes").floatThead({scrollingTop:1});

});
</script> 
<script src="js/jquery-2.0.1.min.js"></script>
	<script src="js/jquery.base64.js"></script>
        <script src="js/jquery.btechco.excelexport.js"></script>
	<script>
            $(document).ready(function () {
                $("#tombolExport").click(function () {
                    $("#tabelExport").btechco_excelexport({
                        containerid: "tabelExport"
                       , datatype: $datatype.Table
                    });
                });
            });
	</script>

 </body>
  </html>



