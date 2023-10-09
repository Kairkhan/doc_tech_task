SELECT e.Name FROM EMPLOYEES AS e
INNER JOIN EMPLOYEES AS sec_e ON sec_e.EmployeeId = e.ChiefId
WHERE e.Salary > sec_e.Salary;


SELECT e.Department FROM EMPLOYEES AS e
GROUP BY e.Department
HAVING COUNT(e.EmployeeId) <= 3;


-- 1 т.к Department можно вынести в отдельную таблицу