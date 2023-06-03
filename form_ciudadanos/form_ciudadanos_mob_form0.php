<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - \"public\".ciudadanos"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - \"public\".ciudadanos"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
 <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
<?php
header("X-XSS-Protection: 0");
?>
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
 </SCRIPT>
 <SCRIPT type="text/javascript">
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
 </SCRIPT>
        <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
 <style type="text/css">
  #quicksearchph_t {
   position: relative;
  }
  #quicksearchph_t img {
   position: absolute;
   top: 0;
   right: 0;
  }
 </style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" media="screen" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_ciudadanos/form_ciudadanos_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_ciudadanos_mob_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_binicio_off = "<?php echo $this->arr_buttons['binicio_off']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bavanca_off = "<?php echo $this->arr_buttons['bavanca_off']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bretorna_off = "<?php echo $this->arr_buttons['bretorna_off']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
var Nav_bfinal_off  = "<?php echo $this->arr_buttons['bfinal_off']['type']; ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).show();
       $("#sc_b_ini_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ini_" + str_pos).show();
       $("#gbl_sc_b_ini_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).show();
       $("#sc_b_ret_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ret_" + str_pos).show();
       $("#gbl_sc_b_ret_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).hide();
       $("#sc_b_ini_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ini_" + str_pos).hide();
       $("#gbl_sc_b_ini_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).hide();
       $("#sc_b_ret_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ret_" + str_pos).hide();
       $("#gbl_sc_b_ret_off_" + str_pos).show();
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).show();
       $("#sc_b_fim_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_fim_" + str_pos).show();
       $("#gbl_sc_b_fim_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).show();
       $("#sc_b_avc_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_avc_" + str_pos).show();
       $("#gbl_sc_b_avc_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).hide();
       $("#sc_b_fim_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_fim_" + str_pos).hide();
       $("#gbl_sc_b_fim_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).hide();
       $("#sc_b_avc_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_avc_" + str_pos).hide();
       $("#gbl_sc_b_avc_off_" + str_pos).show();
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo substr($this->Ini->Nm_lang['lang_othr_smry_info'], strpos($this->Ini->Nm_lang['lang_othr_smry_info'], "?final?")) ?>]";
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}
<?php

include_once('form_ciudadanos_mob_jquery.php');

?>

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {

  $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
  $(".scBtnGrpClick").find("a").click(function(e){
     e.preventDefault();
  });
  $(".scBtnGrpClick").click(function(){
     var aObj = $(this).find("a"), aHref = aObj.attr("href");
     if ("javascript:" == aHref.substr(0, 11)) {
        eval(aHref.substr(11));
     }
     else {
        aObj.trigger("click");
     }
   }).mouseover(function(){
     $(this).css("cursor", "pointer");
  });
  scJQElementsAdd('');

  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).on('load', function() {
     scQuickSearchInit(false, '');
     if (document.getElementById('SC_fast_search_t')) {
         $('#SC_fast_search_t').listen();
     }
     if (document.getElementById('SC_fast_search_t')) {
         scQuickSearchKeyUp('t', null);
     }
     scQSInit = false;
   });
   function SC_btn_grp_text() {
      $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
   };
   function scQuickSearchSubmit_t() {
     nm_move('fast_search', 't');
   }

   function scQuickSearchInit(bPosOnly, sPos) {
     if (!bPosOnly) {
       if (document.getElementById('SC_fast_search_t')) {
           if ('' == sPos || 't' == sPos) {
               scQuickSearchSize('SC_fast_search_t', 'SC_fast_search_close_t', 'SC_fast_search_submit_t', 'quicksearchph_t');
           }
       }
     }
   }
   function scQuickSearchSize(sIdInput, sIdClose, sIdSubmit, sPlaceHolder) {
     var oInput = $('#' + sIdInput),
         oClose = $('#' + sIdClose),
         oSubmit = $('#' + sIdSubmit),
         oPlace = $('#' + sPlaceHolder),
         iInputP = parseInt(oInput.css('padding-right')) || 0,
         iInputB = parseInt(oInput.css('border-right-width')) || 0,
         iInputW = oInput.outerWidth(),
         iPlaceW = oPlace.outerWidth(),
         oInputO = oInput.offset(),
         oPlaceO = oPlace.offset(),
         iNewRight;
     iNewRight = (iPlaceW - iInputW) - (oInputO.left - oPlaceO.left) + iInputB + 1;
     oInput.css({
       'height': Math.max(oInput.height(), 16) + 'px',
       'padding-right': iInputP + 16 + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px'
     });
     oClose.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
     oSubmit.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
   }
   function scQuickSearchKeyUp(sPos, e) {
     if ('' != scQSInitVal && $('#SC_fast_search_' + sPos).val() == scQSInitVal && scQSInit) {
       $('#SC_fast_search_close_' + sPos).show();
       $('#SC_fast_search_submit_' + sPos).hide();
     }
     else {
       $('#SC_fast_search_close_' + sPos).hide();
       $('#SC_fast_search_submit_' + sPos).show();
     }
     if (null != e) {
       var keyPressed = e.charCode || e.keyCode || e.which;
       if (13 == keyPressed) {
         if ('t' == sPos) scQuickSearchSubmit_t();
       }
     }
   }
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['recarga'];
}
?>
<body class="scFormPage" style="<?php echo $str_iframe_body; ?>">
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_ciudadanos_mob_js0.php");
?>
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
 </script>
<form  name="F1" method="post" 
               action="form_ciudadanos_mob.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="script_case_session" value="<?php  echo $this->form_encode_input(session_id()); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" />
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_ciudadanos_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_ciudadanos_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<script type="text/javascript">
var scMsgDefTitle = "<?php echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl']; ?>";
var scMsgDefButton = "Ok";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->page; ?>";
</script>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0 >
 <tr>
  <td>
  <div class="scFormBorder">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['mostra_cab'] != "N") && (!$_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['dashboard_info']['under_dashboard'] || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['dashboard_info']['compact_mode'] || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['dashboard_info']['maximized']))
  {
?>
<tr><td>
<style>
#lin1_col1 { padding-left:9px; padding-top:5px;  height:15px;font-size:12px; font-weight:normal; overflow:hidden; text-align:left;}
#lin1_col2 { padding-right:9px; padding-top:5px; height:15px; text-align:right; overflow:hidden;   font-size:12px; font-weight:normal;}
#lin1_col3 {padding-center:12px; padding-top:5px; height:15px; text-align:center; overflow:hidden; font-size:12px; font-weight:bold;}

</style>

<div style="width: 100%">
 <div class="scFormHeader" style="height:11px; display: block; border-width:0px; "></div>
 <div style="height:55px; border-width:0px 0px 3px 0px;  border-style:solid; border-color:#ddd; display: block">
 	<table style="width:100%; border-collapse:collapse; padding:0;">
    <tr>
		<td id="lin1_col1" class="scFormHeaderFont"><span></span></td>
		<td id="lin1_col2" class="scFormHeaderFont"><span></span></td>
	</tr>	
	<tr>
		<td id="lin1_col3" colspan="2" class="scFormHeaderFont"><span></span></td>
      </tr>
    </table>		 
 </div>
</div>
</td></tr>
<?php
  }
?>
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['fast_search'][2] : "";
?> 
           <script type="text/javascript">var change_fast_t = "";</script>
          <input type="hidden" name="nmgp_fast_search_t" value="SC_all_Cmp">
          <input type="hidden" name="nmgp_cond_fast_search_t" value="qp">
          <script type="text/javascript">var scQSInitVal = "<?php echo $OPC_dat ?>";</script>
          <span id="quicksearchph_t">
           <input type="text" id="SC_fast_search_t" class="scFormToolbarInput" style="vertical-align: middle" name="nmgp_arg_fast_search_t" value="<?php echo $this->form_encode_input($OPC_dat) ?>" size="10" onChange="change_fast_t = 'CH';" alt="{watermark:'<?php echo $this->Ini->Nm_lang['lang_othr_qk_watermark'] ?>', watermarkClass: 'scFormToolbarInputWm', maxLength: 255}">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_close_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_clean; ?>" onclick="document.getElementById('SC_fast_search_t').value = ''; nm_move('fast_search', 't');">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_submit_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_search; ?>" onclick="scQuickSearchSubmit_t();">
          </span>
<?php 
      }
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "group_group_2", "scBtnGrpShow('group_2_t')", "scBtnGrpShow('group_2_t')", "sc_btgp_btn_group_2_t", "", "" . $this->Ini->Nm_lang['lang_btns_options'] . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "" . $this->Ini->Nm_lang['lang_btns_options'] . "", "", "", "__sc_grp__");?>
 
<?php
?>
<table style="border-collapse: collapse; border-width: 0; display: none; position: absolute; z-index: 1000" id="sc_btgp_div_group_2_t">
 <tr><td class="scBtnGrpBackground">
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_new_t">
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "nm_move ('novo');", "nm_move ('novo');", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_ins_t">
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "nm_atualiza ('incluir');", "nm_atualiza ('incluir');", "sc_b_ins_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_upd_t">
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "nm_atualiza ('alterar');", "nm_atualiza ('alterar');", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_del_t">
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "nm_atualiza ('excluir');", "nm_atualiza ('excluir');", "sc_b_del_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sys_separator">
 </td></tr><tr><td class="scBtnGrpBackground">
  </div>
 
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['copy'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_clone_t">
<?php echo nmButtonOutput($this->arr_buttons, "bcopy", "nm_move ('clone');", "nm_move ('clone');", "sc_b_clone_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
?>
 </td></tr>
</table>
<?php
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "R" && (!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && (!$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; text-align: center; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['empty_filter'] = true;
       }
  }
  else
  {
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['dpi']))
           {
               $this->nmgp_cmp_readonly['dpi'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dpi']))
    {
        $this->nm_new_label['dpi'] = "CUI";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dpi = $this->dpi;
   $sStyleHidden_dpi = '';
   if (isset($this->nmgp_cmp_hidden['dpi']) && $this->nmgp_cmp_hidden['dpi'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dpi']);
       $sStyleHidden_dpi = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dpi = 'display: none;';
   $sStyleReadInp_dpi = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["dpi"]) &&  $this->nmgp_cmp_readonly["dpi"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dpi']);
       $sStyleReadLab_dpi = '';
       $sStyleReadInp_dpi = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dpi']) && $this->nmgp_cmp_hidden['dpi'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dpi" value="<?php echo $this->form_encode_input($dpi) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dpi_line" id="hidden_field_data_dpi" style="<?php echo $sStyleHidden_dpi; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dpi_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dpi_label"><span id="id_label_dpi"><?php echo $this->nm_new_label['dpi']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['php_cmp_required']['dpi']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['php_cmp_required']['dpi'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["dpi"]) &&  $this->nmgp_cmp_readonly["dpi"] == "on")) { 

 ?>
<input type="hidden" name="dpi" value="<?php echo $this->form_encode_input($dpi) . "\"><span id=\"id_ajax_label_dpi\">" . $dpi . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_dpi" class="sc-ui-readonly-dpi css_dpi_line" style="<?php echo $sStyleReadLab_dpi; ?>"><?php echo $this->form_encode_input($this->dpi); ?></span><span id="id_read_off_dpi" style="white-space: nowrap;<?php echo $sStyleReadInp_dpi; ?>">
 <input class="sc-js-input scFormObjectOdd css_dpi_obj" style="" id="id_sc_field_dpi" type=text name="dpi" value="<?php echo $this->form_encode_input($dpi) ?>"
 size=15 maxlength=28 alt="{datatype: 'mask', maxLength: 15, allowedChars: '<?php echo $this->allowedCharsCharset("0123456789") ?>', lettersCase: '', maskList: '9999999999999', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '#############', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dpi_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dpi_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['primer_nombre']))
    {
        $this->nm_new_label['primer_nombre'] = "Primer Nombre";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $primer_nombre = $this->primer_nombre;
   $sStyleHidden_primer_nombre = '';
   if (isset($this->nmgp_cmp_hidden['primer_nombre']) && $this->nmgp_cmp_hidden['primer_nombre'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['primer_nombre']);
       $sStyleHidden_primer_nombre = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_primer_nombre = 'display: none;';
   $sStyleReadInp_primer_nombre = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['primer_nombre']) && $this->nmgp_cmp_readonly['primer_nombre'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['primer_nombre']);
       $sStyleReadLab_primer_nombre = '';
       $sStyleReadInp_primer_nombre = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['primer_nombre']) && $this->nmgp_cmp_hidden['primer_nombre'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="primer_nombre" value="<?php echo $this->form_encode_input($primer_nombre) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_primer_nombre_line" id="hidden_field_data_primer_nombre" style="<?php echo $sStyleHidden_primer_nombre; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_primer_nombre_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_primer_nombre_label"><span id="id_label_primer_nombre"><?php echo $this->nm_new_label['primer_nombre']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['php_cmp_required']['primer_nombre']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['php_cmp_required']['primer_nombre'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["primer_nombre"]) &&  $this->nmgp_cmp_readonly["primer_nombre"] == "on") { 

 ?>
<input type="hidden" name="primer_nombre" value="<?php echo $this->form_encode_input($primer_nombre) . "\">" . $primer_nombre . ""; ?>
<?php } else { ?>
<span id="id_read_on_primer_nombre" class="sc-ui-readonly-primer_nombre css_primer_nombre_line" style="<?php echo $sStyleReadLab_primer_nombre; ?>"><?php echo $this->form_encode_input($this->primer_nombre); ?></span><span id="id_read_off_primer_nombre" style="white-space: nowrap;<?php echo $sStyleReadInp_primer_nombre; ?>">
 <input class="sc-js-input scFormObjectOdd css_primer_nombre_obj" style="" id="id_sc_field_primer_nombre" type=text name="primer_nombre" value="<?php echo $this->form_encode_input($primer_nombre) ?>"
 size=12 maxlength=12 alt="{datatype: 'text', maxLength: 12, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_primer_nombre_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_primer_nombre_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['segundo_nombre']))
    {
        $this->nm_new_label['segundo_nombre'] = "Segundo Nombre";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $segundo_nombre = $this->segundo_nombre;
   $sStyleHidden_segundo_nombre = '';
   if (isset($this->nmgp_cmp_hidden['segundo_nombre']) && $this->nmgp_cmp_hidden['segundo_nombre'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['segundo_nombre']);
       $sStyleHidden_segundo_nombre = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_segundo_nombre = 'display: none;';
   $sStyleReadInp_segundo_nombre = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['segundo_nombre']) && $this->nmgp_cmp_readonly['segundo_nombre'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['segundo_nombre']);
       $sStyleReadLab_segundo_nombre = '';
       $sStyleReadInp_segundo_nombre = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['segundo_nombre']) && $this->nmgp_cmp_hidden['segundo_nombre'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="segundo_nombre" value="<?php echo $this->form_encode_input($segundo_nombre) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_segundo_nombre_line" id="hidden_field_data_segundo_nombre" style="<?php echo $sStyleHidden_segundo_nombre; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_segundo_nombre_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_segundo_nombre_label"><span id="id_label_segundo_nombre"><?php echo $this->nm_new_label['segundo_nombre']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["segundo_nombre"]) &&  $this->nmgp_cmp_readonly["segundo_nombre"] == "on") { 

 ?>
<input type="hidden" name="segundo_nombre" value="<?php echo $this->form_encode_input($segundo_nombre) . "\">" . $segundo_nombre . ""; ?>
<?php } else { ?>
<span id="id_read_on_segundo_nombre" class="sc-ui-readonly-segundo_nombre css_segundo_nombre_line" style="<?php echo $sStyleReadLab_segundo_nombre; ?>"><?php echo $this->form_encode_input($this->segundo_nombre); ?></span><span id="id_read_off_segundo_nombre" style="white-space: nowrap;<?php echo $sStyleReadInp_segundo_nombre; ?>">
 <input class="sc-js-input scFormObjectOdd css_segundo_nombre_obj" style="" id="id_sc_field_segundo_nombre" type=text name="segundo_nombre" value="<?php echo $this->form_encode_input($segundo_nombre) ?>"
 size=12 maxlength=12 alt="{datatype: 'text', maxLength: 12, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_segundo_nombre_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_segundo_nombre_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tercer_nombre']))
    {
        $this->nm_new_label['tercer_nombre'] = "Tercer Nombre";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tercer_nombre = $this->tercer_nombre;
   $sStyleHidden_tercer_nombre = '';
   if (isset($this->nmgp_cmp_hidden['tercer_nombre']) && $this->nmgp_cmp_hidden['tercer_nombre'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tercer_nombre']);
       $sStyleHidden_tercer_nombre = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tercer_nombre = 'display: none;';
   $sStyleReadInp_tercer_nombre = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tercer_nombre']) && $this->nmgp_cmp_readonly['tercer_nombre'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tercer_nombre']);
       $sStyleReadLab_tercer_nombre = '';
       $sStyleReadInp_tercer_nombre = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tercer_nombre']) && $this->nmgp_cmp_hidden['tercer_nombre'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tercer_nombre" value="<?php echo $this->form_encode_input($tercer_nombre) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tercer_nombre_line" id="hidden_field_data_tercer_nombre" style="<?php echo $sStyleHidden_tercer_nombre; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_tercer_nombre_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_tercer_nombre_label"><span id="id_label_tercer_nombre"><?php echo $this->nm_new_label['tercer_nombre']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["tercer_nombre"]) &&  $this->nmgp_cmp_readonly["tercer_nombre"] == "on") { 

 ?>
<input type="hidden" name="tercer_nombre" value="<?php echo $this->form_encode_input($tercer_nombre) . "\">" . $tercer_nombre . ""; ?>
<?php } else { ?>
<span id="id_read_on_tercer_nombre" class="sc-ui-readonly-tercer_nombre css_tercer_nombre_line" style="<?php echo $sStyleReadLab_tercer_nombre; ?>"><?php echo $this->form_encode_input($this->tercer_nombre); ?></span><span id="id_read_off_tercer_nombre" style="white-space: nowrap;<?php echo $sStyleReadInp_tercer_nombre; ?>">
 <input class="sc-js-input scFormObjectOdd css_tercer_nombre_obj" style="" id="id_sc_field_tercer_nombre" type=text name="tercer_nombre" value="<?php echo $this->form_encode_input($tercer_nombre) ?>"
 size=12 maxlength=12 alt="{datatype: 'text', maxLength: 12, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tercer_nombre_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tercer_nombre_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['primer_apellido']))
    {
        $this->nm_new_label['primer_apellido'] = "Primer Apellido";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $primer_apellido = $this->primer_apellido;
   $sStyleHidden_primer_apellido = '';
   if (isset($this->nmgp_cmp_hidden['primer_apellido']) && $this->nmgp_cmp_hidden['primer_apellido'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['primer_apellido']);
       $sStyleHidden_primer_apellido = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_primer_apellido = 'display: none;';
   $sStyleReadInp_primer_apellido = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['primer_apellido']) && $this->nmgp_cmp_readonly['primer_apellido'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['primer_apellido']);
       $sStyleReadLab_primer_apellido = '';
       $sStyleReadInp_primer_apellido = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['primer_apellido']) && $this->nmgp_cmp_hidden['primer_apellido'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="primer_apellido" value="<?php echo $this->form_encode_input($primer_apellido) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_primer_apellido_line" id="hidden_field_data_primer_apellido" style="<?php echo $sStyleHidden_primer_apellido; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_primer_apellido_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_primer_apellido_label"><span id="id_label_primer_apellido"><?php echo $this->nm_new_label['primer_apellido']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['php_cmp_required']['primer_apellido']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['php_cmp_required']['primer_apellido'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["primer_apellido"]) &&  $this->nmgp_cmp_readonly["primer_apellido"] == "on") { 

 ?>
<input type="hidden" name="primer_apellido" value="<?php echo $this->form_encode_input($primer_apellido) . "\">" . $primer_apellido . ""; ?>
<?php } else { ?>
<span id="id_read_on_primer_apellido" class="sc-ui-readonly-primer_apellido css_primer_apellido_line" style="<?php echo $sStyleReadLab_primer_apellido; ?>"><?php echo $this->form_encode_input($this->primer_apellido); ?></span><span id="id_read_off_primer_apellido" style="white-space: nowrap;<?php echo $sStyleReadInp_primer_apellido; ?>">
 <input class="sc-js-input scFormObjectOdd css_primer_apellido_obj" style="" id="id_sc_field_primer_apellido" type=text name="primer_apellido" value="<?php echo $this->form_encode_input($primer_apellido) ?>"
 size=12 maxlength=12 alt="{datatype: 'text', maxLength: 12, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_primer_apellido_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_primer_apellido_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['segundo_apellido']))
    {
        $this->nm_new_label['segundo_apellido'] = "Segundo Apellido";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $segundo_apellido = $this->segundo_apellido;
   $sStyleHidden_segundo_apellido = '';
   if (isset($this->nmgp_cmp_hidden['segundo_apellido']) && $this->nmgp_cmp_hidden['segundo_apellido'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['segundo_apellido']);
       $sStyleHidden_segundo_apellido = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_segundo_apellido = 'display: none;';
   $sStyleReadInp_segundo_apellido = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['segundo_apellido']) && $this->nmgp_cmp_readonly['segundo_apellido'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['segundo_apellido']);
       $sStyleReadLab_segundo_apellido = '';
       $sStyleReadInp_segundo_apellido = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['segundo_apellido']) && $this->nmgp_cmp_hidden['segundo_apellido'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="segundo_apellido" value="<?php echo $this->form_encode_input($segundo_apellido) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_segundo_apellido_line" id="hidden_field_data_segundo_apellido" style="<?php echo $sStyleHidden_segundo_apellido; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_segundo_apellido_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_segundo_apellido_label"><span id="id_label_segundo_apellido"><?php echo $this->nm_new_label['segundo_apellido']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["segundo_apellido"]) &&  $this->nmgp_cmp_readonly["segundo_apellido"] == "on") { 

 ?>
<input type="hidden" name="segundo_apellido" value="<?php echo $this->form_encode_input($segundo_apellido) . "\">" . $segundo_apellido . ""; ?>
<?php } else { ?>
<span id="id_read_on_segundo_apellido" class="sc-ui-readonly-segundo_apellido css_segundo_apellido_line" style="<?php echo $sStyleReadLab_segundo_apellido; ?>"><?php echo $this->form_encode_input($this->segundo_apellido); ?></span><span id="id_read_off_segundo_apellido" style="white-space: nowrap;<?php echo $sStyleReadInp_segundo_apellido; ?>">
 <input class="sc-js-input scFormObjectOdd css_segundo_apellido_obj" style="" id="id_sc_field_segundo_apellido" type=text name="segundo_apellido" value="<?php echo $this->form_encode_input($segundo_apellido) ?>"
 size=12 maxlength=12 alt="{datatype: 'text', maxLength: 12, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_segundo_apellido_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_segundo_apellido_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['apellido_casada']))
    {
        $this->nm_new_label['apellido_casada'] = "Apellido Casada";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $apellido_casada = $this->apellido_casada;
   $sStyleHidden_apellido_casada = '';
   if (isset($this->nmgp_cmp_hidden['apellido_casada']) && $this->nmgp_cmp_hidden['apellido_casada'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['apellido_casada']);
       $sStyleHidden_apellido_casada = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_apellido_casada = 'display: none;';
   $sStyleReadInp_apellido_casada = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['apellido_casada']) && $this->nmgp_cmp_readonly['apellido_casada'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['apellido_casada']);
       $sStyleReadLab_apellido_casada = '';
       $sStyleReadInp_apellido_casada = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['apellido_casada']) && $this->nmgp_cmp_hidden['apellido_casada'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="apellido_casada" value="<?php echo $this->form_encode_input($apellido_casada) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_apellido_casada_line" id="hidden_field_data_apellido_casada" style="<?php echo $sStyleHidden_apellido_casada; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_apellido_casada_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_apellido_casada_label"><span id="id_label_apellido_casada"><?php echo $this->nm_new_label['apellido_casada']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["apellido_casada"]) &&  $this->nmgp_cmp_readonly["apellido_casada"] == "on") { 

 ?>
<input type="hidden" name="apellido_casada" value="<?php echo $this->form_encode_input($apellido_casada) . "\">" . $apellido_casada . ""; ?>
<?php } else { ?>
<span id="id_read_on_apellido_casada" class="sc-ui-readonly-apellido_casada css_apellido_casada_line" style="<?php echo $sStyleReadLab_apellido_casada; ?>"><?php echo $this->form_encode_input($this->apellido_casada); ?></span><span id="id_read_off_apellido_casada" style="white-space: nowrap;<?php echo $sStyleReadInp_apellido_casada; ?>">
 <input class="sc-js-input scFormObjectOdd css_apellido_casada_obj" style="" id="id_sc_field_apellido_casada" type=text name="apellido_casada" value="<?php echo $this->form_encode_input($apellido_casada) ?>"
 size=12 maxlength=12 alt="{datatype: 'text', maxLength: 12, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_apellido_casada_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_apellido_casada_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['direccion_residencia']))
    {
        $this->nm_new_label['direccion_residencia'] = "Direccion";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $direccion_residencia = $this->direccion_residencia;
   $sStyleHidden_direccion_residencia = '';
   if (isset($this->nmgp_cmp_hidden['direccion_residencia']) && $this->nmgp_cmp_hidden['direccion_residencia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['direccion_residencia']);
       $sStyleHidden_direccion_residencia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_direccion_residencia = 'display: none;';
   $sStyleReadInp_direccion_residencia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['direccion_residencia']) && $this->nmgp_cmp_readonly['direccion_residencia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['direccion_residencia']);
       $sStyleReadLab_direccion_residencia = '';
       $sStyleReadInp_direccion_residencia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['direccion_residencia']) && $this->nmgp_cmp_hidden['direccion_residencia'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="direccion_residencia" value="<?php echo $this->form_encode_input($direccion_residencia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_direccion_residencia_line" id="hidden_field_data_direccion_residencia" style="<?php echo $sStyleHidden_direccion_residencia; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_direccion_residencia_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_direccion_residencia_label"><span id="id_label_direccion_residencia"><?php echo $this->nm_new_label['direccion_residencia']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['php_cmp_required']['direccion_residencia']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['php_cmp_required']['direccion_residencia'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["direccion_residencia"]) &&  $this->nmgp_cmp_readonly["direccion_residencia"] == "on") { 

 ?>
<input type="hidden" name="direccion_residencia" value="<?php echo $this->form_encode_input($direccion_residencia) . "\">" . $direccion_residencia . ""; ?>
<?php } else { ?>
<span id="id_read_on_direccion_residencia" class="sc-ui-readonly-direccion_residencia css_direccion_residencia_line" style="<?php echo $sStyleReadLab_direccion_residencia; ?>"><?php echo $this->form_encode_input($this->direccion_residencia); ?></span><span id="id_read_off_direccion_residencia" style="white-space: nowrap;<?php echo $sStyleReadInp_direccion_residencia; ?>">
 <input class="sc-js-input scFormObjectOdd css_direccion_residencia_obj" style="" id="id_sc_field_direccion_residencia" type=text name="direccion_residencia" value="<?php echo $this->form_encode_input($direccion_residencia) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_direccion_residencia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_direccion_residencia_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['direccion_zona']))
    {
        $this->nm_new_label['direccion_zona'] = "Zona";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $direccion_zona = $this->direccion_zona;
   $sStyleHidden_direccion_zona = '';
   if (isset($this->nmgp_cmp_hidden['direccion_zona']) && $this->nmgp_cmp_hidden['direccion_zona'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['direccion_zona']);
       $sStyleHidden_direccion_zona = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_direccion_zona = 'display: none;';
   $sStyleReadInp_direccion_zona = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['direccion_zona']) && $this->nmgp_cmp_readonly['direccion_zona'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['direccion_zona']);
       $sStyleReadLab_direccion_zona = '';
       $sStyleReadInp_direccion_zona = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['direccion_zona']) && $this->nmgp_cmp_hidden['direccion_zona'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="direccion_zona" value="<?php echo $this->form_encode_input($direccion_zona) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_direccion_zona_line" id="hidden_field_data_direccion_zona" style="<?php echo $sStyleHidden_direccion_zona; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_direccion_zona_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_direccion_zona_label"><span id="id_label_direccion_zona"><?php echo $this->nm_new_label['direccion_zona']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['php_cmp_required']['direccion_zona']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['php_cmp_required']['direccion_zona'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["direccion_zona"]) &&  $this->nmgp_cmp_readonly["direccion_zona"] == "on") { 

 ?>
<input type="hidden" name="direccion_zona" value="<?php echo $this->form_encode_input($direccion_zona) . "\">" . $direccion_zona . ""; ?>
<?php } else { ?>
<span id="id_read_on_direccion_zona" class="sc-ui-readonly-direccion_zona css_direccion_zona_line" style="<?php echo $sStyleReadLab_direccion_zona; ?>"><?php echo $this->form_encode_input($this->direccion_zona); ?></span><span id="id_read_off_direccion_zona" style="white-space: nowrap;<?php echo $sStyleReadInp_direccion_zona; ?>">
 <input class="sc-js-input scFormObjectOdd css_direccion_zona_obj" style="" id="id_sc_field_direccion_zona" type=text name="direccion_zona" value="<?php echo $this->form_encode_input($direccion_zona) ?>"
 size=9 alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['direccion_zona']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['direccion_zona']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_direccion_zona_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_direccion_zona_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['direccion_deptoid']))
   {
       $this->nm_new_label['direccion_deptoid'] = "Departamento";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $direccion_deptoid = $this->direccion_deptoid;
   $sStyleHidden_direccion_deptoid = '';
   if (isset($this->nmgp_cmp_hidden['direccion_deptoid']) && $this->nmgp_cmp_hidden['direccion_deptoid'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['direccion_deptoid']);
       $sStyleHidden_direccion_deptoid = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_direccion_deptoid = 'display: none;';
   $sStyleReadInp_direccion_deptoid = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['direccion_deptoid']) && $this->nmgp_cmp_readonly['direccion_deptoid'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['direccion_deptoid']);
       $sStyleReadLab_direccion_deptoid = '';
       $sStyleReadInp_direccion_deptoid = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['direccion_deptoid']) && $this->nmgp_cmp_hidden['direccion_deptoid'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="direccion_deptoid" value="<?php echo $this->form_encode_input($this->direccion_deptoid) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_direccion_deptoid_line" id="hidden_field_data_direccion_deptoid" style="<?php echo $sStyleHidden_direccion_deptoid; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_direccion_deptoid_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_direccion_deptoid_label"><span id="id_label_direccion_deptoid"><?php echo $this->nm_new_label['direccion_deptoid']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['php_cmp_required']['direccion_deptoid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['php_cmp_required']['direccion_deptoid'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["direccion_deptoid"]) &&  $this->nmgp_cmp_readonly["direccion_deptoid"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_direccion_deptoid']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_direccion_deptoid'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_direccion_deptoid']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_direccion_deptoid'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_direccion_deptoid']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_direccion_deptoid'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_direccion_deptoid']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_direccion_deptoid'] = array(); 
    }

   $old_value_dpi = $this->dpi;
   $old_value_direccion_zona = $this->direccion_zona;
   $this->nm_tira_formatacao();


   $unformatted_value_dpi = $this->dpi;
   $unformatted_value_direccion_zona = $this->direccion_zona;

   $nm_comando = "SELECT departamentoid, departamentonom
FROM \"public\".tbldepartamento 
ORDER BY departamentoid";

   $this->dpi = $old_value_dpi;
   $this->direccion_zona = $old_value_direccion_zona;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_direccion_deptoid'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $direccion_deptoid_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->direccion_deptoid_1))
          {
              foreach ($this->direccion_deptoid_1 as $tmp_direccion_deptoid)
              {
                  if (trim($tmp_direccion_deptoid) === trim($cadaselect[1])) { $direccion_deptoid_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->direccion_deptoid) === trim($cadaselect[1])) { $direccion_deptoid_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="direccion_deptoid" value="<?php echo $this->form_encode_input($direccion_deptoid) . "\">" . $direccion_deptoid_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_direccion_deptoid();
   $x = 0 ; 
   $direccion_deptoid_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->direccion_deptoid_1))
          {
              foreach ($this->direccion_deptoid_1 as $tmp_direccion_deptoid)
              {
                  if (trim($tmp_direccion_deptoid) === trim($cadaselect[1])) { $direccion_deptoid_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->direccion_deptoid) === trim($cadaselect[1])) { $direccion_deptoid_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($direccion_deptoid_look))
          {
              $direccion_deptoid_look = $this->direccion_deptoid;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_direccion_deptoid\" class=\"css_direccion_deptoid_line\" style=\"" .  $sStyleReadLab_direccion_deptoid . "\">" . $this->form_encode_input($direccion_deptoid_look) . "</span><span id=\"id_read_off_direccion_deptoid\" style=\"" . $sStyleReadInp_direccion_deptoid . "\">";
   echo " <span id=\"idAjaxSelect_direccion_deptoid\"><select class=\"sc-js-input scFormObjectOdd css_direccion_deptoid_obj\" style=\"\" id=\"id_sc_field_direccion_deptoid\" name=\"direccion_deptoid\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_direccion_deptoid'][] = ''; 
   echo "  <option value=\"\">Seleccione Departamento</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->direccion_deptoid) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->direccion_deptoid)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_direccion_deptoid_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_direccion_deptoid_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['direccion_municipioid']))
   {
       $this->nm_new_label['direccion_municipioid'] = "Municipio";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $direccion_municipioid = $this->direccion_municipioid;
   $sStyleHidden_direccion_municipioid = '';
   if (isset($this->nmgp_cmp_hidden['direccion_municipioid']) && $this->nmgp_cmp_hidden['direccion_municipioid'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['direccion_municipioid']);
       $sStyleHidden_direccion_municipioid = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_direccion_municipioid = 'display: none;';
   $sStyleReadInp_direccion_municipioid = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['direccion_municipioid']) && $this->nmgp_cmp_readonly['direccion_municipioid'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['direccion_municipioid']);
       $sStyleReadLab_direccion_municipioid = '';
       $sStyleReadInp_direccion_municipioid = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['direccion_municipioid']) && $this->nmgp_cmp_hidden['direccion_municipioid'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="direccion_municipioid" value="<?php echo $this->form_encode_input($this->direccion_municipioid) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_direccion_municipioid_line" id="hidden_field_data_direccion_municipioid" style="<?php echo $sStyleHidden_direccion_municipioid; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_direccion_municipioid_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_direccion_municipioid_label"><span id="id_label_direccion_municipioid"><?php echo $this->nm_new_label['direccion_municipioid']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['php_cmp_required']['direccion_municipioid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['php_cmp_required']['direccion_municipioid'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["direccion_municipioid"]) &&  $this->nmgp_cmp_readonly["direccion_municipioid"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_direccion_municipioid']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_direccion_municipioid'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_direccion_municipioid']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_direccion_municipioid'] = array(); 
}
if ($this->direccion_deptoid != "")
{ 
   $this->nm_clear_val("direccion_deptoid");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_direccion_municipioid']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_direccion_municipioid'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_direccion_municipioid']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_direccion_municipioid'] = array(); 
    }

   $old_value_dpi = $this->dpi;
   $old_value_direccion_zona = $this->direccion_zona;
   $this->nm_tira_formatacao();


   $unformatted_value_dpi = $this->dpi;
   $unformatted_value_direccion_zona = $this->direccion_zona;

   $nm_comando = "SELECT municipioid, municipionom 
FROM \"public\".tblmunicipios 
where departamentoid =$this->direccion_deptoid
ORDER BY municipionom";

   $this->dpi = $old_value_dpi;
   $this->direccion_zona = $old_value_direccion_zona;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_direccion_municipioid'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
} 
   $x = 0; 
   $direccion_municipioid_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->direccion_municipioid_1))
          {
              foreach ($this->direccion_municipioid_1 as $tmp_direccion_municipioid)
              {
                  if (trim($tmp_direccion_municipioid) === trim($cadaselect[1])) { $direccion_municipioid_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->direccion_municipioid) === trim($cadaselect[1])) { $direccion_municipioid_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="direccion_municipioid" value="<?php echo $this->form_encode_input($direccion_municipioid) . "\">" . $direccion_municipioid_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_direccion_municipioid();
   $x = 0 ; 
   $direccion_municipioid_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->direccion_municipioid_1))
          {
              foreach ($this->direccion_municipioid_1 as $tmp_direccion_municipioid)
              {
                  if (trim($tmp_direccion_municipioid) === trim($cadaselect[1])) { $direccion_municipioid_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->direccion_municipioid) === trim($cadaselect[1])) { $direccion_municipioid_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($direccion_municipioid_look))
          {
              $direccion_municipioid_look = $this->direccion_municipioid;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_direccion_municipioid\" class=\"css_direccion_municipioid_line\" style=\"" .  $sStyleReadLab_direccion_municipioid . "\">" . $this->form_encode_input($direccion_municipioid_look) . "</span><span id=\"id_read_off_direccion_municipioid\" style=\"" . $sStyleReadInp_direccion_municipioid . "\">";
   echo " <span id=\"idAjaxSelect_direccion_municipioid\"><select class=\"sc-js-input scFormObjectOdd css_direccion_municipioid_obj\" style=\"\" id=\"id_sc_field_direccion_municipioid\" name=\"direccion_municipioid\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->direccion_municipioid) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->direccion_municipioid)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_direccion_municipioid_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_direccion_municipioid_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['sexo']))
   {
       $this->nm_new_label['sexo'] = "Sexo";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sexo = $this->sexo;
   $sStyleHidden_sexo = '';
   if (isset($this->nmgp_cmp_hidden['sexo']) && $this->nmgp_cmp_hidden['sexo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sexo']);
       $sStyleHidden_sexo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sexo = 'display: none;';
   $sStyleReadInp_sexo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sexo']) && $this->nmgp_cmp_readonly['sexo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sexo']);
       $sStyleReadLab_sexo = '';
       $sStyleReadInp_sexo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sexo']) && $this->nmgp_cmp_hidden['sexo'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="sexo" value="<?php echo $this->form_encode_input($this->sexo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sexo_line" id="hidden_field_data_sexo" style="<?php echo $sStyleHidden_sexo; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sexo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sexo_label"><span id="id_label_sexo"><?php echo $this->nm_new_label['sexo']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sexo"]) &&  $this->nmgp_cmp_readonly["sexo"] == "on") { 

$sexo_look = "";
 if ($this->sexo == "1") { $sexo_look .= "Masculino" ;} 
 if ($this->sexo == "0") { $sexo_look .= "Femenino" ;} 
 if (empty($sexo_look)) { $sexo_look = $this->sexo; }
?>
<input type="hidden" name="sexo" value="<?php echo $this->form_encode_input($sexo) . "\">" . $sexo_look . ""; ?>
<?php } else { ?>
<?php

$sexo_look = "";
 if ($this->sexo == "1") { $sexo_look .= "Masculino" ;} 
 if ($this->sexo == "0") { $sexo_look .= "Femenino" ;} 
 if (empty($sexo_look)) { $sexo_look = $this->sexo; }
?>
<span id="id_read_on_sexo" class="css_sexo_line"  style="<?php echo $sStyleReadLab_sexo; ?>"><?php echo $this->form_encode_input($sexo_look); ?></span><span id="id_read_off_sexo" style="<?php echo $sStyleReadInp_sexo; ?>">
 <span id="idAjaxSelect_sexo"><select class="sc-js-input scFormObjectOdd css_sexo_obj" style="" id="id_sc_field_sexo" name="sexo" size="1" alt="{type: 'select', enterTab: false}">
 <option value="1" <?php  if ($this->sexo == "1") { echo " selected" ;} ?>>Masculino</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_sexo'][] = '1'; ?>
 <option value="0" <?php  if ($this->sexo == "0") { echo " selected" ;} ?>>Femenino</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_sexo'][] = '0'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sexo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sexo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['estado_civil']))
   {
       $this->nm_new_label['estado_civil'] = "Estado Civil";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $estado_civil = $this->estado_civil;
   $sStyleHidden_estado_civil = '';
   if (isset($this->nmgp_cmp_hidden['estado_civil']) && $this->nmgp_cmp_hidden['estado_civil'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['estado_civil']);
       $sStyleHidden_estado_civil = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_estado_civil = 'display: none;';
   $sStyleReadInp_estado_civil = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['estado_civil']) && $this->nmgp_cmp_readonly['estado_civil'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['estado_civil']);
       $sStyleReadLab_estado_civil = '';
       $sStyleReadInp_estado_civil = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['estado_civil']) && $this->nmgp_cmp_hidden['estado_civil'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="estado_civil" value="<?php echo $this->form_encode_input($this->estado_civil) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_estado_civil_line" id="hidden_field_data_estado_civil" style="<?php echo $sStyleHidden_estado_civil; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_estado_civil_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_estado_civil_label"><span id="id_label_estado_civil"><?php echo $this->nm_new_label['estado_civil']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["estado_civil"]) &&  $this->nmgp_cmp_readonly["estado_civil"] == "on") { 

$estado_civil_look = "";
 if ($this->estado_civil == "1") { $estado_civil_look .= "Casado" ;} 
 if ($this->estado_civil == "0") { $estado_civil_look .= "Soltero" ;} 
 if (empty($estado_civil_look)) { $estado_civil_look = $this->estado_civil; }
?>
<input type="hidden" name="estado_civil" value="<?php echo $this->form_encode_input($estado_civil) . "\">" . $estado_civil_look . ""; ?>
<?php } else { ?>
<?php

$estado_civil_look = "";
 if ($this->estado_civil == "1") { $estado_civil_look .= "Casado" ;} 
 if ($this->estado_civil == "0") { $estado_civil_look .= "Soltero" ;} 
 if (empty($estado_civil_look)) { $estado_civil_look = $this->estado_civil; }
?>
<span id="id_read_on_estado_civil" class="css_estado_civil_line"  style="<?php echo $sStyleReadLab_estado_civil; ?>"><?php echo $this->form_encode_input($estado_civil_look); ?></span><span id="id_read_off_estado_civil" style="<?php echo $sStyleReadInp_estado_civil; ?>">
 <span id="idAjaxSelect_estado_civil"><select class="sc-js-input scFormObjectOdd css_estado_civil_obj" style="" id="id_sc_field_estado_civil" name="estado_civil" size="1" alt="{type: 'select', enterTab: false}">
 <option value="1" <?php  if ($this->estado_civil == "1") { echo " selected" ;} ?>>Casado</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_estado_civil'][] = '1'; ?>
 <option value="0" <?php  if ($this->estado_civil == "0") { echo " selected" ;} ?><?php  if (empty($this->estado_civil)) { echo " selected" ;} ?>>Soltero</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_estado_civil'][] = '0'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_estado_civil_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_estado_civil_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['estado']))
   {
       $this->nm_new_label['estado'] = "Estado";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $estado = $this->estado;
   $sStyleHidden_estado = '';
   if (isset($this->nmgp_cmp_hidden['estado']) && $this->nmgp_cmp_hidden['estado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['estado']);
       $sStyleHidden_estado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_estado = 'display: none;';
   $sStyleReadInp_estado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['estado']) && $this->nmgp_cmp_readonly['estado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['estado']);
       $sStyleReadLab_estado = '';
       $sStyleReadInp_estado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['estado']) && $this->nmgp_cmp_hidden['estado'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="estado" value="<?php echo $this->form_encode_input($this->estado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_estado_line" id="hidden_field_data_estado" style="<?php echo $sStyleHidden_estado; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_estado_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_estado_label"><span id="id_label_estado"><?php echo $this->nm_new_label['estado']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['php_cmp_required']['estado']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['php_cmp_required']['estado'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["estado"]) &&  $this->nmgp_cmp_readonly["estado"] == "on") { 

$estado_look = "";
 if ($this->estado == "E") { $estado_look .= "Emitido" ;} 
 if ($this->estado == "O") { $estado_look .= "Operado" ;} 
 if ($this->estado == "F") { $estado_look .= "Fallecido" ;} 
 if ($this->estado == "A") { $estado_look .= "Anulado" ;} 
 if (empty($estado_look)) { $estado_look = $this->estado; }
?>
<input type="hidden" name="estado" value="<?php echo $this->form_encode_input($estado) . "\">" . $estado_look . ""; ?>
<?php } else { ?>
<?php

$estado_look = "";
 if ($this->estado == "E") { $estado_look .= "Emitido" ;} 
 if ($this->estado == "O") { $estado_look .= "Operado" ;} 
 if ($this->estado == "F") { $estado_look .= "Fallecido" ;} 
 if ($this->estado == "A") { $estado_look .= "Anulado" ;} 
 if (empty($estado_look)) { $estado_look = $this->estado; }
?>
<span id="id_read_on_estado" class="css_estado_line"  style="<?php echo $sStyleReadLab_estado; ?>"><?php echo $this->form_encode_input($estado_look); ?></span><span id="id_read_off_estado" style="<?php echo $sStyleReadInp_estado; ?>">
 <span id="idAjaxSelect_estado"><select class="sc-js-input scFormObjectOdd css_estado_obj" style="" id="id_sc_field_estado" name="estado" size="1" alt="{type: 'select', enterTab: false}">
 <option value="E" <?php  if ($this->estado == "E") { echo " selected" ;} ?>>Emitido</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_estado'][] = 'E'; ?>
 <option value="O" <?php  if ($this->estado == "O") { echo " selected" ;} ?><?php  if (empty($this->estado)) { echo " selected" ;} ?>>Operado</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_estado'][] = 'O'; ?>
 <option value="F" <?php  if ($this->estado == "F") { echo " selected" ;} ?>>Fallecido</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_estado'][] = 'F'; ?>
 <option value="A" <?php  if ($this->estado == "A") { echo " selected" ;} ?>>Anulado</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['Lookup_estado'][] = 'A'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_estado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_estado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } ?>
   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
<?php
  }
?>
</td></tr>
<tr><td class="scFormPageText">
<span class="scFormRequiredOddColor">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio_off", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna_off", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca_off", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal_off", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none; position: absolute; left: 50px; top: 50px"><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['masterValue']);
?>
}
<?php
    }
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_ciudadanos_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_ciudadanos_mob");
 parent.scAjaxDetailHeight("form_ciudadanos_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_ciudadanos_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_ciudadanos_mob", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
    }
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
?>
<script type="text/javascript">
_scAjaxShowMessage(scMsgDefTitle, "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", false, sc_ajaxMsgTime, false, "Ok", 0, 0, 0, 0, "", "", "", false, true);
</script>
<?php
}
?>
<?php
if ('' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ciudadanos_mob']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-out"><?php echo $this->Ini->Nm_lang['lang_version_web']; ?></span>
<?php
       }
?>
</body> 
</html> 
