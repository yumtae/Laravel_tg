@include('user._layouts.common_css');


 {{md5(time() + 5)}}





<br/>
<br/>
<br/>
<br/>
<br/>
<a href="https://www.iwinv.kr/" target="_BLANK"><img src ='/image/iwinv.jpg' style="width:600px"></a>
<br/>

<a href="/industrial_skill">정보처리산업기사(실기)</a><br/>
<a href="./engineer">정보처리기사(필기)</a><br/>
<a href="./engineer_skill">정보처리기사(실기)</a><br/>
<!-- <a href="./stardewvalley">stardewvalley</a><br/> -->
<!-- <a href="./initial">initial</a><br/> -->
<a href="./network">네트워크관리사2급</a><br/>
<a href="./excel">PHP - excel</a><br/>


<!-- <a href="./bootstrap">bootstrap</a><br/> -->
<a href="./algorithm">알고리즘</a><br/>
<a href="./spring">자바_스프링</a><br/>
<a href="./java">자바_기본</a><br/>
<a href="./web">웹개발자의 기본</a><br/>

<br/><br/><br/>
<!--<a href="./guitar">guitar</a><br/>
<a href="./poe">poe</a><br/> 
<a href="./DIA">DIA</a><br/>  
<a href="./sub_pg/sojang.html">소장</a><br/>  -->
 
<br/>


@php
$week = array("월","화","수","목","금","토","일");
       foreach($week as $value){
       print $value;
       print "<BR>";
     }




    $arr1 =array("Hello","Welcome","Hi");
    $result1 = "";
    foreach($arr1 as $item){
        $result1 .= $item . " ";
    }
    $arr2 = array("ko"=> "하나", "ja"=> "いち","en"=>"one");
    $result2 = "";
    foreach($arr2 as $key=>$val){
        $result2 .= $key . ":" . $val . "<br/>";
    }


    @endphp


    <p> {{$result1}}</p>
    <p> {{$result2}}</p>

