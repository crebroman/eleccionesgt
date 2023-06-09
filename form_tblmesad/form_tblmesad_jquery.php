
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
  scEventControl_data["id_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cargo_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["nombre_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["estado_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["idmesa_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["id_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cargo_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cargo_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nombre_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nombre_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["estado_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["estado_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["idmesa_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idmesa_" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_active_all() {
  for (var i = 1; i < iAjaxNewLine; i++) {
    if (scEventControl_active(i)) {
      return true;
    }
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("cargo_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("estado_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("idmesa_" + iSeq == fieldName) {
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
  $('#id_sc_field_idmesa_' + iSeqRow).bind('blur', function() { sc_form_tblmesad_idmesa__onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_tblmesad_idmesa__onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_tblmesad_idmesa__onfocus(this, iSeqRow) });
  $('#id_sc_field_id_' + iSeqRow).bind('blur', function() { sc_form_tblmesad_id__onblur(this, iSeqRow) })
                                 .bind('change', function() { sc_form_tblmesad_id__onchange(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_tblmesad_id__onfocus(this, iSeqRow) });
  $('#id_sc_field_cargo_' + iSeqRow).bind('blur', function() { sc_form_tblmesad_cargo__onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_tblmesad_cargo__onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_tblmesad_cargo__onfocus(this, iSeqRow) });
  $('#id_sc_field_nombre_' + iSeqRow).bind('blur', function() { sc_form_tblmesad_nombre__onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_tblmesad_nombre__onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_tblmesad_nombre__onfocus(this, iSeqRow) });
  $('#id_sc_field_estado_' + iSeqRow).bind('blur', function() { sc_form_tblmesad_estado__onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_tblmesad_estado__onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_tblmesad_estado__onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_tblmesad_idmesa__onblur(oThis, iSeqRow) {
  do_ajax_form_tblmesad_validate_idmesa_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_tblmesad_idmesa__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_tblmesad_idmesa__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_tblmesad_id__onblur(oThis, iSeqRow) {
  do_ajax_form_tblmesad_validate_id_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_tblmesad_id__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_tblmesad_id__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_tblmesad_cargo__onblur(oThis, iSeqRow) {
  do_ajax_form_tblmesad_validate_cargo_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_tblmesad_cargo__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_tblmesad_cargo__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_tblmesad_nombre__onblur(oThis, iSeqRow) {
  do_ajax_form_tblmesad_validate_nombre_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_tblmesad_nombre__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_tblmesad_nombre__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_tblmesad_estado__onblur(oThis, iSeqRow) {
  do_ajax_form_tblmesad_validate_estado_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_tblmesad_estado__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_tblmesad_estado__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

