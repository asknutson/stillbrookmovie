// Manager
function TotalSoftPoll_Reload() {
  location.reload();
}

function Total_Soft_Poll_AMD2_But1(Poll_ID) {
  jQuery('.Total_Soft_Poll_AMD2').animate({'opacity': 0}, 500);
  jQuery('.Total_Soft_Poll_AMMTable').animate({'opacity': 0}, 500);
  jQuery('.Total_Soft_Poll_AMOTable').animate({'opacity': 0}, 500);
  jQuery('.Total_Soft_Poll_AMD2').animate({'opacity': 0}, 500);
  jQuery('.Total_Soft_Poll_Save').animate({'opacity': 1}, 500);
  jQuery('.Total_Soft_Poll_Update').animate({'opacity': 0}, 500);

  jQuery('#Total_Soft_Poll_ID').html('[Total_Soft_Poll id="' + Poll_ID + '"]');
  jQuery('#Total_Soft_Poll_TID').html('&lt;?php echo do_shortcode(&#039;[Total_Soft_Poll id="' + Poll_ID + '"]&#039;);?&gt');
  TotalSoftPoll_Type_Ch();
  setTimeout(function () {
    jQuery('.Total_Soft_Poll_AMD2').css('display', 'none');
    jQuery('.Total_Soft_Poll_AMMTable').css('display', 'none');
    jQuery('.Total_Soft_Poll_AMOTable').css('display', 'none');
    jQuery('.Total_Soft_Poll_Save').css('display', 'block');
    jQuery('.Total_Soft_Poll_Update').css('display', 'none');
    jQuery('.Total_Soft_Poll_AMD3').css('display', 'block');

    jQuery('.TS_Poll_AM_Table_Div').css('display', 'block');
    jQuery('.Total_Soft_Poll_AnswersTable').css('display', 'table');
    jQuery('.Total_Soft_Poll_AMShortTable').css('display', 'table');
  }, 500)
  setTimeout(function () {
    jQuery('.Total_Soft_Poll_AMD3').animate({'opacity': 1}, 500);
    jQuery('.TS_Poll_AM_Table_Div').animate({'opacity': 1}, 500);
    jQuery('.Total_Soft_Poll_AnswersTable').animate({'opacity': 1}, 500);
    jQuery('.Total_Soft_Poll_AMShortTable').animate({'opacity': 1}, 500);
  }, 600)
}

function Copy_Shortcode_Poll(IDSHORT) {
  var aux = document.createElement("input");
  var code = document.getElementById(IDSHORT).innerHTML;
  code = code.replace("&lt;", "<");
  code = code.replace("&gt;", ">");
  code = code.replace("&#039;", "'");
  code = code.replace("&#039;", "'");
  aux.setAttribute("value", code);
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");
  document.body.removeChild(aux);
}

function TS_Poll_Add_Answer_Button() {
  jQuery('.TS_Poll_Add_Answer_Fixed_div').css({
    'transform': 'scale(1)',
    '-moz-transform': 'scale(1)',
    '-webkit-transform': 'scale(1)'
  });
  jQuery('.TS_Poll_Add_Answer_Absolute_div').css({
    'transform': 'translateY(-50%) scale(1)',
    '-moz-transform': 'translateY(-50%) scale(1)',
    '-webkit-transform': 'translateY(-50%) scale(1)'
  });
}

function TS_Poll_Add_Answer_Button_Close() {
  jQuery('.TS_Poll_Add_Answer_Fixed_div').css({
    'transform': 'scale(0)',
    '-moz-transform': 'scale(0)',
    '-webkit-transform': 'scale(0)'
  });
  jQuery('.TS_Poll_Add_Answer_Absolute_div').css({
    'transform': 'translateY(-50%) scale(0)',
    '-moz-transform': 'translateY(-50%) scale(0)',
    '-webkit-transform': 'translateY(-50%) scale(0)'
  });
  Total_Soft_Poll_Res_Ans();
}

function TotalSoftPoll_Type_Ch() {
  var Total_Soft_Poll_Type = jQuery('#TotalSoftPoll_Theme_' + jQuery('#TotalSoftPoll_Theme').val()).attr('rel');
  if (Total_Soft_Poll_Type == 'Standart Poll' || Total_Soft_Poll_Type == 'Standard Poll') {
    jQuery('#TotalSoftPollQ_Video').animate({'opacity': 0}, 500);
    jQuery('#TotalSoftPollQ_Image').animate({'opacity': 0}, 500);
    jQuery('#TotalSoftPoll_Video').animate({'opacity': 0}, 500);
    jQuery('#TotalSoftPoll_Image').animate({'opacity': 0}, 500);
  } else if (Total_Soft_Poll_Type == 'Image Poll') {
    jQuery('#TotalSoftPollQ_Video').animate({'opacity': 0}, 500);
    jQuery('#TotalSoftPollQ_Image').animate({'opacity': 0}, 500);
    jQuery('#TotalSoftPoll_Video').animate({'opacity': 0}, 500);
    jQuery('#TotalSoftPoll_Image').animate({'opacity': 1}, 500);
  } else if (Total_Soft_Poll_Type == 'Video Poll') {
    jQuery('#TotalSoftPollQ_Video').animate({'opacity': 0}, 500);
    jQuery('#TotalSoftPollQ_Image').animate({'opacity': 0}, 500);
    jQuery('#TotalSoftPoll_Video').animate({'opacity': 1}, 500);
    jQuery('#TotalSoftPoll_Image').animate({'opacity': 1}, 500);
  } else if (Total_Soft_Poll_Type == 'Standart Without Button' || Total_Soft_Poll_Type == 'Standard Without Button') {
    jQuery('#TotalSoftPollQ_Video').animate({'opacity': 0}, 500);
    jQuery('#TotalSoftPollQ_Image').animate({'opacity': 0}, 500);
    jQuery('#TotalSoftPoll_Video').animate({'opacity': 0}, 500);
    jQuery('#TotalSoftPoll_Image').animate({'opacity': 0}, 500);
  } else if (Total_Soft_Poll_Type == 'Image Without Button') {
    jQuery('#TotalSoftPollQ_Video').animate({'opacity': 0}, 500);
    jQuery('#TotalSoftPollQ_Image').animate({'opacity': 0}, 500);
    jQuery('#TotalSoftPoll_Video').animate({'opacity': 0}, 500);
    jQuery('#TotalSoftPoll_Image').animate({'opacity': 1}, 500);
  } else if (Total_Soft_Poll_Type == 'Video Without Button') {
    jQuery('#TotalSoftPollQ_Video').animate({'opacity': 0}, 500);
    jQuery('#TotalSoftPollQ_Image').animate({'opacity': 0}, 500);
    jQuery('#TotalSoftPoll_Video').animate({'opacity': 1}, 500);
    jQuery('#TotalSoftPoll_Image').animate({'opacity': 1}, 500);
  } else if (Total_Soft_Poll_Type == 'Image in Question') {
    jQuery('#TotalSoftPollQ_Video').animate({'opacity': 0}, 500);
    jQuery('#TotalSoftPollQ_Image').animate({'opacity': 1}, 500);
    jQuery('#TotalSoftPoll_Video').animate({'opacity': 0}, 500);
    jQuery('#TotalSoftPoll_Image').animate({'opacity': 0}, 500);
  } else if (Total_Soft_Poll_Type == 'Video in Question') {
    jQuery('#TotalSoftPollQ_Video').animate({'opacity': 1}, 500);
    jQuery('#TotalSoftPollQ_Image').animate({'opacity': 1}, 500);
    jQuery('#TotalSoftPoll_Video').animate({'opacity': 0}, 500);
    jQuery('#TotalSoftPoll_Image').animate({'opacity': 0}, 500);
  }
}

function TSPDUFS_Cl(Field_Name) {
  jQuery('#' + Field_Name).val('');
}

function TotalSoftPoll_Video_Clicked(Field_ID) {
  var PollIntervId = setInterval(function () {
    var code = jQuery('#' + Field_ID + '_Video_1').val();
    if (code.indexOf('https://www.youtube.com/') > 0) {

      if (code.indexOf('list') > 0 || code.indexOf('index') > 0) {
        if (code.indexOf('embed') > 0) {
          var TotalSoftPollCodes1 = code.split('[embed]');
          var TotalSoftPollCodes2 = TotalSoftPollCodes1[1].split('[/embed]');
          var TotalSoftPollCodes3 = TotalSoftPollCodes2[0].split('www.youtube.com/watch?v=');
          if (TotalSoftPollCodes3[1].length != 11) {
            TotalSoftPollCodes3[1] = TotalSoftPollCodes3[1].substr(0, 11);
          }

          jQuery('#' + Field_ID + '_Video_2').val('https://www.youtube.com/embed/' + TotalSoftPollCodes3[1]);
          jQuery('#' + Field_ID + '_Image_2').val('http://img.youtube.com/vi/' + TotalSoftPollCodes3[1] + '/mqdefault.jpg');

          if (jQuery('#' + Field_ID + '_Video_2').val().length > 0) {
            clearInterval(PollIntervId);
            jQuery('#' + Field_ID + '_Video_1').val('');
          }
        } else {
          var TotalSoftPollCodes1 = code.split('<a href="https://www.youtube.com/');
          var TotalSoftPollCodes2 = TotalSoftPollCodes1[1].split("=");
          var TotalSoftPollCodeSrc = TotalSoftPollCodes2[1].split('&');

          jQuery('#' + Field_ID + '_Video_2').val('https://www.youtube.com/embed/' + TotalSoftPollCodeSrc[0]);
          jQuery('#' + Field_ID + '_Image_2').val('http://img.youtube.com/vi/' + TotalSoftPollCodeSrc[0] + '/mqdefault.jpg');
          if (jQuery('#' + Field_ID + '_Video_2').val().length > 0) {
            clearInterval(PollIntervId);
            jQuery('#' + Field_ID + '_Video_1').val('');
          }
        }
      } else if (code.indexOf('embed') > 0) {
        var TotalSoftPollCodes1 = code.split('[embed]');
        var TotalSoftPollCodes2 = TotalSoftPollCodes1[1].split('[/embed]');
        if (TotalSoftPollCodes2[0].indexOf('watch?') > 0) {
          var TotalSoftPollCodes3 = TotalSoftPollCodes2[0].split('=');

          jQuery('#' + Field_ID + '_Video_2').val('https://www.youtube.com/embed/' + TotalSoftPollCodes3[1]);
          jQuery('#' + Field_ID + '_Image_2').val('http://img.youtube.com/vi/' + TotalSoftPollCodes3[1] + '/mqdefault.jpg');
          if (jQuery('#' + Field_ID + '_Video_2').val().length > 0) {
            clearInterval(PollIntervId);
            jQuery('#' + Field_ID + '_Video_1').val('');
          }
        } else {
          var TotalSoftPollCodeSrc = TotalSoftPollCodes2[0];
          var TotalSoftPollImsrc = TotalSoftPollCodeSrc.split('embed/');

          jQuery('#' + Field_ID + '_Video_2').val(TotalSoftPollCodeSrc);
          jQuery('#' + Field_ID + '_Image_2').val('http://img.youtube.com/vi/' + TotalSoftPollImsrc[1] + '/mqdefault.jpg');
          if (jQuery('#' + Field_ID + '_Video_2').val().length > 0) {
            clearInterval(PollIntervId);
            jQuery('#' + Field_ID + '_Video_1').val('');
          }
        }
      } else {
        var TotalSoftPollCodes1 = code.split('<a href="https://www.youtube.com/');
        var TotalSoftPollCodes2 = TotalSoftPollCodes1[1].split('=');
        var TotalSoftPollCodeSrc = TotalSoftPollCodes2[1].split('">https://');

        jQuery('#' + Field_ID + '_Video_2').val('https://www.youtube.com/embed/' + TotalSoftPollCodeSrc[0]);
        jQuery('#' + Field_ID + '_Image_2').val('http://img.youtube.com/vi/' + TotalSoftPollCodeSrc[0] + '/mqdefault.jpg');
        if (jQuery('#' + Field_ID + '_Video_2').val().length > 0) {
          clearInterval(PollIntervId);
          jQuery('#' + Field_ID + '_Video_1').val('');
        }
      }
    } else if (code.indexOf('https://youtu.be/') > 0) {
      if (code.indexOf('embed') > 0) {
        var TotalSoftPollCodes1 = code.split('[embed]');
        var TotalSoftPollCodes2 = TotalSoftPollCodes1[1].split('[/embed]');
        var TotalSoftPollCodes3 = TotalSoftPollCodes2[0].split('youtu.be/');

        jQuery('#' + Field_ID + '_Video_2').val('https://www.youtube.com/embed/' + TotalSoftPollCodes3[1]);
        jQuery('#' + Field_ID + '_Image_2').val('http://img.youtube.com/vi/' + TotalSoftPollCodes3[1] + '/mqdefault.jpg');

        if (jQuery('#' + Field_ID + '_Video_2').val().length > 0) {
          clearInterval(PollIntervId);
          jQuery('#' + Field_ID + '_Video_1').val('');
        }
      } else {
        var TotalSoftPollCodes1 = code.split('<a href="https://youtu.be/');
        var TotalSoftPollCodeSrc = TotalSoftPollCodes1[1].split('">https://');

        jQuery('#' + Field_ID + '_Video_2').val('https://www.youtube.com/embed/' + TotalSoftPollCodeSrc[0]);
        jQuery('#' + Field_ID + '_Image_2').val('http://img.youtube.com/vi/' + TotalSoftPollCodeSrc[0] + '/mqdefault.jpg');

        if (jQuery('#' + Field_ID + '_Video_2').val().length > 0) {
          clearInterval(PollIntervId);
          jQuery('#' + Field_ID + '_Video_1').val('');
        }
      }
    } else if (code.indexOf('https://vimeo.com/') > 0) {
      if (code.indexOf('embed') > 0) {
        var s1 = code.split('[embed]https://vimeo.com/');
        var src = s1[1].split('[/embed]');
        if (src[0].length > 9) {
          var real_src = src[0].split('/');
          src[0] = real_src[2];
        }
        jQuery('#' + Field_ID + '_Video_2').val('https://player.vimeo.com/video/' + src[0]);

        var ajaxurl = objectpoll.ajaxurl;
        var data = {
          action: 'TSoftPoll_Vimeo_Video_Image', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
          foobar: 'https://player.vimeo.com/video/' + src[0], // translates into $_POST['foobar'] in PHP
          nonce: objectpoll.nonce
        };
        jQuery.post(ajaxurl, data, function (response) {
          jQuery('#' + Field_ID + '_Image_2').val(response.thumbnail_large);
          if (jQuery('#' + Field_ID + '_Video_2').val().length > 0) {
            clearInterval(PollIntervId);
            jQuery('#' + Field_ID + '_Video_1').val('');
          }
        });
      } else if (code.indexOf('player') > 0) {
        var s1 = code.split('<a href="https://player.vimeo.com/video/');
        var src = s1[1].split('">https://');
        
        if (src[0].length > 9) {
          var real_src = src[0].split('/');
          src[0] = real_src[2];
        }
        jQuery('#' + Field_ID + '_Video_2').val('https://player.vimeo.com/video/' + src[0]);

        var ajaxurl = objectpoll.ajaxurl;
        var data = {
          action: 'TSoftPoll_Vimeo_Video_Image', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
          foobar: 'https://player.vimeo.com/video/' + src[0], // translates into $_POST['foobar'] in PHP
          nonce: objectpoll.nonce
        };
        jQuery.post(ajaxurl, data, function (response) {
          jQuery('#' + Field_ID + '_Image_2').val(response.thumbnail_large);
          if (jQuery('#' + Field_ID + '_Video_2').val().length > 0) {
            clearInterval(PollIntervId);
            jQuery('#' + Field_ID + '_Video_1').val('');
          }
        });
      } else {
        var s1 = code.split('<a href="https://vimeo.com/');
        var src = s1[1].split('">https://');
        if (src[0].length > 9) {
          var real_src = src[0].split('/');
          src[0] = real_src[2];
        }
        console.log( src[0])
        jQuery('#' + Field_ID + '_Video_2').val('https://player.vimeo.com/video/' + src[0]);

        var ajaxurl = objectpoll.ajaxurl;
        var data = {
          action: 'TSoftPoll_Vimeo_Video_Image', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
          foobar: 'https://player.vimeo.com/video/' + src[0], // translates into $_POST['foobar'] in PHP
          nonce: objectpoll.nonce

        };
        jQuery.post(ajaxurl, data, function (response) {
          
          jQuery('#' + Field_ID + '_Image_2').val(response.thumbnail_large);
          if (jQuery('#' + Field_ID + '_Video_2').val().length > 0) {
            clearInterval(PollIntervId);
            jQuery('#' + Field_ID + '_Video_1').val('');
          }
        });
      }
    } else if (code.indexOf('.mp4') > 0) {
      if (code.indexOf('embed') > 0) {
        var TotalSoftCodes1 = code.split('[embed]');
        var TotalSoftCodeSrc = TotalSoftCodes1[1].split('[/embed]');
        var url = TotalSoftCodeSrc[0];
        jQuery('#' + Field_ID + '_Video_2').val(url);
        jQuery('#' + Field_ID + '_Video_1').val(url);
        if (jQuery('#' + Field_ID + '_Video_1').val().length > 0) {
          clearInterval(PollIntervId);
          jQuery('#' + Field_ID + '_Video_1').val('');
        }
      } else if (code.indexOf('video') > 0) {
        var TotalSoftCodes1 = code.split('mp4="');
        var TotalSoftCodeSrc = TotalSoftCodes1[1].split('"]');
        jQuery('#' + Field_ID + '_Video_2').val(TotalSoftCodeSrc[0]);
        jQuery('#' + Field_ID + '_Video_1').val(TotalSoftCodeSrc[0]);
        if (jQuery('#' + Field_ID + '_Video_1').val().length > 0) {
          clearInterval(PollIntervId);
          jQuery('#' + Field_ID + '_Video_1').val('');
        }
      } else {
        var TotalSoftCodes1 = code.split('<a href="');
        var TotalSoftCodeSrc = TotalSoftCodes1[1].split('">');
        jQuery('#T' + Field_ID + '_Video_2').val(TotalSoftCodeSrc[0]);
        jQuery('#' + Field_ID + '_Video_1').val(TotalSoftCodeSrc[0]);
        if (jQuery('#' + Field_ID + '_Video_1').val().length > 0) {
          clearInterval(PollIntervId);
          jQuery('#' + Field_ID + '_Video_1').val('');
        }
      }
    }
  }, 100)
}

function TotalSoftPoll_Image_Clicked(Field_ID) {
  var PollIntervId = setInterval(function () {
    var code = jQuery('#' + Field_ID + '_Image_1').val();
    if (code.indexOf('img') > 0) {
      var s = code.split('src="');
      var src = s[1].split('"');
      jQuery('#' + Field_ID + '_Image_2').val(src[0]);
      if (jQuery('#' + Field_ID + '_Image_2').val().length > 0) {
        jQuery('#' + Field_ID + '_Image_1').val('');
        clearInterval(PollIntervId);
      }
    }
  }, 100)
}

function Total_Soft_Poll_Res_Ans() {
  jQuery('.TS_Poll_Add_Answer_Table').find('input[type=text]').val('');
  jQuery('#Total_Soft_Poll_UpdAns').animate({'opacity': 0}, 500);
  setTimeout(function () {
    jQuery('#Total_Soft_Poll_UpdAns').css('display', 'none');
    jQuery('#Total_Soft_Poll_SavAns').css('display', 'inline');
  }, 300)
  setTimeout(function () {
    jQuery('#Total_Soft_Poll_SavAns').animate({'opacity': 1}, 500);
  }, 500)
}

function Total_Soft_Poll_Save_Ans() {
  var TotalSoftPollHidNum = jQuery('#TotalSoftPollHidNum').val();
  var TotalSoftPoll_Answer = jQuery('#TotalSoftPoll_Answer').val();
  var TotalSoftPoll_Video_2 = jQuery('#TotalSoftPoll_Video_2').val();
  var TotalSoftPoll_Image_2 = jQuery('#TotalSoftPoll_Image_2').val();
  if (TotalSoftPoll_Answer == '' && TotalSoftPoll_Video_2 == '' && TotalSoftPoll_Image_2 == '') {
    alert('One of the fields must be filled for saving answer.');
  } else {
    if (TotalSoftPollHidNum % 2 == 1) {
      jQuery('#TotalSoftPoll_AnswerUl').append('<li id="TotalSoftPollLi_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '"><table class="Total_Soft_Poll_AnswersTable1 Total_Soft_Poll_AnswersTable2"><tr><td>' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '</td><td><input type="text" name="TotalSoftPoll_Ans_Col_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '" id="TotalSoftPoll_Ans_Col_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '" class="Total_Soft_Poll_Color" value="#000000"><input type="text" style="display: none" name="TotalSoftPoll_Old_Col_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '" value="#000000"></td><td><input type="text" readonly value="' + TotalSoftPoll_Answer + '" class="Total_Soft_Poll_Select Total_Soft_Poll_Select1" id="TotalSoftPoll_Ans_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '" name="TotalSoftPoll_Ans_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '"><input type="text" style="display: none" value="' + TotalSoftPoll_Answer + '" name="TotalSoftPoll_Old_Ans_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '"></td><td><img class="TotalSoftPollAnsImage" src="' + TotalSoftPoll_Image_2 + '"><input type="text" value="' + TotalSoftPoll_Image_2 + '" class="Total_Soft_Poll_Select Total_Soft_Poll_Select1 TotalSoftPoll_Ans_Im" style="display:none;" id="TotalSoftPoll_Ans_Im_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '" name="TotalSoftPoll_Ans_Im_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '"><input type="text" value="' + TotalSoftPoll_Image_2 + '" style="display:none;" name="TotalSoftPoll_Old_Im_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '"><input type="text" value="' + TotalSoftPoll_Video_2 + '" class="Total_Soft_Poll_Select Total_Soft_Poll_Select1 TotalSoftPoll_Ans_Vd" style="display:none;" id="TotalSoftPoll_Ans_Vd_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '" name="TotalSoftPoll_Ans_Vd_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '">   <input type="text" value="' + TotalSoftPoll_Video_2 + '" style="display:none;" name="TotalSoftPoll_Old_Vd_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '">   </td><td><i class="totalsoft totalsoft-file-text" onclick="TotalSoftPollAns_Copy(' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + ')"></i></td><td><i class="totalsoft totalsoft-pencil" onclick="TotalSoftPollAns_Edit(' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + ')"></i></td><td><i class="totalsoft totalsoft-trash" onclick="TotalSoftPollAns_Del(' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + ')"></i><span class="Total_Soft_Poll_Del_Span"><i class="Total_Soft_Poll_Del_Span_Yes totalsoft totalsoft-check" onclick="Total_Soft_Poll_Del_Ans_Yes(' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + ')"></i><i class="Total_Soft_Poll_Del_Span_No totalsoft totalsoft-times" onclick="Total_Soft_Poll_Del_Ans_No(' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + ')"></i></span></td></tr></table></li>');
    } else {
      jQuery('#TotalSoftPoll_AnswerUl').append('<li id="TotalSoftPollLi_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '"><table class="Total_Soft_Poll_AnswersTable1 Total_Soft_Poll_AnswersTable3"><tr><td>' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '</td><td><input type="text" name="TotalSoftPoll_Ans_Col_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '" id="TotalSoftPoll_Ans_Col_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '" class="Total_Soft_Poll_Color" value="#000000"><input type="text" style="display: none" name="TotalSoftPoll_Old_Col_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '" value="#000000"></td><td><input type="text" readonly value="' + TotalSoftPoll_Answer + '" class="Total_Soft_Poll_Select Total_Soft_Poll_Select1" id="TotalSoftPoll_Ans_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '" name="TotalSoftPoll_Ans_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '"><input type="text" style="display: none" value="' + TotalSoftPoll_Answer + '" name="TotalSoftPoll_Old_Ans_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '"></td><td><img class="TotalSoftPollAnsImage" src="' + TotalSoftPoll_Image_2 + '"><input type="text" value="' + TotalSoftPoll_Image_2 + '" class="Total_Soft_Poll_Select Total_Soft_Poll_Select1 TotalSoftPoll_Ans_Im" style="display:none;" id="TotalSoftPoll_Ans_Im_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '" name="TotalSoftPoll_Ans_Im_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '"><input type="text" value="' + TotalSoftPoll_Image_2 + '" style="display:none;" name="TotalSoftPoll_Old_Im_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '"><input type="text" value="' + TotalSoftPoll_Video_2 + '" class="Total_Soft_Poll_Select Total_Soft_Poll_Select1 TotalSoftPoll_Ans_Vd" style="display:none;" id="TotalSoftPoll_Ans_Vd_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '" name="TotalSoftPoll_Ans_Vd_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '">   <input type="text" value="' + TotalSoftPoll_Video_2 + '" style="display:none;" name="TotalSoftPoll_Old_Vd_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '">   </td><td><i class="totalsoft totalsoft-file-text" onclick="TotalSoftPollAns_Copy(' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + ')"></i></td><td><i class="totalsoft totalsoft-pencil" onclick="TotalSoftPollAns_Edit(' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + ')"></i></td><td><i class="totalsoft totalsoft-trash" onclick="TotalSoftPollAns_Del(' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + ')"></i><span class="Total_Soft_Poll_Del_Span"><i class="Total_Soft_Poll_Del_Span_Yes totalsoft totalsoft-check" onclick="Total_Soft_Poll_Del_Ans_Yes(' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + ')"></i><i class="Total_Soft_Poll_Del_Span_No totalsoft totalsoft-times" onclick="Total_Soft_Poll_Del_Ans_No(' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + ')"></i></span></td></tr></table></li>');
    }
    jQuery('.Total_Soft_Poll_Color').wpColorPicker();
    Total_Soft_Poll_Res_Ans();
    TS_Poll_Add_Answer_Button_Close();
    jQuery('#TotalSoftPollHidNum').val(parseInt(parseInt(TotalSoftPollHidNum) + 1));
  }
}

function TotalSoftPollAns_Copy(Poll_Num) {
  var Total_Soft_Poll_Colorr = jQuery('#TotalSoftPollLi_' + Poll_Num).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(2)').find('.Total_Soft_Poll_Color').val();
  var TotalSoftPoll_Answer = jQuery('#TotalSoftPollLi_' + Poll_Num).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(3)').find('.Total_Soft_Poll_Select').val();
  var TotalSoftPoll_Image_2 = jQuery('#TotalSoftPollLi_' + Poll_Num).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(4)').find('.TotalSoftPoll_Ans_Im').val();
  var TotalSoftPoll_Video_2 = jQuery('#TotalSoftPollLi_' + Poll_Num).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(4)').find('.TotalSoftPoll_Ans_Vd').val();
  var TotalSoftPollHidNum = jQuery('#TotalSoftPollHidNum').val();
  var count = 1;

  jQuery("[id^=TotalSoftPoll_Ans_]").each(function () {
    if (jQuery(this).val().startsWith(`${TotalSoftPoll_Answer} (copy `)) {
      count++;
    }
  });

  jQuery('#TotalSoftPollLi_' + Poll_Num).after('<li id="TotalSoftPollLi_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '"><table class="Total_Soft_Poll_AnswersTable1 Total_Soft_Poll_AnswersTable2"><tr><td>' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '</td><td><input type="text" name="TotalSoftPoll_Ans_Col_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '" id="TotalSoftPoll_Ans_Col_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '" class="Total_Soft_Poll_Color" value="' + Total_Soft_Poll_Colorr + '"> <input type="text" style="display: none" name="TotalSoftPoll_Old_Col_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '" value="' + Total_Soft_Poll_Colorr + '"> </td><td><input type="text" readonly value="' + TotalSoftPoll_Answer + ' (copy ' + count + ')" class="Total_Soft_Poll_Select Total_Soft_Poll_Select1" id="TotalSoftPoll_Ans_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '" name="TotalSoftPoll_Ans_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '">  <input type="text" style="display: none" value="' + TotalSoftPoll_Answer + ' (copy) " name="TotalSoftPoll_Old_Ans_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '">  </td><td><img class="TotalSoftPollAnsImage" src="' + TotalSoftPoll_Image_2 + '"><input type="text" value="' + TotalSoftPoll_Image_2 + '" class="Total_Soft_Poll_Select Total_Soft_Poll_Select1 TotalSoftPoll_Ans_Im" style="display:none;" id="TotalSoftPoll_Ans_Im_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '" name="TotalSoftPoll_Ans_Im_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '"><input type="text" value="' + TotalSoftPoll_Image_2 + '" style="display:none;"  name="TotalSoftPoll_Old_Im_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '"><input type="text" value="' + TotalSoftPoll_Video_2 + '" class="Total_Soft_Poll_Select Total_Soft_Poll_Select1 TotalSoftPoll_Ans_Vd" style="display:none;" id="TotalSoftPoll_Ans_Vd_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '" name="TotalSoftPoll_Ans_Vd_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '">  <input type="text" value="' + TotalSoftPoll_Video_2 + '" style="display:none;"  name="TotalSoftPoll_Old_Vd_' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + '">  </td><td><i class="totalsoft totalsoft-file-text" onclick="TotalSoftPollAns_Copy(' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + ')"></i></td><td><i class="totalsoft totalsoft-pencil" onclick="TotalSoftPollAns_Edit(' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + ')"></i></td><td><i class="totalsoft totalsoft-trash" onclick="TotalSoftPollAns_Del(' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + ')"></i><span class="Total_Soft_Poll_Del_Span"><i class="Total_Soft_Poll_Del_Span_Yes totalsoft totalsoft-check" onclick="Total_Soft_Poll_Del_Ans_Yes(' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + ')"></i><i class="Total_Soft_Poll_Del_Span_No totalsoft totalsoft-times" onclick="Total_Soft_Poll_Del_Ans_No(' + parseInt(parseInt(TotalSoftPollHidNum) + 1) + ')"></i></span></td></tr></table></li>').insertAfter('#TotalSoftPollLi_' + Poll_Num);

  jQuery('#TotalSoftPollHidNum').val(parseInt(parseInt(TotalSoftPollHidNum) + 1));
  jQuery('.Total_Soft_Poll_Color').wpColorPicker();

  jQuery("#TotalSoftPoll_AnswerUl > li").each(function () {
    jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(1)').html(parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(2)').find('.Total_Soft_Poll_Color').attr('id', 'TotalSoftPoll_Ans_Col_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(2)').find('.Total_Soft_Poll_Color').attr('name', 'TotalSoftPoll_Ans_Col_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(3)').find('.Total_Soft_Poll_Select').attr('id', 'TotalSoftPoll_Ans_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(3)').find('.Total_Soft_Poll_Select').attr('name', 'TotalSoftPoll_Ans_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(4)').find('.TotalSoftPoll_Ans_Im').attr('id', 'TotalSoftPoll_Ans_Im_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(4)').find('.TotalSoftPoll_Ans_Im').attr('name', 'TotalSoftPoll_Ans_Im_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(4)').find('.TotalSoftPoll_Ans_Vd').attr('id', 'TotalSoftPoll_Ans_Vd_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(4)').find('.TotalSoftPoll_Ans_Vd').attr('name', 'TotalSoftPoll_Ans_Vd_' + parseInt(parseInt(jQuery(this).index()) + 1));

    if (jQuery(this).find('.Total_Soft_Poll_AnswersTable1').hasClass('Total_Soft_Poll_AnswersTable2')) {
      jQuery(this).find('.Total_Soft_Poll_AnswersTable1').removeClass("Total_Soft_Poll_AnswersTable2");
    } else if (jQuery(this).find('.Total_Soft_Poll_AnswersTable1').hasClass('Total_Soft_Poll_AnswersTable3')) {
      jQuery(this).find('.Total_Soft_Poll_AnswersTable1').removeClass("Total_Soft_Poll_AnswersTable3");
    }
    if (jQuery(this).index() % 2 == 0) {
      jQuery(this).find('.Total_Soft_Poll_AnswersTable1').addClass("Total_Soft_Poll_AnswersTable3");
    } else {
      jQuery(this).find('.Total_Soft_Poll_AnswersTable1').addClass("Total_Soft_Poll_AnswersTable2");
    }
  });
}

function Total_Soft_Poll_Update_Ans() {
  var Poll_Num = jQuery('#TotalSoftPollHidUpdate').val();
  var TotalSoftPollHidNum = jQuery('#TotalSoftPollHidNum').val();

  var TotalSoftPoll_Answer = jQuery('#TotalSoftPoll_Answer').val();
  var TotalSoftPoll_Video_2 = jQuery('#TotalSoftPoll_Video_2').val();
  var TotalSoftPoll_Image_2 = jQuery('#TotalSoftPoll_Image_2').val();

  if (TotalSoftPoll_Answer == '' && TotalSoftPoll_Video_2 == '' && TotalSoftPoll_Image_2 == '') {
    alert('One of the fields must be filled for saving answer.');
  } else {
    jQuery('#TotalSoftPollLi_' + Poll_Num).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(3)').find('.Total_Soft_Poll_Select').val(TotalSoftPoll_Answer);
    jQuery('#TotalSoftPollLi_' + Poll_Num).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(4)').find('.TotalSoftPoll_Ans_Im').val(TotalSoftPoll_Image_2);
    jQuery('#TotalSoftPollLi_' + Poll_Num).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(4)').find('.TotalSoftPoll_Ans_Vd').val(TotalSoftPoll_Video_2);
    jQuery('#TotalSoftPollLi_' + Poll_Num).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(4)').find('.TotalSoftPollAnsImage').attr('src', TotalSoftPoll_Image_2);

    Total_Soft_Poll_Res_Ans();
    TS_Poll_Add_Answer_Button_Close();
    jQuery('#TotalSoftPollHidNum').val(TotalSoftPollHidNum);
  }
}

function TotalSoftPoll_AnswerUlSort() {
  jQuery('#TotalSoftPoll_AnswerUl').sortable({
    update: function () {
      jQuery("#TotalSoftPoll_AnswerUl > li").each(function () {
        jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(1)').html(parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(2)').find('.Total_Soft_Poll_Color').attr('id', 'TotalSoftPoll_Ans_Col_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(2)').find('.Total_Soft_Poll_Color').attr('name', 'TotalSoftPoll_Ans_Col_' + parseInt(parseInt(jQuery(this).index()) + 1));

        jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(3)').find('.Total_Soft_Poll_Select').attr('id', 'TotalSoftPoll_Ans_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(3)').find('.Total_Soft_Poll_Select').attr('name', 'TotalSoftPoll_Ans_' + parseInt(parseInt(jQuery(this).index()) + 1));

        jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(4)').find('.TotalSoftPoll_Ans_Im').attr('id', 'TotalSoftPoll_Ans_Im_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(4)').find('.TotalSoftPoll_Ans_Im').attr('name', 'TotalSoftPoll_Ans_Im_' + parseInt(parseInt(jQuery(this).index()) + 1));

        jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(4)').find('.TotalSoftPoll_Ans_Vd').attr('id', 'TotalSoftPoll_Ans_Vd_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(4)').find('.TotalSoftPoll_Ans_Vd').attr('name', 'TotalSoftPoll_Ans_Vd_' + parseInt(parseInt(jQuery(this).index()) + 1));

        if (jQuery(this).find('.Total_Soft_Poll_AnswersTable1').hasClass('Total_Soft_Poll_AnswersTable2')) {
          jQuery(this).find('.Total_Soft_Poll_AnswersTable1').removeClass("Total_Soft_Poll_AnswersTable2");
        } else if (jQuery(this).find('.Total_Soft_Poll_AnswersTable1').hasClass('Total_Soft_Poll_AnswersTable3')) {
          jQuery(this).find('.Total_Soft_Poll_AnswersTable1').removeClass("Total_Soft_Poll_AnswersTable3");
        }
        if (jQuery(this).index() % 2 == 0) {
          jQuery(this).find('.Total_Soft_Poll_AnswersTable1').addClass("Total_Soft_Poll_AnswersTable3");
        } else {
          jQuery(this).find('.Total_Soft_Poll_AnswersTable1').addClass("Total_Soft_Poll_AnswersTable2");
        }
      });
    }
  });
}

function TotalSoftPollAns_Edit(Poll_Num) {
  var TotalSoftPoll_Answer = jQuery('#TotalSoftPollLi_' + Poll_Num).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(3)').find('.Total_Soft_Poll_Select').val();
  var TotalSoftPoll_Image_2 = jQuery('#TotalSoftPollLi_' + Poll_Num).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(4)').find('.TotalSoftPoll_Ans_Im').val();
  var TotalSoftPoll_Video_2 = jQuery('#TotalSoftPollLi_' + Poll_Num).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(4)').find('.TotalSoftPoll_Ans_Vd').val();

  jQuery('#TotalSoftPollHidUpdate').val(Poll_Num);

  jQuery('#Total_Soft_Poll_SavAns').animate({'opacity': 0}, 500);
  setTimeout(function () {
    jQuery('#Total_Soft_Poll_SavAns').css('display', 'none');
    jQuery('#Total_Soft_Poll_UpdAns').css('display', 'inline');
    TS_Poll_Add_Answer_Button();
  }, 300)
  setTimeout(function () {
    jQuery('#Total_Soft_Poll_UpdAns').animate({'opacity': 1}, 500);
  }, 500)

  jQuery('#TotalSoftPoll_Answer').val(TotalSoftPoll_Answer);
  jQuery('#TotalSoftPoll_Image_2').val(TotalSoftPoll_Image_2);
  jQuery('#TotalSoftPoll_Video_2').val(TotalSoftPoll_Video_2);
}

function Total_Soft_Poll_Del_Ans_Yes(Poll_Num) {
  jQuery('#TotalSoftPollLi_' + Poll_Num).remove();
  jQuery('#TotalSoftPollHidNum').val(jQuery('#TotalSoftPollHidNum').val() - 1);

  jQuery("#TotalSoftPoll_AnswerUl > li").each(function () {
    jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(1)').html(parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(2)').find('.Total_Soft_Poll_Color').attr('id', 'TotalSoftPoll_Ans_Col_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(2)').find('.Total_Soft_Poll_Color').attr('name', 'TotalSoftPoll_Ans_Col_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(3)').find('.Total_Soft_Poll_Select').attr('id', 'TotalSoftPoll_Ans_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(3)').find('.Total_Soft_Poll_Select').attr('name', 'TotalSoftPoll_Ans_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(4)').find('.TotalSoftPoll_Ans_Im').attr('id', 'TotalSoftPoll_Ans_Im_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(4)').find('.TotalSoftPoll_Ans_Im').attr('name', 'TotalSoftPoll_Ans_Im_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(4)').find('.TotalSoftPoll_Ans_Vd').attr('id', 'TotalSoftPoll_Ans_Vd_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_Poll_AnswersTable1 td:nth-child(4)').find('.TotalSoftPoll_Ans_Vd').attr('name', 'TotalSoftPoll_Ans_Vd_' + parseInt(parseInt(jQuery(this).index()) + 1));

    if (jQuery(this).find('.Total_Soft_Poll_AnswersTable1').hasClass('Total_Soft_Poll_AnswersTable2')) {
      jQuery(this).find('.Total_Soft_Poll_AnswersTable1').removeClass("Total_Soft_Poll_AnswersTable2");
    } else if (jQuery(this).find('.Total_Soft_Poll_AnswersTable1').hasClass('Total_Soft_Poll_AnswersTable3')) {
      jQuery(this).find('.Total_Soft_Poll_AnswersTable1').removeClass("Total_Soft_Poll_AnswersTable3");
    }
    if (jQuery(this).index() % 2 == 0) {
      jQuery(this).find('.Total_Soft_Poll_AnswersTable1').addClass("Total_Soft_Poll_AnswersTable3");
    } else {
      jQuery(this).find('.Total_Soft_Poll_AnswersTable1').addClass("Total_Soft_Poll_AnswersTable2");
    }
  });
}

function Total_Soft_Poll_Del_Ans_No(Poll_Num) {
  jQuery('#TotalSoftPollLi_' + Poll_Num).find('.Total_Soft_Poll_Del_Span').removeClass('Total_Soft_Poll_Del_Span1');
}

function TotalSoftPollAns_Del(Poll_Num) {
  jQuery('#TotalSoftPollLi_' + Poll_Num).find('.Total_Soft_Poll_Del_Span').addClass('Total_Soft_Poll_Del_Span1');
}

function TotalSoftPoll_Edit(Poll_ID) {
  jQuery('#Total_SoftPoll_Update').val(Poll_ID);
  jQuery.ajax({
    type: 'POST',
    url: objectpoll.ajaxurl,
    data: {
      action: 'TotalSoftPoll_Edit', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
      foobar: Poll_ID, // translates into $_POST['foobar'] in PHP
      nonce: objectpoll.nonce
    },
    beforeSend: function () {
      jQuery('.Total_Soft_Poll_Loading').css('display', 'block');
    },
    success: function (response) {
      jQuery('#TotalSoftPoll_Question').val(response[0]['TotalSoftPoll_Question']);
      jQuery('#TotalSoftPoll_Theme').val(response[0]['TotalSoftPoll_Theme']);
      jQuery('#TotalSoftPollHidNum').val(response[0]['TotalSoftPoll_Ans_C']);
      TotalSoftPoll_Type_Ch();
    }
  });
  jQuery.ajax({
    type: 'POST',
    url: objectpoll.ajaxurl,
    data: {
      action: 'TotalSoftPoll_Edit_Q_M', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
      foobar: Poll_ID, // translates into $_POST['foobar'] in PHP
      nonce: objectpoll.nonce
    },
    beforeSend: function () {
    },
    success: function (response) {
      jQuery('#TotalSoftPollQ_Image_2').val(response[0]['TotalSoftPoll_Q_Im']);
      jQuery('#TotalSoftPollQ_Video_2').val(response[0]['TotalSoftPoll_Q_Vd']);
      jQuery('#TotalSoft_Poll_Gen_Set').val(response[0]['TotalSoftPoll_Q_01']);
    }
  });
  jQuery.ajax({
    type: 'POST',
    url: objectpoll.ajaxurl,
    data: {
      action: 'TotalSoftPoll_Edit_Ans', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
      foobar: Poll_ID, // translates into $_POST['foobar'] in PHP
      nonce: objectpoll.nonce

    },
    beforeSend: function () {
    },
    success: function (response) {
      var data = response;

      var TSPoll_Ans = Array();
      var TSPoll_Ans_Im = Array();
      var TSPoll_Ans_Vd = Array();
      var TSPoll_Ans_Cl = Array();

      for (i = 0; i < data.length; i++) {
        TSPoll_Ans[TSPoll_Ans.length] = data[i]['TotalSoftPoll_Ans'];
        TSPoll_Ans_Im[TSPoll_Ans_Im.length] = data[i]['TotalSoftPoll_Ans_Im'];
        TSPoll_Ans_Vd[TSPoll_Ans_Vd.length] = data[i]['TotalSoftPoll_Ans_Vd'];
        TSPoll_Ans_Cl[TSPoll_Ans_Cl.length] = data[i]['TotalSoftPoll_Ans_Cl'];
      }
      for (i = 1; i <= TSPoll_Ans.length; i++) {
        if (i % 2 == 1) {
          jQuery('#TotalSoftPoll_AnswerUl').append('<li id="TotalSoftPollLi_' + i + '"><table class="Total_Soft_Poll_AnswersTable1 Total_Soft_Poll_AnswersTable3"><tr><td>' + i + '</td><td><input type="text" name="TotalSoftPoll_Ans_Col_' + i + '" id="TotalSoftPoll_Ans_Col_' + i + '" class="Total_Soft_Poll_Color" value="' + TSPoll_Ans_Cl[i - 1] + '"><input type="text" style="display: none" name="TotalSoftPoll_Old_Col_' + i + '" value="' + TSPoll_Ans_Cl[i - 1] + '"></td><td><input type="text" readonly value="' + TSPoll_Ans[i - 1] + '" class="Total_Soft_Poll_Select Total_Soft_Poll_Select1" id="TotalSoftPoll_Ans_' + i + '" name="TotalSoftPoll_Ans_' + i + '"><input type="text" style="display: none" value="' + TSPoll_Ans[i - 1] + '" name="TotalSoftPoll_Old_Ans_' + i + '"></td><td><img class="TotalSoftPollAnsImage" src="' + TSPoll_Ans_Im[i - 1] + '"><input type="text" value="' + TSPoll_Ans_Im[i - 1] + '" class="Total_Soft_Poll_Select Total_Soft_Poll_Select1 TotalSoftPoll_Ans_Im" style="display:none;" id="TotalSoftPoll_Ans_Im_' + i + '" name="TotalSoftPoll_Ans_Im_' + i + '">   <input type="text" value="' + TSPoll_Ans_Im[i - 1] + '" style="display:none;" name="TotalSoftPoll_Old_Im_' + i + '">  <input type="text" value="' + TSPoll_Ans_Vd[i - 1] + '" class="Total_Soft_Poll_Select Total_Soft_Poll_Select1 TotalSoftPoll_Ans_Vd" style="display:none;" id="TotalSoftPoll_Ans_Vd_' + i + '" name="TotalSoftPoll_Ans_Vd_' + i + '"><input type="text" value="' + TSPoll_Ans_Vd[i - 1] + '" style="display:none;" name="TotalSoftPoll_Old_Vd_' + i + '"></td><td><i class="totalsoft totalsoft-file-text" onclick="TotalSoftPollAns_Copy(' + i + ')"></i></td><td><i class="totalsoft totalsoft-pencil" onclick="TotalSoftPollAns_Edit(' + i + ')"></i></td><td><i class="totalsoft totalsoft-trash" onclick="TotalSoftPollAns_Del(' + i + ')"></i><span class="Total_Soft_Poll_Del_Span"><i class="Total_Soft_Poll_Del_Span_Yes totalsoft totalsoft-check" onclick="Total_Soft_Poll_Del_Ans_Yes(' + i + ')"></i><i class="Total_Soft_Poll_Del_Span_No totalsoft totalsoft-times" onclick="Total_Soft_Poll_Del_Ans_No(' + i + ')"></i></span></td></tr></table></li>');
        } else {
          jQuery('#TotalSoftPoll_AnswerUl').append('<li id="TotalSoftPollLi_' + i + '"><table class="Total_Soft_Poll_AnswersTable1 Total_Soft_Poll_AnswersTable2"><tr><td>' + i + '</td><td><input type="text" name="TotalSoftPoll_Ans_Col_' + i + '" id="TotalSoftPoll_Ans_Col_' + i + '" class="Total_Soft_Poll_Color" value="' + TSPoll_Ans_Cl[i - 1] + '"><input type="text" style="display: none" name="TotalSoftPoll_Old_Col_' + i + '" value="' + TSPoll_Ans_Cl[i - 1] + '"></td><td><input type="text" readonly value="' + TSPoll_Ans[i - 1] + '" class="Total_Soft_Poll_Select Total_Soft_Poll_Select1" id="TotalSoftPoll_Ans_' + i + '" name="TotalSoftPoll_Ans_' + i + '"><input type="text" style="display: none" value="' + TSPoll_Ans[i - 1] + '" name="TotalSoftPoll_Old_Ans_' + i + '"></td><td><img class="TotalSoftPollAnsImage" src="' + TSPoll_Ans_Im[i - 1] + '"><input type="text" value="' + TSPoll_Ans_Im[i - 1] + '" class="Total_Soft_Poll_Select Total_Soft_Poll_Select1 TotalSoftPoll_Ans_Im" style="display:none;" id="TotalSoftPoll_Ans_Im_' + i + '" name="TotalSoftPoll_Ans_Im_' + i + '">   <input type="text" value="' + TSPoll_Ans_Im[i - 1] + '" style="display:none;" name="TotalSoftPoll_Old_Im_' + i + '">  <input type="text" value="' + TSPoll_Ans_Vd[i - 1] + '" class="Total_Soft_Poll_Select Total_Soft_Poll_Select1 TotalSoftPoll_Ans_Vd" style="display:none;" id="TotalSoftPoll_Ans_Vd_' + i + '" name="TotalSoftPoll_Ans_Vd_' + i + '"><input type="text" value="' + TSPoll_Ans_Vd[i - 1] + '" style="display:none;" name="TotalSoftPoll_Old_Vd_' + i + '"></td><td><i class="totalsoft totalsoft-file-text" onclick="TotalSoftPollAns_Copy(' + i + ')"></i></td><td><i class="totalsoft totalsoft-pencil" onclick="TotalSoftPollAns_Edit(' + i + ')"></i></td><td><i class="totalsoft totalsoft-trash" onclick="TotalSoftPollAns_Del(' + i + ')"></i><span class="Total_Soft_Poll_Del_Span"><i class="Total_Soft_Poll_Del_Span_Yes totalsoft totalsoft-check" onclick="Total_Soft_Poll_Del_Ans_Yes(' + i + ')"></i><i class="Total_Soft_Poll_Del_Span_No totalsoft totalsoft-times" onclick="Total_Soft_Poll_Del_Ans_No(' + i + ')"></i></span></td></tr></table></li>');
        }
        jQuery('.Total_Soft_Poll_Color').wpColorPicker();
      }

      jQuery('.Total_Soft_Poll_AMD2').animate({'opacity': 0}, 500);
      jQuery('.Total_Soft_Poll_AMMTable').animate({'opacity': 0}, 500);
      jQuery('.Total_Soft_Poll_AMOTable').animate({'opacity': 0}, 500);
      jQuery('.Total_Soft_Poll_AMD2').animate({'opacity': 0}, 500);
      jQuery('.Total_Soft_Poll_Save').animate({'opacity': 0}, 500);
      jQuery('.Total_Soft_Poll_Update').animate({'opacity': 1}, 500);

      jQuery('#Total_Soft_Poll_ID').html('[Total_Soft_Poll id="' + Poll_ID + '"]');
      jQuery('#Total_Soft_Poll_TID').html('&lt;?php echo do_shortcode(&#039;[Total_Soft_Poll id="' + Poll_ID + '"]&#039;);?&gt');
      TotalSoftPoll_Type_Ch();
      setTimeout(function () {
        jQuery('.Total_Soft_Poll_AMD2').css('display', 'none');
        jQuery('.Total_Soft_Poll_AMMTable').css('display', 'none');
        jQuery('.Total_Soft_Poll_AMOTable').css('display', 'none');
        jQuery('.Total_Soft_Poll_Save').css('display', 'none');
        jQuery('.Total_Soft_Poll_Update').css('display', 'block');
        jQuery('.Total_Soft_Poll_AMD3').css('display', 'block');

        jQuery('.TS_Poll_AM_Table_Div').css('display', 'block');
        jQuery('.Total_Soft_Poll_AnswersTable').css('display', 'table');
        jQuery('.Total_Soft_Poll_AMShortTable').css('display', 'table');
      }, 500)
      setTimeout(function () {
        jQuery('.Total_Soft_Poll_AMD3').animate({'opacity': 1}, 500);
        jQuery('.TS_Poll_AM_Table_Div').animate({'opacity': 1}, 500);
        jQuery('.Total_Soft_Poll_AnswersTable').animate({'opacity': 1}, 500);
        jQuery('.Total_Soft_Poll_AMShortTable').animate({'opacity': 1}, 500);
        jQuery('.Total_Soft_Poll_Loading').css('display', 'none');
      }, 600)
    }
  });
}

function TotalSoftPoll_Del_Yes(Poll_ID) {
  jQuery.ajax({
    type: 'POST',
    url: objectpoll.ajaxurl,
    data: {
      action: 'TotalSoftPoll_Del', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
      foobar: Poll_ID, // translates into $_POST['foobar'] in PHP
      nonce: objectpoll.nonce
    },
    beforeSend: function () {
      jQuery('.Total_Soft_Poll_Loading').css('display', 'block');
    },
    success: function (response) {
      location.reload();
    }
  });
}

function TotalSoftPoll_Del_No(Poll_ID) {
  jQuery('#Total_Soft_Poll_AMOTable_tr_' + Poll_ID).find('.Total_Soft_Poll_Del_Span').removeClass('Total_Soft_Poll_Del_Span1');
}

function TotalSoftPoll_Del(Poll_ID) {
  jQuery('#Total_Soft_Poll_AMOTable_tr_' + Poll_ID).find('.Total_Soft_Poll_Del_Span').addClass('Total_Soft_Poll_Del_Span1');
}

function TotalSoftPoll_Clone(Poll_ID) {
  jQuery.ajax({
    type: 'POST',
    url: objectpoll.ajaxurl,
    data: {
      action: 'TotalSoftPoll_Clone', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
      foobar: Poll_ID, // translates into $_POST['foobar'] in PHP
      nonce: objectpoll.nonce
    },
    beforeSend: function () {
      jQuery('.Total_Soft_Poll_Loading').css('display', 'block');
    },
    success: function (response) {
      location.reload();
    }
  });
}

// Theme Menu
function TotalSoft_Poll_Out() {
  jQuery('.TotalSoft_Poll_Range').each(function () {
    if (jQuery(this).hasClass('TotalSoft_Poll_Rangeper')) {
      jQuery('#' + jQuery(this).attr('id') + '_Output').html(jQuery(this).val() + '%');
    } else if (jQuery(this).hasClass('TotalSoft_Poll_Rangepx')) {
      jQuery('#' + jQuery(this).attr('id') + '_Output').html(jQuery(this).val() + 'px');
    } else if (jQuery(this).hasClass('TotalSoft_Poll_RangeSec')) {
      jQuery('#' + jQuery(this).attr('id') + '_Output').html(jQuery(this).val() + 's');
    } else {
      jQuery('#' + jQuery(this).attr('id') + '_Output').html(jQuery(this).val());
    }
  })
}

function TotalSoft_Poll_Theme_But1() {
  alert('This is Our Free Version. For more adventures Click to buy Personal version.');
}

function TotalSoftPoll_Theme_Edit(Theme_ID) {
  jQuery('#Total_SoftPoll_TUpdateID').val(Theme_ID);

  jQuery.ajax({
    type: 'POST',
    url: objectpoll.ajaxurl,
    data: {
      action: 'TotalSoftPoll_Theme_Edit', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
      foobar: Theme_ID, // translates into $_POST['foobar'] in PHP
      nonce: objectpoll.nonce
    },
    beforeSend: function () {
      jQuery('.Total_Soft_Poll_Loading').css('display', 'block');
    },
    success: function (response) {
      var data = response;

      jQuery('#TotalSoft_Poll_TTitle').val(data[0]['TotalSoft_Poll_TTitle']);
      jQuery('#TotalSoft_Poll_TType').val(data[0]['TotalSoft_Poll_TType']);

      if (data[0]['TotalSoft_Poll_TType'] == 'Standart Poll' || data[0]['TotalSoft_Poll_TType'] == 'Standard Poll') {
        if (data[0]['TotalSoft_Poll_1_A_CTF'] == 'true') {
          data[0]['TotalSoft_Poll_1_A_CTF'] = true;
        } else {
          data[0]['TotalSoft_Poll_1_A_CTF'] = false;
        }
        if (data[0]['TotalSoft_Poll_1_CH_CM'] == 'true') {
          data[0]['TotalSoft_Poll_1_CH_CM'] = true;
        } else {
          data[0]['TotalSoft_Poll_1_CH_CM'] = false;
        }
        if (data[0]['TotalSoft_Poll_1_RB_Show'] == 'true') {
          data[0]['TotalSoft_Poll_1_RB_Show'] = true;
        } else {
          data[0]['TotalSoft_Poll_1_RB_Show'] = false;
        }
        if (data[0]['TotalSoft_Poll_1_BoxSh_Show'] == 'false') {
          jQuery('#TotalSoft_Poll_1_BoxSh_Type').val('none');
        } else {
          jQuery('#TotalSoft_Poll_1_BoxSh_Type').val(data[0]['TotalSoft_Poll_1_BoxSh_Type']);
        }
        if (data[0]['TotalSoft_Poll_1_BoxSh'] > 0 && data[0]['TotalSoft_Poll_1_BoxSh'] < 50) {
          jQuery('#TotalSoft_Poll_1_BoxSh').val('Arial');
        } else {
          jQuery('#TotalSoft_Poll_1_BoxSh').val(data[0]['TotalSoft_Poll_1_BoxSh']);
        }

        jQuery('#TotalSoft_Poll_1_MW').val(data[0]['TotalSoft_Poll_1_MW']);
        jQuery('#TotalSoft_Poll_1_Pos').val(data[0]['TotalSoft_Poll_1_Pos']);
        jQuery('#TotalSoft_Poll_1_BW').val(data[0]['TotalSoft_Poll_1_BW']);
        jQuery('#TotalSoft_Poll_1_BC').val(data[0]['TotalSoft_Poll_1_BC']);
        jQuery('#TotalSoft_Poll_1_BR').val(data[0]['TotalSoft_Poll_1_BR']);
        jQuery('#TotalSoft_Poll_1_BoxShC').val(data[0]['TotalSoft_Poll_1_BoxShC']);
        jQuery('#TotalSoft_Poll_1_Q_BgC').val(data[0]['TotalSoft_Poll_1_Q_BgC']);
        jQuery('#TotalSoft_Poll_1_Q_C').val(data[0]['TotalSoft_Poll_1_Q_C']);
        jQuery('#TotalSoft_Poll_1_Q_FS').val(data[0]['TotalSoft_Poll_1_Q_FS']);
        jQuery('#TotalSoft_Poll_1_Q_FF').val(data[0]['TotalSoft_Poll_1_Q_FF']);
        jQuery('#TotalSoft_Poll_1_Q_TA').val(data[0]['TotalSoft_Poll_1_Q_TA']);
        jQuery('#TotalSoft_Poll_1_LAQ_W').val(data[0]['TotalSoft_Poll_1_LAQ_W']);
        jQuery('#TotalSoft_Poll_1_LAQ_H').val(data[0]['TotalSoft_Poll_1_LAQ_H']);
        jQuery('#TotalSoft_Poll_1_LAQ_C').val(data[0]['TotalSoft_Poll_1_LAQ_C']);
        jQuery('#TotalSoft_Poll_1_LAQ_S').val(data[0]['TotalSoft_Poll_1_LAQ_S']);
        jQuery('#TotalSoft_Poll_1_A_FS').val(data[0]['TotalSoft_Poll_1_A_FS']);
        jQuery('#TotalSoft_Poll_1_A_CTF').attr('checked', data[0]['TotalSoft_Poll_1_A_CTF']);
        jQuery('#TotalSoft_Poll_1_A_BgC').val(data[0]['TotalSoft_Poll_1_A_BgC']);
        jQuery('#TotalSoft_Poll_1_A_C').val(data[0]['TotalSoft_Poll_1_A_C']);
        jQuery('#TotalSoft_Poll_1_CH_CM').attr('checked', data[0]['TotalSoft_Poll_1_CH_CM']);
        jQuery('#TotalSoft_Poll_1_CH_S').val(data[0]['TotalSoft_Poll_1_CH_S']);
        jQuery('#TotalSoft_Poll_1_CH_TBC').val(data[0]['TotalSoft_Poll_1_CH_TBC']);
        jQuery('#TotalSoft_Poll_1_CH_CBC').val(data[0]['TotalSoft_Poll_1_CH_CBC']);
        jQuery('#TotalSoft_Poll_1_CH_TAC').val(data[0]['TotalSoft_Poll_1_CH_TAC']);
        jQuery('#TotalSoft_Poll_1_CH_CAC').val(data[0]['TotalSoft_Poll_1_CH_CAC']);
        jQuery('#TotalSoft_Poll_1_A_HBgC').val(data[0]['TotalSoft_Poll_1_A_HBgC']);
        jQuery('#TotalSoft_Poll_1_A_HC').val(data[0]['TotalSoft_Poll_1_A_HC']);
        jQuery('#TotalSoft_Poll_1_LAA_W').val(data[0]['TotalSoft_Poll_1_LAA_W']);
        jQuery('#TotalSoft_Poll_1_LAA_H').val(data[0]['TotalSoft_Poll_1_LAA_H']);
        jQuery('#TotalSoft_Poll_1_LAA_C').val(data[0]['TotalSoft_Poll_1_LAA_C']);
        jQuery('#TotalSoft_Poll_1_LAA_S').val(data[0]['TotalSoft_Poll_1_LAA_S']);
        jQuery('#TotalSoft_Poll_1_VB_MBgC').val(data[0]['TotalSoft_Poll_1_VB_MBgC']);
        jQuery('#TotalSoft_Poll_1_VB_Pos').val(data[0]['TotalSoft_Poll_1_VB_Pos']);
        jQuery('#TotalSoft_Poll_1_VB_BW').val(data[0]['TotalSoft_Poll_1_VB_BW']);
        jQuery('#TotalSoft_Poll_1_VB_BC').val(data[0]['TotalSoft_Poll_1_VB_BC']);
        jQuery('#TotalSoft_Poll_1_VB_BR').val(data[0]['TotalSoft_Poll_1_VB_BR']);
        jQuery('#TotalSoft_Poll_1_VB_BgC').val(data[0]['TotalSoft_Poll_1_VB_BgC']);
        jQuery('#TotalSoft_Poll_1_VB_C').val(data[0]['TotalSoft_Poll_1_VB_C']);
        jQuery('#TotalSoft_Poll_1_VB_FS').val(data[0]['TotalSoft_Poll_1_VB_FS']);
        jQuery('#TotalSoft_Poll_1_VB_FF').val(data[0]['TotalSoft_Poll_1_VB_FF']);
        jQuery('#TotalSoft_Poll_1_VB_Text').val(data[0]['TotalSoft_Poll_1_VB_Text']);
        jQuery('#TotalSoft_Poll_1_VB_IT').val(data[0]['TotalSoft_Poll_1_VB_IT']);
        jQuery('#TotalSoft_Poll_1_VB_IA').val(data[0]['TotalSoft_Poll_1_VB_IA']);
        jQuery('#TotalSoft_Poll_1_VB_IS').val(data[0]['TotalSoft_Poll_1_VB_IS']);
        jQuery('#TotalSoft_Poll_1_VB_HBgC').val(data[0]['TotalSoft_Poll_1_VB_HBgC']);
        jQuery('#TotalSoft_Poll_1_VB_HC').val(data[0]['TotalSoft_Poll_1_VB_HC']);
        jQuery('#TotalSoft_Poll_1_RB_Show').attr('checked', data[0]['TotalSoft_Poll_1_RB_Show']);
        jQuery('#TotalSoft_Poll_1_RB_Pos').val(data[0]['TotalSoft_Poll_1_RB_Pos']);
        jQuery('#TotalSoft_Poll_1_RB_BW').val(data[0]['TotalSoft_Poll_1_RB_BW']);
        jQuery('#TotalSoft_Poll_1_RB_BC').val(data[0]['TotalSoft_Poll_1_RB_BC']);
        jQuery('#TotalSoft_Poll_1_RB_BR').val(data[0]['TotalSoft_Poll_1_RB_BR']);
        jQuery('#TotalSoft_Poll_1_RB_BgC').val(data[0]['TotalSoft_Poll_1_RB_BgC']);
        jQuery('#TotalSoft_Poll_1_RB_C').val(data[0]['TotalSoft_Poll_1_RB_C']);
        jQuery('#TotalSoft_Poll_1_RB_FS').val(data[0]['TotalSoft_Poll_1_RB_FS']);
        jQuery('#TotalSoft_Poll_1_RB_FF').val(data[0]['TotalSoft_Poll_1_RB_FF']);
        jQuery('#TotalSoft_Poll_1_RB_Text').val(data[0]['TotalSoft_Poll_1_RB_Text']);
        jQuery('#TotalSoft_Poll_1_RB_IT').val(data[0]['TotalSoft_Poll_1_RB_IT']);
        jQuery('#TotalSoft_Poll_1_RB_IA').val(data[0]['TotalSoft_Poll_1_RB_IA']);
      } else if (data[0]['TotalSoft_Poll_TType'] == 'Image Poll' || data[0]['TotalSoft_Poll_TType'] == 'Video Poll') {
        if (data[0]['TotalSoft_Poll_2_CH_CM'] == 'true') {
          data[0]['TotalSoft_Poll_2_CH_CM'] = true;
        } else {
          data[0]['TotalSoft_Poll_2_CH_CM'] = false;
        }
        if (data[0]['TotalSoft_Poll_2_A_HSh_Show'] == 'true') {
          data[0]['TotalSoft_Poll_2_A_HSh_Show'] = true;
        } else {
          data[0]['TotalSoft_Poll_2_A_HSh_Show'] = false;
        }
        if (data[0]['TotalSoft_Poll_2_A_IH'] < 49) {
          jQuery('#TotalSoft_Poll_2_A_IHR').val(data[0]['TotalSoft_Poll_2_A_IH']);
          jQuery('#TotalSoft_Poll_2_A_IHT').val('ratio');
          jQuery('#TotalSoft_Poll_2_A_IH').val('160');
        } else if (data[0]['TotalSoft_Poll_2_A_IH'] > 49) {
          jQuery('#TotalSoft_Poll_2_A_IH').val(data[0]['TotalSoft_Poll_2_A_IH']);
          jQuery('#TotalSoft_Poll_2_A_IHT').val('fixed');
          jQuery('#TotalSoft_Poll_2_A_IHR').val('2');
        }
        if (data[0]['TotalSoft_Poll_2_BoxSh_Show'] == 'false') {
          jQuery('#TotalSoft_Poll_2_BoxSh_Type').val('none');
        } else {
          jQuery('#TotalSoft_Poll_2_BoxSh_Type').val(data[0]['TotalSoft_Poll_2_BoxSh_Type']);
        }
        if (data[0]['TotalSoft_Poll_2_BoxSh'] > 0 && data[0]['TotalSoft_Poll_2_BoxSh'] < 50) {
          jQuery('#TotalSoft_Poll_2_BoxSh').val('Arial');
        } else {
          jQuery('#TotalSoft_Poll_2_BoxSh').val(data[0]['TotalSoft_Poll_2_BoxSh']);
        }

        jQuery('#TotalSoft_Poll_2_MW').val(data[0]['TotalSoft_Poll_2_MW']);
        jQuery('#TotalSoft_Poll_2_Pos').val(data[0]['TotalSoft_Poll_2_Pos']);
        jQuery('#TotalSoft_Poll_2_BW').val(data[0]['TotalSoft_Poll_2_BW']);
        jQuery('#TotalSoft_Poll_2_BC').val(data[0]['TotalSoft_Poll_2_BC']);
        jQuery('#TotalSoft_Poll_2_BR').val(data[0]['TotalSoft_Poll_2_BR']);
        jQuery('#TotalSoft_Poll_2_BoxShC').val(data[0]['TotalSoft_Poll_2_BoxShC']);
        jQuery('#TotalSoft_Poll_2_Q_BgC').val(data[0]['TotalSoft_Poll_2_Q_BgC']);
        jQuery('#TotalSoft_Poll_2_Q_C').val(data[0]['TotalSoft_Poll_2_Q_C']);
        jQuery('#TotalSoft_Poll_2_Q_FS').val(data[0]['TotalSoft_Poll_2_Q_FS']);
        jQuery('#TotalSoft_Poll_2_Q_FF').val(data[0]['TotalSoft_Poll_2_Q_FF']);
        jQuery('#TotalSoft_Poll_2_Q_TA').val(data[0]['TotalSoft_Poll_2_Q_TA']);
        jQuery('#TotalSoft_Poll_2_LAQ_W').val(data[0]['TotalSoft_Poll_2_LAQ_W']);
        jQuery('#TotalSoft_Poll_2_LAQ_H').val(data[0]['TotalSoft_Poll_2_LAQ_H']);
        jQuery('#TotalSoft_Poll_2_LAQ_C').val(data[0]['TotalSoft_Poll_2_LAQ_C']);
        jQuery('#TotalSoft_Poll_2_LAQ_S').val(data[0]['TotalSoft_Poll_2_LAQ_S']);
        jQuery('#TotalSoft_Poll_2_A_CC').val(data[0]['TotalSoft_Poll_2_A_CC']);
        jQuery('#TotalSoft_Poll_2_A_CA').val(data[0]['TotalSoft_Poll_2_A_CA']);
        jQuery('#TotalSoft_Poll_2_A_FS').val(data[0]['TotalSoft_Poll_2_A_FS']);
        jQuery('#TotalSoft_Poll_2_A_MBgC').val(data[0]['TotalSoft_Poll_2_A_MBgC']);
        jQuery('#TotalSoft_Poll_2_A_BgC').val(data[0]['TotalSoft_Poll_2_A_BgC']);
        jQuery('#TotalSoft_Poll_2_A_C').val(data[0]['TotalSoft_Poll_2_A_C']);
        jQuery('#TotalSoft_Poll_2_A_Pos').val(data[0]['TotalSoft_Poll_2_A_Pos']);
        jQuery('#TotalSoft_Poll_2_CH_CM').attr('checked', data[0]['TotalSoft_Poll_2_CH_CM']);
        jQuery('#TotalSoft_Poll_2_CH_S').val(data[0]['TotalSoft_Poll_2_CH_S']);
        jQuery('#TotalSoft_Poll_2_CH_TBC').val(data[0]['TotalSoft_Poll_2_CH_TBC']);
        jQuery('#TotalSoft_Poll_2_CH_CBC').val(data[0]['TotalSoft_Poll_2_CH_CBC']);
        jQuery('#TotalSoft_Poll_2_CH_TAC').val(data[0]['TotalSoft_Poll_2_CH_TAC']);
        jQuery('#TotalSoft_Poll_2_CH_CAC').val(data[0]['TotalSoft_Poll_2_CH_CAC']);
        jQuery('#TotalSoft_Poll_2_A_HBgC').val(data[0]['TotalSoft_Poll_2_A_HBgC']);
        jQuery('#TotalSoft_Poll_2_A_HC').val(data[0]['TotalSoft_Poll_2_A_HC']);
        jQuery('#TotalSoft_Poll_2_A_HSh_Show').attr('checked', data[0]['TotalSoft_Poll_2_A_HSh_Show']);
        jQuery('#TotalSoft_Poll_2_A_HShC').val(data[0]['TotalSoft_Poll_2_A_HShC']);
        jQuery('#TotalSoft_Poll_2_LAA_W').val(data[0]['TotalSoft_Poll_2_LAA_W']);
        jQuery('#TotalSoft_Poll_2_LAA_H').val(data[0]['TotalSoft_Poll_2_LAA_H']);
        jQuery('#TotalSoft_Poll_2_LAA_C').val(data[0]['TotalSoft_Poll_2_LAA_C']);
        jQuery('#TotalSoft_Poll_2_LAA_S').val(data[0]['TotalSoft_Poll_2_LAA_S']);
        jQuery('#TotalSoft_Poll_2_P_A_OC').val(data[0]['TotalSoft_Poll_2_P_A_OC']);
        jQuery('#TotalSoft_Poll_2_P_A_C').val(data[0]['TotalSoft_Poll_2_P_A_C']);
        jQuery('#TotalSoft_Poll_2_P_A_VT').val(data[0]['TotalSoft_Poll_2_P_A_VT']);
        jQuery('#TotalSoft_Poll_2_P_A_VEff').val(data[0]['TotalSoft_Poll_2_P_A_VEff']);
        jQuery('#TotalSoft_Poll_2_VB_MBgC').val(data[0]['TotalSoft_Poll_2_VB_MBgC']);
        jQuery('#TotalSoft_Poll_2_VB_Pos').val(data[0]['TotalSoft_Poll_2_VB_Pos']);
        jQuery('#TotalSoft_Poll_2_VB_BW').val(data[0]['TotalSoft_Poll_2_VB_BW']);
        jQuery('#TotalSoft_Poll_2_VB_BC').val(data[0]['TotalSoft_Poll_2_VB_BC']);
        jQuery('#TotalSoft_Poll_2_Play_IC').val(data[0]['TotalSoft_Poll_2_Play_IC']);
        jQuery('#TotalSoft_Poll_2_Play_IS').val(data[0]['TotalSoft_Poll_2_Play_IS']);
        jQuery('#TotalSoft_Poll_2_Play_IOvC').val(data[0]['TotalSoft_Poll_2_Play_IOvC']);
        jQuery('#TotalSoft_Poll_2_Play_IT').val(data[0]['TotalSoft_Poll_2_Play_IT']);
      } else if (data[0]['TotalSoft_Poll_TType'] == 'Standart Without Button' || data[0]['TotalSoft_Poll_TType'] == 'Standard Without Button') {
        if (data[0]['TotalSoft_Poll_3_CH_Sh'] == 'true') {
          data[0]['TotalSoft_Poll_3_CH_Sh'] = true;
        } else {
          data[0]['TotalSoft_Poll_3_CH_Sh'] = false;
        }
        if (data[0]['TotalSoft_Poll_3_BoxSh_Show'] == 'false') {
          jQuery('#TotalSoft_Poll_3_BoxSh_Type').val('none');
        } else {
          jQuery('#TotalSoft_Poll_3_BoxSh_Type').val(data[0]['TotalSoft_Poll_3_BoxSh_Type']);
        }
        if (data[0]['TotalSoft_Poll_3_BoxSh'] > 0 && data[0]['TotalSoft_Poll_3_BoxSh'] < 50) {
          jQuery('#TotalSoft_Poll_3_BoxSh').val('Arial');
        } else {
          jQuery('#TotalSoft_Poll_3_BoxSh').val(data[0]['TotalSoft_Poll_3_BoxSh']);
        }

        jQuery('#TotalSoft_Poll_3_MW').val(data[0]['TotalSoft_Poll_3_MW']);
        jQuery('#TotalSoft_Poll_3_Pos').val(data[0]['TotalSoft_Poll_3_Pos']);
        jQuery('#TotalSoft_Poll_3_BW').val(data[0]['TotalSoft_Poll_3_BW']);
        jQuery('#TotalSoft_Poll_3_BC').val(data[0]['TotalSoft_Poll_3_BC']);
        jQuery('#TotalSoft_Poll_3_BR').val(data[0]['TotalSoft_Poll_3_BR']);
        jQuery('#TotalSoft_Poll_3_BoxShC').val(data[0]['TotalSoft_Poll_3_BoxShC']);
        jQuery('#TotalSoft_Poll_3_Q_BgC').val(data[0]['TotalSoft_Poll_3_Q_BgC']);
        jQuery('#TotalSoft_Poll_3_Q_C').val(data[0]['TotalSoft_Poll_3_Q_C']);
        jQuery('#TotalSoft_Poll_3_Q_FS').val(data[0]['TotalSoft_Poll_3_Q_FS']);
        jQuery('#TotalSoft_Poll_3_Q_FF').val(data[0]['TotalSoft_Poll_3_Q_FF']);
        jQuery('#TotalSoft_Poll_3_Q_TA').val(data[0]['TotalSoft_Poll_3_Q_TA']);
        jQuery('#TotalSoft_Poll_3_LAQ_W').val(data[0]['TotalSoft_Poll_3_LAQ_W']);
        jQuery('#TotalSoft_Poll_3_LAQ_H').val(data[0]['TotalSoft_Poll_3_LAQ_H']);
        jQuery('#TotalSoft_Poll_3_LAQ_C').val(data[0]['TotalSoft_Poll_3_LAQ_C']);
        jQuery('#TotalSoft_Poll_3_LAQ_S').val(data[0]['TotalSoft_Poll_3_LAQ_S']);
        jQuery('#TotalSoft_Poll_3_A_CA').val(data[0]['TotalSoft_Poll_3_A_CA']);
        jQuery('#TotalSoft_Poll_3_A_FS').val(data[0]['TotalSoft_Poll_3_A_FS']);
        jQuery('#TotalSoft_Poll_3_A_MBgC').val(data[0]['TotalSoft_Poll_3_A_MBgC']);
        jQuery('#TotalSoft_Poll_3_A_BgC').val(data[0]['TotalSoft_Poll_3_A_BgC']);
        jQuery('#TotalSoft_Poll_3_A_C').val(data[0]['TotalSoft_Poll_3_A_C']);
        jQuery('#TotalSoft_Poll_3_A_BW').val(data[0]['TotalSoft_Poll_3_A_BW']);
        jQuery('#TotalSoft_Poll_3_A_BC').val(data[0]['TotalSoft_Poll_3_A_BC']);
        jQuery('#TotalSoft_Poll_3_A_BR').val(data[0]['TotalSoft_Poll_3_A_BR']);
        jQuery('#TotalSoft_Poll_3_CH_Sh').attr('checked', data[0]['TotalSoft_Poll_3_CH_Sh']);
        jQuery('#TotalSoft_Poll_3_CH_S').val(data[0]['TotalSoft_Poll_3_CH_S']);
        jQuery('#TotalSoft_Poll_3_CH_TBC').val(data[0]['TotalSoft_Poll_3_CH_TBC']);
        jQuery('#TotalSoft_Poll_3_CH_CBC').val(data[0]['TotalSoft_Poll_3_CH_CBC']);
        jQuery('#TotalSoft_Poll_3_CH_TAC').val(data[0]['TotalSoft_Poll_3_CH_TAC']);
        jQuery('#TotalSoft_Poll_3_CH_CAC').val(data[0]['TotalSoft_Poll_3_CH_CAC']);
        jQuery('#TotalSoft_Poll_3_A_HBgC').val(data[0]['TotalSoft_Poll_3_A_HBgC']);
        jQuery('#TotalSoft_Poll_3_A_HC').val(data[0]['TotalSoft_Poll_3_A_HC']);
        jQuery('#TotalSoft_Poll_3_LAA_W').val(data[0]['TotalSoft_Poll_3_LAA_W']);
        jQuery('#TotalSoft_Poll_3_LAA_H').val(data[0]['TotalSoft_Poll_3_LAA_H']);
        jQuery('#TotalSoft_Poll_3_LAA_C').val(data[0]['TotalSoft_Poll_3_LAA_C']);
        jQuery('#TotalSoft_Poll_3_LAA_S').val(data[0]['TotalSoft_Poll_3_LAA_S']);
        jQuery('#TotalSoft_Poll_3_RB_MBgC').val(data[0]['TotalSoft_Poll_3_RB_MBgC']);
      } else if (data[0]['TotalSoft_Poll_TType'] == 'Image Without Button' || data[0]['TotalSoft_Poll_TType'] == 'Video Without Button') {
        if (data[0]['TotalSoft_Poll_4_Pop_Show'] == 'true') {
          data[0]['TotalSoft_Poll_4_Pop_Show'] = true;
        } else {
          data[0]['TotalSoft_Poll_4_Pop_Show'] = false;
        }
        if (data[0]['TotalSoft_Poll_4_TV_Show'] == 'true') {
          data[0]['TotalSoft_Poll_4_TV_Show'] = true;
        } else {
          data[0]['TotalSoft_Poll_4_TV_Show'] = false;
        }
        if (data[0]['TotalSoft_Poll_4_BoxSh_Show'] == 'false') {
          jQuery('#TotalSoft_Poll_4_BoxSh_Type').val('none');
        } else {
          jQuery('#TotalSoft_Poll_4_BoxSh_Type').val(data[0]['TotalSoft_Poll_4_BoxSh_Type']);
        }

        jQuery('#TotalSoft_Poll_4_MW').val(data[0]['TotalSoft_Poll_4_MW']);
        jQuery('#TotalSoft_Poll_4_Pos').val(data[0]['TotalSoft_Poll_4_Pos']);
        jQuery('#TotalSoft_Poll_4_BW').val(data[0]['TotalSoft_Poll_4_BW']);
        jQuery('#TotalSoft_Poll_4_BC').val(data[0]['TotalSoft_Poll_4_BC']);
        jQuery('#TotalSoft_Poll_4_BR').val(data[0]['TotalSoft_Poll_4_BR']);
        jQuery('#TotalSoft_Poll_4_BoxShC').val(data[0]['TotalSoft_Poll_4_BoxShC']);
        jQuery('#TotalSoft_Poll_4_Q_BgC').val(data[0]['TotalSoft_Poll_4_Q_BgC']);
        jQuery('#TotalSoft_Poll_4_Q_C').val(data[0]['TotalSoft_Poll_4_Q_C']);
        jQuery('#TotalSoft_Poll_4_Q_FS').val(data[0]['TotalSoft_Poll_4_Q_FS']);
        jQuery('#TotalSoft_Poll_4_Q_FF').val(data[0]['TotalSoft_Poll_4_Q_FF']);
        jQuery('#TotalSoft_Poll_4_Q_TA').val(data[0]['TotalSoft_Poll_4_Q_TA']);
        jQuery('#TotalSoft_Poll_4_LAQ_W').val(data[0]['TotalSoft_Poll_4_LAQ_W']);
        jQuery('#TotalSoft_Poll_4_LAQ_H').val(data[0]['TotalSoft_Poll_4_LAQ_H']);
        jQuery('#TotalSoft_Poll_4_LAQ_C').val(data[0]['TotalSoft_Poll_4_LAQ_C']);
        jQuery('#TotalSoft_Poll_4_LAQ_S').val(data[0]['TotalSoft_Poll_4_LAQ_S']);
        jQuery('#TotalSoft_Poll_4_A_CA').val(data[0]['TotalSoft_Poll_4_A_CA']);
        jQuery('#TotalSoft_Poll_4_A_FS').val(data[0]['TotalSoft_Poll_4_A_FS']);
        jQuery('#TotalSoft_Poll_4_A_MBgC').val(data[0]['TotalSoft_Poll_4_A_MBgC']);
        jQuery('#TotalSoft_Poll_4_A_BgC').val(data[0]['TotalSoft_Poll_4_A_BgC']);
        jQuery('#TotalSoft_Poll_4_A_C').val(data[0]['TotalSoft_Poll_4_A_C']);
        jQuery('#TotalSoft_Poll_4_A_BW').val(data[0]['TotalSoft_Poll_4_A_BW']);
        jQuery('#TotalSoft_Poll_4_A_BC').val(data[0]['TotalSoft_Poll_4_A_BC']);
        jQuery('#TotalSoft_Poll_4_A_BR').val(data[0]['TotalSoft_Poll_4_A_BR']);
        jQuery('#TotalSoft_Poll_4_A_FF').val(data[0]['TotalSoft_Poll_4_A_FF']);
        jQuery('#TotalSoft_Poll_4_A_HBgC').val(data[0]['TotalSoft_Poll_4_A_HBgC']);
        jQuery('#TotalSoft_Poll_4_A_HC').val(data[0]['TotalSoft_Poll_4_A_HC']);
        jQuery('#TotalSoft_Poll_4_I_H').val(data[0]['TotalSoft_Poll_4_I_H']);
        jQuery('#TotalSoft_Poll_4_I_Ra').val(data[0]['TotalSoft_Poll_4_I_Ra']);
        jQuery('#TotalSoft_Poll_4_I_OC').val(data[0]['TotalSoft_Poll_4_I_OC']);
        jQuery('#TotalSoft_Poll_4_I_IT').val(data[0]['TotalSoft_Poll_4_I_IT']);
        jQuery('#TotalSoft_Poll_4_I_IC').val(data[0]['TotalSoft_Poll_4_I_IC']);
        jQuery('#TotalSoft_Poll_4_I_IS').val(data[0]['TotalSoft_Poll_4_I_IS']);
        jQuery('#TotalSoft_Poll_4_Pop_Show').attr('checked', data[0]['TotalSoft_Poll_4_Pop_Show']);
        jQuery('#TotalSoft_Poll_4_Pop_IT').val(data[0]['TotalSoft_Poll_4_Pop_IT']);
        jQuery('#TotalSoft_Poll_4_Pop_IC').val(data[0]['TotalSoft_Poll_4_Pop_IC']);
        jQuery('#TotalSoft_Poll_4_Pop_BW').val(data[0]['TotalSoft_Poll_4_Pop_BW']);
        jQuery('#TotalSoft_Poll_4_Pop_BC').val(data[0]['TotalSoft_Poll_4_Pop_BC']);
        jQuery('#TotalSoft_Poll_4_LAA_W').val(data[0]['TotalSoft_Poll_4_LAA_W']);
        jQuery('#TotalSoft_Poll_4_LAA_H').val(data[0]['TotalSoft_Poll_4_LAA_H']);
        jQuery('#TotalSoft_Poll_4_LAA_C').val(data[0]['TotalSoft_Poll_4_LAA_C']);
        jQuery('#TotalSoft_Poll_4_LAA_S').val(data[0]['TotalSoft_Poll_4_LAA_S']);
        jQuery('#TotalSoft_Poll_4_TV_Show').attr('checked', data[0]['TotalSoft_Poll_4_TV_Show']);
        jQuery('#TotalSoft_Poll_4_TV_Pos').val(data[0]['TotalSoft_Poll_4_TV_Pos']);
        jQuery('#TotalSoft_Poll_4_TV_C').val(data[0]['TotalSoft_Poll_4_TV_C']);
      } else if (data[0]['TotalSoft_Poll_TType'] == 'Image in Question' || data[0]['TotalSoft_Poll_TType'] == 'Video in Question') {
        if (data[0]['TotalSoft_Poll_5_TV_Show'] == 'true') {
          data[0]['TotalSoft_Poll_5_TV_Show'] = true;
        } else {
          data[0]['TotalSoft_Poll_5_TV_Show'] = false;
        }
        if (data[0]['TotalSoft_Poll_5_VB_Show'] == 'true') {
          data[0]['TotalSoft_Poll_5_VB_Show'] = true;
        } else {
          data[0]['TotalSoft_Poll_5_VB_Show'] = false;
        }
        if (data[0]['TotalSoft_Poll_5_BoxSh_Show'] == 'false') {
          jQuery('#TotalSoft_Poll_5_BoxSh_Type').val('none');
        } else {
          jQuery('#TotalSoft_Poll_5_BoxSh_Type').val(data[0]['TotalSoft_Poll_5_BoxSh_Type']);
        }
        if (data[0]['TotalSoft_Poll_5_BoxSh'] > 0 && data[0]['TotalSoft_Poll_5_BoxSh'] < 50) {
          jQuery('#TotalSoft_Poll_5_BoxSh').val('Arial');
        } else {
          jQuery('#TotalSoft_Poll_5_BoxSh').val(data[0]['TotalSoft_Poll_5_BoxSh']);
        }

        jQuery('#TotalSoft_Poll_5_MW').val(data[0]['TotalSoft_Poll_5_MW']);
        jQuery('#TotalSoft_Poll_5_Pos').val(data[0]['TotalSoft_Poll_5_Pos']);
        jQuery('#TotalSoft_Poll_5_BW').val(data[0]['TotalSoft_Poll_5_BW']);
        jQuery('#TotalSoft_Poll_5_BC').val(data[0]['TotalSoft_Poll_5_BC']);
        jQuery('#TotalSoft_Poll_5_BR').val(data[0]['TotalSoft_Poll_5_BR']);
        jQuery('#TotalSoft_Poll_5_BoxShC').val(data[0]['TotalSoft_Poll_5_BoxShC']);
        jQuery('#TotalSoft_Poll_5_Q_BgC').val(data[0]['TotalSoft_Poll_5_Q_BgC']);
        jQuery('#TotalSoft_Poll_5_Q_C').val(data[0]['TotalSoft_Poll_5_Q_C']);
        jQuery('#TotalSoft_Poll_5_Q_FS').val(data[0]['TotalSoft_Poll_5_Q_FS']);
        jQuery('#TotalSoft_Poll_5_Q_FF').val(data[0]['TotalSoft_Poll_5_Q_FF']);
        jQuery('#TotalSoft_Poll_5_Q_TA').val(data[0]['TotalSoft_Poll_5_Q_TA']);
        jQuery('#TotalSoft_Poll_5_I_H').val(data[0]['TotalSoft_Poll_5_I_H']);
        jQuery('#TotalSoft_Poll_5_I_Ra').val(data[0]['TotalSoft_Poll_5_I_Ra']);
        jQuery('#TotalSoft_Poll_5_V_W').val(data[0]['TotalSoft_Poll_5_V_W']);
        jQuery('#TotalSoft_Poll_5_LAQ_W').val(data[0]['TotalSoft_Poll_5_LAQ_W']);
        jQuery('#TotalSoft_Poll_5_LAQ_H').val(data[0]['TotalSoft_Poll_5_LAQ_H']);
        jQuery('#TotalSoft_Poll_5_LAQ_C').val(data[0]['TotalSoft_Poll_5_LAQ_C']);
        jQuery('#TotalSoft_Poll_5_LAQ_S').val(data[0]['TotalSoft_Poll_5_LAQ_S']);
        jQuery('#TotalSoft_Poll_5_A_CA').val(data[0]['TotalSoft_Poll_5_A_CA']);
        jQuery('#TotalSoft_Poll_5_A_FS').val(data[0]['TotalSoft_Poll_5_A_FS']);
        jQuery('#TotalSoft_Poll_5_A_MBgC').val(data[0]['TotalSoft_Poll_5_A_MBgC']);
        jQuery('#TotalSoft_Poll_5_A_BgC').val(data[0]['TotalSoft_Poll_5_A_BgC']);
        jQuery('#TotalSoft_Poll_5_A_C').val(data[0]['TotalSoft_Poll_5_A_C']);
        jQuery('#TotalSoft_Poll_5_A_BW').val(data[0]['TotalSoft_Poll_5_A_BW']);
        jQuery('#TotalSoft_Poll_5_A_BC').val(data[0]['TotalSoft_Poll_5_A_BC']);
        jQuery('#TotalSoft_Poll_5_A_BR').val(data[0]['TotalSoft_Poll_5_A_BR']);
        jQuery('#TotalSoft_Poll_5_CH_S').val(data[0]['TotalSoft_Poll_5_CH_S']);
        jQuery('#TotalSoft_Poll_5_CH_TBC').val(data[0]['TotalSoft_Poll_5_CH_TBC']);
        jQuery('#TotalSoft_Poll_5_CH_CBC').val(data[0]['TotalSoft_Poll_5_CH_CBC']);
        jQuery('#TotalSoft_Poll_5_CH_TAC').val(data[0]['TotalSoft_Poll_5_CH_TAC']);
        jQuery('#TotalSoft_Poll_5_CH_CAC').val(data[0]['TotalSoft_Poll_5_CH_CAC']);
        jQuery('#TotalSoft_Poll_5_A_HBgC').val(data[0]['TotalSoft_Poll_5_A_HBgC']);
        jQuery('#TotalSoft_Poll_5_A_HC').val(data[0]['TotalSoft_Poll_5_A_HC']);
        jQuery('#TotalSoft_Poll_5_LAA_W').val(data[0]['TotalSoft_Poll_5_LAA_W']);
        jQuery('#TotalSoft_Poll_5_LAA_H').val(data[0]['TotalSoft_Poll_5_LAA_H']);
        jQuery('#TotalSoft_Poll_5_LAA_C').val(data[0]['TotalSoft_Poll_5_LAA_C']);
        jQuery('#TotalSoft_Poll_5_LAA_S').val(data[0]['TotalSoft_Poll_5_LAA_S']);
        jQuery('#TotalSoft_Poll_5_TV_Show').attr('checked', data[0]['TotalSoft_Poll_5_TV_Show']);
        jQuery('#TotalSoft_Poll_5_TV_Pos').val(data[0]['TotalSoft_Poll_5_TV_Pos']);
        jQuery('#TotalSoft_Poll_5_TV_C').val(data[0]['TotalSoft_Poll_5_TV_C']);
        jQuery('#TotalSoft_Poll_5_TV_FS').val(data[0]['TotalSoft_Poll_5_TV_FS']);
        jQuery('#TotalSoft_Poll_5_VT_IT').val(data[0]['TotalSoft_Poll_5_VT_IT']);
        jQuery('#TotalSoft_Poll_5_VT_IA').val(data[0]['TotalSoft_Poll_5_VT_IA']);
        jQuery('#TotalSoft_Poll_5_VB_Show').attr('checked', data[0]['TotalSoft_Poll_5_VB_Show']);
        jQuery('#TotalSoft_Poll_5_VB_Pos').val(data[0]['TotalSoft_Poll_5_VB_Pos']);
        jQuery('#TotalSoft_Poll_5_VB_BW').val(data[0]['TotalSoft_Poll_5_VB_BW']);
        jQuery('#TotalSoft_Poll_5_VB_BC').val(data[0]['TotalSoft_Poll_5_VB_BC']);
        jQuery('#TotalSoft_Poll_5_VB_BR').val(data[0]['TotalSoft_Poll_5_VB_BR']);
        jQuery('#TotalSoft_Poll_5_VB_MBgC').val(data[0]['TotalSoft_Poll_5_VB_MBgC']);
        jQuery('#TotalSoft_Poll_5_VB_BgC').val(data[0]['TotalSoft_Poll_5_VB_BgC']);
        jQuery('#TotalSoft_Poll_5_VB_C').val(data[0]['TotalSoft_Poll_5_VB_C']);
        jQuery('#TotalSoft_Poll_5_VB_FS').val(data[0]['TotalSoft_Poll_5_VB_FS']);
        jQuery('#TotalSoft_Poll_5_VB_FF').val(data[0]['TotalSoft_Poll_5_VB_FF']);
      }
      setTimeout(function () {
        jQuery('.Total_Soft_Poll_T_Color').alphaColorPicker();
        jQuery('.wp-picker-holder').addClass('alpha-picker-holder');
        TotalSoft_Poll_Out();
      }, 500);
    }

  });
  jQuery.ajax({
    type: 'POST',
    url: objectpoll.ajaxurl,
    data: {
      action: 'TotalSoftPoll_Theme_Edit1', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
      foobar: Theme_ID, // translates into $_POST['foobar'] in PHP
      nonce: objectpoll.nonce
    },
    beforeSend: function () {
    },
    success: function (response) {
      var data = response;
      jQuery('.Total_Soft_Poll_AMD2').animate({'opacity': 0}, 500);
      jQuery('.Total_Soft_Poll_TMMTable').animate({'opacity': 0}, 500);
      jQuery('.Total_Soft_Poll_TMOTable').animate({'opacity': 0}, 500);
      jQuery('.Total_Soft_Poll_Update').animate({'opacity': 1}, 500);

      jQuery('#TotalSoft_Poll_TType').hide();
      if (data[0]['TotalSoft_Poll_TType'] == 'Standart Poll' || data[0]['TotalSoft_Poll_TType'] == 'Standard Poll') {
        if (data[0]['TotalSoft_Poll_1_P_ShPop'] == 'true') {
          data[0]['TotalSoft_Poll_1_P_ShPop'] = true;
        } else {
          data[0]['TotalSoft_Poll_1_P_ShPop'] = false;
        }

        jQuery('#TotalSoft_Poll_1_RB_IS').val(data[0]['TotalSoft_Poll_1_RB_IS']);
        jQuery('#TotalSoft_Poll_1_RB_HBgC').val(data[0]['TotalSoft_Poll_1_RB_HBgC']);
        jQuery('#TotalSoft_Poll_1_RB_HC').val(data[0]['TotalSoft_Poll_1_RB_HC']);
        jQuery('#TotalSoft_Poll_1_P_BW').val(data[0]['TotalSoft_Poll_1_P_BW']);
        jQuery('#TotalSoft_Poll_1_P_BC').val(data[0]['TotalSoft_Poll_1_P_BC']);
        jQuery('#TotalSoft_Poll_1_P_ShPop').attr('checked', data[0]['TotalSoft_Poll_1_P_ShPop']);
        jQuery('#TotalSoft_Poll_1_P_ShEff').val(data[0]['TotalSoft_Poll_1_P_ShEff']);
        jQuery('#TotalSoft_Poll_1_P_Q_BgC').val(data[0]['TotalSoft_Poll_1_P_Q_BgC']);
        jQuery('#TotalSoft_Poll_1_P_Q_C').val(data[0]['TotalSoft_Poll_1_P_Q_C']);
        jQuery('#TotalSoft_Poll_1_P_LAQ_W').val(data[0]['TotalSoft_Poll_1_P_LAQ_W']);
        jQuery('#TotalSoft_Poll_1_P_LAQ_H').val(data[0]['TotalSoft_Poll_1_P_LAQ_H']);
        jQuery('#TotalSoft_Poll_1_P_LAQ_C').val(data[0]['TotalSoft_Poll_1_P_LAQ_C']);
        jQuery('#TotalSoft_Poll_1_P_LAQ_S').val(data[0]['TotalSoft_Poll_1_P_LAQ_S']);
        jQuery('#TotalSoft_Poll_1_P_A_BgC').val(data[0]['TotalSoft_Poll_1_P_A_BgC']);
        jQuery('#TotalSoft_Poll_1_P_A_C').val(data[0]['TotalSoft_Poll_1_P_A_C']);
        jQuery('#TotalSoft_Poll_1_P_A_VT').val(data[0]['TotalSoft_Poll_1_P_A_VT']);
        jQuery('#TotalSoft_Poll_1_P_A_VC').val(data[0]['TotalSoft_Poll_1_P_A_VC']);
        jQuery('#TotalSoft_Poll_1_P_A_VEff').val(data[0]['TotalSoft_Poll_1_P_A_VEff']);
        jQuery('#TotalSoft_Poll_1_P_LAA_W').val(data[0]['TotalSoft_Poll_1_P_LAA_W']);
        jQuery('#TotalSoft_Poll_1_P_LAA_H').val(data[0]['TotalSoft_Poll_1_P_LAA_H']);
        jQuery('#TotalSoft_Poll_1_P_LAA_C').val(data[0]['TotalSoft_Poll_1_P_LAA_C']);
        jQuery('#TotalSoft_Poll_1_P_LAA_S').val(data[0]['TotalSoft_Poll_1_P_LAA_S']);
        jQuery('#TotalSoft_Poll_1_P_BB_Pos').val(data[0]['TotalSoft_Poll_1_P_BB_Pos']);
        jQuery('#TotalSoft_Poll_1_P_BB_BC').val(data[0]['TotalSoft_Poll_1_P_BB_BC']);
        jQuery('#TotalSoft_Poll_1_P_BB_BgC').val(data[0]['TotalSoft_Poll_1_P_BB_BgC']);
        jQuery('#TotalSoft_Poll_1_P_BB_C').val(data[0]['TotalSoft_Poll_1_P_BB_C']);
        jQuery('#TotalSoft_Poll_1_P_BB_Text').val(data[0]['TotalSoft_Poll_1_P_BB_Text']);
        jQuery('#TotalSoft_Poll_1_P_BB_IT').val(data[0]['TotalSoft_Poll_1_P_BB_IT']);
        jQuery('#TotalSoft_Poll_1_P_BB_IA').val(data[0]['TotalSoft_Poll_1_P_BB_IA']);
        jQuery('#TotalSoft_Poll_1_P_BB_HBgC').val(data[0]['TotalSoft_Poll_1_P_BB_HBgC']);
        jQuery('#TotalSoft_Poll_1_P_BB_HC').val(data[0]['TotalSoft_Poll_1_P_BB_HC']);
        jQuery('#TotalSoft_Poll_1_P_BB_MBgC').val(data[0]['TotalSoft_Poll_1_P_BB_MBgC']);
        jQuery('#TotalSoft_Poll_1_P_A_MBgC').val(data[0]['TotalSoft_Poll_1_P_A_MBgC']);
        jQuery('#TotalSoft_Poll_1_A_MBgC').val(data[0]['TotalSoft_Poll_1_A_MBgC']);
        setTimeout(function () {
          jQuery('#Total_Soft_Poll_TMSetTable_1').css('display', 'block');
        }, 500)
        setTimeout(function () {
          jQuery('#Total_Soft_Poll_TMSetTable_1').animate({'opacity': 1}, 500);
        }, 600)
        TS_Poll_TM_But('1', 'GO');
      } else if (data[0]['TotalSoft_Poll_TType'] == 'Image Poll' || data[0]['TotalSoft_Poll_TType'] == 'Video Poll') {
        if (data[0]['TotalSoft_Poll_2_RB_Show'] == 'true') {
          data[0]['TotalSoft_Poll_2_RB_Show'] = true;
        } else {
          data[0]['TotalSoft_Poll_2_RB_Show'] = false;
        }
        if (data[0]['TotalSoft_Poll_TType'] == 'Image Poll') {
          jQuery('.Total_Soft_Poll_Video_Set').fadeOut();
        } else {
          jQuery('.Total_Soft_Poll_Video_Set').fadeIn();
        }

        jQuery('#TotalSoft_Poll_2_VB_BR').val(data[0]['TotalSoft_Poll_2_VB_BR']);
        jQuery('#TotalSoft_Poll_2_VB_BgC').val(data[0]['TotalSoft_Poll_2_VB_BgC']);
        jQuery('#TotalSoft_Poll_2_VB_C').val(data[0]['TotalSoft_Poll_2_VB_C']);
        jQuery('#TotalSoft_Poll_2_VB_FS').val(data[0]['TotalSoft_Poll_2_VB_FS']);
        jQuery('#TotalSoft_Poll_2_VB_FF').val(data[0]['TotalSoft_Poll_2_VB_FF']);
        jQuery('#TotalSoft_Poll_2_VB_Text').val(data[0]['TotalSoft_Poll_2_VB_Text']);
        jQuery('#TotalSoft_Poll_2_VB_IT').val(data[0]['TotalSoft_Poll_2_VB_IT']);
        jQuery('#TotalSoft_Poll_2_VB_IA').val(data[0]['TotalSoft_Poll_2_VB_IA']);
        jQuery('#TotalSoft_Poll_2_VB_IS').val(data[0]['TotalSoft_Poll_2_VB_IS']);
        jQuery('#TotalSoft_Poll_2_VB_HBgC').val(data[0]['TotalSoft_Poll_2_VB_HBgC']);
        jQuery('#TotalSoft_Poll_2_VB_HC').val(data[0]['TotalSoft_Poll_2_VB_HC']);
        jQuery('#TotalSoft_Poll_2_RB_Show').attr('checked', data[0]['TotalSoft_Poll_2_RB_Show']);
        jQuery('#TotalSoft_Poll_2_RB_Pos').val(data[0]['TotalSoft_Poll_2_RB_Pos']);
        jQuery('#TotalSoft_Poll_2_RB_BW').val(data[0]['TotalSoft_Poll_2_RB_BW']);
        jQuery('#TotalSoft_Poll_2_RB_BC').val(data[0]['TotalSoft_Poll_2_RB_BC']);
        jQuery('#TotalSoft_Poll_2_RB_BR').val(data[0]['TotalSoft_Poll_2_RB_BR']);
        jQuery('#TotalSoft_Poll_2_RB_BgC').val(data[0]['TotalSoft_Poll_2_RB_BgC']);
        jQuery('#TotalSoft_Poll_2_RB_C').val(data[0]['TotalSoft_Poll_2_RB_C']);
        jQuery('#TotalSoft_Poll_2_RB_FS').val(data[0]['TotalSoft_Poll_2_RB_FS']);
        jQuery('#TotalSoft_Poll_2_RB_FF').val(data[0]['TotalSoft_Poll_2_RB_FF']);
        jQuery('#TotalSoft_Poll_2_RB_Text').val(data[0]['TotalSoft_Poll_2_RB_Text']);
        jQuery('#TotalSoft_Poll_2_RB_IT').val(data[0]['TotalSoft_Poll_2_RB_IT']);
        jQuery('#TotalSoft_Poll_2_RB_IA').val(data[0]['TotalSoft_Poll_2_RB_IA']);
        jQuery('#TotalSoft_Poll_2_RB_IS').val(data[0]['TotalSoft_Poll_2_RB_IS']);
        jQuery('#TotalSoft_Poll_2_RB_HBgC').val(data[0]['TotalSoft_Poll_2_RB_HBgC']);
        jQuery('#TotalSoft_Poll_2_RB_HC').val(data[0]['TotalSoft_Poll_2_RB_HC']);
        jQuery('#TotalSoft_Poll_2_P_BB_MBgC').val(data[0]['TotalSoft_Poll_2_P_BB_MBgC']);
        jQuery('#TotalSoft_Poll_2_P_BB_Pos').val(data[0]['TotalSoft_Poll_2_P_BB_Pos']);
        jQuery('#TotalSoft_Poll_2_P_BB_BC').val(data[0]['TotalSoft_Poll_2_P_BB_BC']);
        jQuery('#TotalSoft_Poll_2_P_BB_BgC').val(data[0]['TotalSoft_Poll_2_P_BB_BgC']);
        jQuery('#TotalSoft_Poll_2_P_BB_C').val(data[0]['TotalSoft_Poll_2_P_BB_C']);
        jQuery('#TotalSoft_Poll_2_P_BB_Text').val(data[0]['TotalSoft_Poll_2_P_BB_Text']);
        jQuery('#TotalSoft_Poll_2_P_BB_IT').val(data[0]['TotalSoft_Poll_2_P_BB_IT']);
        jQuery('#TotalSoft_Poll_2_P_BB_IA').val(data[0]['TotalSoft_Poll_2_P_BB_IA']);
        jQuery('#TotalSoft_Poll_2_P_BB_HBgC').val(data[0]['TotalSoft_Poll_2_P_BB_HBgC']);
        jQuery('#TotalSoft_Poll_2_P_BB_HC').val(data[0]['TotalSoft_Poll_2_P_BB_HC']);
        setTimeout(function () {
          jQuery('#Total_Soft_Poll_TMSetTable_2').css('display', 'block');
        }, 500)
        setTimeout(function () {
          jQuery('#Total_Soft_Poll_TMSetTable_2').animate({'opacity': 1}, 500);
        }, 600)
        TS_Poll_TM_But('2', 'GO');
      } else if (data[0]['TotalSoft_Poll_TType'] == 'Standart Without Button' || data[0]['TotalSoft_Poll_TType'] == 'Standard Without Button') {
        if (data[0]['TotalSoft_Poll_3_TV_Show'] == 'true') {
          data[0]['TotalSoft_Poll_3_TV_Show'] = true;
        } else {
          data[0]['TotalSoft_Poll_3_TV_Show'] = false;
        }
        if (data[0]['TotalSoft_Poll_3_RB_Show'] == 'true') {
          data[0]['TotalSoft_Poll_3_RB_Show'] = true;
        } else {
          data[0]['TotalSoft_Poll_3_RB_Show'] = false;
        }

        jQuery('#TotalSoft_Poll_3_TV_Show').attr('checked', data[0]['TotalSoft_Poll_3_TV_Show']);
        jQuery('#TotalSoft_Poll_3_TV_Pos').val(data[0]['TotalSoft_Poll_3_TV_Pos']);
        jQuery('#TotalSoft_Poll_3_TV_C').val(data[0]['TotalSoft_Poll_3_TV_C']);
        jQuery('#TotalSoft_Poll_3_TV_FS').val(data[0]['TotalSoft_Poll_3_TV_FS']);
        jQuery('#TotalSoft_Poll_3_TV_Text').val(data[0]['TotalSoft_Poll_3_TV_Text']);
        jQuery('#TotalSoft_Poll_3_VT_IT').val(data[0]['TotalSoft_Poll_3_VT_IT']);
        jQuery('#TotalSoft_Poll_3_RB_Show').attr('checked', data[0]['TotalSoft_Poll_3_RB_Show']);
        jQuery('#TotalSoft_Poll_3_RB_Pos').val(data[0]['TotalSoft_Poll_3_RB_Pos']);
        jQuery('#TotalSoft_Poll_3_RB_BW').val(data[0]['TotalSoft_Poll_3_RB_BW']);
        jQuery('#TotalSoft_Poll_3_RB_BC').val(data[0]['TotalSoft_Poll_3_RB_BC']);
        jQuery('#TotalSoft_Poll_3_RB_BR').val(data[0]['TotalSoft_Poll_3_RB_BR']);
        jQuery('#TotalSoft_Poll_3_RB_BgC').val(data[0]['TotalSoft_Poll_3_RB_BgC']);
        jQuery('#TotalSoft_Poll_3_RB_C').val(data[0]['TotalSoft_Poll_3_RB_C']);
        jQuery('#TotalSoft_Poll_3_RB_FS').val(data[0]['TotalSoft_Poll_3_RB_FS']);
        jQuery('#TotalSoft_Poll_3_RB_FF').val(data[0]['TotalSoft_Poll_3_RB_FF']);
        jQuery('#TotalSoft_Poll_3_RB_Text').val(data[0]['TotalSoft_Poll_3_RB_Text']);
        jQuery('#TotalSoft_Poll_3_RB_IT').val(data[0]['TotalSoft_Poll_3_RB_IT']);
        jQuery('#TotalSoft_Poll_3_RB_IA').val(data[0]['TotalSoft_Poll_3_RB_IA']);
        jQuery('#TotalSoft_Poll_3_RB_IS').val(data[0]['TotalSoft_Poll_3_RB_IS']);
        jQuery('#TotalSoft_Poll_3_RB_HBgC').val(data[0]['TotalSoft_Poll_3_RB_HBgC']);
        jQuery('#TotalSoft_Poll_3_RB_HC').val(data[0]['TotalSoft_Poll_3_RB_HC']);
        jQuery('#TotalSoft_Poll_3_V_CA').val(data[0]['TotalSoft_Poll_3_V_CA']);
        jQuery('#TotalSoft_Poll_3_V_MBgC').val(data[0]['TotalSoft_Poll_3_V_MBgC']);
        jQuery('#TotalSoft_Poll_3_V_BgC').val(data[0]['TotalSoft_Poll_3_V_BgC']);
        jQuery('#TotalSoft_Poll_3_V_C').val(data[0]['TotalSoft_Poll_3_V_C']);
        jQuery('#TotalSoft_Poll_3_V_T').val(data[0]['TotalSoft_Poll_3_V_T']);
        jQuery('#TotalSoft_Poll_3_V_Eff').val(data[0]['TotalSoft_Poll_3_V_Eff']);
        jQuery('#TotalSoft_Poll_3_BB_MBgC').val(data[0]['TotalSoft_Poll_3_BB_MBgC']);
        jQuery('#TotalSoft_Poll_3_BB_Pos').val(data[0]['TotalSoft_Poll_3_BB_Pos']);
        jQuery('#TotalSoft_Poll_3_BB_BC').val(data[0]['TotalSoft_Poll_3_BB_BC']);
        jQuery('#TotalSoft_Poll_3_BB_BgC').val(data[0]['TotalSoft_Poll_3_BB_BgC']);
        jQuery('#TotalSoft_Poll_3_BB_C').val(data[0]['TotalSoft_Poll_3_BB_C']);
        jQuery('#TotalSoft_Poll_3_BB_Text').val(data[0]['TotalSoft_Poll_3_BB_Text']);
        jQuery('#TotalSoft_Poll_3_BB_IT').val(data[0]['TotalSoft_Poll_3_BB_IT']);
        jQuery('#TotalSoft_Poll_3_BB_IA').val(data[0]['TotalSoft_Poll_3_BB_IA']);
        jQuery('#TotalSoft_Poll_3_BB_HBgC').val(data[0]['TotalSoft_Poll_3_BB_HBgC']);
        jQuery('#TotalSoft_Poll_3_BB_HC').val(data[0]['TotalSoft_Poll_3_BB_HC']);
        jQuery('#TotalSoft_Poll_3_VT_IA').val(data[0]['TotalSoft_Poll_3_VT_IA']);
        setTimeout(function () {
          jQuery('#Total_Soft_Poll_TMSetTable_3').css('display', 'block');
        }, 500)
        setTimeout(function () {
          jQuery('#Total_Soft_Poll_TMSetTable_3').animate({'opacity': 1}, 500);
        }, 600)
        TS_Poll_TM_But('3', 'GO');
      } else if (data[0]['TotalSoft_Poll_TType'] == 'Image Without Button' || data[0]['TotalSoft_Poll_TType'] == 'Video Without Button') {
        if (data[0]['TotalSoft_Poll_TType'] == 'Image Without Button') {
          jQuery('.TSP1').fadeIn();
          jQuery('.TSP2').fadeOut();
        } else {
          jQuery('.TSP2').fadeIn();
          jQuery('.TSP1').fadeOut();
        }
        if (data[0]['TotalSoft_Poll_4_RB_Show'] == 'true') {
          data[0]['TotalSoft_Poll_4_RB_Show'] = true;
        } else {
          data[0]['TotalSoft_Poll_4_RB_Show'] = false;
        }

        jQuery('#TotalSoft_Poll_4_TV_FS').val(data[0]['TotalSoft_Poll_4_TV_FS']);
        jQuery('#TotalSoft_Poll_4_TV_Text').val(data[0]['TotalSoft_Poll_4_TV_Text']);
        jQuery('#TotalSoft_Poll_4_VT_IT').val(data[0]['TotalSoft_Poll_4_VT_IT']);
        jQuery('#TotalSoft_Poll_4_VT_IA').val(data[0]['TotalSoft_Poll_4_VT_IA']);
        jQuery('#TotalSoft_Poll_4_RB_Show').attr('checked', data[0]['TotalSoft_Poll_4_RB_Show']);
        jQuery('#TotalSoft_Poll_4_RB_Pos').val(data[0]['TotalSoft_Poll_4_RB_Pos']);
        jQuery('#TotalSoft_Poll_4_RB_BW').val(data[0]['TotalSoft_Poll_4_RB_BW']);
        jQuery('#TotalSoft_Poll_4_RB_BC').val(data[0]['TotalSoft_Poll_4_RB_BC']);
        jQuery('#TotalSoft_Poll_4_RB_BR').val(data[0]['TotalSoft_Poll_4_RB_BR']);
        jQuery('#TotalSoft_Poll_4_RB_MBgC').val(data[0]['TotalSoft_Poll_4_RB_MBgC']);
        jQuery('#TotalSoft_Poll_4_RB_BgC').val(data[0]['TotalSoft_Poll_4_RB_BgC']);
        jQuery('#TotalSoft_Poll_4_RB_C').val(data[0]['TotalSoft_Poll_4_RB_C']);
        jQuery('#TotalSoft_Poll_4_RB_FS').val(data[0]['TotalSoft_Poll_4_RB_FS']);
        jQuery('#TotalSoft_Poll_4_RB_FF').val(data[0]['TotalSoft_Poll_4_RB_FF']);
        jQuery('#TotalSoft_Poll_4_RB_Text').val(data[0]['TotalSoft_Poll_4_RB_Text']);
        jQuery('#TotalSoft_Poll_4_RB_IT').val(data[0]['TotalSoft_Poll_4_RB_IT']);
        jQuery('#TotalSoft_Poll_4_RB_IA').val(data[0]['TotalSoft_Poll_4_RB_IA']);
        jQuery('#TotalSoft_Poll_4_RB_IS').val(data[0]['TotalSoft_Poll_4_RB_IS']);
        jQuery('#TotalSoft_Poll_4_RB_HBgC').val(data[0]['TotalSoft_Poll_4_RB_HBgC']);
        jQuery('#TotalSoft_Poll_4_RB_HC').val(data[0]['TotalSoft_Poll_4_RB_HC']);
        jQuery('#TotalSoft_Poll_4_V_CA').val(data[0]['TotalSoft_Poll_4_V_CA']);
        jQuery('#TotalSoft_Poll_4_V_MBgC').val(data[0]['TotalSoft_Poll_4_V_MBgC']);
        jQuery('#TotalSoft_Poll_4_V_BgC').val(data[0]['TotalSoft_Poll_4_V_BgC']);
        jQuery('#TotalSoft_Poll_4_V_C').val(data[0]['TotalSoft_Poll_4_V_C']);
        jQuery('#TotalSoft_Poll_4_V_T').val(data[0]['TotalSoft_Poll_4_V_T']);
        jQuery('#TotalSoft_Poll_4_V_Eff').val(data[0]['TotalSoft_Poll_4_V_Eff']);
        jQuery('#TotalSoft_Poll_4_BB_MBgC').val(data[0]['TotalSoft_Poll_4_BB_MBgC']);
        jQuery('#TotalSoft_Poll_4_BB_Pos').val(data[0]['TotalSoft_Poll_4_BB_Pos']);
        jQuery('#TotalSoft_Poll_4_BB_BC').val(data[0]['TotalSoft_Poll_4_BB_BC']);
        jQuery('#TotalSoft_Poll_4_BB_BgC').val(data[0]['TotalSoft_Poll_4_BB_BgC']);
        jQuery('#TotalSoft_Poll_4_BB_C').val(data[0]['TotalSoft_Poll_4_BB_C']);
        jQuery('#TotalSoft_Poll_4_BB_Text').val(data[0]['TotalSoft_Poll_4_BB_Text']);
        jQuery('#TotalSoft_Poll_4_BB_IT').val(data[0]['TotalSoft_Poll_4_BB_IT']);
        jQuery('#TotalSoft_Poll_4_BB_IA').val(data[0]['TotalSoft_Poll_4_BB_IA']);
        jQuery('#TotalSoft_Poll_4_BB_HBgC').val(data[0]['TotalSoft_Poll_4_BB_HBgC']);
        jQuery('#TotalSoft_Poll_4_BB_HC').val(data[0]['TotalSoft_Poll_4_BB_HC']);
        setTimeout(function () {
          jQuery('#Total_Soft_Poll_TMSetTable_4').css('display', 'block');
        }, 500)
        setTimeout(function () {
          jQuery('#Total_Soft_Poll_TMSetTable_4').animate({'opacity': 1}, 500);
        }, 600)
        TS_Poll_TM_But('4', 'GO');
      } else if (data[0]['TotalSoft_Poll_TType'] == 'Image in Question' || data[0]['TotalSoft_Poll_TType'] == 'Video in Question') {
        if (data[0]['TotalSoft_Poll_TType'] == 'Image in Question') {
          jQuery('.TSPIIQ').fadeIn();
          jQuery('.TSPVIQ').fadeOut();
        } else {
          jQuery('.TSPVIQ').fadeIn();
          jQuery('.TSPIIQ').fadeOut();
        }
        if (data[0]['TotalSoft_Poll_5_RB_Show'] == 'true') {
          data[0]['TotalSoft_Poll_5_RB_Show'] = true;
        } else {
          data[0]['TotalSoft_Poll_5_RB_Show'] = false;
        }

        jQuery('#TotalSoft_Poll_5_VB_IT').val(data[0]['TotalSoft_Poll_5_VB_IT']);
        jQuery('#TotalSoft_Poll_5_VB_IA').val(data[0]['TotalSoft_Poll_5_VB_IA']);
        jQuery('#TotalSoft_Poll_5_VB_IS').val(data[0]['TotalSoft_Poll_5_VB_IS']);
        jQuery('#TotalSoft_Poll_5_VB_HBgC').val(data[0]['TotalSoft_Poll_5_VB_HBgC']);
        jQuery('#TotalSoft_Poll_5_VB_HC').val(data[0]['TotalSoft_Poll_5_VB_HC']);
        jQuery('#TotalSoft_Poll_5_RB_Show').attr('checked', data[0]['TotalSoft_Poll_5_RB_Show']);
        jQuery('#TotalSoft_Poll_5_RB_Pos').val(data[0]['TotalSoft_Poll_5_RB_Pos']);
        jQuery('#TotalSoft_Poll_5_RB_BW').val(data[0]['TotalSoft_Poll_5_RB_BW']);
        jQuery('#TotalSoft_Poll_5_RB_BC').val(data[0]['TotalSoft_Poll_5_RB_BC']);
        jQuery('#TotalSoft_Poll_5_RB_BR').val(data[0]['TotalSoft_Poll_5_RB_BR']);
        jQuery('#TotalSoft_Poll_5_RB_BgC').val(data[0]['TotalSoft_Poll_5_RB_BgC']);
        jQuery('#TotalSoft_Poll_5_RB_C').val(data[0]['TotalSoft_Poll_5_RB_C']);
        jQuery('#TotalSoft_Poll_5_RB_FS').val(data[0]['TotalSoft_Poll_5_RB_FS']);
        jQuery('#TotalSoft_Poll_5_RB_FF').val(data[0]['TotalSoft_Poll_5_RB_FF']);
        jQuery('#TotalSoft_Poll_5_RB_IT').val(data[0]['TotalSoft_Poll_5_RB_IT']);
        jQuery('#TotalSoft_Poll_5_RB_IA').val(data[0]['TotalSoft_Poll_5_RB_IA']);
        jQuery('#TotalSoft_Poll_5_RB_IS').val(data[0]['TotalSoft_Poll_5_RB_IS']);
        jQuery('#TotalSoft_Poll_5_RB_HBgC').val(data[0]['TotalSoft_Poll_5_RB_HBgC']);
        jQuery('#TotalSoft_Poll_5_RB_HC').val(data[0]['TotalSoft_Poll_5_RB_HC']);
        jQuery('#TotalSoft_Poll_5_V_CA').val(data[0]['TotalSoft_Poll_5_V_CA']);
        jQuery('#TotalSoft_Poll_5_V_MBgC').val(data[0]['TotalSoft_Poll_5_V_MBgC']);
        jQuery('#TotalSoft_Poll_5_V_BgC').val(data[0]['TotalSoft_Poll_5_V_BgC']);
        jQuery('#TotalSoft_Poll_5_V_C').val(data[0]['TotalSoft_Poll_5_V_C']);
        jQuery('#TotalSoft_Poll_5_V_T').val(data[0]['TotalSoft_Poll_5_V_T']);
        jQuery('#TotalSoft_Poll_5_V_Eff').val(data[0]['TotalSoft_Poll_5_V_Eff']);
        jQuery('#TotalSoft_Poll_5_BB_MBgC').val(data[0]['TotalSoft_Poll_5_BB_MBgC']);
        jQuery('#TotalSoft_Poll_5_BB_Pos').val(data[0]['TotalSoft_Poll_5_BB_Pos']);
        jQuery('#TotalSoft_Poll_5_BB_BC').val(data[0]['TotalSoft_Poll_5_BB_BC']);
        jQuery('#TotalSoft_Poll_5_BB_BgC').val(data[0]['TotalSoft_Poll_5_BB_BgC']);
        jQuery('#TotalSoft_Poll_5_BB_C').val(data[0]['TotalSoft_Poll_5_BB_C']);
        jQuery('#TotalSoft_Poll_5_BB_IT').val(data[0]['TotalSoft_Poll_5_BB_IT']);
        jQuery('#TotalSoft_Poll_5_BB_IA').val(data[0]['TotalSoft_Poll_5_BB_IA']);
        jQuery('#TotalSoft_Poll_5_BB_HBgC').val(data[0]['TotalSoft_Poll_5_BB_HBgC']);
        jQuery('#TotalSoft_Poll_5_BB_HC').val(data[0]['TotalSoft_Poll_5_BB_HC']);
        jQuery('#TotalSoft_Poll_5_TV_Text').val(data[0]['TotalSoft_Poll_5_TV_Text']);
        jQuery('#TotalSoft_Poll_5_BB_Text').val(data[0]['TotalSoft_Poll_5_BB_Text']);
        jQuery('#TotalSoft_Poll_5_RB_Text').val(data[0]['TotalSoft_Poll_5_RB_Text']);
        jQuery('#TotalSoft_Poll_5_VB_Text').val(data[0]['TotalSoft_Poll_5_VB_Text']);
        setTimeout(function () {
          jQuery('#Total_Soft_Poll_TMSetTable_5').css('display', 'block');
        }, 500)
        setTimeout(function () {
          jQuery('#Total_Soft_Poll_TMSetTable_5').animate({'opacity': 1}, 500);
        }, 600)
        TS_Poll_TM_But('5', 'GO');
      }
      setTimeout(function () {
        jQuery('.Total_Soft_Poll_T_Color_1').alphaColorPicker();
        jQuery('.wp-picker-holder').addClass('alpha-picker-holder');
        TotalSoft_Poll_Out();
      }, 500);
      setTimeout(function () {
        jQuery('.Total_Soft_Poll_AMD2').css('display', 'none');
        jQuery('.Total_Soft_Poll_TMMTable').css('display', 'none');
        jQuery('.Total_Soft_Poll_TMOTable').css('display', 'none');
        jQuery('.Total_Soft_Poll_Update').css('display', 'block');
        jQuery('.Total_Soft_Poll_AMD3').css('display', 'block');
        jQuery('#Total_Soft_Poll_AMSet_Table').css('display', 'block');
      }, 500)
      setTimeout(function () {
        jQuery('.Total_Soft_Poll_AMD3').animate({'opacity': 1}, 500);
        jQuery('#Total_Soft_Poll_AMSet_Table').animate({'opacity': 1}, 500);
        jQuery('.Total_Soft_Poll_Loading').css('display', 'none');
      }, 600)
    }
  });
}

function TotalSoftPoll_Theme_Clone(Theme_ID) {
  jQuery.ajax({
    type: 'POST',
    url: objectpoll.ajaxurl,
    data: {
      action: 'TotalSoftPoll_Theme_Clone', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
      foobar: Theme_ID, // translates into $_POST['foobar'] in PHP
      nonce: objectpoll.nonce
    },
    beforeSend: function () {
      jQuery('.Total_Soft_Poll_Loading').css('display', 'block');
    },
    success: function (response) {
      location.reload();
    }
  });
}

function TotalSoftPoll_Theme_Del_No(Theme_ID) {
  jQuery('#Total_Soft_Poll_TMOTable_tr_' + Theme_ID).find('.Total_Soft_Poll_Del_Span').removeClass('Total_Soft_Poll_Del_Span1');
}

function TotalSoftPoll_Theme_Del(Theme_ID) {
  jQuery('#Total_Soft_Poll_TMOTable_tr_' + Theme_ID).find('.Total_Soft_Poll_Del_Span').addClass('Total_Soft_Poll_Del_Span1');
}





// Settings Menu
function Total_Soft_Poll_SM_But1() {
  jQuery('.Total_Soft_Poll_AMD2').animate({'opacity': 0}, 500);
  jQuery('.Total_Soft_Poll_SMMTable').animate({'opacity': 0}, 500);
  jQuery('.Total_Soft_Poll_SMOTable').animate({'opacity': 0}, 500);
  jQuery('.Total_Soft_Poll_Save_Set').animate({'opacity': 1}, 500);
  jQuery('.Total_Soft_Poll_Update_Set').animate({'opacity': 0}, 500);

  setTimeout(function () {
    jQuery('.Total_Soft_Poll_AMD2').css('display', 'none');
    jQuery('.Total_Soft_Poll_SMMTable').css('display', 'none');
    jQuery('.Total_Soft_Poll_SMOTable').css('display', 'none');
    jQuery('.Total_Soft_Poll_Save_Set').css('display', 'block');
    jQuery('.Total_Soft_Poll_Update_Set').css('display', 'none');
    jQuery('.Total_Soft_Poll_AMD3').css('display', 'block');
    jQuery('#Total_Soft_Poll_AMSetDiv_S').css('display', 'block');
  }, 500)
  setTimeout(function () {
    jQuery('.Total_Soft_Poll_AMD3').animate({'opacity': 1}, 500);
    jQuery('#Total_Soft_Poll_AMSetDiv_S').animate({'opacity': 1}, 500);
    jQuery('.Total_Soft_Poll_T_Color').alphaColorPicker();
    jQuery('.wp-picker-holder').addClass('alpha-picker-holder');
    TotalSoft_Poll_Out();
    TS_Poll_TM_But('S', 'GO');
  }, 600)
}

function TotalSoftPoll_Clone_Set(Set_ID) {
  jQuery.ajax({
    type: 'POST',
    url: objectpoll.ajaxurl,
    data: {
      action: 'TotalSoftPoll_Clone_Set', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
      foobar: Set_ID, // translates into $_POST['foobar'] in PHP
      nonce: objectpoll.nonce
    },
    beforeSend: function () {
      jQuery('.Total_Soft_Poll_Loading').css('display', 'block');
    },
    success: function (response) {
      location.reload();
    }
  });
}

function TotalSoftPoll_Edit_Set(Set_ID) {
  jQuery('#Total_SoftPoll_Update_Set').val(Set_ID);
  jQuery.ajax({
    type: 'POST',
    url: objectpoll.ajaxurl,
    data: {
      action: 'TotalSoftPoll_Edit_Set', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
      foobar: Set_ID, // translates into $_POST['foobar'] in PHP
      nonce: objectpoll.nonce
    },
    beforeSend: function () {
      jQuery('.Total_Soft_Poll_Loading').css('display', 'block');
    },
    success: function (response) {
      var data = response;
      jQuery('.Total_Soft_Poll_AMD2').animate({'opacity': 0}, 500);
      jQuery('.Total_Soft_Poll_SMMTable').animate({'opacity': 0}, 500);
      jQuery('.Total_Soft_Poll_SMOTable').animate({'opacity': 0}, 500);
      jQuery('.Total_Soft_Poll_Save_Set').animate({'opacity': 0}, 500);
      jQuery('.Total_Soft_Poll_Update_Set').animate({'opacity': 1}, 500);

      if (data[0]['TotalSoft_Poll_Set_01'] == 'true') {
        data[0]['TotalSoft_Poll_Set_01'] = true;
      } else {
        data[0]['TotalSoft_Poll_Set_01'] = false;
      }
      if (data[0]['TotalSoft_Poll_Set_10'] == 'true') {
        data[0]['TotalSoft_Poll_Set_10'] = true;
      } else {
        data[0]['TotalSoft_Poll_Set_10'] = false;
      }

      jQuery('#TotalSoft_Poll_SetTitle').val(data[0]['TotalSoft_Poll_SetTitle']);
      jQuery('#TotalSoft_Poll_Set_01').attr('checked', data[0]['TotalSoft_Poll_Set_01']);
      jQuery('#TotalSoft_Poll_Set_02').val(data[0]['TotalSoft_Poll_Set_02']);
      jQuery('#TotalSoft_Poll_Set_03').val(data[0]['TotalSoft_Poll_Set_03']);
      jQuery('#TotalSoft_Poll_Set_04').val(data[0]['TotalSoft_Poll_Set_04']);
      jQuery('#TotalSoft_Poll_Set_05').val(data[0]['TotalSoft_Poll_Set_05']);
      jQuery('#TotalSoft_Poll_Set_06').val(data[0]['TotalSoft_Poll_Set_06']);
      jQuery('#TotalSoft_Poll_Set_07').val(data[0]['TotalSoft_Poll_Set_07']);
      jQuery('#TotalSoft_Poll_Set_08').val(data[0]['TotalSoft_Poll_Set_08']);
      jQuery('#TotalSoft_Poll_Set_09').val(data[0]['TotalSoft_Poll_Set_09']);
      jQuery('#TotalSoft_Poll_Set_10').attr('checked', data[0]['TotalSoft_Poll_Set_10']);
      jQuery('#TotalSoft_Poll_Set_11').val(data[0]['TotalSoft_Poll_Set_11']);


      setTimeout(function () {
        jQuery('.Total_Soft_Poll_AMD2').css('display', 'none');
        jQuery('.Total_Soft_Poll_SMMTable').css('display', 'none');
        jQuery('.Total_Soft_Poll_SMOTable').css('display', 'none');
        jQuery('.Total_Soft_Poll_Save_Set').css('display', 'none');
        jQuery('.Total_Soft_Poll_Update_Set').css('display', 'block');
        jQuery('.Total_Soft_Poll_AMD3').css('display', 'block');
        jQuery('#Total_Soft_Poll_AMSetDiv_S').css('display', 'block');
      }, 500)
      setTimeout(function () {
        jQuery('.Total_Soft_Poll_AMD3').animate({'opacity': 1}, 500);
        jQuery('#Total_Soft_Poll_AMSetDiv_S').animate({'opacity': 1}, 500);
        jQuery('.Total_Soft_Poll_T_Color').alphaColorPicker();
        jQuery('.wp-picker-holder').addClass('alpha-picker-holder');
        TotalSoft_Poll_Out();
        TS_Poll_TM_But('S', 'GO');
        jQuery('.Total_Soft_Poll_Loading').css('display', 'none');
      }, 600)
    }
  });
}

function TotalSoftPoll_Del_Set(Set_ID) {
  jQuery('#Total_Soft_Poll_SMOTable_tr_' + Set_ID).find('.Total_Soft_Poll_Del_Span').addClass('Total_Soft_Poll_Del_Span1');
}

function TotalSoftPoll_Del_Yes_Set(Set_ID) {
  jQuery.ajax({
    type: 'POST',
    url: objectpoll.ajaxurl,
    data: {
      action: 'TotalSoftPoll_Del_Set', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
      foobar: Set_ID, // translates into $_POST['foobar'] in PHP
      nonce: objectpoll.nonce
    },
    beforeSend: function () {
      jQuery('.Total_Soft_Poll_Loading').css('display', 'block');
    },
    success: function (response) {
      location.reload();
    }
  });
}

function TotalSoftPoll_Del_No_Set(Set_ID) {
  jQuery('#Total_Soft_Poll_SMOTable_tr_' + Set_ID).find('.Total_Soft_Poll_Del_Span').removeClass('Total_Soft_Poll_Del_Span1');
}

function TS_Poll_TM_But(type, col_id) {
  jQuery('.TS_Poll_Option_Div').css('display', 'none');
  jQuery('.Total_Soft_Poll_AMSetDiv_Button').removeClass('Total_Soft_Poll_AMSetDiv_Button_C');
  jQuery('#TS_Poll_TM_TBut_' + type + '_' + col_id).addClass('Total_Soft_Poll_AMSetDiv_Button_C');
  jQuery('#Total_Soft_Poll_AMSetTable_' + type + '_' + col_id).css('display', 'block');
}