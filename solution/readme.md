meta challenge | hard
title -> sqli in name of file(without extention)

In the page you will see input for upload file you need to upload image or text and i will upload txt file(name for my file is x.txt) and intercept traffic and change name for the file from x.txt to x'),(sleep(20))#.txt 
and you will see the response will come to you after 20 second then after we confirmed vulnerablity we need to exploit it but when i do fuzzing in url i found this page upload.php it's show all the names for file that i upload it
so i enter this payload in name for file i upload it -> x'),((select TABLE_NAME from information_schema.tables where TABLE_SCHEMA='ksa' and table_name like '%flag%'))#.txt
and in upload.php i see the result for this query and show to me the full name for the that table what contain the flag flag95921 and i do in the end this payload to see the flag -> x'),((select * from flag95921))#.txt
and in upload.php i see the flag 
the flag is AOL{5b2b1d3ae5c2183462f34e71ad1a6f2c}
