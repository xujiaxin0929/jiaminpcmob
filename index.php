<?php
  error_reporting(E_ERROR);
  $act="";
  if(array_key_exists('act', $_GET)){$act=$_GET['act'];}
  if(array_key_exists('down_file_name', $_GET)){$down_file_name=$_GET['down_file_name'];}
  $plugin_id=0;
  if(array_key_exists('plugin_id', $_GET)){$plugin_id=$_GET['plugin_id'];}
  define("APP_ROOT_PATH", str_replace("index.php", "", __FILE__));
  define("PLUGIN_ID_PATH", "plugin/".$plugin_id."/");


  //当为展示素材库操作
  if($act=="show_plugin"){
      include("public/top.php");
      $page_config = json_decode(preg_replace("/\/\*[\s\S]+?\*\//","",file_get_contents("plugin/".$plugin_id."/page.json")), true);
      if(is_array($page_config['template_plugin_common_css'])){
        foreach ($page_config['template_plugin_common_css'] as $key => $value) {
          echo_css($value,$plugin_id);
        }
      }

      if(is_array($page_config['template_plugin_self_css'])){
        foreach ($page_config['template_plugin_self_css'] as $key => $value) {
          echo_css($value,$plugin_id);
        }
      }
      ?>
      </head>
        <body>
      <?php
      if(file_exists(APP_ROOT_PATH."plugin/".$plugin_id."/page.php")){include("plugin/".$plugin_id."/page.php");}
      include("public/bottom.php");
      if(is_array($page_config['template_plugin_common_js'])){
        foreach ($page_config['template_plugin_common_js'] as $key => $value) {
          echo_js($value,$plugin_id);
        }
      }

      if(is_array($page_config['template_plugin_self_js'])){
        foreach ($page_config['template_plugin_self_js'] as $key => $value) {
          echo_js($value,$plugin_id);
        }
      }
  }



  elseif ($act=="down_plugin"){
    $i_file=find_self_file();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <style type="text/css">
body{ font-size: 14px; line-height: 28px;}
  </style>
  <title>下载素材库</title>
    <script src="http://cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>


<table style="margin-left: auto ; margin-right: auto; border:#999999 solid 1px; padding: 20px; width: 600px;">
<tr><td style="font-weight:bold" align="center">素材库下载</td></tr>
<tr><td>素材库id:<input type="text" id="down_plugin_id" name=""></td></tr>
<tr><td>写入引入文件:
<select id="down_file_name">
<option value="">不写入只下载</option>
<?php
   foreach ($i_file as $key => $i) {
       echo '<option value="'.$i.'">'.$i.'</option>';
   }
?>
</select>
</td></tr>
<tr><td>
	<button onclick="do_down_plugin();">开始写入</button>&nbsp;&nbsp;
	<button onclick="do_show_online_plugin();">预览网上素材</button>
	
</td></tr>
</table>

<table style="margin-left: auto ; margin-right: auto; margin-top: 20px; border:#999999 solid 1px; padding: 20px; width: 600px;">
<tr><td><button onclick="do_update_all_plugin();">更新全部style.scss</button></td></tr>
</table>


<table style="margin-left: auto ; margin-right: auto; border:#999999 solid 1px; padding: 20px;  margin-top: 20px;width: 600px;">
<tr><td style="font-weight:bold" align="center">写入config.scss变量</td></tr>
<tr><td align="center">
素材文件夹:
<select onchange="find_plugin_config(this);">
  <option value="">请选择</option>
  <?php 
     $sucai_fold_list=find_sass_config_fold();
     if(is_array($sucai_fold_list)){
        foreach ($sucai_fold_list as $key => $sfl) {
          echo '<option value="'.$sfl.'">'.$sfl.'</option>'; 
        }
     }


  ?>
</select>

</td></tr>
<tr><td>
  <table width="100%">
    <thead>
      <th>名称</th>
      <th>值</th>
      <th>值域</th>
      <th>备注</th>
    </thead>
    <tbody id="plugin_config_td">
      
    </tbody>
  </table>
</td></tr>
<tr><td>
  <button onclick="do_update_plugin();">开始修改</button>&nbsp;&nbsp;
	<button onclick="do_show_local_plugin();">预览本地素材</button></td></tr>
</table>




</body>
</html>
<script type="text/javascript">
  function  do_down_plugin(){
    var down_plugin_id=$('#down_plugin_id').val();
    var down_file_name=$('#down_file_name').val();
    if(down_plugin_id==""){alert('请输入素材库id');return false;}
    $.ajax({
      url: 'index.php?act=do_down_plugin',
      type: 'GET',
      data: {plugin_id: down_plugin_id,down_file_name:$('#down_file_name').val()},
    })
    .success(function(data){
      if(data==-1){alert('素材不存在');}
      if(data==1){alert('下载成功');}
    });
  }
  
  
  function do_show_online_plugin(){
    var down_plugin_id=$('#down_plugin_id').val();
    if(down_plugin_id==""){alert('请输入素材库id');return false;}
    var url="http://work.jingchengidea.com/module_web/index.php?act=show_plugin&plugin_id="+down_plugin_id;
    window.open(url);
  }
	
	
	
	function  do_show_local_plugin(){
    var plugin_obj=$('#plugin_config_td input[name=plugin_id]');
    //console.log(plugin_obj.length);
    if(plugin_obj.length==0){alert('请先选择要修改素材文件夹');return false;}
    var url;
    url="index.php?act=show_plugin&plugin_id="+plugin_obj.val();
    window.open(url);
  }
	
	
  function find_plugin_config(obj){
    var plugin_id=$(obj).val();
    if(plugin_id!=""){
      $.ajax({
        url: 'index.php?act=do_show_plugin_config',
        type: 'GET',
        dataType:'json',
        data: {plugin_id: plugin_id},
      })
      .success(function(data){
           var text="";
           for (var i = 0; i < data.length; i++) {
              text+='<tr>'
                     +'<td align="center">'+data[i]['title']+':</td>'
                     +'<td><input type="text" name="'+data[i]['name']+'" value="'+data[i]['value']+'"></td>'
                     +'<td>'+data[i]['zhiyu']+'</td>'
                     +'<td>'+data[i]['beizhu']+'</td>'
                    +'</tr>';
           }

           text+='<input type="hidden" name="plugin_id" value="'+plugin_id+'">';
           $('#plugin_config_td').html(text);
      })
    }
  }

  function do_update_plugin(){
    var plugin_obj=$('#plugin_config_td input[name=plugin_id]');
    //console.log(plugin_obj.length);
    if(plugin_obj.length==0){alert('请先选择要修改素材文件夹');return false;}
    var ajax_data={};
     $('#plugin_config_td input').each(function(index, el) {
         ajax_data[$(this).attr('name')]=$(this).val();
     });
     $.ajax({
        url: 'index.php?act=do_update_plugin_config',
        type: 'GET',
        data: ajax_data,
      })
      .success(function(data){
      	if(data==1){alert('更新成功!');}
      })

  }
  
  
  function do_update_all_plugin(){
     $.ajax({
        url: 'index.php?act=do_update_all_plugin',
        type: 'GET',
      })
      .success(function(data){
      	if(data==1){alert('更新成功!');}
      })

  }

</script>

    <?php
  }
  elseif ($act=="do_down_plugin"){
    try {   
      $config_json=json_decode(preg_replace("/\/\*[\s\S]+?\*\//","",@file_get_contents("http://work.jingchengidea.com/module_web/plugin/".$plugin_id."/page.json")), true);
    } catch (Exception $e){   
       echo -1;exit();
    }
    if(!is_array($config_json)){
      echo -1;exit();
    }
	
	
	
	
	
	if($down_file_name!=""){
		write_file_css($config_json['template_plugin_common_css'],$plugin_id,"");
		write_file_css($config_json['template_plugin_self_css'],$plugin_id,$down_file_name);
		write_file_css($config_json['template_plugin_common_js'],$plugin_id,"",1);
		write_file_css($config_json['template_plugin_self_js'],$plugin_id,$down_file_name,1);
	}
    if(!file_exists('plugin')){mkdir("plugin");}
    
    $down_path="plugin/".$plugin_id;
    if(!file_exists($down_path)){mkdir($down_path);}
    exec("cd ".APP_ROOT_PATH."plugin/&&svn checkout svn://123.57.24.94/web_base/plugin/".$plugin_id."  --username shanchuang --password 213sA213",$info);
    //var_dump($info);
	
    echo 1;exit();
  }
  elseif ($act=="do_show_plugin_config"){
      echo json_encode(find_plugin_sass_config($plugin_id));exit();

  }
  elseif ($act=="do_update_plugin_config"){
          $plugin_sass_config_array = find_plugin_sass_config($plugin_id);
          save_plugin_sass_config($plugin_sass_config_array,$_GET);
          $sass_file=APP_ROOT_PATH.'plugin/'.$_GET['plugin_id'].'/css/style.scss';
          $css_file=APP_ROOT_PATH.'plugin/'.$_GET['plugin_id'].'/css/style.css';
           
           //echo "sass ".$sass_file." ".$css_file." --style compact";
           $a = exec("sass ".$sass_file." ".$css_file." --style compact 2>&1",$info,$status);
           echo 1;
  }
  elseif ($act=="do_update_all_plugin"){
  				$sucai_fold_list=find_sass_config_fold();
     			if(is_array($sucai_fold_list)){
			        foreach ($sucai_fold_list as $key => $sfl) {
				          $sass_file=APP_ROOT_PATH.'plugin/'.$sfl.'/css/style.scss';
				          $css_file=APP_ROOT_PATH.'plugin/'.$sfl.'/css/style.css';
           				$a = exec("sass ".$sass_file." ".$css_file." --style compact 2>&1",$info,$status);
			        }
			    }
  				echo 1;
  }
  
  else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style type="text/css">
body{ font-size: 14px; line-height: 28px;}
	</style>
	<title>前端页面列表</title>
</head>
<body>
<table style="margin-left: auto ; margin-right: auto; border:#999999 solid 1px; padding: 20px; ">
<?php
$now_fold=str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']);
$i=0;
$handle = opendir($now_fold);
 if($handle){
   while(($fold=readdir($handle))!==false){

        $taglib_file_exend=end(explode('.', $fold));

        $file_name=str_replace('.'.$taglib_file_exend,'', $fold);

        //$file_name=iconv("GB2312", "UTF-8", $file_name);

   		if(is_file($now_fold.$fold) and ($taglib_file_exend=='html' or $taglib_file_exend=='htm' or $taglib_file_exend=='HTML' or $taglib_file_exend=='HTM' or $taglib_file_exend=='php')){

   		    $i++;

   		    echo  "<tr><td>页面:</td><td><a href='".$file_name.'.'.$taglib_file_exend."'target='blank'>".$file_name."</a></td></tr>";

   		}

   }

  }

?>

<tr><td>合计:</td><td><?php echo $i;?>个页面 </td></tr>

</table>

</body>
</html>
<?php } ?>
<?php 
function echo_css($obj,$plugin_id){
    $url="plugin/".$plugin_id."/".$obj['src'];
    if(array_key_exists('is_outside',$obj)){
      if($obj['is_outside']==1){
        $url=$obj['src'];
      }
    }
    echo '<link href="'.$url.'" rel="stylesheet">';
 }

function echo_js($obj,$plugin_id){
    $url="plugin/".$plugin_id."/".$obj['src'];
    if(array_key_exists('is_outside',$obj)){
      if($obj['is_outside']==1){
        $url=$obj['src'];
      }
    }
    echo '<script src="'.$url.'"></script>';
}



//找到相同的css
function write_file_css($obj,$plugin_id,$file="",$type=0){
	if($type==1){
		if($file==""){$file="public/bottom.php";$mark_start="<!--start_template_plugin_common_js-->";$mark_end="<!--end_template_plugin_common_js-->";}
			 	 else{$mark_start="<!--start_template_plugin_self_js-->";$mark_end="<!--end_template_plugin_self_js-->";}
	}else{
		if($file==""){$file="public/top.php";$mark_start="<!--start_template_plugin_common_css-->";$mark_end="<!--end_template_plugin_common_css-->";}
			 	 else{$mark_start="<!--start_template_plugin_self_css-->";$mark_end="<!--end_template_plugin_self_css-->";}
	}
	$content_text=file_get_contents($file);
	$css_array=find_text_css_js($content_text,$mark_start,$mark_end,$type);
	
	
	if(is_array($obj)){
		$replace_obj_text="";
		foreach($obj as $o){
			$url="plugin/".$plugin_id."/".$o['src'];
			if(array_key_exists('is_outside',$o)){if($o['is_outside']==1){$url=$o['src'];}}
			if(!is_array($css_array['file_array']) or !in_array($url,$css_array['file_array'])){
				if($type==1){
					$replace_obj_text.="<script src=\"".$url."\"></script>\r\n";	
				}else{
					
					$replace_obj_text.="<link href=\"".$url."\" rel=\"stylesheet\">\r\n";	
				}		
			}
		}
		$content_text_new =	str_replace($css_array['css_js_content'],"",$content_text);
		$content_text=str_replace($mark_start,$mark_start."\r\n".$css_array['css_js_content'].$replace_obj_text,$content_text_new);
		file_put_contents($file,$content_text);
	}
}


//处理字符串
function find_text_css_js($content_text,$mark_start,$mark_end,$type=0){
	$start_postion= strpos($content_text, $mark_start);
	$content_text=substr($content_text,$start_postion,strlen($content_text));
	
	$end_postion= strpos($content_text, $mark_end);
	$content_text=substr($content_text,0,($end_postion));
	
	$content_text=str_replace($mark_start,"",$content_text);
	$content_text=str_replace($mark_end,"",$content_text);
	
	
	if($type==1){
		 $pattern = '(src=".*?\.js")';
	}else{
		 $pattern = '(href=".*?\.css")';
	}
	
	$return['start_postion']=$start_postion;
	$return['end_postion']=$end_postion;
	$return['css_js_content']=$content_text;
	$find_text_array=preg_match_all($pattern,$content_text,$suess);
	$find_array=array();
	for($i=0;$i<count($suess[0]);$i++){
		$text=$suess[0][$i];
		$text=str_replace("href=","",$text);
		$text=str_replace("src=","",$text);
		$text=str_replace('"',"",$text);
		$find_array[]=$text;
	}
	
	$return['file_array']=$find_array;
	return $return;
}




function find_self_file(){

    $now_fold=str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']);
    $handle = opendir($now_fold);
    $return=array();
    if($handle){
        while(($fold=readdir($handle))!==false){
           $taglib_file_exend=end(explode('.', $fold));
           $file_name=str_replace('.'.$taglib_file_exend,'', $fold);
           if(is_file($now_fold.$fold) and ($taglib_file_exend=='php' or $taglib_file_exend=='PHP') and $fold!="index.php"){
                $return[]=$fold;

            }
        }
    }
    return $return;
}


//找到可以设置sass变量的文件夹
function find_sass_config_fold(){
    $now_fold=str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']);
    $now_fold=$now_fold."plugin/";
    $handle = opendir($now_fold);
    $return=array();
    if($handle){
      while(($fold=readdir($handle))!==false){
        if(!is_file($now_fold.$fold) and $fold!='.' and $fold!='..' and $fold!='.svn'){
          $return[]=$fold;
        }
      }
    }
    return $return;
}



//找到可以设置sass变量的文件夹
function find_plugin_sass_config($plugin_id){
    //global APP_ROOT_PATH;
    $text_array=array();
    $config_file=APP_ROOT_PATH.'plugin/'.$plugin_id.'/css/config.scss';
    if(is_file($config_file)){
      $config_content=file_get_contents($config_file);
      $config_value_text=$config_content;
      $config_value_text=str_replace('"',"",$config_value_text);
      $config_value_text=str_replace(' ',"",$config_value_text);
      $config_value_text=str_replace("\r\n","",$config_value_text);
      $config_value_text=str_replace("\n","",$config_value_text);
      $config_value_text=preg_replace("/\*.*\*/", '', $config_value_text);
     

      $xing_array=explode('/**',$config_content);


      $text_array=array();
      if(is_array($xing_array)){
        foreach ($xing_array as $key => $xz) {
          $end_array=explode('*/',$xz);
          if(count($end_array)==2){
            $config_text=$end_array[0];
            $config_text=str_replace('"',"",$config_text);
            $config_text=str_replace(' ',"",$config_text);
            $config_text=str_replace("\r\n","",$config_text);
            $config_text=str_replace("\n","",$config_text);
            $zz = '/name:(.*)title:(.*)zhiyu:(.*)beizhu:(.*)/';
            preg_match_all($zz,$config_text,$arr);  
            /**
            foreach ($variable as $key => $value) {
              # code...
            }
            **/
            $array=array();

            $array['text']=$arr[0][0];
            $array['name']=$arr[1][0];
            $array['title']=$arr[2][0];
            $array['zhiyu']=$arr[3][0];
            $array['beizhu']=$arr[4][0];
            /**
            for ($i=0; $i < count($arr); $i++) { 
               $array[]=$arr[$i][0];
            }
            **/
            //print_r($arr);
            //
            $config_value=$end_array[1];
            $config_value=str_replace(' ',"",$config_value);
            $zz = '/:(.*);/';
            preg_match($zz,$config_value,$arr);
            //var_dump($arr);
            $array['value']=$arr[1];
            /**
            $config_value=str_replace("\r\n","",$config_value);
            $config_value=str_replace("\n","",$config_value);
            $config_value=str_replace('$'.$arr[1][0].":","",$config_value);
            $config_value=str_replace(";","",$config_value);
            **/
           
            $text_array[]=$array;
          
          }
        }
      }
    }
    return $text_array;
}


//找到可以设置sass变量的文件夹
function save_plugin_sass_config($plugin_obj,$value_array){
    $config_file=APP_ROOT_PATH.'plugin/'.$value_array['plugin_id'].'/css/config.scss';
    $text='@charset "utf-8";'."\r\n";
    if(is_array($plugin_obj)){
        foreach ($plugin_obj as $key => $po) {
          $text.='/**'."\r\n".'name:'.$po['name']."\r\n".'title:'.$po['title']."\r\n".'zhiyu:'.$po['zhiyu']."\r\n".'beizhu:'.$po['beizhu']."\r\n".'*/'."\r\n".'$'.$po['name'].':'.$value_array[$po['name']].';'."\r\n"."\r\n";
        }
        file_put_contents($config_file,$text);
    }

}

//找到可以设置变量的plugin


  
?>
