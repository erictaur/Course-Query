SELECT * FROM course_selection.course;

USE course_selection;
LOAD DATA INFILE 'C:/Temp/course_copy.csv' 
INTO TABLE course 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

SET GLOBAL local_infile = true;
SHOW GLOBAL VARIABLES LIKE '%secure%';