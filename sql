1. MySQL
1.1. SELECT name FROM `employee` WHERE city LIKE 'А%' ORDER BY name ASC;
1.2. SELECT name FROM `employee` WHERE DATE_FORMAT(birthday, '%m%d')=DATE_FORMAT(CURRENT_DATE, '%m%d');
1.3. SELECT name FROM `employee` WHERE salary = (SELECT MIN(salary) FROM `employee`);
	 SELECT name FROM `employee` WHERE salary = (SELECT MAX(salary) FROM `employee`);
1.4. SELECT `salary`,`department_id` FROM `employee` WHERE `salary` IN (SELECT MAX(salary) FROM `employee` GROUP BY `department_id` )ORDER BY `salary`;
