{"version":3,"sources":["../../../js/i18n/defaults-fi_FI.js"],"names":[],"mappings":";;;;;;;;;;;;;;;;;;;;;;;;AAAA,CAAC,QAAQ,CAAC,GAAG,CAAC,CAAC,CAAC;AAChB,EAAE,EAAE,EAAE,CAAC,YAAY,CAAC,QAAQ,CAAC,CAAC,CAAC,CAAC,CAAC;AACjC,IAAI,gBAAgB,CAAC,CAAC,CAAC,EAAE,CAAC,SAAS,EAAE,CAAC;AACtC,IAAI,eAAe,CAAC,CAAC,CAAC,EAAE,CAAC,YAAY,CAAC,CAAC,CAAC,GAAG,CAAC;AAC5C,IAAI,iBAAiB,CAAC,CAAC,QAAQ,CAAC,CAAC,WAAW,CAAC,CAAC,QAAQ,CAAC,CAAC,CAAC,CAAC;AAC1D,MAAM,MAAM,CAAC,CAAC,WAAW,CAAC,EAAE,CAAC,CAAC,CAAC,CAAC,CAAC,CAAC,EAAE,CAAC,CAAC,CAAC,OAAO,CAAC,CAAC,CAAC,CAAC,EAAE,CAAC,CAAC,CAAC,OAAO,EAAE,CAAC;AACjE,IAAI,EAAE,CAAC;AACP,IAAI,cAAc,CAAC,CAAC,QAAQ,CAAC,CAAC,MAAM,CAAC,CAAC,QAAQ,CAAC,CAAC,CAAC,CAAC;AAClD,MAAM,MAAM,CAAC,CAAC,CAAC;AACf,QAAQ,CAAC,MAAM,CAAC,EAAE,CAAC,CAAC,CAAC,CAAC,CAAC,CAAC,CAAC,UAAU,CAAC,QAAQ,EAAE,CAAC,CAAC,CAAC,EAAE,CAAC,CAAC,CAAC,UAAU,EAAE,CAAC,CAAC,CAAC,CAAC,UAAU,CAAC,QAAQ,EAAE,CAAC,CAAC,CAAC,EAAE,CAAC,CAAC,CAAC,UAAU,GAAG,CAAC;AACjH,QAAQ,CAAC,QAAQ,CAAC,EAAE,CAAC,CAAC,CAAC,CAAC,CAAC,CAAC,CAAC,IAAI,CAAC,CAAC,CAAC,QAAQ,EAAE,CAAC,CAAC,CAAC,EAAE,CAAC,CAAC,CAAC,UAAU,EAAE,CAAC,CAAC,CAAC,CAAC,IAAI,CAAC,CAAC,CAAC,QAAQ,EAAE,CAAC,CAAC,CAAC,EAAE,CAAC,CAAC,CAAC,UAAU,EAAE,CAAC;AAC1G,MAAM,EAAE,CAAC;AACT,IAAI,EAAE,CAAC;AACP,IAAI,aAAa,CAAC,CAAC,CAAC,OAAO,CAAC,MAAM,EAAE,CAAC;AACrC,IAAI,eAAe,CAAC,CAAC,CAAC,MAAM,CAAC,MAAM,EAAE,CAAC;AACtC,IAAI,iBAAiB,CAAC,CAAC,EAAE,CAAC,CAAC,CAAC;AAC5B,EAAE,EAAE,CAAC;AACL,GAAG,MAAM,EAAE,CAAC","file":"defaults-fi_FI.js","sourcesContent":["(function ($) {\r\n  $.fn.selectpicker.defaults = {\r\n    noneSelectedText: 'Ei valintoja',\r\n    noneResultsText: 'Ei hakutuloksia {0}',\r\n    countSelectedText: function (numSelected, numTotal) {\r\n      return (numSelected == 1) ? '{0} valittu' : '{0} valitut';\r\n    },\r\n    maxOptionsText: function (numAll, numGroup) {\r\n      return [\r\n        (numAll == 1) ? 'Valintojen maksimimäärä ({n} saavutettu)' : 'Valintojen maksimimäärä ({n} saavutettu)',\r\n        (numGroup == 1) ? 'Ryhmän maksimimäärä ({n} saavutettu)' : 'Ryhmän maksimimäärä ({n} saavutettu)'\r\n      ];\r\n    },\r\n    selectAllText: 'Valitse kaikki',\r\n    deselectAllText: 'Poista kaikki',\r\n    multipleSeparator: ', '\r\n  };\r\n})(jQuery);\r\n"]}