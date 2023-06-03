
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
  scEventControl_data["idcentro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["descripcion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["direccion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["departamento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["municipio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["idcentro" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idcentro" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["descripcion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["descripcion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["direccion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["direccion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["departamento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["departamento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["municipio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["municipio" + iSeqRow]["change"]) {
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
  if ("departamento" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("municipio" + iSeq == fieldName) {
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
  $('#id_sc_field_idcentro' + iSeqRow).bind('blur', function() { sc_form_tblcentro_votacion_idcentro_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_tblcentro_votacion_idcentro_onfocus(this, iSeqRow) });
  $('#id_sc_field_descripcion' + iSeqRow).bind('blur', function() { sc_form_tblcentro_votacion_descripcion_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_tblcentro_votacion_descripcion_onfocus(this, iSeqRow) });
  $('#id_sc_field_direccion' + iSeqRow).bind('blur', function() { sc_form_tblcentro_votacion_direccion_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_tblcentro_votacion_direccion_onfocus(this, iSeqRow) });
  $('#id_sc_field_departamento' + iSeqRow).bind('blur', function() { sc_form_tblcentro_votacion_departamento_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_tblcentro_votacion_departamento_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_tblcentro_votacion_departamento_onfocus(this, iSeqRow) });
  $('#id_sc_field_municipio' + iSeqRow).bind('blur', function() { sc_form_tblcentro_votacion_municipio_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_tblcentro_votacion_municipio_onfocus(this, iSeqRow) });
  $('#id_sc_field_estado' + iSeqRow).bind('blur', function() { sc_form_tblcentro_votacion_estado_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_tblcentro_votacion_estado_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_tblcentro_votacion_idcentro_onblur(oThis, iSeqRow) {
  do_ajax_form_tblcentro_votacion_mob_validate_idcentro();
  scCssBlur(oThis);
}

function sc_form_tblcentro_votacion_idcentro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tblcentro_votacion_descripcion_onblur(oThis, iSeqRow) {
  do_ajax_form_tblcentro_votacion_mob_validate_descripcion();
  scCssBlur(oThis);
}

function sc_form_tblcentro_votacion_descripcion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tblcentro_votacion_direccion_onblur(oThis, iSeqRow) {
  do_ajax_form_tblcentro_votacion_mob_validate_direccion();
  scCssBlur(oThis);
}

function sc_form_tblcentro_votacion_direccion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tblcentro_votacion_departamento_onblur(oThis, iSeqRow) {
  do_ajax_form_tblcentro_votacion_mob_validate_departamento();
  scCssBlur(oThis);
}

function sc_form_tblcentro_votacion_departamento_onchange(oThis, iSeqRow) {
  do_ajax_form_tblcentro_votacion_mob_refresh_departamento();
}

function sc_form_tblcentro_votacion_departamento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tblcentro_votacion_municipio_onblur(oThis, iSeqRow) {
  do_ajax_form_tblcentro_votacion_mob_validate_municipio();
  scCssBlur(oThis);
}

function sc_form_tblcentro_votacion_municipio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tblcentro_votacion_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_tblcentro_votacion_mob_validate_estado();
  scCssBlur(oThis);
}

function sc_form_tblcentro_votacion_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
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
