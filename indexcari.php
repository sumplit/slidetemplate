<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">
    
    <title>Template for Bootstrap</title>   

    <!-- Bootstrap core CSS --> 
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
    
    <!-- Styles for textbox autocomplete -->
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  
    <!--Bootstrap datepicker-->
      <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
      <link rel="stylesheet" type="text/css" href="css/theme.css">

   <!--Theme layer paralax-->
   <link rel="stylesheet" type="text/css" media="screen" href="css/sequencejs-theme.sliding-horizontal-parallax.css" />
  
   <!-- align layout 2 column-->
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

  <!--style form-->
  <link href="css/style2.css" rel="stylesheet">
<meta name="keywords" content="Elegent Tab Forms,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
  
  <!--css dropdown select-->
<link rel="stylesheet" href="css/bootstrap-select.css">
  
  <style type="text/css">
   #kanan
   {
   width:100%;
   position: absolute;
   top :70px;
   z-index: 1;
   } 
   #kiri
   {
  width:30%;
  position: absolute;
  height:600px;
  right: 580px;   
  top:180px;      
  z-index: 2;     
   } 

</style>

<script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery-ui.js"></script>
 
 
  <script type="text/javascript">
    $(document).ready(function(){
      $("#tanggal,#tanggal2,#tanggal3,#tanggal4").datepicker({
        defaultdate:"today",
        //showOn: "button",   
      //  buttonImage: "img/calendar.png",
      //  buttonImageOnly: true,
        //buttonText: "Select Date",
       // changeMonth: true,
        minDate: 0,
        changeYear: true,
        showAnim:"slide",
        numberOfMonths: 2,
        dateFormat:"yy-mm-dd",
        showButtonPanel: false
        });

    });

  </script>
 <script>
/*
$(function(){
 $('input[name="radiobutton"]').on('click' , function(){
  if ($(this).val()=='yes_radio'){
      $('#tanggal2').show();
      }
   else{
     $('#tanggal2').hide();
     }
     });
   });
*/

function disablefield(){
 if (document.getElementById('yes_radio').checked == 1)
 { document.getElementById('tanggal2').disabled='disabled'; 
 document.getElementById('tanggal2').value='----------'; 
 }
 else{
  document.getElementById('tanggal2').disabled=''; 
 document.getElementById('tanggal2').value=''; } 
 } 

 </script>

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls=>
            <span class="sr-only">Toggle navigation</span>
          
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>  
<div id="kiri">
    <div class="container">
    <div class="starter template">

</div>
</div>
    <div class="container">
<div class="sap_tabs">	

  <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
        <ul class="resp-tabs-list">
             <li class="resp-tab-item" aria-controls="tab_item-0" role="tab">
                <span class="fa fa-plane">Tiket Pesawat</span>
              </li>
                             
              <li class="resp-tab-item lost" aria-controls="tab_item-1" role="tab">
               <span class="fa fa-home">Hotel</span>
              </li>
              
              <div class="clear"></div>
         </ul>		
            <div class="resp-tabs-container">
            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
       <div class="facts">
<!--login1-->
      <div class="register">

      <!-- FORM ACTION-->
       <form  action="tdomga.php" method="POST" id="form1">
           <p><i class="fa fa-plane" ></i> Cari Jadwal Pesawat</p>
       
<input type="radio" name="radiobutton" id="yes_radio" onChange="disablefield();"  />One Way
<input type="radio" name="radiobutton" id="yes_radio"  onChange="disablefield();"  checked/>Return Trip  
<!--<input type="radio" name="radiobutton" id="no_radio"  onChange="hidefield();" />one way -->
       <br><br>
           <table>
            <tr>
                <input placeholder="From " class="form-control input-sm bg-info" id="d" name="d" type="text" 
                  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
            </tr>
            <br><tr>  </tr>
            <tr>
                <input placeholder="To" class="form-control input-sm bg-info" id="a" name="a" type="text"
                onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
             </tr>   
<br>
       <tr>
       <td>
            <input placeholder="Depart Date" class="form-control" size="12"  type="date" id="tanggal" name="tanggal" >
    </td>
    <td><img src="img/calendar.png"></td>
<td>&nbsp;</td>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td> 
 
 <td>
<input placeholder="Return Date" class="form-control" size="12"  type="date" id="tanggal2" name="tanggal2">
       </td>
        <td><img src="img/calendar.png"></td>
        
     </tr>
</table>

<div class="col-lg-10">
<table cellspasing="10" cellpadding="10">
  <tr>
      <td align="left"><p >Adult:</p></td>
      <td width="13%">
       <select id="adult" name="adult" class="selectpicker show-tick form-control">
                 <option selected="selected" >1</option>
                 <option  >2</option>
                 <option >3</option>
                 <option >4</option>
                 <option >5</option>
                 <option >6</option>
                 <option >7</option>
            </select>
      </td>

       <td>&nbsp; </td><td>&nbsp; </td><td>&nbsp; </td><td>&nbsp; </td>

      <td align="center" width="40%"><p fontsize="15">Infants(&#60;2years):</p></td>
      <td>
      <select id="infant" name="infant" class="selectpicker show-tick form-control" >
             <option selected='selected' value='0'>0</option>
             <option  value='1'>1</option>
             <option  value='2'>2</option>
             <option  value='3'>3</option>
           </select>
       </td>
        <td>&nbsp;</td><td>&nbsp; </td> <td>&nbsp; </td><td>&nbsp; </td>
</tr>
<tr>
      <td align="right"><p>Child:</p></td>
        <td>
           <select id="child" name="child" class="selectpicker show-tick form-control">
            <option selected='selected' value='0'>0</option>
            <option  value='1'>1</option>
            <option  value='2'>2</option>
            <option  value='3'>3</option>
           </select>
        </td>
   </tr>   
    </table>
</div>
    <button type="submit"class="btn btn-danger">
     <span class="fa  fa-search"></span>
          Cari Pesawat</button> 
         </fieldset>
            </form>   
             </div>
           </div>
       </div>   
  
   <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
        <div class="facts"> 
        <form class="sub">
            <table>
            <tr>
            <p>Booking hotel location <i class="fa fa-university" ></i></p> 
             <select class="form-control">
                 <optgroup label="Indonesia">
                                            <option >Ambon</option>
                                           <option >Bali</option>
                                           <option >Banda Aceh</option>
                                           <option >Bandar Lampung</option>
                                           <option >Bandung</option>
                                           <option >Bangka</option>
                                           <option >Banjarmasin</option>
                                           <option >Batam</option>
                                           <option >Bengkulu</option>
                                           <option >Gorontalo</option>
                                           <option >Jakarta</option>
                                           <option >Jambi</option>
                                           <option >Jayapura</option>
                                           <option >Kendari</option>
                                           <option >Kupang</option>
                                           <option >Lombok</option>
                                           <option >Makassar</option>
                                           <option >Mamuju</option>
                                           <option >Manado</option>
                                           <option >Manokwari</option>
                                           <option >Medan</option>
                                           <option >Padang</option>
                                           <option >Palangkaraya</option>
                                           <option >Palembang</option>
                                           <option >Palu</option>
                                           <option >Pekanbaru</option>
                                           <option >Pontianak</option>
                                           <option >Samarinda</option>
                                           <option >Semarang</option>
                                           <option >Serang</option>
                                           <option >Surabaya</option>
                                           <option >Tanjungpinang</option>
                                           <option >Yogyakarta</option>
                                    </optgroup>
             </select>
    </tr>
 <br>
  <tr>
        <td>  
            <input placeholder="Check-in"class="form-control"  type="text" size="12"id="tanggal3" name="tanggal3">
        </td>
         <td><img src="img/calendar.png"></td>
         
         <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        <td>
            <input placeholder="Check-Out"class="form-control"  type="text" size="12" id="tanggal4" name="tanggal4">        
           </td>
        <td><img src="img/calendar.png"></td>
        </tr> 
</table>
 <table cellspasing="10" cellpadding="10">
  <tr>
      <td align="left"><p>Adult:</p></td>
<td>       <select>
                 <option selected='selected' value='1'>1</option>
                 <option  value='2'>2</option>
                 <option  value='3'>3</option>
                 <option  value='4'>4</option>
                 <option  value='5'>5</option>
                 <option  value='6'>6</option>
                 <option  value='7'>7</option>
            </select>
      </td>

<td>&nbsp; </td><td>&nbsp; </td><td>&nbsp; </td><td>&nbsp; </td>

      <td align="center"><p>Infants( &#60; 2 years):</p></td>
<td>
      <select>
             <option selected='selected' value='0'>0</option>
             <option  value='1'>1</option>
             <option  value='2'>2</option>
             <option  value='3'>3</option>
           </select>    
       </td>

<td>&nbsp;</td><td>&nbsp; </td> <td>&nbsp; </td><td>&nbsp; </td>

      <td align="right"><p>Child:</p></td>
      <td>
        <select>
            <option selected='selected' value='0'>0</option>
            <option  value='1'>1</option>
            <option  value='2'>2</option>
            <option  value='3'>3</option>
          </select>
        </td>
    </tr>
    </table> 
    <br>
    <br>   
     <button type="submit"class="btn btn-danger">
     <span class="fa fa-search"></span>
     Cari Hotel</button> 
     </form>
     </div>
     </div>
     </div>
     </div>
</div>
</div>
</div><!-- /.container -->
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js.1"></script>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/jquery.js"></script>   
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>
     <script type="text/javascript" src="js/jquery-ui.js"></script>
     <script type="text/javascript" src="js/bootstrap-select.js"></script> 
     <script>
      var arrNamaKota = ["Ambon(AMQ)","Alor(ARD)","Anggi(AGD)","Arso(ARJ)","Atambua(ABU)",
                        "Babo(BXB)","Bali(DPS)","Balikpapan(BPN)","Banda Aceh(BTJ)","Bandar Lampung(TKG)",
                        "Bandung(BDO)","Bangkok(DMK)","Banjarmasin(BDJ)","Batam(BTH)","Bajawa(BJW)","Bau-bau(BUW)","Buli(WUB)",
                       "Bengkulu(BKS)","Berau(BEJ)","Biak(BIK)","Bima(BMU)","Bintuni(NTI)",
                        "Buol(UOL)","Banyuwangi(DQJ)",
                       "Cirebon(CBN)","Cilacap(CXP)","Cengkareng(CGK)", "Ciamis(NSW)",
                        "Dabo Singkep(SQI)","Denpasar(DPS)", "Djambi(DJB)", "Djayapura(DJJ)", "Dili(DIL)",
                        "Enarotali(EWI)","Ende(ENE)","Galela(GLX)","Gebe(GBE)","Gorontalo(GTO)","Gunung Sitoli(GNS)",
                         "Halim(HLP)","Hat Yai(HDY)","Ho Chi Minh City(SGN)",
                          "Inanwatan(INX)","Ipoh(IPH)","Jakarta-Cengkareng(CGK)","Jakarta-HalimPerdanaKusuma(HLP)","Jambi(DJB)",
                          "Jayapura(DJJ)","Jember(JBB)","Jogjakarta(JOG)","JohorBaru(JHB)","Kaimana(KNG)","Karimunjawa(KWB)",   
                          "Kendari(KDI)","Kerinci(KRC)","Ketapang(KTG)","Kualalumpur(KUL)","Kupang(KOE)","Kambuaya(KBX)",       
                          "Kebar(KEQ)", "Kepi(KEI)", "Kiman(KMM)", "Kotabaru(KBU)","Labuhan Bajo(LBJ)","Larantuka(LKA)",        
                          "Lewoleba(LOW)","Lubuklinggau(LLG)","Luwuk(LUW)",
                           "Lahore(LHE)","Lampung(TKG)","Langgur(LUV)", "Langkawi(LGK)","Larnaca(LCA)", "Lereh(LHI)",
                             "Lhokseumawe(LSW)","Lombok(LOP)", "Luyuk(LYK)","Malang(MLG)","Makasar(UPG)","Mamuju(MJU)","Manado(MDC)",
                             "Manokwari(MKW)","Masamba(MXB)","Mataram(AMI)","Malacca(MKZ)","Maumere(MOF)","Medan(KNO)","Melonguane(MNA)",
                            "Merauke(MKQ)","Mangole(MAL)", "Morotai(OTI)","Matak(MWK)","Natuna(NTX)","Nunukan(NNX)","Nabire(NBX)",
                            "Namlea(NAM)","Namrole(NRE)","Numfor Timur","Nias(GNS)","Okaba(OKQ)", "Oksibil(OKL)","Padang(PDG)",   
                            "Palangka Raya(PKY)","Palu(PLW)","Pangkalan Bun(PKN)","Pangkalpinang(PGK)","Palembang(PLM)",
                             "Pekanbaru(PKU)","Penang(PEN)","Pinangsori(FLZ)", "Pomalaa(PUM)","Pontianak(PNK)","Poso(PSJ)", "Pangandaran(NSW)",
                           "Papua(DJJ)","Purwokerto(PWL)","PutusSibau(PSU)","Raha(RAQ)","Rote(RTI)","Ruteng(RTG)","Rengat(RGT)",
                          "Samarinda(SRI)","Sampit(SMQ)","Sanana(SQN)","Sarmi(ZRM)","Saumlaki(SXK)","Selayar(YKR)","Semarang(SRG)","Serui(ZRI)",
                         "Sibolga(AEG)","Silangit(DTB)","Simeuleu(SMG)","Singapore(SIN)","Singkep(SIQ)","Solo(SOC)","Sorong(SOQ)","Sumbawa(SWQ)",
                          "Sawu(SAU)","Sinak(NKD)","Surabaya(SUB)","Tahuna(NAH)","Taliabu(TAX)","Tanah Merah(TMH)","Tanjung Pandan(TJQ)",
                          "Tanjung Karang(TKG)", "Tawau(TWU)", "Tarakan(TRK)","Terengganu(TGG)","Ternate(TTE)","Tobelo(KAZ)","Toli(TLI)",
                          "Timika(TIM)","Ujungpandang(UPG)","Wamena(WMX)","Wangi-wangi(WGI)", "Yogyakarta(JOG)"];
  $(document).ready(function() {
   $("#d,#a").autocomplete({
                           source: arrNamaKota
         });                 
        });                  


</script>



<script src="js/jquery.sequence-min.js"></script>
<script src="js/sequencejs-options.sliding-horizontal-parallax.js"></script>

<div id="kanan">
<div id="sequence">
        <img class="sequence-prev" src="img/bt-prev.png" alt="Previous" />
        <img class="sequence-next" src="img/bt-next.png" alt="Next" />
      
  <ul class="sequence-canvas">
      <li class="animate-in"> 
      <div class="info">
      <h2>Built using Sequence.js</h2>
     <p>The Responsive Slider with Advanced CSS3 Transitions</p>
      </div>
      <img class="sky" src="img/bg-clouds.png" alt="Blue Sky" />
      <img class="balloon" src="img/balloon.png" alt="Balloon" />
       </li>

  <li>
    <div class="info">
      <h2>Creative Control</h2>
      <p>Create unique sliders using CSS3 transitions -- no jQuery knowledge required!</p>
    </div>
   <img class="sky" src="img/bg-clouds.png" alt="Blue Sky" />
   <img class="aeroplane" src="img/aeroplane.png" alt="Aeroplane" />
    </li>
     <li>
   <div class="info">
     <h2>Cutting Edge</h2>
     <p>Supports modern browsers, old browsers (IE7+), touch devices and responsive designs</p>
  </div>
  <img class="sky" src="img/bg-clouds.png" alt="Blue Sky" />
  <img class="kite" src="img/kite.png" alt="Kite" />

    </li>
      </ul>
        </div>
 </div>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

</script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>

        <script type="text/javascript">
        
                  $(document).ready(function () {
                  
                   $('#horizontalTab').easyResponsiveTabs({
                              
                    type: 'default', //Types: default, vertical, accordion           
                                           
                   width: 'auto', //auto or any width like 600px
                                                         
                   fit: true   // 100% fit in a container
                                                                        
                                                                                    });
                                                                                    
                                                                                              });
                                                                                              
    </script>
                                                                                                         
  </body>
</html>  

