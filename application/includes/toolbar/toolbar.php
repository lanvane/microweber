<meta http-equiv="X-UA-Compatible" content="IE=edge" />


<?php /*<script src="<?php   print( INCLUDES_URL);  ?>js/jquery.js" type="text/javascript"></script>*/ ?>
<script src="<?php   print( SITE_URL);  ?>api.js?v=<?php echo uniqid(); ?>" type="text/javascript"></script>
<script src="<?php   print( INCLUDES_URL);  ?>js/jquery-ui-1.8.20.custom.js" type="text/javascript"></script>
<?php /* <script src="http://code.jquery.com/ui/jquery-ui-git.js" type="text/javascript"></script> */ ?>
<script src="<?php   print( INCLUDES_URL);  ?>js/edit_libs.js" type="text/javascript"></script>

<link href="<?php   print( INCLUDES_URL);  ?>api/api.css" rel="stylesheet" type="text/css" />
<link href="<?php   print( INCLUDES_URL);  ?>css/mw_framework.css" rel="stylesheet" type="text/css" />
<link href="<?php   print( INCLUDES_URL);  ?>css/toolbar.css" rel="stylesheet" type="text/css" />


 <script src="<?php   print( INCLUDES_URL);  ?>js/sortable.js?v=<?php echo uniqid(); ?>" type="text/javascript"></script>
<?php /* <script src="http://c9.io/ooyes/mw/workspace/sortable.js" type="text/javascript"></script>  */ ?>
<script src="<?php   print( INCLUDES_URL);  ?>js/toolbar.js?v=<?php echo uniqid(); ?>" type="text/javascript"></script>
<script type="text/javascript">



        $(document).ready(function () {

           mw.drag.create();


            mw.history.init();
            mw.tools.module_slider.init();
            mw.tools.dropdown();
            mw.tools.toolbar_tabs.init();
            mw.tools.toolbar_slider.init();
        });

		
		
		
		
		
		
		
		
		
		
		
		
		    $(document).ready(function () {
		
		
		


 $(".mw_option_field").live("change blur", function () {
                var refresh_modules11 = $(this).attr('data-refresh');
				
				if(refresh_modules11 == undefined){
					                var refresh_modules11 = $(this).attr('data-reload');

				}

				og = $(this).attr('data-module-id');
				if(og == undefined){
					og = $(this).parents('.mw_modal_container:first').attr('data-settings-for-module') 
				}
                $.ajax({

                    type: "POST",
                    url: "<? print site_url('api/save_option') ?>",
                    data: ({

                        option_key: $(this).attr('name'),
                        option_group: og,
                        option_value: $(this).val()


                    }),


                    success: function () {


                        if (refresh_modules11 != undefined && refresh_modules11 != '') {
                            refresh_modules11 = refresh_modules11.toString()

                            if (window.mw != undefined) {
                                if (window.mw.reload_module != undefined) {
                                    window.mw.reload_module(refresh_modules11);
                                }
                            }
  
                        }

                        //  $(this).addClass("done");
                    }
                });



            });
		
		
		
		
		
		
		
		
		
		
		
		
		
		    });
		
		
		
		
		
		

		
		
		
		
		
		
		
		

		

		
    </script>

    <span id="show_hide_sub_panel" onclick="mw.toggle_subpanel();"><span id="show_hide_sub_panel_slider"></span><span id="show_hide_sub_panel_info">Hide</span></span>

<div class="mw" id="live_edit_toolbar_holder">
  <div class="mw" id="live_edit_toolbar">
    <div id="mw_toolbar_nav"> <a href="<?php print site_url(); ?>" id="mw_toolbar_logo">Microweber - Live Edit</a>



    <?php /* <a href="javascript:;" style="position: absolute;top: 10px;right: 10px;" onclick="mw.extras.fullscreen(document.body);">Fullscreen</a> */  ?>





      <ul id="mw_tabs">
        <li> <a href="#mw_tab_modules"><? _e('Modules'); ?></a> </li>
        <li> <a href="#mw_tab_layouts"><? _e('Layouts'); ?></a> </li>
       
        <li> <a href="#mw_tab_design"><? _e('Design'); ?></a> </li>
         <li> <a href="#tab_pages"><? _e('Pages'); ?></a> </li>
        <li> <a href="#mw_tab_help"><? _e('Help'); ?></a> </li>
       </ul>
    </div>
    <div id="tab_modules" class="mw_toolbar_tab">
      <div class="mw_dropdown mw_dropdown_type_navigation left" id="module_category_selector" data-value='recommended'> <span class="mw_dropdown_val">Recommended</span>
        <div class="mw_dropdown_fields">
          <ul>
            <li value="-1" class="other-action"><div class="dd_search"><input type="text" id="dd_module_search" class="dd_search" /><span class="tb_search_magnify"></span></div></li>
            <li value="recommended"><a href="#">Recommended</a></li>
            <li value="forms"><a href="#">Forms</a></li>
            <li value="media"><a href="#">Media</a></li>
            <li value="users"><a href="#">Users</a></li>
            <li value="navigation"><a href="#">Navigation</a></li>
            <li value="content"><a href="#">Content</a></li>
            <li value="shop"><a href="#">Online Shop</a></li>
            <li value="social"><a href="#">Social Networks</a></li>
            <li value="others"><a href="#">Others</a></li>
          </ul>
        </div>
      </div>
      <div class="modules_bar_slider bar_slider">
        <div class="modules_bar">
          <microweber module="admin/modules/list" />
        </div>
        <span class="modules_bar_slide_left">&nbsp;</span> <span class="modules_bar_slide_right">&nbsp;</span> </div>
      <div class="mw_clear">&nbsp;</div>
    </div>
    <div id="tab_layouts" class="mw_toolbar_tab">
      <div class="mw_dropdown mw_dropdown_type_navigation left" id="module_layout_selector"> <span class="mw_dropdown_val">Recommended</span>
        <div class="mw_dropdown_fields">
          <ul>
            <li><a href="#">Recommended</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Online Shop</a></li>
            <li><a href="#">Simple</a></li>
            <li><a href="#">Custom</a></li>
          </ul>
        </div>
      </div>
      <div class="modules_bar_slider bar_slider">
        <div class="modules_bar">
          <microweber module="admin/modules/list_elements" />
        </div>
        <span class="modules_bar_slide_left">&nbsp;</span> <span class="modules_bar_slide_right">&nbsp;</span> </div>
    </div>
    <div id="tab_design" class="mw_toolbar_tab">

     <div class="mw_dropdown mw_dropdown_type_navigation left" id="module_design_selector"> <span class="mw_dropdown_val">Picture Editor</span>
        <div class="mw_dropdown_fields">
          <ul>
            <li value="#tb_image_edit"><a href="#">Picture Editor</a></li>
            <li value="#tb_el_style"><a href="#">Site style</a></li>
          </ul>
        </div>
      </div>


      <div id="tb_design_holder">


          <div class="tb_design_tool" id="tb_image_edit"></div>
          <div class="tb_design_tool" id="tb_el_style">


            <span class="ed_opacity">
                <span class="ed_label">Opacity</span>
                <div class="ed_slider opacity-slider es_item" data-type="opacity"></div>
            </span>
            <span class="ed_opacity">
                <div class="mw_dropdown mw_dropdown_type_wysiwyg left" id="margin_selector"> <span class="mw_dropdown_val">Recommended</span>
                    <div class="mw_dropdown_fields">
                      <ul>
                        <li value="margin"><a href="#">Margin</a></li>
                        <li value="margin-top"><a href="#">Margin Top</a></li>
                        <li value="margin-bottom"><a href="#">Margin Bottom</a></li>
                        <li value="margin-left"><a href="#">Margin Left</a></li>
                        <li value="margin-right"><a href="#">Margin Right</a></li>
                      </ul>
                    </div>
                </div>
                <div class="ed_slider opacity-slider es_item" data-type="margin"></div>
            </span>


          </div>


      </div>


    </div>
    
     <div id="tab_pages" class="mw_toolbar_tab"> 
      <microweber module="content/pages_toolbar" />
     
     </div>
    
    
    <div id="tab_help" class="mw_toolbar_tab">Help</div>
    <div id="tab_style_editor" class="mw_toolbar_tab">
      <? //include( 'toolbar_tag_editor.php') ; ?>
    </div>
    <div id="mw-text-editor" class="mw_editor">
        <div class="editor_wrapper">
            <span class="mw_editor_btn mw_editor_undo" data-command="undo" title="Undo"><span class="ico"></span></span>
            <span class="mw_editor_btn mw_editor_redo" data-command="redo" title="Redo"><span class="ico"></span></span>
            <span class="mw_dlm"></span>
            <span class="mw_editor_btn mw_editor_bold" data-command="bold" title="Bold"><span class="ico"></span></span>
            <span class="mw_editor_btn mw_editor_italic" data-command="italic" title="Italic"><span class="ico"></span></span>
            <span class="mw_editor_btn mw_editor_underline" data-command="underline" title="Underline"><span class="ico"></span></span>

            <span class="mw_editor_btn mw_editor_font_color" data-command="custom-fontcolorpicker" title="Font Color"><span class="ico"></span></span>

            <span class="mw_editor_btn mw_editor_font_background_color" data-command="custom-fontbgcolorpicker" title="Font Background Color"><span class="ico"></span></span>

            <span class="mw_dlm"></span>



            <div class="mw_dropdown mw_dropdown_type_wysiwyg mw_dropdown_action_format" id="format_main" title="Format" data-value="">
                <span class="mw_dropdown_val_holder">
                    <span class="dd_rte_arr"></span>
                    <span class="mw_dropdown_val">Format</span>
                </span>
              <div class="mw_dropdown_fields">
                <ul>
                  <li value="h1"><a href="#">Heading 1</a></li>
                  <li value="h2"><a href="#">Heading 2</a></li>
                  <li value="h3"><a href="#">Heading 3</a></li>
                  <li value="h4"><a href="#">Heading 4</a></li>
                  <li value="h5"><a href="#">Heading 5</a></li>
                  <li value="h6"><a href="#">Heading 6</a></li>
                  <li value="p"><a href="#">Paragraph</a></li>
                </ul>
              </div>
            </div>



            <div class="mw_dropdown mw_dropdown_type_wysiwyg mw_dropdown_action_font_family" id="font_family_selector_main" title="Font" data-value="Arial">
              <span class="mw_dropdown_val_holder">
                  <span class="dd_rte_arr"></span>
                  <span class="mw_dropdown_val">Arial</span>
              </span>
              <div class="mw_dropdown_fields">
                <ul>
                  <li value="Arial"><a href="#" style="font-family:Arial">Arial</a></li>
                  <li value="Tahoma"><a href="#" style="font-family:Tahoma">Tahoma</a></li>
                  <li value="Verdana"><a href="#" style="font-family:Verdana">Verdana</a></li>
                  <li value="Georgia"><a href="#" style="font-family:Georgia">Georgia</a></li>
                  <li value="Times New Roman"><a href="#" style="font-family: 'Times New Roman'">Times New Roman</a></li>
                </ul>
              </div>
            </div>




            <div class="mw_dropdown mw_dropdown_type_wysiwyg mw_dropdown_action_font_size" id="font_size_selector_main" title="Font Size">

                <span class="mw_dropdown_val_holder">
                    <span class="dd_rte_arr"></span>
                    <span class="mw_dropdown_val">10pt</span>
                </span>
              <div class="mw_dropdown_fields">
                <ul>
                  <li value="1"><a href="#">8pt</a></li>
                  <li value="2"><a href="#">10pt</a></li>
                  <li value="3"><a href="#">12pt</a></li>
                  <li value="4"><a href="#">14pt</a></li>
                  <li value="5"><a href="#">18pt</a></li>
                  <li value="6"><a href="#">24pt</a></li>
                  <li value="7"><a href="#">36pt</a></li>
                </ul>
              </div>
            </div>



            <span class="mw_dlm"></span>


            <span class="mw_editor_btn mw_editor_ol" data-command="insertorderedlist" title="Ordered List"><span class="ico"></span></span>
            <span class="mw_editor_btn mw_editor_ul" data-command="insertunorderedlist" title="Unordered List"><span class="ico"></span></span>

            <span class="mw_editor_btn mw_editor_indent" data-command="indent" title="Indent"><span class="ico"></span></span>
            <span class="mw_editor_btn mw_editor_outdent" data-command="outdent" title="Outdent"><span class="ico"></span></span>



            <span class="mw_dlm"></span>

            <span class="mw_editor_btn mw_editor_alignment mw_editor_justifyleft" data-command="justifyLeft" title="Align Left"><span class="ico"></span></span>
            <span class="mw_editor_btn mw_editor_alignment mw_editor_justifycenter" data-command="justifyCenter" title="Align Center"><span class="ico"></span></span>
            <span class="mw_editor_btn mw_editor_alignment mw_editor_justifyright" data-command="justifyRight" title="Align Right"><span class="ico"></span></span>
            <span class="mw_editor_btn mw_editor_alignment mw_editor_justifyfull" data-command="justifyFull" title="Align Both Sides"><span class="ico"></span></span>


            <span class="mw_dlm"></span>


            <span class="mw_editor_btn mw_editor_link" data-command="custom-link" title="Add/Edit/Remove Link"><span class="ico"></span></span>
            <span class="mw_editor_btn mw_editor_image" data-command="custom-image" title="Add/Edit/Remove Image"><span class="ico"></span></span>
            <span class="mw_editor_btn mw_editor_remove_formatting" data-command="removeformat" title="Remove Formatting"><span class="ico"></span></span>



            <span class="mw_dlm"></span>



            <span class="mw_editor_btn mw_editor_element" data-command="custom-createelement"><span class="ico"></span></span>
        </div>




    </div>


     <span class="mw_editor_btnz" onclick="mw.drag.save()"
        style="color:#fff;cursor:pointer;display: inline-block;padding: 5px 10px;background: #6D7983;box-shadow:0 0 5px #ccc;position: fixed;top: 130px;right:30px; z-index: 2000">Save</span>




    <?php /*  THE SMALL EDITOR  */ " Starts Here " ?>

    <div id="mw_small_editor">
        <div class="mw_small_editor_top">
            <div class="mw_dropdown mw_dropdown_type_wysiwyg mw_dropdown_action_font_family" id="font_family_selector_small" title="Font" data-value="Arial">
              <span class="mw_dropdown_val_holder">
                  <span class="dd_rte_arr"></span>
                  <span class="mw_dropdown_val">Arial</span>
              </span>
              <div class="mw_dropdown_fields">
                <ul>
                  <li value="Arial"><a href="#" style="font-family:Arial">Arial</a></li>
                  <li value="Tahoma"><a href="#" style="font-family:Tahoma">Tahoma</a></li>
                  <li value="Verdana"><a href="#" style="font-family:Verdana">Verdana</a></li>
                  <li value="Georgia"><a href="#" style="font-family:Georgia">Georgia</a></li>
                  <li value="Times New Roman"><a href="#" style="font-family: 'Times New Roman'">Times New Roman</a></li>
                </ul>
              </div>
            </div>
            <span class="mw_dlm"></span>
            <div class="mw_dropdown mw_dropdown_type_wysiwyg mw_dropdown_action_font_size" id="font_size_selector_small" title="Font Size">
                <span class="mw_dropdown_val_holder">
                    <span class="dd_rte_arr"></span>
                    <span class="mw_dropdown_val">10pt</span>
                </span>
              <div class="mw_dropdown_fields">
                <ul>
                  <li value="1"><a href="#">8pt</a></li>
                  <li value="2"><a href="#">10pt</a></li>
                  <li value="3"><a href="#">12pt</a></li>
                  <li value="4"><a href="#">14pt</a></li>
                  <li value="5"><a href="#">18pt</a></li>
                  <li value="6"><a href="#">24pt</a></li>
                  <li value="7"><a href="#">36pt</a></li>
                </ul>
              </div>
            </div>
            <span class="mw_dlm"></span>
            <span class="mw_editor_btn mw_editor_link" data-command="custom-link" title="Add/Edit/Remove Link"><span class="ico"></span></span>
            <span class="mw_editor_btn mw_editor_image" data-command="custom-image" title="Add/Edit/Remove Image"><span class="ico"></span></span>
            <div class="mw_clear">&nbsp;</div>
        </div>
        <div class="mw_small_editor_bottom">
          <span class="mw_editor_btn mw_editor_bold" data-command="bold" title="Bold"><span class="ico"></span></span>
          <span class="mw_editor_btn mw_editor_italic" data-command="italic" title="Italic"><span class="ico"></span></span>
          <span class="mw_editor_btn mw_editor_underline" data-command="underline" title="Underline"><span class="ico"></span></span>
          <span class="mw_dlm"></span>
          <span class="mw_editor_btn mw_editor_alignment mw_editor_justifyleft" data-command="justifyLeft" title="Align Left"><span class="ico"></span></span>
          <span class="mw_editor_btn mw_editor_alignment mw_editor_justifycenter" data-command="justifyCenter" title="Align Center"><span class="ico"></span></span>
          <span class="mw_editor_btn mw_editor_alignment mw_editor_justifyright" data-command="justifyRight" title="Align Right"><span class="ico"></span></span>
          <span class="mw_editor_btn mw_editor_alignment mw_editor_justifyfull" data-command="justifyFull" title="Align Both Sides"><span class="ico"></span></span>
          <div class="mw_clear">&nbsp;</div>
        </div>

    </div><!-- /mw_small_editor -->


    <div id="mw-history-panel"></div>
    <div id="mw-saving-loader"></div>
  </div>




  <!-- /end .mw -->
</div>
<!-- /end mw_holder --> 
<span class="mw_editor_btnz" onclick="$('.mw_modal iframe').each(function(){var src = this.src;this.src = '#';this.src =src});"
        style="color:#fff;cursor:pointer;display: inline-block;padding: 5px 10px;background: #6D7983;box-shadow:0 0 5px #ccc;position: fixed;top: 130px;right:130px; z-index: 92000">Refresh iframes &reg;</span>