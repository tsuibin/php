<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Class Database_class.php</title>
</head>

<?php
    

    date_default_timezone_set("Etc/GMT-8");
    //model view controller
    //function __autoload($classname){
    //    include_once "./include/{$classname}_class.php";        
   // }

    class Database{
		
        
        //public $db;
        //public $sex;
        //public $age;
		//static $country="American";
        //protected $group=5;
        //private $action="save";
        public $host="localhost";
		public $port="6033";
        public $username="root";
        public $password="root";
        public $database="function";
        /*
         * 初始化数据库
         * __construct
         */
        function __construct()
        {
            $this->db = new mysqli($this->host, $this->username, $this->password,$this->database,$this->port);
            if(mysqli_connect_errno())
	        {
			    die("数据库连接失败");
	        }
	        else {
			$this->db->query("set names utf8");
			echo "<br />数据库对象初始化成功,Class->db进行访问<br />";
			return $this->db;
	        }
	        return false;
        }
		
		/*
		 * 处理字符串
		 */
		function input($input)
		{
			$input=mysqli_real_escape_string($this->db,$input);
			return $input;
		}
		
		
		function output($str)
		{
		    $str=htmlspecialchars($str);
		    return $str;
		}
		
		function outsource($source)
		{
			$src=addslashes($scr);
			return $src;
		}
		
		//LOCK TABLES a WRITE;  锁定表可以加速用多个语句执行的INSERT操作：
		//插入完成使用 UNLOCK TABLES; 
       /*
        *数据插入成功 
        * 增加数据
        * 传值
        * 数据类型匹配
        * 使用this->input处理字符串
		$ftype_id;
		$func_name;
		$func_breif;
		$func_origin;
		$func_return;
		$func_ver;
		$func_level;
		$func_detail;
		$func_other;
		*/
     function inputfunction ($ftype_id,$func_name,$func_breif,$func_origin, $func_return,$func_ver,$func_level,$func_detail,$func_other)
     {
        //echo $ftype_id;
		//echo $func_other;
		$sql = "insert into func_function values(default,?,?,?,?,?,?,?,?,?)";
		$stmt = $this->db->prepare($sql) or die("database_class inputfunction 出错");
		$stmt->bind_param("issssiiss",$ftype_id,$func_name,$func_breif,$func_origin,$func_return,$func_ver,$func_level,$func_detail,$func_other);
        return $stmt->execute();
        $stmt->close();
	    $this->db->close();
     }
	 
	 //增加函数类别
	 function inputtype($ftype_name)
	 {
	 	$sql="insert into func_ftype values(default,?)";
		$stmt=$this->db->prepare($sql) or die("database_class inputftype 出错");
		$stmt->bind_param("s",$ftype_name);
		return $stmt->execute();
	 }
	 //函数参数表
	 function inputfparameter()
	 {
	 	
	 }
	 
	 /*
	 搜索
	 */
	 function searchdata($keyword)
	 {
		 $searchkey="%".$keyword."%";
	 	//$keyword="%$keyword%";
		//echo $keyword."<br />";
		$sql = "select func_id,func_name from func_function where func_name like ? ";
				   //$rs=$this->db->query($sql);
				  // var_dump($rs);
				  // var_dump($rs->fetch_assoc());

		
		//WHERE last_name >= ’Mac’ AND last_name < ’Mad’
		echo $searchkey ."<br>";
		//echo $keyword;
		
		$stmt=$this->db->prepare($sql) or die("false");

		$stmt->bind_param("s",$searchkey);
		
		$stmt->execute();
		$stmt->bind_result($id,$key);
		while($stmt->fetch()){
			$rs[]=array($id=>$key);
		}
		return $rs;
	
		
		
		//var_dump($id)."<br>";
		//var_dump($key)."<br>";
		//var_dump($stmt)."<br>";
		
		
		//$rr=$db->query($sql);
		//$keyword="$".$keyword."%";
		//echo $keyword;
		
			
			//while($rr=$db->fetch_assoc()){
			//		print_r($rs);
			//	}
			
		//var_dump($stmt->bind_param("s",$keyword));
		//echo $sql;
		//$stmt->execute();
		
		//var_dump(
		//$stmt->bind_result($id,$key);
		//var_dump($id);
		//每页显示50条 怎么处理？<br />
		//var_dump($key);
		//while ($stmt->fetch()) {
			//if(!empty($key){
        		//$rs[]=array($id=>$key);
			//}
    	//}
		//return $rs;
		
	 }
	 /*
	 显示所有
	 */
	 function viewdata($fid)
	 {
	 	$sql = "select func_id,ftype_id,func_name,func_breif,func_origin,func_return,func_ver,func_level,func_detail,func_other from func_function where func_id={$fid}";
		//WHERE last_name >= ’Mac’ AND last_name < ’Mad’
		//echo $keyword;
		$stmt = $this->db->prepare($sql); //or die("false");
		
		//echo $keyword;
		
		$stmt->execute();
		$stmt->bind_result($func_id,$ftype_id,$func_name,$funcbreif,$func_origin,$func_return,$func_ver,$func_level,$func_detail,$func_other);
		//每页显示50条 怎么处理？<br />
		while ($stmt->fetch()) {
			
        		$rs[]=array($func_id,$ftype_id,$func_name,$funcbreif,$func_origin,$func_return,$func_ver,$func_level,$func_detail,$func_other);
			
    	}
		return $rs;
		
	 }
	 
	 
	 
     /*
      * 数据查询
      * 未完成
      * 
      */
     function listdata ($id,$name, $title, $price, $yr, $description, $saleamount)
     {
        //每页显示10条 $min+10
        $sql = "select * from books where id>200 and id<300 ";
        $err=$stmt = $this->db->prepare($sql) or die("false");
		//print_r($err);
        $name=$this->input($name);
        $title=$this->input($title);
        $price=$this->input($price);
        $yr=$this->input($yr);
        $description=$this->input($description);
        $saleamount=$this->input($saleamount);
        //$stmt->bind_param("issdisi",$id,$name, $title, $price, $yr, $description, $saleamount);
        $stmt->execute();
        $stmt->bind_result($id,$name, $title, $price, $yr, $description, $saleamount);
     	//增加删除修改用 affected_rows 影响了多少条
		//return $stmt->affected_rows;
		//结果集多少条 print_r($stmt->num_rows);
        
        while($stmt->fetch()){
	        $msg[]=array("id"=>$id,"title"=>$title,"price"=>$price,"yr"=>$yr,"description"=>$description,"saleamount"=>$saleamount);
	    }
	    return $msg;
        $stmt->close();
	    $this->db->close();
        //return true; //代表添加成功 false代表添加失败
        }
        
      /*
       * 数据更新
       */
        
    function updatebook ($id,$name, $title, $price, $yr, $description, $saleamount)
        {
    //处理$id中的 字符串
    
    $sql = " update books set name=?,title=?,price=?,yr=?, description=?, saleamount=? where id=?";
    $stmt = $db->prepare($sql) or die("false");
    $id=extstr($id);   
    $name=extstr($name);
    $title=extstr($title);
    $price=extstr($price);
    $yr=extstr($yr);
    $description=extstr($description);
    $saleamount=extstr($saleamount);
    $stmt->bind_param("ssdisii", $name, $title, $price, $yr, $description, $saleamount,$id);
    return $stmt->execute();
    $stmt->close();
	$db->close();
       }
       
       /*
        * 数据删除
        */
    function deletebook ($id)
    {
    //处理$id中的 字符串
    $id=extstr($id);   
    $sql = " delete from books where id=?";
    $stmt = $db->prepare($sql) or die("false");
    $stmt->bind_param("i",$id);
    return $stmt->execute();
    }
        function __toString(){
            echo "<br>本消息由__toString返回<br>";
            return "这是一个数据库类 <br> Have Functions";//.$this->name;
        }
        
        function __call($funname,$actionarr){
            echo "你调用的函数{$funname}没有找到";
            print_r($actionarr);
            
        }
        
        function __clone(){
            //影响被克隆的属性
            //$this->name.="克隆人";
        }
        
        function __sleep(){
            //序列华筛选
            //影响序列华的内容
            //return array("name","age","sex","school","country","group","action");
        }
        
        function __wakeup(){
            //影响反序列华的内容
            $this->sex="反序列化的";
        }
        
        function __destruct(){
            //析构函数
            //对象被销毁前调用这个函数
            echo "<br />一个对象被销毁了,本服务器性能得到了提升<br />";
        }
    }

    //$db=new Database();
    //插入成功
   // $a=$db->addbook("na\me","ti'tle","1998/.11","21\31","描述","10\/00");
   // var_dump($a); bool true  
  //  $in=new Database();
	$arr=array(
		"a",
		"b",
		"c",
		"d",
		"e",
		"f");
	
	$a=rand(0,4);
	$b=rand(00000000000,99999999999);
	$c=rand(00000000000,99999999999);
	$d=rand(00000000000,99999999999);
	$e=rand(00000000000,99999999999);
	$f=rand(0,9);
	$g=rand(0,9);
	$h=rand(00000000000,99999999999);
	$i=rand(00000000000,99999999999);
	//echo 
	$rs1=$arr[$a];
	$rs2=$arr[$f];
	$rs3=$arr[$g];
	//新增函数
		//for($i=0;$i<10000;$i++){
		 //var_dump($in->inputfunction($a,$rs1.$rs2.$rs3.$rs1.$rs2.$rs3,$c,$d,$e,$f,$g,$h,$i));
		// }
//搜索函数

/*
	$rs=$in->searchdata("a");
	echo count($rs)."<br>";//计数
	foreach($rs as $v)
	{
		if(is_array($v))
		{
			foreach($v as $rsid=>$func)
			{
				echo $rsid."结果".$func."<br>";
			}
		}
	}
*/
//查看所有函数
/*
$vi=$in->viewdata();
	foreach($vi as $v)
	{
		
		print_r($v);
		if(is_array($v))
		{
			foreach($v as $rsid=>$func)
			{
				//print_r($func."<br />");
			}
		}
	}
	*/
    //问题1,静态属性static $name在外部使用类名::#name修改值后
    //在内部 通过$this->name还能重新赋值吗？
    
    //问题2 静态属性是否可以进行序列化
	//新增类别 var_dump($in->inputtype("用户自定义类"));
    


?>
<!--
首选这种！！
SELECT *
FROM `func_function`
WHERE func_name >='b' OR func_name <='b'
0.0007
0.0006

SELECT *
FROM `func_function`
WHERE func_name like '%b%'
0.0014
0.0012
-->