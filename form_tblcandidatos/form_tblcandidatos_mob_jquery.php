
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
  scEventControl_data["idcandidato" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["dpi" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["apellido" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["departamentoid" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["municipioid" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cargo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["partido" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["idcandidato" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idcandidato" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dpi" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dpi" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nombre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nombre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["apellido" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["apellido" + iSeqRow]["change"]) {
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
  if (scEventControl_data["cargo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cargo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["partido" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["partido" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("dpi" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("departamentoid" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("cargo" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("partido" + iSeq == fieldName) {
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
  $('#id_sc_field_idcandidato' + iSeqRow).bind('blur', function() { sc_form_tblcandidatos_idcandidato_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_tblcandidatos_idcandidato_onfocus(this, iSeqRow) });
  $('#id_sc_field_dpi' + iSeqRow).bind('blur', function() { sc_form_tblcandidatos_dpi_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_tblcandidatos_dpi_onfocus(this, iSeqRow) });
  $('#id_sc_field_nombre' + iSeqRow).bind('blur', function() { sc_form_tblcandidatos_nombre_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_tblcandidatos_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_apellido' + iSeqRow).bind('blur', function() { sc_form_tblcandidatos_apellido_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_tblcandidatos_apellido_onfocus(this, iSeqRow) });
  $('#id_sc_field_departamentoid' + iSeqRow).bind('blur', function() { sc_form_tblcandidatos_departamentoid_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_tblcandidatos_departamentoid_onfocus(this, iSeqRow) });
  $('#id_sc_field_municipioid' + iSeqRow).bind('blur', function() { sc_form_tblcandidatos_municipioid_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_tblcandidatos_municipioid_onfocus(this, iSeqRow) });
  $('#id_sc_field_cargo' + iSeqRow).bind('blur', function() { sc_form_tblcandidatos_cargo_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_tblcandidatos_cargo_onfocus(this, iSeqRow) });
  $('#id_sc_field_partido' + iSeqRow).bind('blur', function() { sc_form_tblcandidatos_partido_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_tblcandidatos_partido_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_tblcandidatos_idcandidato_onblur(oThis, iSeqRow) {
  do_ajax_form_tblcandidatos_mob_validate_idcandidato();
  scCssBlur(oThis);
}

function sc_form_tblcandidatos_idcandidato_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tblcandidatos_dpi_onblur(oThis, iSeqRow) {
  do_ajax_form_tblcandidatos_mob_validate_dpi();
  scCssBlur(oThis);
}

function sc_form_tblcandidatos_dpi_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tblcandidatos_nombre_onblur(oThis, iSeqRow) {
  do_ajax_form_tblcandidatos_mob_validate_nombre();
  scCssBlur(oThis);
}

function sc_form_tblcandidatos_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tblcandidatos_apellido_onblur(oThis, iSeqRow) {
  do_ajax_form_tblcandidatos_mob_validate_apellido();
  scCssBlur(oThis);
}

function sc_form_tblcandidatos_apellido_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tblcandidatos_departamentoid_onblur(oThis, iSeqRow) {
  do_ajax_form_tblcandidatos_mob_validate_departamentoid();
  scCssBlur(oThis);
}

function sc_form_tblcandidatos_departamentoid_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tblcandidatos_municipioid_onblur(oThis, iSeqRow) {
  do_ajax_form_tblcandidatos_mob_validate_municipioid();
  scCssBlur(oThis);
}

function sc_form_tblcandidatos_municipioid_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tblcandidatos_cargo_onblur(oThis, iSeqRow) {
  do_ajax_form_tblcandidatos_mob_validate_cargo();
  scCssBlur(oThis);
}

function sc_form_tblcandidatos_cargo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tblcandidatos_partido_onblur(oThis, iSeqRow) {
  do_ajax_form_tblcandidatos_mob_validate_partido();
  scCssBlur(oThis);
}

function sc_form_tblcandidatos_partido_onfocus(oThis, iSeqRow) {
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
