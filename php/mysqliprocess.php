字符串处理
strprocess 特殊字符 首尾空格 html标签转换

查询
user-> session if session empty ->strprocess ->select database -> session -> send to user

这里的session 是数组
保存
user -> session -> strprocess -> insert into database
更新
user -> session -> strprocess -> update database
删除
user -> strprocess ->delete from database

销毁 session
输出计数 或者 设置时间 session 最后一次访问的时间


