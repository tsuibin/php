<?php
phpinfo();
?>
\s 查看数据库状态
\q 退出
\c 取消输入(DOS)
mysql -h 192.168.1.2:3306 -uroot -p 登录远程的服务器
show databases; 查看数据库
root@tsuibin-laptop:~# mysqladmin -u root -proot create mybook
root@tsuibin-laptop:~# mysqladmin -u root -proot drop mybook
mysql -u root -proot books < books.sql

终端下
mysqldump -uroot -p books > back.sql

sudo netstat -tap | grep mysql 
sudo /etc/init.d/mysql restart 

修改mysql(ubuntu 8.10测试通过)默认字符集

找到客户端配置[client] 在下面添加
default-character-set=utf8 默认字符集为utf8
在找到[mysqld] 添加
default-character-set=utf8 默认字符集为utf8
init_connect='SET NAMES utf8' （设定连接mysql数据库时使用utf8编码，以让mysql数据库为utf8运行

列->字段
行->记录
SQL语言 结构化的查询语言

DML数据库的操作语言
SELECT INSERT UPDATE DELETE

DCL 数据库的控制语言 对于用户的授权与取消授权
GRANT REVOKE(取消授权)

DDL 数据库定义语言
CREATE TABLE,DROP TABLE,ALTER TABLE

功能函数
日期函数 

创建数据库
 create database lamp7;
 删除数据库
 drop database hello;

创建数据表
	mysql> create table tmp1(
    -> id int,
    -> name char(10)
    -> );
    查看表结构
    
    32位 4字节 1个字节8位 
    取值范围 正的0-2^32
    -的 /2
    
    mysql> create table tmp2(
    -> id1 int,
    -> id2 smallint,
    -> id3 float,
    -> id4 decimal(6,2) 总长6位，小数点后2位
    -> );
    
    创建自动正常列 create table tmp3( id int not null auto_increment primary key
    -> );
   自动正常列必须是唯一的 所以是primary key
   插入一条数据
   insert tmp3 values();
   如果插入insert tmp3 values(8); 那么自动增长列的下一项默认递增1 就是9
   
   设置自动增长列从哪一个数值开始递增
   mysql> create table tmp4(
    -> id int not null auto_increment primary key
    -> )auto_increment=201;
   这里设置的是从201开始，默认第一个的值为201
   
   自动增长列的类型必须是整形
   
   NOT NULL 不能为空
   DEFAULT  默认值
   UNSIGNED 无符号数
   ZEROFILL 前导0填充
   (可以和UNSIGED配合 无符号前导零填充，只能存正数,前导0填充相当于无符号数，存储数量是整型的2倍)
   
   创建
   id1 int null,
   id2 int not null,
   id4 int 99,
   插入数据
   insert tmp4 value();
   被插入之后的数据
   null
   1 =0
   99 
   
   varchar(8);需要判断长度在取 但是var要比char节省空间
   char(8);读取的速度快，但是不够8个字节的 也会存成8个字节 char和varchar是不区分大小写的
   text 文本空间 存文章 不区分大小写
   blob 大的二进制对象存储 区分大小写
   创建char可以不指定长度varchar必须指定长度
   超过长度的自动截断 char不指定长度是1 可以存一个字母或者一个汉字
   
   枚举类型 单选和多选 需要判断 速度慢
   ENUM
   SET
   
   bit类型
   
   id char(8) binary 二进制存放 区分大小写
   
   时间与日期
   DATE 出生日期
   TIME
   DATETIME 时分秒
   TIMESTAMP  时间戳 自动获取 自动转换
   YEAR
   
   INSERT INTO data11 VALUES <'11:11:11'>,<'1978-4-6',123412>,<650503,'3:4:1'><111111>;
   
   (now(),null); 当前时间 空也是当前时间

	dcimal薪水 名字not null 家庭地址 default=暂无 电邮=NULL 考试成绩=NULL
	
	## 修饰符 
	->数据存储的完整性 二义性
	
	UNIQUE唯一 不允许出现重复的值  primary key主键 不允许出现空指
	
	两种方法定义主键 
	＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃
	mysql> create table test(
    -> id int not null primary key,
    -> name varchar(10)
    -> );
	＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃
	
	mysql> create table test1(
    -> id int,
    -> name varchar(10),primary key(1d)
    -> );
	＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃唯一
	mysql> create table test2(
    -> id int not null unique auto_increment
    -> );
	＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃
	创建时间的
	create table d1( t1 timestamp default current_timestamp );
	insert d1 values();
	会自动执行 插入系统当前时间
	一个表里面只允许出现一个default current_tmestamp
	##############################
	mysql> create table d3(
    -> id int,
    -> ti timestamp default current_timestamp on update current_timestamp);
    第一次写入时间  和修改时间 当表格更新的时间，当前时间也会进去
	
	向datetime类型表中添加数据
	inser d6(t2) values(now());
	
	作业 幻灯片84页
	留言本
	
	100 msg
	long msg/10=10
	
	
	####zhujian#####
	mysql> create table stu( sid int not null auto_increment, name varchar(10) not null , primary key(sid) );
	
	
	mysql> create table mark(
    -> mid int not null auto_increment unique,
    -> grade decimal(4,1),
    -> stuid int not null,
    -> foreign key(stuid) references stu(sid)
    -> );
	
	InnoDB
	at the end of the sql command,
	)engie=innodb;
	
	insert stui values (default,97,1);
	
	cha ru bu cun zai de bao cuo;
	 
	 修改默认值
	 alter table hello alter name set default '不知道';
	 修改类型
	 alter table hello change name l_name varchar(20);
	 
	 alter table hello modify id smallint after f_name;
	 
	 删除主键
	 drop ...
	 
	 
	 alter table hello drop primary key;
	 
	mysql> create table stui( sid int not null auto_increment,name varchar(20) default 'alex',primary key(sid))engine=innodb; 
	
	 alter table add people 
	 alter table people name default 100;
	 alter 
	 
	 计算
	 select 1+'9.2abc';
	 
	 比较运算符
	 判断
	 select 2=2; 返回1代表true 0 false
	 select 1>2;
	 
	 select 20 beween 1 and 2; false
	 select 7 between 20 and 1; false
	 
	 select 10 in(1,3,6,10); true
	 select NULL=NULL; 返回NULL
	 select NULL<=>NULL; 安全的比较 true
	 
	 ##IS
	 select 4 IS NULL; true
	 select 4 IS NOT NULL; false
	 
	 相似比较
	 select '张三'='张%' (* ~ %)
	 select '张三' like '张%' 张某 或者张
	 select '张三' like '张_' 下划线 代表任意一个字
	 select '张三' like '张_国'
	 
	 正则表达式
	 select 'abc' regexp '^a.*c$';  poisx
	 select 'a234567c' regexp '^a[0-9]*c$';
	 
	 或者比较
	 select 'ghj' like '%php%' or 'ghj' like '%asp%';
	 select 'ghj' like '%php%' and 'ghj' like '%asp%';
	 
	 '~'取反 '^'异或
	 
	 select 1<<2; 左移
	 
	##SQL命令
	增加
	
	INSERT [INTO] <表名>(字段名1,字段名2,字段名3) values(字段值1,字段值2,字段值3);  
	不写列名 需要所有的值
	
	UPDATE student set age=20 where id between 1 and 7;
	更新id 1到7的年龄为20
	update student set age=age+1;
	update student set age=age+name;
	update student set where grade<95 grade=grade+5;
	
	##删除
	delect from student where id>5;
	
	多表数据
	delete from stu,mark
	using stu,mark
	where stu.sid=stu.mark and stu.name='kate';
	
	主键于外键字段名不一样的时候 可以不加表名
	delete from 表  where 条件
	
	
	查询
	select <字段名> from <表名> where <字段名>=要查询的值;
	
	select sno,sname from student;
	select sno,2008-age'年' from student; 在查询的时候进行操作 例如计算出生年份
	字段变成年
	select sno,2008-age'年' from student;
	年份的后面加上year
	select sno,concat(2008-age,'年') from student;
	
	
	类型名
	

取值范围
	

存储需求
DATE 	“1000-01-01”到“9999-12-31” 	3字节
TIME 	“-838:59:59”到“838:59:59” 	3字节
DATETIME 	“1000-01-01 00:00:00” 到“9999-12-31 23:59:59” 	8字节
TIMESTAMP 	19700101000000 到2037 年的某个时刻 	4字节
YEAR 	1901 到2155 	1字节


	
	查询不会影响表的值，这些数据是临时的
	select sname,'year of birthday'
	
	select distinct sid,grade from sc; 去掉重复的记录,如果是两个字段 那必须两个字段的值都重复才可以
	
	select sno as '学号',sname as '姓名' from student; 给字段加上别名
	
	 select sname from student where sage<20;
	
	排序
	 select sname from student where sage<20; 默认升序
	  select sname from student order by sage desc; 降序
	 asc 升序
	 select sno,sname,sage from student order by sage desc,sno asc; 给谁做降序?()
	 
	 select sno,sname,sage from student
	 where sno<95004
	 order by sage desc,sno desc;
	 
	 查询结果的数量筛选
	 select sname,sage from student
	 order by sage desc
	 limit 3; 只留3个结果
	 limit 3,2;从第四个往后取两个
	 
	 集函数
	 distince 去掉重复的
	 select sount(sage) from student;
	 select sum(sage) form student; 计算年龄总和
	 avg()平均数
	 max(),min()最大值 最小值
	
	查询每个学生的平均成绩
	select sid,avg(grade) from sc
	group by sid	
	
	select sid,avg(grade) from sc
	group by sid
	having avg(grade)>70
	(这里不能用where 而用having)
	between and
	not between
	in(xx,cc,vv)
	sno like 'xxx' xxx%
	sno = 'xxxx'
	is null
	is not null
	swhere sdept='计算机系' and age<20;
	多表查询
	当一个表中的数据不够的时候 需要用到另外一个表中的数据
	例如成绩表里没有姓名 只有学号
	内连接inner join
	外连接
	left join
	right join
	
	必须有主外键关系才能作连接
		需要的 from 条件
		
	select sname,sage
	froms student,sc
	where srudent.sno=sc.sid
	and sc.grade is not null
	
	/**
	*	查询字段sname,sage在student表和sc表中
	*	条件为student.sno字段等于sc.sid字段
	*	并且sc.grade 不为空
	**/
	
	select sno,sname,sage,grade
	from student as s inner join sc as g 起了一个别名student->s sc ->g
	on s.sno=g.sid
	where g.grade is not null
	
	左右连接
	left join 一左边的表为依据 左边的数据都要出来 右边的如果没有 就用空来作替代
	inner 两张表都有的
	
	更多的表查询 学生  课程 成绩
	select sno,sname,cname,grade
	from student as s inner join sc as g
	on s.sno=g.sid
	inner join course as c
	on g.cid=c.courseid
	筛选
	
	select distinct sname
	from student as s inner join sc as g
	on s.sno=g.sid
	
	子查询
	select sname from student
	where sno not in((select sid from sc))
	//把另外一个查询返回的结果作为条件
	(select sid from sc)
	
	select sname from student
	where sage >
	(select avg(sage) from student)
	>,=,< 单值子查询 返回的数值只能有一个 只能有一条数据的才可以用这个
	not in,in, 范围子查询  exist 存在子查询???
	
	多个表的子查询
	select sname from student
	where sno in(
		select sid from sc
			where cid=(
			select course from course
			where cname='java'
		)
	)
		
		create table stutmp
		select sname,ssex from student;
		创建一个信数据表  并且有数据
		加上
		where i=0;那么没有数据..
		
		删除一条命令
		delete from stutmp
		where sno=95001 or 1=1 //这样数据就全部删除了
		SQL注入攻击 or后面存储过程 xp_cmdshell('format d:') 格式化硬盘 linux->fordisk	
		
		作业
		
	
	
	
	
	 
