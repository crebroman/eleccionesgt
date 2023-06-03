
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
  scEventControl_data["primer_nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["segundo_nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["tercer_nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["primer_apellido" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["segundo_apellido" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["apellido_casada" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["direccion_residencia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["direccion_zona" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["direccion_deptoid" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["direccion_municipioid" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["sexo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["estado_civil" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["dpi" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dpi" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["primer_nombre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["primer_nombre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["segundo_nombre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["segundo_nombre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tercer_nombre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tercer_nombre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["primer_apellido" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["primer_apellido" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["segundo_apellido" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["segundo_apellido" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["apellido_casada" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["apellido_casada" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["direccion_residencia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["direccion_residencia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["direccion_zona" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["direccion_zona" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["direccion_deptoid" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["direccion_deptoid" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["direccion_municipioid" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["direccion_municipioid" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sexo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sexo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["estado_civil" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["estado_civil" + iSeqRow]["change"]) {
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
  if ("direccion_deptoid" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("direccion_municipioid" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("sexo" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("estado_civil" + iSeq == fieldName) {
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
  $('#id_sc_field_dpi' + iSeqRow).bind('blur', function() { sc_form_ciudadanos_dpi_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_ciudadanos_dpi_onfocus(this, iSeqRow) });
  $('#id_sc_field_primer_nombre' + iSeqRow).bind('blur', function() { sc_form_ciudadanos_primer_nombre_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_ciudadanos_primer_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_segundo_nombre' + iSeqRow).bind('blur', function() { sc_form_ciudadanos_segundo_nombre_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_ciudadanos_segundo_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_tercer_nombre' + iSeqRow).bind('blur', function() { sc_form_ciudadanos_tercer_nombre_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_ciudadanos_tercer_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_primer_apellido' + iSeqRow).bind('blur', function() { sc_form_ciudadanos_primer_apellido_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_ciudadanos_primer_apellido_onfocus(this, iSeqRow) });
  $('#id_sc_field_segundo_apellido' + iSeqRow).bind('blur', function() { sc_form_ciudadanos_segundo_apellido_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_ciudadanos_segundo_apellido_onfocus(this, iSeqRow) });
  $('#id_sc_field_apellido_casada' + iSeqRow).bind('blur', function() { sc_form_ciudadanos_apellido_casada_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_ciudadanos_apellido_casada_onfocus(this, iSeqRow) });
  $('#id_sc_field_direccion_residencia' + iSeqRow).bind('blur', function() { sc_form_ciudadanos_direccion_residencia_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_ciudadanos_direccion_residencia_onfocus(this, iSeqRow) });
  $('#id_sc_field_direccion_zona' + iSeqRow).bind('blur', function() { sc_form_ciudadanos_direccion_zona_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_ciudadanos_direccion_zona_onfocus(this, iSeqRow) });
  $('#id_sc_field_direccion_municipioid' + iSeqRow).bind('blur', function() { sc_form_ciudadanos_direccion_municipioid_onblur(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_ciudadanos_direccion_municipioid_onfocus(this, iSeqRow) });
  $('#id_sc_field_direccion_deptoid' + iSeqRow).bind('blur', function() { sc_form_ciudadanos_direccion_deptoid_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_ciudadanos_direccion_deptoid_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_ciudadanos_direccion_deptoid_onfocus(this, iSeqRow) });
  $('#id_sc_field_sexo' + iSeqRow).bind('blur', function() { sc_form_ciudadanos_sexo_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_ciudadanos_sexo_onfocus(this, iSeqRow) });
  $('#id_sc_field_estado_civil' + iSeqRow).bind('blur', function() { sc_form_ciudadanos_estado_civil_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_ciudadanos_estado_civil_onfocus(this, iSeqRow) });
  $('#id_sc_field_estado' + iSeqRow).bind('blur', function() { sc_form_ciudadanos_estado_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_ciudadanos_estado_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_ciudadanos_dpi_onblur(oThis, iSeqRow) {
  do_ajax_form_ciudadanos_validate_dpi();
  scCssBlur(oThis);
}

function sc_form_ciudadanos_dpi_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ciudadanos_primer_nombre_onblur(oThis, iSeqRow) {
  do_ajax_form_ciudadanos_validate_primer_nombre();
  scCssBlur(oThis);
}

function sc_form_ciudadanos_primer_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ciudadanos_segundo_nombre_onblur(oThis, iSeqRow) {
  do_ajax_form_ciudadanos_validate_segundo_nombre();
  scCssBlur(oThis);
}

function sc_form_ciudadanos_segundo_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ciudadanos_tercer_nombre_onblur(oThis, iSeqRow) {
  do_ajax_form_ciudadanos_validate_tercer_nombre();
  scCssBlur(oThis);
}

function sc_form_ciudadanos_tercer_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ciudadanos_primer_apellido_onblur(oThis, iSeqRow) {
  do_ajax_form_ciudadanos_validate_primer_apellido();
  scCssBlur(oThis);
}

function sc_form_ciudadanos_primer_apellido_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ciudadanos_segundo_apellido_onblur(oThis, iSeqRow) {
  do_ajax_form_ciudadanos_validate_segundo_apellido();
  scCssBlur(oThis);
}

function sc_form_ciudadanos_segundo_apellido_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ciudadanos_apellido_casada_onblur(oThis, iSeqRow) {
  do_ajax_form_ciudadanos_validate_apellido_casada();
  scCssBlur(oThis);
}

function sc_form_ciudadanos_apellido_casada_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ciudadanos_direccion_residencia_onblur(oThis, iSeqRow) {
  do_ajax_form_ciudadanos_validate_direccion_residencia();
  scCssBlur(oThis);
}

function sc_form_ciudadanos_direccion_residencia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ciudadanos_direccion_zona_onblur(oThis, iSeqRow) {
  do_ajax_form_ciudadanos_validate_direccion_zona();
  scCssBlur(oThis);
}

function sc_form_ciudadanos_direccion_zona_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ciudadanos_direccion_municipioid_onblur(oThis, iSeqRow) {
  do_ajax_form_ciudadanos_validate_direccion_municipioid();
  scCssBlur(oThis);
}

function sc_form_ciudadanos_direccion_municipioid_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ciudadanos_direccion_deptoid_onblur(oThis, iSeqRow) {
  do_ajax_form_ciudadanos_validate_direccion_deptoid();
  scCssBlur(oThis);
}

function sc_form_ciudadanos_direccion_deptoid_onchange(oThis, iSeqRow) {
  do_ajax_form_ciudadanos_refresh_direccion_deptoid();
}

function sc_form_ciudadanos_direccion_deptoid_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ciudadanos_sexo_onblur(oThis, iSeqRow) {
  do_ajax_form_ciudadanos_validate_sexo();
  scCssBlur(oThis);
}

function sc_form_ciudadanos_sexo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ciudadanos_estado_civil_onblur(oThis, iSeqRow) {
  do_ajax_form_ciudadanos_validate_estado_civil();
  scCssBlur(oThis);
}

function sc_form_ciudadanos_estado_civil_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ciudadanos_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_ciudadanos_validate_estado();
  scCssBlur(oThis);
}

function sc_form_ciudadanos_estado_onfocus(oThis, iSeqRow) {
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

