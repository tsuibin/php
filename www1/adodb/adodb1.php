<?php
    include 'adodb/adodb.inc.php';
    //4 $conn=&NewADOConnection("mysql");//postgres,access,odbc_mssql
    //5 ADOnewconnection
    //1 $conn->connect("localhost","root","root","mybook"); //Pconnect持久 Nconnect新链接 isconnect判断是不是一个链接
    //1 conn->PConnect('host=localhost port=5432 dbname=postgres');
    //2 DSN
    //3 driver://username:password@hostlocal/database[?option=]
    $conn=&NewADOConnection("mysql://root:root@localhost/mybook");//DSN数据源的名字
    //rawUrlencode($pwd);
    //fetchmod per
    //var_dump($conn);
    $conn->setfetchmode(ADODB_FETCH_ASSOC);
    $conn->execute("set names utf8");
    $sql='select * from books';
    $rs=$conn->execute($sql);
    //$row=$rs->fetchrow();//会采用数据库默认的结果集 可以通过set fetchmod来选择 结果集 关联 或者索引 
    //$row=$rs->fetchinto($arr); //返回数组 会清空原有数组 把数据放进去
    //$row=$rs->fetchobject(true);//所有属性名 全部大写 false 全部小写
    //$rs->move();//移动一位 recordcount返回总记录数
    $row=$rs->getarray(2);
    print_r($row);
    
?>