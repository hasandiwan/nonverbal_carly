/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 4.2.3
|| # ---------------------------------------------------------------- # ||
|| # Copyright �2000-2015 vBulletin Solutions Inc. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/
vBulletin.events.systemInit.subscribe(function(){if(AJAX_Compatible){vB_AJAX_TagEditor_Factory=new vB_AJAX_TagEditor_Factory()}});function vB_AJAX_TagEditor_Factory(){this.controls=new Array();this.init()}vB_AJAX_TagEditor_Factory.prototype.init=function(){if(vBulletin.elements.vB_AJAX_TagEditor){for(var C=0;C<vBulletin.elements.vB_AJAX_TagEditor.length;C++){var B=vBulletin.elements.vB_AJAX_TagEditor[C][0];var F=vBulletin.elements.vB_AJAX_TagEditor[C][1];var E=vBulletin.elements.vB_AJAX_TagEditor[C][2];var A=vBulletin.elements.vB_AJAX_TagEditor[C][3];if(typeof (E)=="undefined"){E=""}if(typeof (A)=="undefined"){A={}}var D=YAHOO.util.Dom.get(E+"tag_"+F);if(D){this.controls[F]=new vB_AJAX_TagEditor(B,F,E,A,this)}}vBulletin.elements.vB_AJAX_TagEditor=null}};vB_AJAX_TagEditor_Factory.prototype.redirect=function(A,B){window.location="threadtag.php?do=manage"+SESSIONURL+"contenttype="+A+"&contentid="+B};function vB_AJAX_TagEditor(C,E,D,B,A){this.divobj=null;this.vbmenu=null;this.do_ajax_submit=true;this.divname=D+"tagmenu_"+E+"_menu";this.vbmenuname=D+"tagmenu_"+E;this.tag_container=D+"tagcontainer_"+E;this.tag_list=D+"taglist_"+E;this.edit_submit="tageditsubmit_"+E;this.edit_cancel="tageditcancel_"+E;this.edit_input="tageditinput_"+E;this.submit_progress="tageditprogress_"+E;this.extraparams=B;this.init(C,E,D,A)}vB_AJAX_TagEditor.prototype.init=function(C,E,D,B){if(C){this.contenttype=C}if(E){this.objectid=E}if(B){this.factory=B}var A=YAHOO.util.Dom.get(D+"tag_"+E);YAHOO.util.Event.on(A,"click",this.load,this,true)};vB_AJAX_TagEditor.prototype.load=function(A){if(A){YAHOO.util.Event.stopEvent(A)}if(vBmenu.activemenu==this.vbmenuname){this.vbmenu.hide()}else{YAHOO.util.Connect.asyncRequest("POST",fetch_ajax_url("threadtag.php?popup=1&contenttype="+this.contenttype+"&contentid="+this.objectid),{success:this.display,failure:this.handle_ajax_error,timeout:vB_Default_Timeout,scope:this},SESSIONURL+"securitytoken="+SECURITYTOKEN+"&do=manage&contenttype="+this.contenttype+"&contentid="+this.objectid)}return false};vB_AJAX_TagEditor.prototype.handle_ajax_error=function(A){vBulletin_AJAX_Error_Handler(A)};vB_AJAX_TagEditor.prototype.handle_ajax_submit_error=function(A){vBulletin_AJAX_Error_Handler(A);this.do_ajax_submit=false};vB_AJAX_TagEditor.prototype.display=function(B){if(B.responseXML){var A=B.responseXML.getElementsByTagName("error");if(A.length){alert(A[0].firstChild.nodeValue)}else{if(!this.divobj){this.divobj=document.createElement("div");this.divobj.id=this.divname;this.divobj.style.display="none";this.divobj.style.width="300px";this.divobj.style.background="#ffffff";this.divobj.style.border="1px solid #000000";this.divobj.style.padding="10px";document.body.appendChild(this.divobj);this.vbmenu=vbmenu_register(this.vbmenuname,true);YAHOO.util.Dom.get(this.vbmenu.controlkey).onmouseover="";YAHOO.util.Dom.get(this.vbmenu.controlkey).onclick=""}this.divobj.innerHTML=B.responseXML.getElementsByTagName("tagpopup")[0].firstChild.nodeValue;YAHOO.util.Event.on(this.edit_submit,"click",this.submit_tag_edit,this,true);YAHOO.util.Event.on(this.edit_cancel,"click",this.cancel_tag_edit,this,true);YAHOO.util.Event.on(this.divobj,"keydown",this.tagmenu_keypress);if(YAHOO.util.Dom.get("tag_add_wrapper_menu")&&YAHOO.util.Dom.get(this.edit_input)){tag_add_comp=new vB_AJAX_TagSuggest("tag_add_comp",this.edit_input,"tag_add_wrapper");tag_add_comp.allow_multiple=true;var C=B.responseXML.getElementsByTagName("delimiters")[0];if(C&&C.firstChild){tag_add_comp.set_delimiters(C.firstChild.nodeValue)}}this.vbmenu.show(YAHOO.util.Dom.get(this.vbmenuname));YAHOO.util.Dom.get(this.edit_input).focus();YAHOO.util.Dom.get(this.edit_input).focus()}}};vB_AJAX_TagEditor.prototype.tagmenu_keypress=function(A){switch(A.keyCode){case 13:vB_AJAX_TagEditor_Factory.controls[this.id.split(/_/)[1]].submit_tag_edit();if(A){YAHOO.util.Event.stopEvent(A)}return false;default:return true}};vB_AJAX_TagEditor.prototype.submit_tag_edit=function(B){if(this.do_ajax_submit){if(B){YAHOO.util.Event.stopEvent(B)}var A=new vB_Hidden_Form("threadtag.php");A.add_variables_from_object(YAHOO.util.Dom.get(this.divobj));for(key in this.extraparams){A.add_variable(key,this.extraparams[key])}YAHOO.util.Connect.asyncRequest("POST",fetch_ajax_url("threadtag.php?contenttype="+this.contenttype+"&contentid="+this.objectid),{success:this.handle_ajax_submit,failure:this.handle_ajax_submit_error,timeout:vB_Default_Timeout,scope:this},A.build_query_string());if(YAHOO.util.Dom.get(this.submit_progress)){YAHOO.util.Dom.get(this.submit_progress).style.display=""}}};vB_AJAX_TagEditor.prototype.cancel_tag_edit=function(A){this.vbmenu.hide()};vB_AJAX_TagEditor.prototype.handle_ajax_submit=function(C){if(C.responseXML){var A=C.responseXML.getElementsByTagName("error");if(A.length){alert(A[0].firstChild.nodeValue)}else{var D=C.responseXML.getElementsByTagName("taghtml");if(D.length&&D[0].firstChild&&D[0].firstChild.nodeValue!==""){YAHOO.util.Dom.get(this.tag_list).innerHTML=D[0].firstChild.nodeValue;YAHOO.util.Dom.get(this.tag_container).style.display=""}else{YAHOO.util.Dom.get(this.tag_container).style.display="none"}var B=C.responseXML.getElementsByTagName("warning");if(B.length&&B[0].firstChild){alert(B[0].firstChild.nodeValue)}this.vbmenu.hide()}}else{this.vbmenu.hide()}if(YAHOO.util.Dom.get(this.submit_progress)){YAHOO.util.Dom.get(this.submit_progress).style.display="none"}};