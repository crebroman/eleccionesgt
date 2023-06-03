
function scJQGeneralAdd() {
  $('input:text.sc-js-input').listen();
  $('input:password.sc-js-input').listen();
  $('input:checkbox.sc-js-input').listen();
  $('input:radio.sc-js-input').listen();
  $('select.sc-js-input').listen();
  $('textarea.sc-js-input').listen();

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if (false == scSetFocusOnField($oField) && $("#id_ac_" + sField).length > 0) {
    if (false == scSetFocusOnField($("#id_ac_" + sField))) {
      setTimeout(function() { scSetFocusOnField($("#id_ac_" + sField)); }, 500);
    }
  }
  else {
    setTimeout(function() { scSetFocusOnField($oField); }, 500);
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["dpi" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["fecha_registro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["idcentro_votacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["numero_padron" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["departamentoid" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["municipioid" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["dpi" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dpi" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fecha_registro" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fecha_registro" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["idcentro_votacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idcentro_votacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["numero_padron" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["numero_padron" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["departamentoid" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["departamentoid" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["municipioid" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["municipioid" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["estado" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("idcentro_votacion" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("departamentoid" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("municipioid" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("estado" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_dpi' + iSeqRow).bind('blur', function() { sc_form_registro_ciudadanos_dpi_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_registro_ciudadanos_dpi_onfocus(this, iSeqRow) });
  $('#id_sc_field_fecha_registro' + iSeqRow).bind('blur', function() { sc_form_registro_ciudadanos_fecha_registro_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_registro_ciudadanos_fecha_registro_onfocus(this, iSeqRow) });
  $('#id_sc_field_idcentro_votacion' + iSeqRow).bind('blur', function() { sc_form_registro_ciudadanos_idcentro_votacion_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_registro_ciudadanos_idcentro_votacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_numero_padron' + iSeqRow).bind('blur', function() { sc_form_registro_ciudadanos_numero_padron_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_registro_ciudadanos_numero_padron_onfocus(this, iSeqRow) });
  $('#id_sc_field_departamentoid' + iSeqRow).bind('blur', function() { sc_form_registro_ciudadanos_departamentoid_onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_registro_ciudadanos_departamentoid_onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_registro_ciudadanos_departamentoid_onfocus(this, iSeqRow) });
  $('#id_sc_field_municipioid' + iSeqRow).bind('blur', function() { sc_form_registro_ciudadanos_municipioid_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_registro_ciudadanos_municipioid_onfocus(this, iSeqRow) });
  $('#id_sc_field_estado' + iSeqRow).bind('blur', function() { sc_form_registro_ciudadanos_estado_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_registro_ciudadanos_estado_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_registro_ciudadanos_dpi_onblur(oThis, iSeqRow) {
  do_ajax_form_registro_ciudadanos_mob_validate_dpi();
  scCssBlur(oThis);
  do_ajax_form_registro_ciudadanos_mob_event_dpi_onblur();
}

function sc_form_registro_ciudadanos_dpi_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_registro_ciudadanos_fecha_registro_onblur(oThis, iSeqRow) {
  do_ajax_form_registro_ciudadanos_mob_validate_fecha_registro();
  scCssBlur(oThis);
}

function sc_form_registro_ciudadanos_fecha_registro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_registro_ciudadanos_idcentro_votacion_onblur(oThis, iSeqRow) {
  do_ajax_form_registro_ciudadanos_mob_validate_idcentro_votacion();
  scCssBlur(oThis);
}

function sc_form_registro_ciudadanos_idcentro_votacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_registro_ciudadanos_numero_padron_onblur(oThis, iSeqRow) {
  do_ajax_form_registro_ciudadanos_mob_validate_numero_padron();
  scCssBlur(oThis);
}

function sc_form_registro_ciudadanos_numero_padron_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_registro_ciudadanos_departamentoid_onblur(oThis, iSeqRow) {
  do_ajax_form_registro_ciudadanos_mob_validate_departamentoid();
  scCssBlur(oThis);
}

function sc_form_registro_ciudadanos_departamentoid_onchange(oThis, iSeqRow) {
  do_ajax_form_registro_ciudadanos_mob_refresh_departamentoid();
}

function sc_form_registro_ciudadanos_departamentoid_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_registro_ciudadanos_municipioid_onblur(oThis, iSeqRow) {
  do_ajax_form_registro_ciudadanos_mob_validate_municipioid();
  scCssBlur(oThis);
}

function sc_form_registro_ciudadanos_municipioid_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_registro_ciudadanos_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_registro_ciudadanos_mob_validate_estado();
  scCssBlur(oThis);
}

function sc_form_registro_ciudadanos_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_fecha_registro" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fecha_registro" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['fecha_registro']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

var scBtnGrpStatus = {};
function scBtnGrpShow(sGroup) {
  var btnPos = $('#sc_btgp_btn_' + sGroup).offset();
  scBtnGrpStatus[sGroup] = 'open';
  $('#sc_btgp_btn_' + sGroup).mouseout(function() {
    setTimeout(function() {
      scBtnGrpHide(sGroup);
    }, 1000);
  });
  $('#sc_btgp_div_' + sGroup + ' span a').click(function() {
    scBtnGrpStatus[sGroup] = 'out';
    scBtnGrpHide(sGroup);
  });
  $('#sc_btgp_div_' + sGroup).css({
    'left': btnPos.left
  })
  .mouseover(function() {
    scBtnGrpStatus[sGroup] = 'over';
  })
  .mouseleave(function() {
    scBtnGrpStatus[sGroup] = 'out';
    setTimeout(function() {
      scBtnGrpHide(sGroup);
    }, 1000);
  })
  .show('fast');
}
function scBtnGrpHide(sGroup) {
  if ('over' != scBtnGrpStatus[sGroup]) {
    $('#sc_btgp_div_' + sGroup).hide('fast');
  }
}
