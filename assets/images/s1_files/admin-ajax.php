if (window.addthis_product === undefined) { window.addthis_product = "wpp"; } if (window.wp_product_version === undefined) { window.wp_product_version = "wpp-6.2.6"; } if (window.addthis_share === undefined) { window.addthis_share = {"passthrough":{"twitter":{"via":"LearningLiftoff"}},"url":"","title":""}; } if (window.addthis_config === undefined) { window.addthis_config = {"data_track_clickback":true,"data_ga_property":"UA-46594007-1","data_ga_social":true,"ui_atversion":"300","ui_508_compliant":true}; } if (window.addthis_plugin_info === undefined) { window.addthis_plugin_info = {"info_status":"enabled","cms_name":"WordPress","plugin_name":"Share Buttons by AddThis","plugin_version":"6.2.6","plugin_mode":"AddThis","anonymous_profile_id":"wp-ffb927b47ccb4ef461667d6428f2b948","page_info":{"template":false}}; } 
                    (function() {
                      var first_load_interval_id = setInterval(function () {
                        if (typeof window.addthis !== 'undefined') {
                          window.clearInterval(first_load_interval_id);
                          if (typeof window.addthis_layers !== 'undefined' && Object.getOwnPropertyNames(window.addthis_layers).length > 0) {
                            window.addthis.layers(window.addthis_layers);
                          }
                          if (Array.isArray(window.addthis_layers_tools)) {
                            for (i = 0; i < window.addthis_layers_tools.length; i++) {
                              window.addthis.layers(window.addthis_layers_tools[i]);
                            }
                          }
                        }
                     },1000)
                    }());
                